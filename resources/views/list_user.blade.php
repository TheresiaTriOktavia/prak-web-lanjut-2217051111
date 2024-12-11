list:
@extends('layouts.app')

@section ('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">List Data</h1>

    <!-- Tombol Tambah User -->
    <div class="d-flex justify-content-start mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah Pengguna Baru</a>
    </div>

    <div class="table-responsive shadow-lg rounded">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($users as $user): ?>
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                    <td>
                        <img src="{{ asset('storage/uploads/' . $user['foto']) }}" alt="Foto User" class="img-thumbnail" width="80">
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <!-- View -->
                            <a href="{{ route('user.show', $user['id']) }}" class="btn btn-primary btn-sm">View</a>

                            <!-- Edit -->
                            <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Delete -->
                            <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
@endsection
