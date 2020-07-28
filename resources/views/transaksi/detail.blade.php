@extends('master')

@section('tab-title')
Detail
@endsection

@section('main')
<div id="transaksi">
    <div class="container">
    <div class="container">
    <div class="container">
        <div class="card mt-5 bg-light border-0" style="width:600px; margin-left:230px;">
            <h5 class="card-header border-0" style="font-weight: bold;">No : {{ $transaksi->id }}
            <a style="margin-left:200px;">Tanggal Pinjam : {{ $transaksi->tgl_pinjam }}</a></h5>
            <div class="card-body">
            <table class="table table-striped">
            <div class="container">
                <h4 class="mb-4" style="font-weight: bold; text-align: center;">{{ $transaksi->perpustakaan->nama }}</h4>
                <tbody>
                    <tr>
                        <th scope="row">Nama Peminjam</th>
                        <td >{{ $transaksi->siswa->nama_siswa }}</td>
                        <th scope="row">Petugas</th>
                        <td >{{ $transaksi->petugas->nama_petugas }}</td>
                    </tr>
                    <tr>
                        <th scope="row">ID Peminjam</th>
                        <td>{{ $transaksi->siswa->nis }}</td>
                        <th scope="row">ID Petugas</th>
                        <td>{{ $transaksi->petugas->no_karyawan }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Juluk Buku</th>
                        <td>{{ $transaksi->buku->nama_buku }}</td>
                        <th scope="row">Tanggal Kembali</th>
                        <td >{{ $transaksi->tgl_kembali }}</td>
                    </tr>
                </tbody>
                </div>

                </table>
                <a href="/" class="btn btn-primary">Home</a>
            </div>        
            <div class="card-footer text-muted">
                Note : {{ $transaksi->note }}
            </div>
        </div>

        </div>
        </div>
    </div>
</div>
@endsection
