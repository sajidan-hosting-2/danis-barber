# PowerShell script to convert images to WebP and AVIF using cwebp and avifenc (libavif)
# Prerequisites: install cwebp (from libwebp) and avifenc (from libavif). Example on Windows: choco install webp libavif

$sourceDir = "public\image"
$files = Get-ChildItem $sourceDir -Include *.jpg, *.jpeg, *.png -File

foreach ($file in $files) {
    $base = [System.IO.Path]::GetFileNameWithoutExtension($file.Name)
    $jpg = Join-Path $sourceDir $file.Name
    $webp = Join-Path $sourceDir ($base + ".webp")
    $avif = Join-Path $sourceDir ($base + ".avif")

    Write-Output "Converting $($file.Name) -> $($webp) and $($avif)"

    # WebP conversion (lossy, quality 80)
    if (Get-Command cwebp -ErrorAction SilentlyContinue) {
        cwebp -q 80 "$jpg" -o "$webp"
    } else {
        Write-Warning "cwebp not found. Install libwebp (cwebp)."
    }

    # AVIF conversion (quality 50 approx)
    if (Get-Command avifenc -ErrorAction SilentlyContinue) {
        avifenc -e aom --min 0 --cq-level 50 "$jpg" "$avif"
    } else {
        Write-Warning "avifenc not found. Install libavif (avifenc)."
    }
}

Write-Output "Done."
