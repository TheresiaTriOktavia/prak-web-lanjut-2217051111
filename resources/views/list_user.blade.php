@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">LIST USER</h1>

    <div class="d-flex justify-content-center">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
        <table class="table table-bordered table-striped w-60">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                    <td>
                        <img src="{{ asset('storage/uploads/'.$user->foto) }}" alt="foto user" width="100">
                    </td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a>
                        <button class="btn btn-sm btn-pink-outline">Edit</button>
                        <button class="btn btn-sm btn-pink-outline">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection