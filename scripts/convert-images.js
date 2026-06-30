import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const sourceDir = path.join(process.cwd(), 'public', 'image');
const files = fs.readdirSync(sourceDir).filter((file) => /\.(jpe?g|png)$/i.test(file));

// sizes to generate (widths in px)
const sizes = [34, 60, 400, 679, 1024];
const conversions = [
  { ext: 'webp', options: { quality: 80 } },
  { ext: 'avif', options: { quality: 50 } },
];

async function processFile(fileName) {
  const inputPath = path.join(sourceDir, fileName);
  const baseName = path.parse(fileName).name;

  for (const width of sizes) {
    for (const conversion of conversions) {
      const outputPath = path.join(sourceDir, `${baseName}-${width}.${conversion.ext}`);
      try {
        await sharp(inputPath)
          .resize({ width, withoutEnlargement: true })
          .toFormat(conversion.ext, conversion.options)
          .toFile(outputPath);
        console.log(`Generated ${outputPath}`);
      } catch (error) {
        console.error(`Error converting ${fileName} -> ${outputPath}:`, error.message || error);
      }
    }
  }
}

(async () => {
  for (const fileName of files) {
    await processFile(fileName);
  }
  console.log('All conversions done.');
})();
