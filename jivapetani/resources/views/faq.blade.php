@extends('layout.master')

@section('title', 'jiva petani ')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
  <div class="container-fluid p-0">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            border-bottom: 1px solid #eee;
        }
        .container {
            padding: 20px;
        }
        .faq-item {
            border: 1px solid #ddd;
            border-radius: 12px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            padding: 16px;
        }
        .faq-question {
            font-weight: 300;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            padding: 0 16px;
            background-color: #f9f9f9;
            margin-top: 10px;
            padding-left: 5px;
            font-size: 15px;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }
        .faq-item.open .faq-answer {
            padding: 12px 16px;
            max-height: 300px;
        }
        .faq-icon {
            font-size: 24px;
            font-weight: bold;
        }
        .faq-box {
            border: 1px solid #eee;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .faq-box:hover {
            background-color: #f9f9f9;
        }
        .faq-box span {
            float: right;
        }
        .hero {
            background-color: #198754;
            color: white;
            padding: 20px;
            text-align: center;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .hero img {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 5%;
        }
        .cta-button {
            background: white;
            color: black;
            padding: 10px 20px;
            margin-top: 20px;
            display: inline-block;
            border-radius: 8px;
            text-decoration: none;
        }
        footer {
            background: #198754;
            color: white;
            padding: 30px 20px;
            font-size: 14px;
        }
        footer a {
            color: #ccc;
            text-decoration: none;
        }
        footer .columns {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        footer .col {
            flex: 1;
            margin: 10px;
        }
        .footer-links {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }
        .footer-links li {
            margin-bottom: 6px;
        }
        .footer-links a {
            text-decoration: none;
        }
        .footer-links a:hover {
            color: white;
        }
    </style>

    <h1 style="font-size: 40px; text-align: center;" >Pertanyaan yang Sering Diajukan</h1>

<div class="container">
    <div class="faq-item" onclick= "toggleFAQ(this)">
        <div class="faq-question"> 
            <span> Apa itu Jiva? </span>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer"> Jiva adalah platform digital untuk membantu petani meningkatkan hasil dan pendapatan mereka. </div>
    </div>

    <div class="faq-item" onclick= "toggleFAQ(this)">
        <div class="faq-question"> 
            <span> Dimana saja layanan Jiva tersedia? </span>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer"> Saat ini layanan Jiva telah tersedia di beberapa wilayah di Indonesia, mulai dari daerah Sumatera, Jawa, Kalimantan, Sulawesi, dan Bali </div>
    </div>

    <div class="faq-item" onclick= "toggleFAQ(this)">
        <div class="faq-question"> 
            <span> Bagaimana mengaktifkan akun Sahabat Jiva yang telah dinonaktifkan? </span>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer"> Proses aktivasi akun memerlukan persetujuan dengan tim lapangan kami, sehingga kami sarankan bapak/ibu untuk berdiskusi dengan tim lapangan perihal ini </div>
    </div>

    <div class="faq-item" onclick= "toggleFAQ(this)">
        <div class="faq-question"> 
            <span> Ingin mengganti nomor HP karena nomor HP sebelumnya tidak aktif? </span>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer"> Mohon diinformasikan nomor HP milik pribadi Anda yang ingin gunakan, agar kami sampaikan ke tim terkait </div>
    </div>

    <div class="faq-item" onclick= "toggleFAQ(this)">
        <div class="faq-question"> 
            <span> Saya ingin membatalkan pesanan, bagaimana caranya? </span>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer"> Mohon lengkapi informasi berikut: <br>
    -Nama Toko Tani: <br>
    -No HP (aktif): <br>
    -Nomor pesanan: <br>
    -Alasan: </div>
    </div>
</div>

<script>
    function toggleFAQ(el){
        el.classList.toggle('open');
        const icon = el.querySelector('.faq-icon');
        icon.textContent = el.classList.contains('open') ? 'x' : '+';

        const answer = el.querySelector('.faq-answer');
        if(el.classList.contains('open')) {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    }
</script>

<div class="hero-banner">
    <div class="hero">
        <h1>Siap tingkatkan penghasilanmu dengan Jiva?</h1>
        <img src="https://www.thejavapost.id/wp-content/uploads/2023/03/WhatsApp-Image-2023-03-16-at-11.30.27.jpeg" alt="Petani Jiva">
        <p><h2>Bergabung dengan tim kami, dan 10.000+ mitra Jiva menjadi sukses di bisnis pertanian!</h2></p>
        <a href="#" class="cta-button">Hubungi Jiva</a>
    </div>
</div>

<footer>
    <div class="columns">
        <div class="col">
            <h4>Menu</h4>
            <ul class="footer-links">
                <li><a href="/home"> Home </a></li>
                <li><a href="/about"> About Us </a></li>
            </ul>
        </div>
        <div class="col">
            <h4>Dukungan</h4>
            <ul class="footer-links">
                <li><a href="/Contact"> Hubungi Kami </a></li>
                <li><a href="/LatestQ"> Pertanyaan yang sering diajukan </a></li>
        </div>
        <div class="col">
            <h4>Kantor Pusat</h4>
            <p>Jl. Sultan Iskandar Muda, RT.4/RW.3, Pd. Pinang, Kec. Kby. Lama, Jakarta Selatan 12310</p>
        </div>
    </div>
    <p>&copy; Copyright 2025. Jiva Ag Pte Ltd. All rights reserved.</p>
</footer>
  </div>
</main>
@endsection


