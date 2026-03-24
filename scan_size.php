<?php

function getFolderSize($dir) {
    $size = 0;

    foreach (new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)
    ) as $file) {
        $size += $file->getSize();
    }

    return $size;
}

function formatSize($bytes) {
    $units = ['B', 'KB', 'MB', 'GB'];
    $i = 0;

    while ($bytes >= 1024 && $i < 3) {
        $bytes /= 1024;
        $i++;
    }

    return round($bytes, 2) . ' ' . $units[$i];
}

echo "<h2>Project Scanner (with Size)</h2>";

$base = realpath(__DIR__ . '/..');
$folders = scandir($base);

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Folder</th><th>Project Type</th><th>Size</th></tr>";

foreach ($folders as $folder) {
    if ($folder === '.' || $folder === '..') continue;

    $path = $base . '/' . $folder;

    if (is_dir($path)) {

        $type = "Unknown";

        if (file_exists($path . '/.env')) {
            $type = "Laravel / Backend";
        }

        if (file_exists($path . '/wp-config.php')) {
            $type = "WordPress";
        }

        if (file_exists($path . '/package.json')) {
            $type = "Node / Next.js";
        }

        // ⚠️ size calculation (can be heavy)
        $size = formatSize(getFolderSize($path));

        echo "<tr>";
        echo "<td>$folder</td>";
        echo "<td>$type</td>";
        echo "<td>$size</td>";
        echo "</tr>";
    }
}

echo "</table>";