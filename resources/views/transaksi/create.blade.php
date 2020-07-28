@extends('master')

@section('tab-title')
Create
@endsection

@section('main')

<div id="transaksi" style="margin-top: 3%;">
  <div class="container">
  <h2>Pinjam Buku</h2>

  <form action="{{ url('/') }}" method="POST">
  @csrf

  <div>
    <label for="pengarang" class="control-label">Buku</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-5" id="inputGroupSelect01" type="text" name="buku_id" required>
        <option selected>Choose...</option>
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
        <option selected>Choose...</option>
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
        <option selected>Choose...</option>
        @foreach ($petugas as $petugas)
        <option value="{{$petugas->id}}">{{$petugas->nama_petugas}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div style="margin-top:-258px; margin-left:600px;">
  <div>
    <label for="pengarang" class="control-label">Perpustakaan</label>
    <div class="input-group mb-3">
      <select class="custom-select col-md-0" id="inputGroupSelect01" type="text" name="perpus_id">
        <option selected>Choose...</option>
        @foreach ($perpustakaan as $perpustakaan)
        <option value="{{$perpustakaan->id}}" >{{$perpustakaan->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Tgl Pinjam</label>
    <div class="input-group mb-3">
      <input name="tgl_pinjam" type="date" class="form-control col-md-0 text-center" required>
    </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Tgl Kembali</label>
    <div class="input-group mb-3">
      <input name="tgl_kembali" type="date" class="form-control col-md-0 text-center" readonly>
    </div>
  </div>
  </div>

  <div>
    <label for="pengarang" class="control-label">Note</label>
    <div class="input-group mb-3">
      <input name="note" type="text" class="form-control col-md-5">
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