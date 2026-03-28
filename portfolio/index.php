<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Irdhan</title>

<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    }

    /* NAVBAR */
    nav {
    background: #222;
    color: white;
    padding: 15px 50px;
    display: flex;
    justify-content: space-between;
    }

    nav a {
    color: white;
    margin-left: 20px;
    text-decoration: none;
    }

    /* HERO */
    .hero {
    background: #333;
    color: white;
    padding: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .hero img {
    width: 250px;
    border-radius: 50%;
    }

    .btn {
    padding: 10px 20px;
    background: #555;
    color: white;
    border: none;
    cursor: pointer;
    }

    /* ABOUT */
    .about {
    padding: 50px;
    text-align: center;
    }

    /* SKILLS */
    .skills {
    padding: 50px;
    }

    .bar {
    background: #ddd;
    border-radius: 10px;
    margin-bottom: 10px;
    }

    .fill {
    background: #333;
    color: white;
    padding: 5px;
    border-radius: 10px;
    }

    /* CERTIFICATES */
    .certificates {
    padding: 50px;
    background: #f4f4f4;
    }

    .cards {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    }

    .card {
    display: flex;
    width: 350px;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .card img {
    width: 120px;
    object-fit: cover;
    }

    .card-content {
    padding: 15px;
    }

    .desc {
    font-size: 13px;
    color: #555;
    }

    .extra {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    margin-top: 10px;
    color: #777;
    }

    footer {
    background: #222;
    color: white;
    text-align: center;
    padding: 20px;
    }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
<div><b>Irdhan.</b></div>
<div>
    <a href="#">Home</a>
    <a href="#about">About</a>
</div>
</nav>

<!-- HERO / PROFIL -->
<section class="hero">
<div>
    <h1>Halo, Saya Muhammad Irdhan Nur Fauzan</h1>
    <h3>Mahasiswa Sistem Informasi</h3>
    <p>Saya suka web development dan futsal</p>
    <button class="btn">Tentang Saya</button>
</div>

<img src="profil.jpg" alt="foto profil">
</section>

<!-- ABOUT -->
<section id="about" class="about">
<h2>Tentang Saya</h2>
<p>
    Saya adalah mahasiswa yang memiliki minat di bidang web development 
    dan aktif dalam kegiatan olahraga khususnya futsal.
</p>
</section>

<!-- SKILLS -->
<section class="skills">
<h2>Skills</h2>

<p>Programming Skill - 70%</p>
<div class="bar"><div class="fill" style="width:70%">70%</div></div>

<p>Sport Skill - 80%</p>
<div class="bar"><div class="fill" style="width:80%">80%</div></div>

<p>Soft Skill - 90%</p>
<div class="bar"><div class="fill" style="width:90%">90%</div></div>
</section>

<!-- CERTIFICATES -->
<section class="certificates">
<h2>Certificates</h2>

<div class="cards">

    <div class="card">
    <img src="juara.jpg">
    <div class="card-content">
        <h4>Champions U17 Piala Soeratin Kaltim</h4>
        <p class="desc">Juara kompetisi tingkat Kaltim.</p>
        <div class="extra">
        <span>2023</span>
        <span>Arema FC</span>
        </div>
    </div>
    </div>

    <div class="card">
    <img src="pkt.jpg">
    <div class="card-content">
        <h4>Champion PKT Cup</h4>
        <p class="desc">Juara turnamen PKT Cup.</p>
        <div class="extra">
        <span>2024</span>
        <span>Juara</span>
        </div>
    </div>
    </div>

    <div class="card">
    <img src="top.jpg">
    <div class="card-content">
        <h4>Top Score Liga AFKAB KUTIM</h4>
        <p class="desc">Top score liga Kutai Timur.</p>
        <div class="extra">
        <span>2024</span>
        <span>Top Score</span>
        </div>
</div>
    </div>

</div>
</section>

<!-- FOOTER -->
<footer>
<p>© 2026 Irdhan. All Rights Reserved.</p>
</footer>

</body>
</html>