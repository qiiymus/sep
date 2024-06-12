Teacher view timetable

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual Waktu Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #B0D9E2;
            padding-top: 20px;
        }
        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }
        .sidenav a:hover {
            background-color: white;
        }
        .main {
            margin-left: 220px;
            padding: 20px;
        }
        .schedule {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>

<div class="sidenav">
   <div class="image-container">
      <center><img src="path/to/your/image.jpg" alt="school image" width="500"></center>
    </div>
    <a href="#home">home</a>
    <a href="#services">result</a>
    <a href="#clients">timetable</a>
    <a href="#bulletin">bulletin</a>
    <a href="#profile">profile</a>
</div>

<div class="main">
    <h1>Jadual Waktu Kelas</h1>
    <p><b>Kelas:</b></p>
    <section class="schedule">
        <table>
            <tr>
                <th>Hari/Masa</th>
                <th>2.00-2.30 pm</th>
                <th>2.30-3.00 pm</th>
                <th>3.00-3.30 pm</th>
                <th>3.30-4.00 pm</th>
            </tr>
            <tr>
                <td>Isnin</td>
                <td>Subject 1</td>
                <td>Subject 2</td>
                <td rowspan="3">REHAT</td>
                <td>Subject 3</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>Subject 1</td>
                <td>Subject 2</td>
                <td>Subject 3</td>
            </tr>
            <tr>
                <td>Khamis</td>
                <td>Subject 1</td>
                <td>Subject 2</td>
                <td>Subject 3</td>
            </tr>
        </table>
    </section>
</div>

</body>
</html>