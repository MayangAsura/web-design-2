@extends('layouts.master')

@section('title', 'Daftar Asisten')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="py-4">Daftar Asisten : </h1>
            <table class="table">
            <thead class="table-primary">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Hari</th>
                <th scope="col">Ruangan</th>
                <th scope="col">Jam</th>
                <th scope="col">Mata kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nama Asisten</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($daftarasisten as $jmlasst) <!-- $daftarasisten diambil dari AsistenController -->
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $jmlasst->hari }}</td> <!-- hari adalah nama field/kolom di table daftarasisten -->
                <td>{{ $jmlasst->ruangan }}</td> 
                <td>{{ $jmlasst->jam }}</td>
                <td>{{ $jmlasst->matakuliah }}</td>
                <td>{{ $jmlasst->sks }}</td>
                <td>{{ $jmlasst->kelas }}</td>
                <td>{{ $jmlasst->namaasisten}}</td>
                <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection