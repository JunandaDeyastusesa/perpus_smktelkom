<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Buku;
use App\Perpustakaan;
use App\Petugas;
use App\Siswa;
use App\Transaksi;
use Auth;
class TransaksiController extends Controller
{

  function __construct()
  {

  }

    public function view()
    {
      $transaksi_list = Transaksi::all();
      return view('transaksi.index', compact('transaksi_list'));
    }

    public function create(){
      $buku = Buku::all();
      $siswa = Siswa::all();
      $petugas = Petugas::all();
      $perpustakaan = Perpustakaan::all();
      $halaman='transaksi';
      return view('transaksi.create', compact('halaman','buku','siswa','petugas','perpustakaan'));
    }

    public function store(Request $request){
      $transaksi = Transaksi::create($request->all());
      return redirect('/');
    }

    public function detail($id){
      $halaman= 'transaksi';
      $transaksi = Transaksi::findOrFail($id);
      $buku = Buku::all();
      $siswa = Siswa::all();
      $petugas = Petugas::all();
      $perpustakaan = Perpustakaan::all();
      return view('transaksi.detail', compact('transaksi','halaman','buku','siswa','petugas','perpustakaan'));
    }

    public function edit($id){
      $halaman= 'transaksi';
      $transaksi = Transaksi::findOrFail($id);
      $buku = Buku::all();
      $siswa = Siswa::all();
      $petugas = Petugas::all();
      $perpustakaan = Perpustakaan::all();
      return view('transaksi.edit', compact('transaksi','halaman','buku','siswa','petugas','perpustakaan'));
    }

    public function update($id, Request $request){
      $halaman = 'transaksi';
      $transaksi = Transaksi::findOrFail($id);
      $transaksi->id = $request->id;
      $transaksi->perpus_id = $request->perpus_id;
      $transaksi->buku_id = $request->buku_id;
      $transaksi->petugas_id = $request->petugas_id;
      $transaksi->siswa_id = $request->siswa_id;
      $transaksi->tgl_pinjam = $request->tgl_pinjam;
      $transaksi->tgl_kembali = $request->tgl_kembali;
      $transaksi->note = $request->note;
      $transaksi->save();
      return redirect('/');
  }

    public function delete($id){
      $transaksi = Transaksi::findOrFail($id);
      $transaksi->delete();
      return redirect('/');
  }

    public function cari(Request $request){
      $cari = $request->cari;
      $transaksi = Transaksi::where('id', 'like',"%".$cari."%")->paginate();
      return view('/', compact('cari', 'transaksi'));
  }

}
?>
