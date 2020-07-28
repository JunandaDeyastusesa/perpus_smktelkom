@extends('master')

@section('tab-title')
Transaksi
@endsection

@section('main')

<div id="transaksi" enctype="multipart/form-data">
    <div class="container">
   
        <div style="margin-bottom:20px">
            <a href="{{ url('transaksi')}}" class="btn btn-primary mb-3 mt-5 px-4">Pinjam Buku</a>
        </div>
        <div class="table-responsive">
        <table class="table table-hover">@if (!empty($transaksi_list))      
            <thead>
                <tr style>
                
                    <th scope="col">No</th>
                    <th scope="col">Perpus</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Siswa</th>
                    <th scope="col">Petugas</th>
                    <th scope="col">No Buku</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaksi_list as $transaksi)
                <tr>
                    <th scope="row">{{ $transaksi->id }}</th>
                    <td scope="row">{{ $transaksi->perpustakaan->nama }}</td>
                    <td scope="row">{{ $transaksi->buku->nama_buku }}</td>
                    <td scope="row">{{ $transaksi->siswa->nama_siswa }}</td>
                    <td scope="row">{{ $transaksi->petugas->nama_petugas }}</td>
                    <td scope="row">{{ $transaksi->buku->no_buku }}</td>
                    <td scope="row">{{ $transaksi->tgl_pinjam }}</td>
                    <td scope="row">{{ $transaksi->tgl_kembali }}</td>
                    <td>
                    <a href="{{url('/detail/'.$transaksi->id)}}" class="btn btn-sm btn-info">Full</a>
                    <a href="{{url('/edit/'.$transaksi->id)}}" class="btn btn-sm btn-outline-dark">Edit</a>
                    <a href="{{url('/delete/'.$transaksi->id)}}"class="btn btn-sm btn-outline-danger">Del</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        @endif
        </table>
        </div>
    </div>
</div>

@endsection