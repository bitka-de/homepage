<?php

$sourceDir = __DIR__ . '/public/images';
$maxWidth = 1200;
$maxHeight = 800;
$allowedExtensions = ['jpg', 'jpeg', 'png'];

function resizeAndConvertToWebP($sourcePath, $maxWidth, $maxHeight)
{
    [$width, $height, $type] = getimagesize($sourcePath);

    if (!$width || !$height) {
        echo "⚠️ Ungültiges Bild: $sourcePath\n";
        return;
    }

    $ext = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));
    $targetPath = preg_replace("/\.$ext$/", ".webp", $sourcePath);

    $ratio = min($maxWidth / $width, $maxHeight / $height, 1);
    $newWidth = (int)($width * $ratio);
    $newHeight = (int)($height * $ratio);

    switch ($type) {
        case IMAGETYPE_JPEG:
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $src = imagecreatefrompng($sourcePath);
            break;
        default:
            echo "❌ Nicht unterstützter Typ: $sourcePath\n";
            return;
    }

    $dst = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    imagewebp($dst, $targetPath, 80); // 0–100 Qualität

    imagedestroy($src);
    imagedestroy($dst);

    echo "✅ Konvertiert: $targetPath\n";
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sourceDir));
foreach ($iterator as $file) {
    if ($file->isDir()) continue;

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExtensions)) continue;

    $sourcePath = $file->getPathname();
    resizeAndConvertToWebP($sourcePath, $maxWidth, $maxHeight);
}

echo "\n🎉 Fertig mit allen Bildern in '$sourceDir' (inkl. Unterordnern).\n";
