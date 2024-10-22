<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #9333ea);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #555;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #1e3a8a;
            color: white;
            padding: 12px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }
        input[type="submit"]:hover {
            background-color: #9333ea;
        }
        .invalid-feedback {
            display: none;
            color: red;
            font-size: 12px;
        }
        .was-validated input:invalid ~ .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body> -->

@extends('layouts.app')

@section('content')

    <div class="form-container">
        <h1>Create User</h1>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
            <div class="invalid-feedback">Nama harus diisi.</div>

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" pattern="\d{10}" required>
            <div class="invalid-feedback">NPM harus berupa 10 digit angka.</div>

            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">Silahkan pilih kelas yang ada.</div>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" placeholder="Masukkan Foto Anda" pattern="\d{10}" required>
            <div class="invalid-feedback">Anda harus memasukkan foto</div>

            <input type="submit" value="Submit">
        </form>
    </div>

@endsection
<!-- </body>
</html> -->
