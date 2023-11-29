<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PLN</title>
    <link rel="shortcut icon" href="http://localhost/latihanyok/layouts/assets/img/pln.ico" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin-left: 150px;
            padding: 0;
            background-color: #f3f3f3;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #0057a0;
            margin-top: 30px;
            margin-left: 50px;
        }

        .info {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: 50px;
        }

        .card {
            width: 100%;
            background-color: #003366;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .card h3 {
            color: #ffffff;
        }

        .card p {
            color: #ffffff;
        }

        footer {
            position: fixed;
            bottom: 0px;
            left: 200px; /* Adjusted to start from the left */
            right: 0; /* Adjusted to end at the right */
            padding: 20px 10px; /* Adjusted padding for left and right */
            background-color: #e1e1e1;
            width: 100%;
            border-top: 1px solid #d8dadf;
            color: #333; /* Dark gray text color */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>SELAMAT DATANG PELANGGAN TERCINTA</h2>

        <div class="info">Informasi Terkini</div>

        <div class="card">
            <h3>Pelanggan Baru</h3>
            <p>Selamat bergabung dengan PLN. Kami senang memiliki Anda sebagai pelanggan baru.</p>
        </div>

        <div class="card">
            <h3>Pemeliharaan Jaringan</h3>
            <p>Perhatian! Akan ada pemeliharaan jaringan pada tanggal 30 November 2023. Mohon maaf atas ketidaknyamanan ini.</p>
        </div>

        <div class="card">
            <h3>Tagihan Bulan Ini</h3>
            <p>Tagihan bulan ini sudah dapat diakses melalui dashboard. Harap segera membayar sebelum tanggal jatuh tempo.</p>
        </div>
        
        <div class="card">
            <h3>Info Penting</h3>
            <p>Informasi penting untuk semua pelanggan. Harap perhatikan pengumuman di dashboard Anda.</p>
        </div>
    </div>
</body>

</html>
