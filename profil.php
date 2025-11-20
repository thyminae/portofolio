<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Tiara Murni</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #0f0f0f;
            color: #fff;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            padding: 15px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(8px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .logo-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #00eaff;
            object-fit: cover;
        }

        nav a {
            color: #fff;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
        }

        nav a:hover {
            color: #00eaff;
        }

        section {
            padding: 120px 10% 80px 10%;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00eaff;
        }

        /* PROFIL CONTAINER */
        .profil-container {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .foto-profil {
            width: 180px;  
            height: 220px; 
            overflow: hidden;
            border-radius: 15px;
            border: 3px solid #00eaff;
        }

        .foto-profil img {
            height: 100%;
            width: 100%;
            border-radius: 15px;
            object-fit: cover;
        }

        .data-diri {
            flex: 2;
            background: #1a1a1a;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #333;
        }

        .data-diri p {
            margin-bottom: 12px;
            line-height: 1.6;
            font-size: 16px;
        }

        .label {
            font-weight: 100;
            color: white;
            width: 200px;
            display: inline-block;
        }

        .value {
            color: #ccc;
        }

        .pendidikan {
            background: #1a1a1a;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #333;
            margin-top: 30px;
        }

        .pendidikan div {
            display: flex;
            margin-bottom: 12px;
        }

        .pendidikan .tahun {
            width: 130px;
            font-weight: 600;
            color: #00eaff;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            section {
                padding: 120px 5% 80px 5%;
            }
            .profil-container {
                flex-direction: column;
                align-items: center;
            }
            .data-diri {
                width: 100%;
            }
            .foto-profil {
                width: 250px;
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <img src="img/tiara.jpeg" class="logo-img" alt="Foto Tiara">
        <div>
            <a href="index.php">Beranda</a>
            <a href="profil.php">Profil</a>
        </div>
    </nav>

    <!-- PROFIL -->
    <section>
        <h2>Profil Saya</h2>
        <div class="profil-container">
            <div class="foto-profil">
                <img src="img/tiara.jpeg" alt="Foto Tiara Murni">
            </div>
            <div class="data-diri">
                <p><span class="label">Nama</span> <span class="value">:Tiara Murni</span></p>
                <p><span class="label">Jenis Kelamin</span> <span class="value">:Perempuan</span></p>
                <p><span class="label">Tempat/Tanggal Lahir</span> <span class="value">:Medan, 28 November 2008</span></p>
                <p><span class="label">Kewarganegaraan</span> <span class="value">:Indonesia</span></p>
                <p><span class="label">Alamat</span> <span class="value">:Tembung Pasar 3, Jalan Datuk Kabu</span></p>
            </div>
        </div>

        <h2>Pendidikan</h2>
        <div class="pendidikan">
            <div><span class="tahun">2013-2014</span> TK Saras</div>
            <div><span class="tahun">2015-2018</span> SD Negeri 064020</div>
            <div><span class="tahun">2019-2020</span> SD Negeri 101771</div>
            <div><span class="tahun">2020-2023</span> SMP Negeri 29</div>
            <div><span class="tahun">2023</span> SMK Swasta Jambi</div>
            <div><span class="tahun">2024-2026</span> SMK Swasta Mandiri</div>
        </div>
    </section>

</body>
</html>
