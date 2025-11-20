<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBeritaController extends Controller
{
    protected function checkAdmin()
    {
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu');
        }
        return null;
    }

    public function index()
    {
        if ($redir = $this->checkAdmin()) return $redir;
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        if ($redir = $this->checkAdmin()) return $redir;
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        if ($redir = $this->checkAdmin()) return $redir;

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().'_'.Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('image/berita'), $name);
            $data['image'] = 'image/berita/'.$name;
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dibuat');
    }

    public function edit($id)
    {
        if ($redir = $this->checkAdmin()) return $redir;
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        if ($redir = $this->checkAdmin()) return $redir;

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().'_'.Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('image/berita'), $name);
            $data['image'] = 'image/berita/'.$name;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        if ($redir = $this->checkAdmin()) return $redir;
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
