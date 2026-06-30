import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const sourceDir = path.join(process.cwd(), 'public', 'image');
const files = fs.readdirSync(sourceDir).filter((file) => /\.(jpe?g|png)$/i.test(file));

const conversions = [
  { ext: 'webp', options: { quality: 80 } },
  { ext: 'avif', options: { quality: 50 } },
];

for (const fileName of files) {
  const inputPath = path.join(sourceDir, fileName);
  const baseName = path.parse(fileName).name;

  for (const conversion of conversions) {
    const outputPath = path.join(sourceDir, `${baseName}.${conversion.ext}`);
    sharp(inputPath)
      .toFormat(conversion.ext, conversion.options)
      .toFile(outputPath)
      .then(() => console.log(`Generated ${outputPath}`))
      .catch((error) => console.error(`Error converting ${fileName} to ${conversion.ext}:`, error));
  }
}
