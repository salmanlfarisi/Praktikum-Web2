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
    return view('admin.layout.kategori_produk.kategori_produk', compact('kategori_produk'));
    }
}
