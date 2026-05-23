<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->get();
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'business_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Umkm::create($data);

        return redirect()->route('admin.umkm.index');
    }

    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $data = $request->validate([
            'business_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $umkm->update($data);

        return redirect()->route('admin.umkm.index');
    }

    public function destroy(Umkm $umkm)
    {
        $umkm->delete();

        return back();
    }
}