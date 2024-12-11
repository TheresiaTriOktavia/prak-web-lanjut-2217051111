@extends('layouts.app')

@section('content')
<div class="form-container">
    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Masukkan nama" required>
        <div class="invalid-feedback">Nama harus diisi.</div>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" placeholder="Masukkan NPM" pattern="\d{10}" required>
        <div class="invalid-feedback">NPM harus berupa 10 digit angka.</div>

        <label for="kelas_id">Kelas:</label>
        <select name="kelas_id" id="kelas_id" required>
            <option value="">Pilih Kelas</option>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">Silahkan pilih kelas yang ada.</div>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto">
        @if ($user->foto)
        <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto User" class="img-thumbnail" width="100">
        @endif
        <div class="invalid-feedback">Anda harus memasukkan foto.</div>

        <input type="submit" value="Submit">
        <a href="{{ route('user.list') }}" class="btn btn-danger">Kembali</a>
    </form>
</div>

<style>
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-container label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    .form-container input[type="text"],
    .form-container select,
    .form-container input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background: #0056b3;
    }

    .form-container .invalid-feedback {
        color: red;
        font-size: 14px;
    }

    .form-container img {
        display: block;
        margin-top: 10px;
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }
</style>
@endsection
