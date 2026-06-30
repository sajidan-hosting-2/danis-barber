<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class GaleriAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_cannot_store_gallery_image_larger_than_200_kb(): void
    {
        Storage::fake('public');
        $user = User::factory()->create(['is_admin' => true]);

        $response = $this->actingAs($user)->post(route('admin.galeri.store'), [
            'title' => 'Foto besar',
            'image' => UploadedFile::fake()->image('gallery.jpg', 1200, 800)->size(201),
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $response->assertSessionHasErrors('image');
        $this->assertDatabaseCount('galeris', 0);
    }
}
