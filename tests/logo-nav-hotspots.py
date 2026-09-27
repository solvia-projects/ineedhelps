"""Run: python3 tests/logo-nav-hotspots.py

Hotspot boxes in inh-story.css must cover the glyph clusters of logo.svg."""
import re, pathlib
ROOT = pathlib.Path("/Volumes/Zsenna/ineedhelp/web")
W, H = 810, 283

# path indices per glyph cluster, from the SVG's draw order
CLUSTERS = {"i": [29], "need": [26, 32, 33, 34, 30, 41], "help": [25, 27, 31, 28, 43],
            "bang": [24], "dot": [35, 36, 37, 38, 39, 40, 42], "mascot": list(range(0, 24))}

svg = (ROOT / "public/assets/images/inh/logo.svg").read_text()
paths = re.findall(r'<path d="([^"]+)"', svg)
num = re.compile(r"-?\d+\.?\d*")

def bbox(idxs):
    xs, ys = [], []
    for i in idxs:
        v = [float(x) for x in num.findall(paths[i])]
        xs += v[0::2]; ys += v[1::2]
    return min(xs), max(xs), min(ys), max(ys)

css = (ROOT / "public/assets/css/inh-story.css").read_text()
for name, idxs in CLUSTERS.items():
    m = re.search(rf"\.st-logonav__hit--{name}\s*{{([^}}]*)}}", css)
    assert m, f"no hotspot rule for {name}"
    g = dict(re.findall(r"(left|top|width|height):\s*([\d.]+)%?", m.group(1)))
    l, t = float(g["left"]) / 100 * W, float(g["top"]) / 100 * H
    r, b = l + float(g["width"]) / 100 * W, t + float(g["height"]) / 100 * H
    x0, x1, y0, y1 = bbox(idxs)
    assert l <= x0 + 2 and r >= x1 - 2, f"{name}: x {l:.0f}-{r:.0f} misses {x0:.0f}-{x1:.0f}"
    assert t <= y0 + 2 and b >= y1 - 2, f"{name}: y {t:.0f}-{b:.0f} misses {y0:.0f}-{y1:.0f}"
    print(f"ok {name:7} hit {l:.0f},{t:.0f}-{r:.0f},{b:.0f} covers {x0:.0f},{y0:.0f}-{x1:.0f},{y1:.0f}")
print("all hotspots cover their glyphs")
