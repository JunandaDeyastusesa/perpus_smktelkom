@extends('master')

@section('tab-title')
Edit
@endsection

@section('main')

<div id="transaksi" style="margin-top: 3%;">
  <div class="container">
  <h2>Edit</h2>

  <form action="{{url('update/'.$transaksi->id)}}" method="POST" enctype="multipart/form-data"">
  @csrf

    <div>
        <label for="pengarang" class="control-label">ID</label>
        <div class="input-group mb-3">
        <input name="id" type="int" class="form-control col-md-5 text-center"  value="{{$transaksi->id}}" readonly>
        </div>
    </div>
    
  <div>
    <label for="pengarang" class="control-label">Buku</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-5" id="inputGroupSelect01" type="text" name="buku_id" required>
        <option selected value="{{$transaksi->buku_id}}">{{$transaksi->buku->nama_buku}}</option>
        @foreach ($buku as $buku)
        <option value="{{$buku->id}}">{{$buku->nama_buku}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Siswa</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-5" id="inputGroupSelect01" type="text" name="siswa_id">
        <option selected value="{{$transaksi->siswa_id}}">{{$transaksi->siswa->nama_siswa}}</option>
        @foreach ($siswa as $siswa)
        <option value="{{$siswa->id}}">{{$siswa->nama_siswa}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Petugas</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-5" id="inputGroupSelect01" type="text" name="petugas_id">
        <option selected value="{{$transaksi->petugas_id}}">{{$transaksi->petugas->nama_petugas}}</option>
        @foreach ($petugas as $petugas)
        <option value="{{$petugas->id}}">{{$petugas->nama_petugas}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div style="margin-top:-343px; margin-left:600px;">
  <div>
    
  <div>
    <label for="pengarang" class="control-label">Tgl Pinjam</label>
    <div class="input-group mb-3">
      <input name="tgl_pinjam" type="date" class="form-control col-md-0 text-center"  value="{{$transaksi->tgl_pinjam}}" readonly>
    </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Tgl Kembali</label>
    <div class="input-group mb-3">
      <input name="tgl_kembali" type="date" class="form-control col-md-0 text-center" required>
    </div>
  </div>

    <label for="pengarang" class="control-label">Perpustakaan</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-0" id="inputGroupSelect01" type="text" name="perpus_id">
        <option selected value="{{$transaksi->perpus_id}}">{{$transaksi->Perpustakaan->nama}}</option>
        @foreach ($perpustakaan as $perpustakaan)
        <option value="{{$perpustakaan->id}}" >{{$perpustakaan->nama}}</option>
        @endforeach
      </select>
    </div>
    <div>
    <label for="pengarang" class="control-label">Note</label>
    <div class="input-group mb-3">
      <input name="note" type="text" class="form-control col-md-0" value="{{$transaksi->note}}">
    </div>
  </div> 
  </div>

  </div>


  <div style="margin-top: 2%;">
    <button type="submit" class="btn btn-outline-primary">Save</button>
    <a href="{{url('/')}}" class="btn btn-outline-danger">Cancle</a>
  </div>
  </div>

 
  </form>
<div>
</div>

@endsection