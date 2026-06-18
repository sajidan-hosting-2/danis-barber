<?php

namespace App\Console\Commands;

use App\Models\Galeri;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CheckGaleriImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-galeri-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check which galeri images exist in storage/app/public/galeri';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $galeris = Galeri::orderBy('created_at', 'desc')->take(20)->get();

        if ($galeris->isEmpty()) {
            $this->info('No galeri records found.');
            return 0;
        }

        $disk = Storage::disk('public');

        $this->table(['ID', 'title', 'image_path', 'exists'], $galeris->map(function ($g) use ($disk) {
            $path = $g->image_path;
            $exists = $path ? ($disk->exists($path) ? 'YES' : 'NO') : 'NO_PATH';

            return [
                $g->id ?? '-',
                $g->title ?? '-',
                $path ?? '-',
                $exists,
            ];
        }));

        $this->info('Disk root: storage/app/public');
        return 0;
    }
}

