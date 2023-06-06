<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
        $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        // Mengirim data produk ke view 'admin.produk.produk'
        return view('admin.produk.produk', compact('produk'));
    }
    public function index2()
    {
    // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
    $kategori_produk = KategoriProduk::all();

    // Mengirim data produk ke view 'admin.produk.produk'
    return view('admin.kategori_produk.kategori_produk', compact('kategori_produk'));
    }
    public function create()
    {
        //Membuat creat
    {
        $kategori_produk =KategoriProduk::all();
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }
    }
    public function store(Request $request)
    {
        //membuat tambah data
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();
        return view('admin.produk.edit', compact('produk','kategori_produk'));
    }
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('produk')->with('success', 'Produk berhasil dihapus');
    }
}
