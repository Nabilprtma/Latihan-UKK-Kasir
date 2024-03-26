<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view ('pages.produk.index' , compact("produk"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.produk.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:3',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg',
        ]);

        //ambil file yg diupload di input yg name nya foto
        $image = $request->file('foto');
        //ubah nama file jadi ranodm extensi
        $imgName = rand() . '.' . $image->extension();
        //panggil folder tempat simpen gambar
        $path = public_path('assets/image/');
        //pindahin gambar yg di upload dan udah di rename ke folder tadi
        $image->move($path, $imgName);


        $produks = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $imgName,
        ]);

        // Add your toast logic here if needed

        return Redirect::route('produk')
            ->with('success', 'Produk created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $produk = Produk::where('id', '=', $id)->firstOrFail();

    return view('pages.produk.edit', compact('produk'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|min:3',
            'harga' => 'required',
            'stok' => 'required',
            
        ]);

        if (is_null($request->file('foto'))) {
            $imgName = Produk::where('id', '=', $id)->value('foto');
        }else {
        $image = $request->file('foto');
        $imgName = rand() . '.' . $image->extension();
        $path = public_path('assets/image/');
        $image->move($path, $imgName);  
        }

        Produk::where('id', '=', $id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $imgName,

        ]);

        return redirect ()->route('produk')->with('successUpdate', 'Berhasil mengubah data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
