<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite('assets/css/style.css')
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1; /* Membuat konten utama mengambil ruang yang tersedia */
        }
    </style>
</head>
<body>
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">NEOBILLING</h5>
                <p>
                    Platform manajemen billing yang menyediakan layanan terbaik dan mudah digunakan untuk kebutuhan Anda.
                </p>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Quick Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Home</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">About</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Services</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-envelope"></i> support@neobilling.com
                    </li>
                    <li>
                        <i class="fas fa-phone"></i> +62 123 456 789
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Neobilling. All Rights Reserved.
    </div>
</footer>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage-Neobilling</title>
    <!-- Tautkan file CSS Bootstrap dari CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
  /**
* Template Name: Arsha - v4.3.0
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #47b2e4;
  text-decoration: none;
}

a:hover {
  color: #73c5eb;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Jost", sans-serif;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #37517e;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #37517e;
  border-top-color: #fff;
  border-bottom-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #47b2e4;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #6bc1e9;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
}

#header.header-scrolled,
#header.header-inner-pages {
  background: rgba(40, 58, 90, 0.9);
}

#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 500;
  letter-spacing: 2px;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  font-weight: 500;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #47b2e4;
}

.navbar .getstarted {
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 50px;
  color: #fff;
  font-size: 14px;
  border: 2px solid #47b2e4;
  font-weight: 600;
}

.navbar .getstarted:hover {
  color: #fff;
  background: #31a9e1;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 500;
  color: #0c3c53;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #47b2e4;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(40, 58, 90, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 10px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a {
  padding: 10px 20px;
  font-size: 15px;
  color: #37517e;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #47b2e4;
}

.navbar-mobile .getstarted {
  margin: 15px;
  color: #37517e;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #47b2e4;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 80vh;
  background: #37517e;
}

#hero .container {
  padding-top: 72px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 42px;
  font-weight: 600;
  line-height: 56px;
  color: #fff;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 50px;
  font-size: 22px;
}

#hero .btn-get-started {
  font-family: "Jost", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px 11px 28px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px 0 0 0;
  color: #fff;
  background: #47b2e4;
}

#hero .btn-get-started:hover {
  background: #209dd8;
}

#hero .btn-watch-video {
  font-size: 16px;
  display: flex;
  align-items: center;
  transition: 0.5s;
  margin: 10px 0 0 25px;
  color: #fff;
  line-height: 1;
}

#hero .btn-watch-video i {
  line-height: 0;
  color: #fff;
  font-size: 32px;
  transition: 0.3s;
  margin-right: 8px;
}

#hero .btn-watch-video:hover i {
  color: #47b2e4;
}

#hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 991px) {
  #hero {
    height: 100vh;
    text-align: center;
  }

  #hero .animated {
    -webkit-animation: none;
    animation: none;
  }

  #hero .hero-img {
    text-align: center;
  }

  #hero .hero-img img {
    width: 50%;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  #hero .hero-img img {
    width: 70%;
  }
}

@media (max-width: 575px) {
  #hero .hero-img img {
    width: 80%;
  }

  #hero .btn-get-started {
    font-size: 16px;
    padding: 10px 24px 11px 24px;
  }
}

@-webkit-keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f3f5fa;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #37517e;
}

.section-title h2::before {
  content: '';
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #47b2e4;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Cliens
--------------------------------------------------------------*/
.cliens {
  padding: 12px 0;
  text-align: center;
}

.cliens img {
  max-width: 45%;
  transition: all 0.4s ease-in-out;
  display: inline-block;
  padding: 15px 0;
  filter: grayscale(100);
}

.cliens img:hover {
  filter: none;
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .cliens img {
    max-width: 40%;
  }
}

/*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/
.about .content h3 {
  font-weight: 600;
  font-size: 26px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-left: 28px;
  position: relative;
}

.about .content ul li+li {
  margin-top: 10px;
}

.about .content ul i {
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 20px;
  color: #47b2e4;
  line-height: 1;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .btn-learn-more {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 4px;
  transition: 0.3s;
  line-height: 1;
  color: #47b2e4;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  margin-top: 6px;
  border: 2px solid #47b2e4;
}

.about .content .btn-learn-more:hover {
  background: #47b2e4;
  color: #fff;
  text-decoration: none;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .content {
  padding: 60px 100px 0 100px;
}

.why-us .content h3 {
  font-weight: 400;
  font-size: 34px;
  color: #37517e;
}

.why-us .content h4 {
  font-size: 20px;
  font-weight: 700;
  margin-top: 5px;
}

.why-us .content p {
  font-size: 15px;
  color: #848484;
}

.why-us .img {
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}

.why-us .accordion-list {
  padding: 0 100px 60px 100px;
}

.why-us .accordion-list ul {
  padding: 0;
  list-style: none;
}

.why-us .accordion-list li+li {
  margin-top: 15px;
}

.why-us .accordion-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
}

.why-us .accordion-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding-right: 30px;
  outline: none;
  cursor: pointer;
}

.why-us .accordion-list span {
  color: #47b2e4;
  font-weight: 600;
  font-size: 18px;
  padding-right: 10px;
}

.why-us .accordion-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.why-us .accordion-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.why-us .accordion-list .icon-show {
  display: none;
}

.why-us .accordion-list a.collapsed {
  color: #343a40;
}

.why-us .accordion-list a.collapsed:hover {
  color: #47b2e4;
}

.why-us .accordion-list a.collapsed .icon-show {
  display: inline-block;
}

.why-us .accordion-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1024px) {

  .why-us .content,
  .why-us .accordion-list {
    padding-left: 0;
    padding-right: 0;
  }
}

@media (max-width: 992px) {
  .why-us .img {
    min-height: 400px;
  }

  .why-us .content {
    padding-top: 30px;
  }

  .why-us .accordion-list {
    padding-bottom: 30px;
  }
}

.accordion-item {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    border: none;
    max-width: 550px; /* Mengatur lebar maksimum kotak */
    width: auto; /* Menyesuaikan lebar dengan konten */
    margin-left: auto;
    margin-right: auto;
  }
  
  .accordion-button {
    border-radius: 10px;
    background-color: #f7f7f7;
    box-shadow: none;
    border: none;
  }
  
  .accordion-button:not(.collapsed) {
    background-color: #eaeaea;
  }

  .accordion-body {
    border-radius: 10px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  }
  
  .img {
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  }

@media (max-width: 575px) {
  .why-us .img {
    min-height: 200px;
  }
}

/*--------------------------------------------------------------
# Skills
--------------------------------------------------------------*/
.skills .content h3 {
  font-weight: 700;
  font-size: 32px;
  color: #37517e;
  font-family: "Poppins", sans-serif;
}

.skills .content ul {
  list-style: none;
  padding: 0;
}

.skills .content ul li {
  padding-bottom: 10px;
}

.skills .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #47b2e4;
}

.skills .content p:last-child {
  margin-bottom: 0;
}

.skills .progress {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}

.skills .progress .skill {
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  color: #37517e;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
}

.skills .progress-bar-wrap {
  background: #e8edf5;
  height: 10px;
}

.skills .progress-bar {
  width: 1px;
  height: 10px;
  transition: .9s;
  background-color: #4668a2;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  background: #fff;
}

.services .icon-box .icon {
  margin-bottom: 10px;
}

.services .icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}

.services .icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #37517e;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  transform: translateY(-10px);
}

.services .icon-box:hover h4 a {
  color: #47b2e4;
}

/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url("../img/cta-bg.jpg") fixed center center;
  background-size: cover;
  padding: 120px 0;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Jost", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #47b2e4;
  border: 2px solid #47b2e4;
}

@media (max-width: 1024px) {
  .cta {
    background-attachment: scroll;
  }
}

@media (min-width: 769px) {
  .cta .cta-btn-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  list-style: none;
  margin-bottom: 20px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  margin: 10px 5px;
  font-size: 15px;
  font-weight: 500;
  line-height: 1;
  color: #444444;
  transition: all 0.3s;
  padding: 8px 20px;
  border-radius: 50px;
  font-family: "Poppins", sans-serif;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  background: #47b2e4;
  color: #fff;
}

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-img {
  overflow: hidden;
}

.portfolio .portfolio-item .portfolio-img img {
  transition: all 0.6s;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 15px;
  bottom: 0;
  z-index: 3;
  right: 15px;
  transition: all 0.3s;
  background: rgba(55, 81, 126, 0.8);
  padding: 10px 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #fff;
  margin-bottom: 0px;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #f9fcfe;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link,
.portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #fff;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover,
.portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #47b2e4;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item:hover .portfolio-img img {
  transform: scale(1.15);
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #47b2e4;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #47b2e4;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(55, 81, 126, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 5px;
  background: #fff;
  transition: 0.5s;
}

.team .member .pic {
  overflow: hidden;
  width: 180px;
  border-radius: 50%;
}

.team .member .pic img {
  transition: ease-in-out 0.3s;
}

.team .member:hover {
  transform: translateY(-10px);
}

.team .member .member-info {
  padding-left: 30px;
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #37517e;
}

.team .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .member span::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #cbd6e9;
  bottom: 0;
  left: 0;
}

.team .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.team .member .social a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #eff2f8;
}

.team .member .social a i {
  color: #37517e;
  font-size: 16px;
  margin: 0 2px;
}

.team .member .social a:hover {
  background: #47b2e4;
}

.team .member .social a:hover i {
  color: #fff;
}

.team .member .social a+a {
  margin-left: 8px;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .row {
  padding-top: 40px;
}

.pricing .box {
  padding: 60px 40px;
  box-shadow: 0 3px 20px -2px rgba(20, 45, 100, 0.1);
  background: #fff;
  height: 100%;
  border-top: 4px solid #fff;
  border-radius: 5px;
}

.pricing h3 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 20px;
  color: #37517e;
}

.pricing h4 {
  font-size: 48px;
  color: #37517e;
  font-weight: 400;
  font-family: "Jost", sans-serif;
  margin-bottom: 25px;
}

.pricing h4 sup {
  font-size: 28px;
}

.pricing h4 span {
  color: #47b2e4;
  font-size: 18px;
  display: block;
}

.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding: 10px 0 10px 30px;
  position: relative;
}

.pricing ul i {
  color: #28a745;
  font-size: 24px;
  position: absolute;
  left: 0;
  top: 6px;
}

.pricing ul .na {
  color: #ccc;
}

.pricing ul .na i {
  color: #ccc;
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .buy-btn {
  display: inline-block;
  padding: 12px 35px;
  border-radius: 50px;
  color: #47b2e4;
  transition: none;
  font-size: 16px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
  transition: 0.3s;
  border: 1px solid #47b2e4;
}

.pricing .buy-btn:hover {
  background: #47b2e4;
  color: #fff;
}

.pricing .featured {
  border-top-color: #47b2e4;
}

.pricing .featured .buy-btn {
  background: #47b2e4;
  color: #fff;
}

.pricing .featured .buy-btn:hover {
  background: #23a3df;
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}

/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 100px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li+li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  cursor: pointer;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #47b2e4;
}

.faq .faq-list .icon-show,
.faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #37517e;
  transition: 0.3s;
}

.faq .faq-list a.collapsed:hover {
  color: #47b2e4;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
}

.contact .info i {
  font-size: 20px;
  color: #47b2e4;
  float: left;
  width: 44px;
  height: 44px;
  background: #e7f5fb;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #37517e;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #6182ba;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #47b2e4;
  color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #47b2e4;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
  margin-bottom: 20px;
}

.contact .php-email-form label {
  padding-bottom: 8px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #47b2e4;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
  background: #47b2e4;
  border: 0;
  padding: 12px 34px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #209dd8;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #f3f5fa;
  min-height: 40px;
  margin-top: 72px;
}

@media (max-width: 992px) {
  .breadcrumbs {
    margin-top: 68px;
  }
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 600;
  color: #37517e;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #4668a2;
  content: "/";
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  font-size: 14px;
  background: #37517e;
}

#footer .footer-newsletter {
  padding: 50px 0;
  background: #f3f5fa;
  text-align: center;
  font-size: 15px;
  color: #444444;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #37517e;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
  text-align: left;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #47b2e4;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #209dd8;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h3 {
  font-size: 28px;
  margin: 0 0 10px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 600;
  color: #37517e;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
  color: #5e5e5e;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #37517e;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #47b2e4;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #777777;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #47b2e4;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #47b2e4;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #209dd8;
  color: #fff;
  text-decoration: none;
}

#footer .footer-bottom {
  padding-top: 30px;
  padding-bottom: 30px;
  color: #fff;
}

#footer .copyright {
  float: left;
}

#footer .credits {
  float: right;
  font-size: 13px;
}

#footer .credits a {
  transition: 0.3s;
}

@media (max-width: 768px) {
  #footer .footer-bottom {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  #footer .copyright,
  #footer .credits {
    text-align: center;
    float: none;
  }

  #footer .credits {
    padding-top: 4px;
  }
}
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top px-4" id="navbar" style="background-color: #f7af46;">
  <a class="navbar-brand d-flex align-items-center" href="#">
    <div class="logo-circle">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="height: 40px; width: 40px;">
    </div>
    <span class="text-white">NEOBILLING</span>
</a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mr-3">
        <li class="nav-item">
          <a class="nav-link scrollto active text-white" href="#hero">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link scrollto text-white" href="#about">About</a>
      </li>
      <li class="nav-item">
          <a class="nav-link scrollto text-white" href="#services">Services</a>
      </li>
      <li class="nav-item">
          <a class="nav-link scrollto text-white" href="#pricing">Price</a>
      </li>
      <li class="nav-item">
          <a class="nav-link scrollto text-white" href="#faq">FAQ</a>
      </li>
      <li class="nav-item">
          <a class="nav-link scrollto text-white" href="#contact">Contact</a>
      </li>      
      <!-- My Account & Chat on WhatsApp -->
      <ul class="navbar-nav">
          <li class="nav-item ml-3">
              <a class="nav-link btn rounded-pill px-4 py-2 text-white border border-blue-500 hover:bg-blue-500 hover:border-blue-500" href="#my-account">
                  My Account
              </a>
          </li>
          <li class="nav-item ml-3">
              <a class="nav-link btn btn-light btn-rounded px-3 py-1 text-orange-500 border-orange-500 hover:bg-orange-500 hover:text-white" href="#chat">
                  <i class="fab fa-whatsapp" style="margin-right: 5px; font-size: 14px;"></i> Chat On WhatsApp
              </a>
          </li>
      </ul>
  </div>
</nav>

<!-- Beranda -->
<div class="container-fluid p-0" style="min-height: 100vh;"> <!-- Tambah min-height untuk memanjang ke bawah -->
  <div class="jumbotron jumbotron-fluid p-0" style="background-size: cover; background-position: center; background-image: url('/path/to/your/image.jpg');"> <!-- Pastikan gambar penuh dengan cover dan posisi center -->
      <div class="container">
          <div class="row align-items-center" style="min-height: 80vh;"> <!-- Menyesuaikan tinggi agar konten tetap center dan memanjang -->
              <div class="col-md-6 mb-4 mb-md-0">
                  <h1 class="display-4 font-weight-bold mb-4 text-start">Welcome to NeoBilling</h1>
                  <p class="lead text-start">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula, 
                      risus eu scelerisque tristique, lectus eros faucibus tortor, id fringilla 
                      est purus in quam.
                  </p>
                  <!-- Button and Watch Video -->
                  <div class="d-flex align-items-center">
                      <!-- Get Started Button -->
                      <a href="#get-started" class="btn btn-primary rounded-pill px-4 py-2 mr-3" style="background-color: #84bbf7; border-color: #84bbf7;">
                          Get Started
                      </a>
                      <!-- Watch Video -->
                      <div class="d-flex align-items-center">
                          <i class="fas fa-play-circle" style="font-size: 24px; margin-right: 8px; color: #ffffff;"></i>
                          <a href="#watch-video" style="font-size: 16px; color: #ffffff;">Watch Video</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 d-none d-md-block">
                  <img src="{{ asset('assets/img-1.png') }}" alt="Descriptive Text" class="img-fluid">
              </div>
          </div>
      </div>
  </div>
</div>

<!-- About Us Section -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up" style="max-width: 960px; margin: 0 auto;">
        <div class="section-title mb-8">
            <h2>About Us</h2>
        </div>
        <div class="row content" style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="col-lg-6" style="margin-bottom: 20px; text-align: left;">
                <p>
                    RadbooX adalah aplikasi Radius Server untuk pengguna MikroTik yang menerapkan sistem Otentikasi,
                    Otorisasi, dan Akuntansi (AAA) pada jaringan PPPoE dan Hotspot sebagai Network Access.
                </p>
                <ul style="padding-left: 0; list-style-type: none;">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
                    <li style="margin-bottom: 10px;"> <i class="bi bi-check-lg blue-check"></i><strong>Radius</strong> sebagai protokol yang mengelola akses jaringan</li>
                    <li style="margin-bottom: 10px;"> <i class="bi bi-check-lg blue-check"></i></i> Support enkripsi tipe CHAP, MSCHAP</li>
                    <li style="margin-bottom: 10px;"><i class="bi bi-check-lg blue-check"></i> Lebih aman dan memudahkan proses pengolahan data Users</li>
                </ul>
            </div>
            <div class="col-lg-6" style="margin-bottom: 20px; text-align: left;">
                <p>
                    RadbooX selain untuk Radius Server juga dapat digunakan untuk <strong>Manajemen Keuangan (Billing)</strong>.<br>
                    Dengan fasilitas dan kemudahan layanan yang kami berikan, cukup satu pintu dengan RadbooX.
                </p>
                <a href="http://my.idneobilling.com/auth/register" class="btn btn-primary" style="margin-top: 20px;">Free Trial</a>
            </div>
        </div>
    </div>
</section>
  
  <!-- ======= Why Us Section ======= -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <!-- Accordion and Collapse Content on the Left -->
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-1 order-lg-1">
          <div class="content">
            <h3>Semua fitur RadbooX tidak perlu join Third Party</h3>
            <p>
              RadbooX dirancang untuk memenuhi kebutuhan di bidang jasa penyedia layanan internet khususnya pengguna MikroTik
              dan kami berikan solusi untuk memudahkan manajemen user, keuangan, laporan, tagihan, pemberitahuan/notifikasi.
              Itu semua dapat dikelola oleh RadbooX baik secara otomatis dan manual.
            </p>
          </div>
  
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">
                  01. Notifikasi Via WhatsApp Menggunakan Nomor Sendiri
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Fitur gratis ini langsung anda bisa gunakan secara penuh tanpa ada biaya tambahan. Dan kami sudah
                  menyediakan Scan QR Code langsung melalui halaman account jika anda ingin menggunakan nomor whatsapp sendiri.
                </div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  02. Generate Invoice Otomatis Oleh Sistem
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Tagihan pelanggan otomatis akan di buat di setiap tanggal atau pada tiap bulannya. Pelanggan secara realtime akan mendapatkan notifikasi terkait terbitnya invoice.
                </div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">
                      03. Suport Payment Pasca Bayar
                  </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Type pembayaran ada 2 pilihan, Pascabayar (bayar di akhir) dan Prabayar (bayar di awal).
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseFour">
                      04. Rekap Laporan Harian Dan Bulanan
                  </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Semua transaksi akan di rekap dalam harian dan bulanan. Anda tidak perlu repot membuat laporan secara manual, karena system akan membuatkan untuk anda secara otomatis.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                      aria-expanded="false" aria-controls="collapseFive">
                      05. Support Multi User Dan Role
                  </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Jika anda memiliki karyawan atau teknisi lainnya, anda cukup bikin user tambahan sebagai Operator dan kasir untuk pencatatan keuangan atau lain nya.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                      aria-expanded="false" aria-controls="collapseSix">
                      06. Data Terpusat
                  </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Dengan menghubungkan seluruh cabang server MikroTik, anda akan lebih mudah untuk manajemen user dan tagihan secara terpusat.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                      aria-expanded="false" aria-controls="collapseSeven">
                      07. Payment Gateway
                  </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      RadbooX telah bekerja sama dengan Xendit untuk mendukung fitur pembayaran pelanggan anda secara online. Daftar fitur ini tanpa ribet dan tidak perlu register di web resmi xendit, cukup melalui web radboox, langsung aktif dan mulai menerima pembayaran secara online. Mendukung metode pembayaran Virtual Account ( Mandiri, BRI, BNI), Alfamart, eWallet (OVO DANA SHOPEEPAY, LINKAJA, QRIS).
                  </div>
              </div>
          </div>
      </div>
  </div>
  
        <!-- Image on the Right -->
        <div class="col-lg-5 d-flex align-items-stretch order-2 order-lg-2 md:block">
          <img src="{{ asset('assets/img-2.png') }}" alt="Descriptive Text" class="img-fluid w-full object-cover">
        </div>
      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
<!-- ======= Hemat Biaya dan Waktu Section ======= -->
<section id="hemat-biaya-waktu" class="skills py-4"> <!-- Reduced padding -->
  <div class="container" data-aos="fade-up">
    <div class="row">
      <!-- Image Column -->
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset('assets/img-3.png') }}" alt="Descriptive Text" class="img-fluid">
      </div>
      <!-- Text Column -->
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="100">
        <h3>Hemat Biaya dan Waktu</h3>
        <p class="fst-italic">
          Bersama RadbooX anda tidak perlu ada tambahan applikasi atau daftar penyedia lain nya, RadbooX akan
          meringankan pekerjaan anda!.. 
        </p>
        <p>
          RadbooX berupaya semaksimal mungkin dalam menyajikan fitur dan seringan mungkin hasil kerjaan yang akan
          anda lakukan ketika menggunakan layanan kami.
        </p>
        <p>
          Daftar sekarang juga, gratis 100% selama 1 minggu.
        </p>
        <!-- Button Free Trial -->
        <a href="https://my.radboox.com/auth/register" class="btn-learn-3more btn btn-outline-info text-xs py-0.5 px-2 mt-5">Free Trial</a>
      </div>
    </div>
  </div>
</section><!-- End Hemat Biaya dan Waktu Section -->

<!-- ======= Data Center Section ======= -->
<section id="data-center" class="skills py-4 mb-5"> <!-- Added mb-5 for bottom margin -->
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('assets/img-4.png') }}" alt="Descriptive Text" class="img-fluid">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Data Center</h3>
        <p>
          Server kami berada di cyber data center Jakarta, sehingga dapat diakses dari manapun secara cepat. Dengan
          dukungan listrik backup jaminan uptime SLA 99%.
        </p>
        <p>
          100% Penyimpanan menggunakan Solid State Drive (SSD) dengan tambahan controller RAID 10. Jaminan query yang
          sangat cepat untuk proses input output data.
        </p>
      </div>
    </div>
  </div>
</section><!-- End Data Center Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container-fluid" data-aos="fade-up">
    <div class="row">
<div class="row">
  <h2 class="text-center">Services</h2> <!-- Center-align heading -->
  <p class="text-center">
    RadbooX menyediakan paket langganan dengan harga bervariasi. Semua paket mendapatkan performance server
    yang sama. Dengan dukungan tim teknis yang sangat berpengalaman dalam bidang jaringan internet, siap Support
    penuh secara gratis 100% selama berlangganan.
  </p>
</div>
<head>

<div class="row">
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
    <div class="icon-box soft-box">
      <div class="icon"><i class="bx bxl-dribbble"></i></div>
      <h4><a href="">Radius Server</a></h4>
      <p>Support PPPoE dan Hotspot, dengan Protokol CHAP, MSCHAP, dan PAP.</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
    <div class="icon-box soft-box">
      <div class="icon"><i class="bx bx-file"></i></div>
      <h4><a href="">Billing</a></h4>
      <p>Manajemen keuangan dan catatan pembayaran pelanggan.</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
    <div class="icon-box soft-box">
      <div class="icon"><i class="bx bx-tachometer"></i></div>
      <h4><a href="">Update</a></h4>
      <p>Fitur-fitur akan selalu di-update mengikuti kebutuhan dan maintenance.</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
    <div class="icon-box soft-box">
      <div class="icon"><i class="bx bx-layer"></i></div>
      <h4><a href="">Backup</a></h4>
      <p>Sistem kami sudah auto-backup, SLA 99% uptime.</p>
    </div>
  </div>
</div>

    </div>
  </section><!-- End Services Section -->

<!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Trial 100% Gratis</h3>
            <p> Ingin mencoba?.. Silahkan daftar hari ini juga, gratis selama 1 minggu, bayar hanya jika lanjut
              berlangganan. Nikmati semua fitur yang sudah kami siapkan.</p>
          </div>
<div class="col-lg-3 cta-btn-container text-center">
  <a class="cta-btn" href="https://my.radboox.com/auth/register">Try Free</a>
</div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
  <h2 class="text-center">Pricing</h2> <!-- Center-align heading -->
      <p class="text-center">Jumlah Users adalah batas pelanggan dalam table baik hotspot dan PPPoE, Ketika sudah mencapai batas maka
  tidak dapat membuat user baru, namun anda bisa menghapus user yang lama atau tidak terpakai kemudian membuat
  user baru, untuk hotspot voucher anda bisa menghapus user yang sudah habis lalu bikin voucher ulang, tidak
  ada batasan untuk membuat ulang user baik hotspot dan PPPoE selama dalam table belum memenuhi batas quota.
</p>

<p class="text-center">Unlimited NAS, tidak ada batasan Router mikrotik yang akan dihubungkan ke Radius, jika anda punya cabang
  lebih dari satu anda dapat menghubungkan semua router.
</p>

<br>
<!-- Section Title for Paket -->
<h3 class="pilih-paket">Pilih paket yang sesuai dengan kebutuhan anda.</h3>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="95">

            <div class="box">
              <h3>Radius Starter</h3>
              <h4><sup>Rp</sup>100.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 200 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 10.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 300 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="https://my.radboox.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>

  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Radius Basic</h3>
              <h4><sup>Rp</sup>150.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 300 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 20.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="https://my.radboox.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
   <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Premium</h3>
              <h4><sup>Rp</sup>250.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 600 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 35.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 1.000 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
 </div>
        <div class="row">
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Gold</h3>
              <h4><sup>Rp</sup>400.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 1000 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 50.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 1.500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
 <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Corporate</h3>
              <h4><sup>Rp</sup>600.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 1500 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 100.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 2.500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius VPS-1</h3>
              <h4><sup>Rp</sup>450.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> vCPU 4 - RAM 4GB</li>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> Unlimited Users PPPoE</li>
                <li><i class="bx bx-check"></i> Unlimited Users Hotspot</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Setup Fee 200.000</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Contact Us</a>
            </div>
          </div>

        </div>
  <div class="row justify-content-center">
          <div class="col-12 mt-4 mt-lg-0 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Server Mandiri</h3>
              <h4><sup>Rp</sup>250.000<sup> /bulan</sup><span>Syarat & Ketentuan berlaku</span></h4>
              <div class="row justify-content-center">
                <div class="col-lg-8 mt-4 mt-lg-0">
                  <ul>
                    <li><i class="bx bx-plus text-dark"></i> Pelanggan harus menyiapkan PC/mini PC/Raspbery atau lain
                      nya untuk dijadikan server</li>
                    <li><i class="bx bx-plus text-dark"></i> Instalasi dilakukan oleh tim teknisi kami</li>
                    <li><i class="bx bx-plus text-dark"></i> Sebelum instalasi, semua pembayaran harus sudah selesai
                    </li>
                    <li><i class="bx bx-plus text-dark"></i> Data server termasuk user dan password hanya kami yang
                      pegang</li>
                    <li><i class="bx bx-plus text-dark"></i> Jika system terjadi error kami bertanggung jawab untuk
                      memperbaiki</li>
                    <li><i class="bx bx-plus text-dark"></i> Kerjasama berkelanjutan, selama tiap bulan melakukan
                      perpanjangan licence</li>
                  </ul>
   </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                  <ul>
                    <li><i class="bx bx-check"></i> Unlimited NAS</li>
                    <li><i class="bx bx-check"></i> Unlimited Users PPPoE</li>
                    <li><i class="bx bx-check"></i> Unlimited Users Hotspot</li>
                    <li><i class="bx bx-check"></i> Free VPN</li>
                    <li><i class="bx bx-check"></i> Setup Fee Rp 500.000</li>
                    <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                    <li><i class="bx bx-check"></i> No Additional Fee</li>
                  </ul>
                </div>
              </div>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Contact Us</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
 <!-- FAQ Section Title -->
<h2 class="faq-title">Frequently Asked Questions</h2>
      <p>Anda bingung? Coba cari solusinya di sini. Silahkan hubungi kami melalui kontak di bawah ini jika masih ada yang perlu ditanyakan.</p>
    </div>
    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-1" aria-expanded="true" aria-controls="faq-list-1">
            Apakah mendapatkan support teknis?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Ya, selama berlangganan Anda akan mendapatkan full support dari tim teknis kami terkait layanan.
            </p>
          </div>
        </li>
        
        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
            Untuk terhubung ke Radius server apa butuh VPN?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Ya, untuk berkomunikasi antara NAS dengan Radius Server harus melalui VPN. Kami sudah menyiapkan VPN gratis selama berlangganan, dengan jaringan yang sudah peering dengan ISP besar di Indonesia. Namun, jika Anda memiliki IP publik, Anda tidak butuh VPN. Hubungi tim teknis kami untuk bantu setup.
            </p>
          </div>
        </li>
        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
            Saya punya cabang 4, apa bisa dihubungkan semua?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>