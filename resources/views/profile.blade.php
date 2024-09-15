<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .outer-box {
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            background-color: orange;
        }

        .container {
            text-align: center;
            width: 200px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: lightgray;
            margin: 0 auto 20px;
            background-position: center;
            background-size: cover;
            border: 1px solid black;
            background-image: url('{{ asset("assets/img/pia3.jpg") }}');
        }

        .info {
            display: flex;
            border: 1px solid black;
            justify-content: center;
            background-color: #e0e0e0;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="outer-box">
        <div class="container">
            <div class="profile-image"></div>
            <div class="info">
                <span><?= $nama ?></span>
            </div>
            <div class="info">
                <span><?= $npm ?></span>
            </div>
            <div class="info">
                <span><?= $kelas ?></span>
            </div>
        </div>
    </div>
</body>
</html>
