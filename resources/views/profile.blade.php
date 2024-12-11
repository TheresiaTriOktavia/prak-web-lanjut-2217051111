<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f97316 0%, #1e3a8a 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            background: linear-gradient(135deg, #ffffff, #f0f0f5);
        }
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: lightgray;
            background-position: center;
            background-size: cover;
            margin: 0 auto 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border: 4px solid #f97316;
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            color: #3f72af;
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        p {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            margin: 10px 0;
            color: #555;
        }
        p span {
            font-weight: bold;
            color: #333;
        }
        .profile-details {
            margin-top: 20px;
        }
        .profile-item {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        .profile-item i {
            margin-right: 10px;
            color: #f97316;
        }
        
        input[type="text"], input[type="button"] {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 10px;
            margin: 8px 0;
            width: 100%;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: #f0f0f5;
            color: #333;
        }
        input[type="button"] {
            background-color: #f97316;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="button"]:hover {
            background-color: #e5620f;
        }
       
        .fa {
            font-size: 18px;
        }
       
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .profile-image:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    </style>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <div class="container">
    <img src="{{ Storage::url($user->foto) }}" alt="Profile Picture" class="profile-image"></img>
        <h1>Profil Pengguna</h1>
        <form action="/submit_profile" method="POST">
            <div class="profile-item">
                <i class="fas fa-user"></i>
                <input type="text" name="nama" placeholder="Nama" value="{{ old('nama', $nama ?? '') }}" readonly>
            </div>
            <div class="profile-item">
                <i class="fas fa-id-badge"></i>
                <input type="text" name="npm" placeholder="NPM" value="{{ old('npm', $npm ?? '') }}" readonly>
            </div>
            <div class="profile-item">
                <i class="fas fa-chalkboard-teacher"></i>
                <input type="text" name="kelas" placeholder="Kelas" value="{{ old('kelas', $nama_kelas ?? 'K') }}" readonly>
            </div>

            <input type="button" value="Kontak Saya" onclick="window.location.href='mailto:theresiaoktavia2004@gmail.com';">
        </form>
    </div>

</body>
</html>
