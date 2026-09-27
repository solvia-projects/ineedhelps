<?php

// Pastikan storage dan cache bisa ditulis di /tmp di Vercel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Override storage path ke /tmp saat di Vercel
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
    $app->useStoragePath('/tmp/storage');
}

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
