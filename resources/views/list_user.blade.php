@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">LIST USER</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped w-60">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td><img src="{{ Storage::url($user->foto) }}" alt="Foto User" width="100"></td>
                        <td>
                             <!-- View -->
                        <a href="{{ route('user.show', $user['id']) }}" class="view">View</a>

                        <!-- Edit -->
                        <a href="{{ route('user.edit', $user['id']) }}" class="edit">Edit</a>

                        <!-- Delete -->
                        <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection