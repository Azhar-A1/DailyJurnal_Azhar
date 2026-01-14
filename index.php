<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>My Daily Jurnal</title>
    <style>
        * {
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }
        .toggle-btn {
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .toggle-btn:hover {
            transform: scale(1.5);
        }
        .profile-img{
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 100%;
        }
    </style>
</head>

<body calass="text-dark bg-white">
    <header class="title">
        <nav id="mainNav" class="navbar navbar-expand-lg sticky-top shadow-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#"><h1 class="h3 mb-0">My Daily Jurnal</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="#profile">Profil</a></li>
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="#jadwal">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="#karakter">List</a></li>
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link text-dark collapse-link" href="login.php" target="_blank">Login</a></li>
                        <li class="nav-item">
                            <a class="nav-link toggle-btn" id="modeToggle">
                                <img id="modeIcon" src="zio.jpeg" alt="Toggle Mode" width="35px" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <section id="hero" class="text-center p-5 text-sm-start bg-info text-white">
            <div class="container">
                <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                    <img src="ren.png" class="img-fluid" width="300" alt="Ren">
                    <div>
                        <h1 class="fw-bold display-4">Beneath the Mask</h1>
                        <h4 class="lead display-6">I'm a shapeshifter, chained down to my core Please don't take off my mask, my place to hide.</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="profile" class="bg-light">
            <div class="container my-5">
                <h3 class="text-center mb-3">Profil Mahasiswa</h3>
                <div class="profile-card">
                    <div id="profileCardContent" class="row align-items-center"> 
                        <div class="col-md-5 text-center mb-3 mb-md-0">
                            <img src="kazu.png" class="profile-img">
                        </div>
                        <div class="col-md-7 profile-content">
                            <h5 class="fw-semibold text-center">Azhar Syamsudin Abimanyu</h5>
                            
                            <table id="profileTable" class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">NIM</td>
                                        <td>: A11.2024.15807</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Program Studi</td>
                                        <td>: Teknik Informatika</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Email</td>
                                        <td>: 111202415807@mhs.dinus.ac.id</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Telepon</td>
                                        <td>: +62 967 261 7799</td>
                                    </tr>
                                     <tr>
                                         <td class="fw-semibold">Alamat</td>
                                         <td>: Jl. Poncowolo Barat I Gg. Buntu, Semarang</td>
                                     </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- article begin -->
        <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
                <div class="col">
                <div class="card h-100">
                    <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text">
                        <?= $row["isi"]?>
                    </p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">
                        <?= $row["tanggal"]?>
                    </small>
                    </div>
                </div>
                </div>
                <?php
            }
            ?> 
            </div>
        </div>
        </section>
<!-- article end -->

        <section id="jadwal" class="text-center py-5">
            <div class="container">
            <h3 class="mb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start">
                    <div class="col">
                        <div class="card border-primary h-100">
                            <h6 class="card-header text-white bg-primary">Senin</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>09:30 - 12:00</b><br>
                                    Rekayasa Perangkat Lunak <br>
                                    Ruang H.5.7 <br><br>
                                    <b>12:30 - 15:00</b><br>
                                    Probabilitas dan Statistik <br>
                                    Ruang H.5.4<br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-success h-100">
                            <h6 class="card-header text-white bg-success">Selasa</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>08:40 - 10:20</b><br>
                                    Thecnopreneurship <br>
                                    Ruang H.5.8 <br><br>
                                    <b>12:30 - 14:10</b><br>
                                    Basis Data <br>
                                    Ruang H.5.9 <br><br>
                                    <b>14:10 - 15:50</b><br>
                                    Pendidikan Kewarganegaraan <br>
                                    Kulino <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-danger h-100">
                            <h6 class="card-header text-white bg-danger">Rabu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>07:00 - 08:40</b><br>
                                    Basis Data <br>
                                    Ruang D.2.k <br><br>
                                    <b>09:30 - 12:00</b><br>
                                    Sistem Oprasi <br>
                                    Ruang H.3.11 <br><br>
                                    <b>12:30 - 15:00</b><br>
                                    Logika Informatika <br>
                                    Ruang H.3.11 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-danger h-100">
                            <h6 class="card-header text-white bg-warning">Kamis</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>08:40 - 10:20</b><br>
                                    Pemrograman Berbasis Web <br>
                                    Ruang D.2.j
                                    <br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-secondary h-100">
                            <h6 class="card-header text-white bg-info">Jumat</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Tidak ada jadwal</b>
                                    <br><br><br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-secondary h-100">
                            <h6 class="card-header text-white bg-secondary">Sabtu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Tidak ada jadwal</b>
                                    <br><br><br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-dark h-100">
                            <h6 class="card-header text-white bg-dark">Minggu</h6>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Tidak ada jadwal</b>
                                    <br><br><br><br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
            
        <section id="karakter" class="text-center p-5 bg-info text-white">
            <div class="container">
                <h2 class="fw-bold display-4 pb-3">List</h2>

                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col">
                        <div class="card h-100 bg-white text-dark shadow-sm">
                            <img src="Oma Zi-O.jpeg" class="card-img-top" alt="Ohma-Zio">
                            <div class="card-body">
                                <h5 class="card-title">Ohma-Zio</h5>
                                <p class="card-text"> Ohma Zi-O adalah bentuk sempurna dari Kamen Rider Zi-O, yaitu versi masa depan dari Sougo Tokiwa, karakter utama Kamen Rider Zi-O, yang menjadi seorang raja iblis yang kejam dan menguasai waktu serta memiliki kekuatan dari semua Kamen Rider dari era Showa hingga masa depan. Pada timeline Utama yang dimana Sougo sapat membangkitkan kekuatakannya yang sebenarnya ketika temannya berkorban untuknya itu membuat Sougo marah dan dia berubah menjadi Ohma-Zio lalu membantai seluruh musuh lalu menghancurkan dunia dan membuat ulang dunia (mereset dunia).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-white text-dark shadow-sm">
                            <img src="Sai akuto1.jpeg" width="20px" class="card-img-top" alt="Sai Akuto">
                            <div class="card-body">
                                <h5 class="card-title">Sai Akuto</h5>
                                <p class="card-text">Sai Akuto adalah protagonis utama dari serial "Ichiban Ushiro no Dai Maō", Ia adalah seorang yatim piatu yang ingin menjadi pendeta tinggi untuk kebaikan masyarakat, tetapi diramalkan akan menjadi Raja Iblis. Akuto berjuang keras untuk melawan takdirnya dan berusaha sebaik mungkin untuk menjadi orang baik, meskipun ia akhirnya menerima peran tersebut dan memiliki kekuatan absolut. para fans memberinya julukan "Raja Iblis Terkuat Dalam Fiksi Jepang"</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-white text-dark shadow-sm">
                            <img src="download.jpeg" class="card-img-top" alt="Saiki Kusuo">
                            <div class="card-body">
                                <h5 class="card-title">Saiki Kusuo</h5>
                                <p class="card-text">Saiki Kusuo adalah protagonis dari serial manga dan anime Jepang "Saiki Kusuo no Ψ Nan", yang merupakan seorang siswa SMA dengan berbagai kemampuan psikis luar biasa seperti telepati dan telekinesis. Meskipun memiliki kekuatan super, ia hanya ingin menjalani kehidupan normal, tetapi usahanya sering kali digagalkan oleh teman-teman sekelasnya yang Aneh. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-white text-dark shadow-sm">
                            <img src="Joker.jpeg" class="card-img-top" alt="Naofumi Iwatani">
                            <div class="card-body">
                                <h5 class="card-title">Naofumi Iwatani</h5>
                                <p class="card-text">Ren Amamiya adalah nama protagonis dari video game populer bernama "Persona 5", yang juga dikenal dengan nama kode "Joker". Ia adalah seorang siswa SMA yang pindah ke Tokyo setelah dituduh melakukan penyerangan secara tidak adil. Di sana, ia menjadi pemimpin Phantom Thieves of Hearts, kelompok pemberontak yang memiliki kemampuan "Persona" untuk melawan orang-orang korup dengan mencuri hati mereka. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-white text-dark shadow-sm">
                            <img src="Rimuru Tempest.jpeg" class="card-img-top" alt="Rimuru Tempest">
                            <div class="card-body">
                                <h5 class="card-title">Rimuru Tempest</h5>
                                <p class="card-text">Rimuru Tempest adalah tokoh utama dari Novel "Tensei Shitara Slime Datta Ken" (Tensura), yang merupakan reinkarnasi dari seorang pria Jepang bernama Satoru Mikami. Ia adalah seorang slime kuat yang mendirikan dan menjadi Raja dari Federasi Jura Tempest, serta salah satu Raja Iblis terkuat di kelompok Octagram, dia juga merupakan salah satu dari 5 True Dragon makhluk terkuat yang ada di alam semesta Tensura. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-4">Gallery</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
                <div class="col-4 col-md-2">
                    <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                </div>
                <?php
            }
            ?> 
            </div>
        </div>
        </section>


        <!-- <section id="gallery" class="text-center p-5">
            <div class="container">
                <h1 class="fw-bold display-4 pb-3">Gallery</h1>
                <div class="d-flex justify-content-center">
                    <div id="carouselExample" class="carousel slide" style="max-width: 800px; width: 100%;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Persona.jpeg" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="digimon.jpg" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="makoto.jpg" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="Ptac.jpeg" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="roshidere.jpeg" class="d-block w-100 rounded shadow">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section> -->
            
        <footer class="bg-secondary text-center p-5">
            <div>
                <a href="https://www.youtube.com/@AzharAbimanyu0" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                </a><a href="https://www.instagram.com/azhar_.iu/#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
            </div>
            <div>
                Azhar Syamsudin Abimanyu A11.2024.15807
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script>
            const bodyElement = document.body;
            const toggle = document.getElementById('modeToggle');
            const icon = document.getElementById('modeIcon');
            const navBar = document.getElementById('mainNav');
            const navLinks = document.querySelectorAll('#navbarNav .nav-link');
            const navBrand = document.querySelector('.navbar-brand');
            const heroSection = document.getElementById('hero');
            const profileSection = document.getElementById('profile'); 
            const karakterSection = document.getElementById('karakter');
            const cards = document.querySelectorAll('#karakter .card');
            const footer = document.getElementById('pageFooter');
            const navbarCollapse = document.getElementById('navbarNav');
            
            const lightModeClasses = { 
                body: ['bg-white', 'text-dark'], 
                navbar: ['navbar-light', 'bg-light'], 
                text: ['text-dark'], 
                card: ['bg-white', 'text-dark', 'border-0'], 
                footer: ['bg-light', 'text-dark'], 
                infoSection: ['bg-info', 'text-white'],
                profileSection: ['bg-light', 'text-dark'],
                profileTable: ['table-light']
            };
            const darkModeClasses = { 
                body: ['bg-dark', 'text-white'], 
                navbar: ['navbar-dark', 'bg-dark'], 
                text: ['text-white'], 
                card: ['bg-dark', 'text-white', 'border-secondary'], 
                footer: ['bg-dark', 'text-white'], 
                infoSection: ['bg-primary', 'text-white'],
                profileSection: ['bg-dark', 'text-white'],
                profileTable: ['table-dark']
            };

            let darkMode = localStorage.getItem('darkMode') === 'true';

            function toggleBootstrapClasses(element, removeClasses, addClasses, isDark) {
                if (!element) return;
                removeClasses.forEach(cls => element.classList.remove(cls));
                addClasses.forEach(cls => element.classList.add(cls));
            }

            function applyTheme(isDark) {
                toggleBootstrapClasses(bodyElement, isDark ? lightModeClasses.body : darkModeClasses.body, isDark ? darkModeClasses.body : lightModeClasses.body, isDark);
                toggleBootstrapClasses(navBar, isDark ? lightModeClasses.navbar : darkModeClasses.navbar, isDark ? darkModeClasses.navbar : lightModeClasses.navbar, isDark);
                [navBrand, ...navLinks].forEach(el => {
                    toggleBootstrapClasses(el, isDark ? lightModeClasses.text : darkModeClasses.text, isDark ? darkModeClasses.text : lightModeClasses.text, isDark);
                });

                const infoRemove = isDark ? lightModeClasses.infoSection : darkModeClasses.infoSection;
                const infoAdd = isDark ? darkModeClasses.infoSection : lightModeClasses.infoSection;
                toggleBootstrapClasses(heroSection, infoRemove, infoAdd, isDark);
                toggleBootstrapClasses(karakterSection, infoRemove, infoAdd, isDark);
                
                const profileRemove = isDark ? lightModeClasses.profileSection : darkModeClasses.profileSection;
                const profileAdd = isDark ? darkModeClasses.profileSection : lightModeClasses.profileSection;
                toggleBootstrapClasses(profileSection, profileRemove, profileAdd, isDark);

                const profileTable = document.getElementById('profileTable');
                if (profileTable) {
                    const tableRemove = isDark ? lightModeClasses.profileTable : darkModeClasses.profileTable;
                    const tableAdd = isDark ? darkModeClasses.profileTable : lightModeClasses.profileTable;
                    toggleBootstrapClasses(profileTable, tableRemove, tableAdd, isDark);
                }

                cards.forEach(card => {
                    toggleBootstrapClasses(card, isDark ? lightModeClasses.card : darkModeClasses.card, isDark ? darkModeClasses.card : lightModeClasses.card, isDark);
                });

                const footerElement = document.getElementById('pageFooter') || document.querySelector('footer');
                toggleBootstrapClasses(footerElement, isDark ? lightModeClasses.footer : darkModeClasses.footer, isDark ? darkModeClasses.footer : lightModeClasses.footer, isDark);
                
                icon.src = isDark ? 'ohma.jpeg' : 'zio.jpeg';
                localStorage.setItem('darkMode', isDark);
            }

            applyTheme(darkMode);

            toggle.addEventListener('click', () => {
                darkMode = !darkMode;
                applyTheme(darkMode);
            });
            
            const collapseLinks = document.querySelectorAll('.collapse-link');
            if (navbarCollapse) {
                const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
                collapseLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (navbarCollapse.classList.contains('show')) {
                            bsCollapse.hide();
                        }
                    });
                });
            }
        </script>
    </header>
</body>
</html>
