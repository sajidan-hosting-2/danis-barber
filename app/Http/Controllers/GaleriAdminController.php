<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriAdminController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => [
                'required',
                'file',
                'image',
                'mimes:jpg,jpeg,png,webp,svg',
                'max:200',
            ],
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ], [
            'image.required' => 'Gambar wajib diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format yang diperbolehkan: JPG, JPEG, PNG, WebP, atau SVG.',
            'image.max' => 'Ukuran file gambar maksimal 200 KB.',
        ]);

        $path = $request->file('image')->store('galeri', 'public');

        Galeri::create([
            'title' => $validated['title'] ?? null,
            'image_path' => $path,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => isset($validated['is_active']) ? (bool)$validated['is_active'] : true,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function destroy(Galeri $galeri)
    {
        // hapus file
        if ($galeri->image_path) {
            Storage::disk('public')->delete($galeri->image_path);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}

