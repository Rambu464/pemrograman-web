<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Universitas</title>
    <script type="text/javascript" src="js/main.js"></script>

<style>
    
    body {
        font-size: 120%;
    }

    .judul1 {
        text-align: center;
        margin: 5%;
    }

    .login-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #575757;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
    
    .horizontal-list {
        display: flex;
        list-style-type: none;
        background: darkslateblue;
        margin-bottom: 0px;
        padding: 0.5%;
    }
    .horizontal-list li {
        width: 100%;
        text-align: center;
    }

    a {
        color: rgb(255, 255, 255);
        text-decoration: solid;
    }
    a:hover {
        color: cyan;
        background-color: blue;
    }

    footer {
        align-items: center;
        background-color: darkslateblue;
        color: white;
        display: flex;
        justify-content: space-between;
        padding: 1%;
        flex-wrap: wrap;
    }
    
    .footer-info, .footer-credits {
        margin-bottom: 2%;
    }
    .footer-info p, .footer-credits p {
        margin: 2% 0;
    }
    
    .gambar1 {
        width: 100%;
    }

    .home {
        text-align: justify;
        line-height: 210%;
    }

    hr {
        margin-top: 10%;
        margin-bottom: 10%;
        width: 100%;
    }

    iframe {
        width: 100%;
        height: 680px;
        border: 0px solid white;
    }

    .judul2 {
        margin-top: 10%;
    }

    .judul1{
        color: black;
    }
    
</style>
</head>
<body>
    <?php if (isset($_SESSION['user_name'])): ?>
        <button class="login-button">
            Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
        </button>
    <?php else: ?>
        <button class="login-button" onclick="window.location.href='login/create.php'">Login</button>
    <?php endif; ?>

    <a href="javascript:void(0);" onclick="msg()">
        <h1 class="judul1" id="originalHeader">Universitas Gunadarma</h1>
    </a>

    <div id="newHeaderContainer"></div>

    <!-- <marquee >
        <pre>
            Universitas Gunadarma        |        Kampus E        |        Kelas 3IA12        |        PTA 2024 / 2025        |
        </pre>
    </marquee> -->
    <ul class="horizontal-list">
        <li>
            <a href="#home">HOME</a>
        </li>
        <li>
            <a href="#profil">PROFIL</a>
        </li>
        <li>
            <a href="html/kampus.html">KAMPUS</a>
        </li>
        <li>
            <a href="html/prodi.html">PRODI</a>
        </li>
        <li>
            <a href="html/lokasi.html">LOKASI</a>
        </li>
        <li>
            <a href="#kontak">KONTAK</a>
        </li>
    </ul>
    <img src="image/gundarE.jpg" alt="kampus e kelapa dua" title="Kampus E Kelapa Dua" class="gambar1">
    <p id="home" class="home">
        Universitas Gunadarma (UG) adalah sebuah universitas swasta di Indonesia yang berlokasi di Depok, Jawa Barat1 Universitas
        ini didirikan pada tahun 1981 dan terus berkembang hingga menjadi salah satu perguruan tinggi terkemuka di Indonesia1 UG
        memiliki berbagai program studi mulai dari D3, S1, S2, hingga S3, dan telah memperoleh akreditasi unggul dari Badan Akreditasi
        Nasional (BAN)2 Universitas Gunadarma juga dikenal dengan tema "Gunadarma Untuk Indonesia," yang menekankan peran pentingnya
        dalam mencetak SDM yang handal untuk masa depan Indonesia2
    </p>
    <hr>
    <h2 id="profil" class="judul2">Profil Kampus Universitas Gunadarma</h2>
    <iframe id="videoFrame" src="https://www.youtube.com/embed/1PA-dWPF94M?si=MrWzeuzZZN6BWDt4" title="Profil Kampus"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        browser anda tidak dapat menampilkan video ini
    </iframe>

    <button onclick="changeVideo()">Change Video</button>
    
    <footer id="kontak">
        <div class="footer-info">
            <h4>Kontak kami</h4>
            <p>Email : mahasiswa@gunadarma.com</p>
            <p>Telepon : +628 720 076</p>
        </div>
        <div class="footer-credits">
            <p>&copy; UG2024. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>