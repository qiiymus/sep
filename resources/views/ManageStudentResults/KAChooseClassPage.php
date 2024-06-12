<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semak Keputusan Pelajar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 80px;
            background-color: #b2c5a3;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
        }
        .sidebar img {
            width: 40px;
            margin-bottom: 20px;
        }
        .sidebar a {
            margin: 10px 0;
            color: #fff;
            text-decoration: none;
            font-size: 24px;
        }
        .content {
            margin-left: 100px;
            text-align: center;
        }
        .content h1 {
            color: #4d7e3e;
            margin-bottom: 20px;
        }
        .content select {
            padding: 10px;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .content button {
            background-color: #4d7e3e;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <a href="#"><img src="{{ asset('images/home.png') }}" alt="Home"></a>
        <a href="#"><img src="{{ asset('images/result.png') }}" alt="Icon 1"></a>
        <a href="#"><img src="{{ asset('images/timetable.png') }}" alt="Icon 2"></a>
        <a href="#"><img src="{{ asset('images/report.png') }}" alt="Icon 3"></a>
        <a href="#"><img src="{{ asset('images/bulletin.png') }}" alt="Icon 4"></a>
        <a href="#"><img src="{{ asset('images/profile.png') }}" alt="Icon 5"></a>
    </div>
    <div class="container">
        <div class="content">
            <h1>Semak Keputusan Pelajar</h1>
            <p>Sila pilih kelas pelajar</p>
            <select>
                <option value="">-Sila pilih-</option>
                <!-- Add more options as needed -->
            </select>
            <br>
            <button>Teruskan</button>
        </div>
    </div>
</body>
</html>
