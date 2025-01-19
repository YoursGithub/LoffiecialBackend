<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        overflow-x: hidden;
        width: 100%;
        position: relative;
    }

    .navbar {
        position: fixed;
        width: 100%;
        padding: 1rem;
        display: flex;
        /* align-items: center; */
        transition: background-color 0.3s;
        z-index: 1000;
    }

    .navbar.scrolled {
        background: url("/images/logo-lofficiel-amtd.svg") no-repeat center;
        background-size: 150px;
        background-color: white;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
        color: white;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
    }

    .logo img {
        margin-top: -100px;
        width: 300px;
        margin-left: 20px;
    }

    .navbar.scrolled .logo {
        display: none;
    }

    .bars {
        margin-top: 10px;
    }

    @media (max-width:425px) {
        .bars {
            margin-top: 15px;
        }
    }

    .navbar.scrolled .bars i {
        color: black;
    }

    .navbar.scrolled span {
        color: black;
    }

    .nav-links {
        display: flex;
        justify-content: end;
        gap: 2rem;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    .navbar.scrolled .nav-links a {
        color: black;
    }

    .hero {
        position: relative;
        width: 100%;
        height: 95vh;
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
            url('{{ $firstPost?->thumbnail }}') center/cover no-repeat;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-content {
        position: absolute;
        margin-top: 400px;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        z-index: 2;
    }

    @media screen and (min-width: 768px) {
        .hero-content {
            margin-top: 150px;
        }
    }

    .category {
        font-size: 1rem;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .hexx {
        margin-top: 50px;
    }

    @media only screen and (max-width: 768px) {
        .category {
            font-size: 1rem;
            /* margin-top: 200px; */
            font-size: 1rem;
            /* margin-top: 200px; */
        }

        .hexx {
            margin-top: 525px;
        }
    }

    .title {
        font-size: 3rem;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .meta {
        font-size: 0.9rem;
    }

    .content-grid {
        width: 100%;
        max-width: 1300px;
        margin: 0 auto;
        padding: 2rem;
        display: grid;
        margin-top: -150px;
        grid-template-columns: repeat(3, 1fr);
        background: white;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        /* bottom: -100px; */
        z-index: 2;
    }

    @media (min-width: 1400px) and (max-width: 1700px) {
        .content-grid {
            max-width: 1450px;
        }
    }

    @media (min-width: 1700px) and (max-width: 2200px) {
        .content-grid {
            max-width: 1630px;
        }
    }

    .article-card {
        background: white;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .article-image {
        width: 50%;
        aspect-ratio: 16/9;
        object-fit: cover;
    }

    .article-category {
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
        color: #000;
        text-decoration: none;
    }

    .article-title {
        font-size: 1.2rem;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        line-height: 1.4;
    }

    .article-meta {
        font-size: 0.8rem;

    }

    .trending {
        margin: 4rem auto;
        padding: 0 1rem;
        max-width: 1200px;
    }

    .trending h2 {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    @media (max-width: 768px) {
        .main-container {
            flex-direction: column !important;
        }

        .main-container>div {
            width: 100% !important;
        }
    }

    @media (max-width: 768px) {
        .nav-links a {
            display: none;
        }

        .title {
        font-size: 1.5rem;
    }

        .meta {
            font-size: 1rem;
        }


        .logo img {
            margin-top: -20px;
            width: 100px;
        }

        .content-grid {
            grid-template-columns: 1fr;
            position: relative;
            bottom: -150px;
            min-width: 0;
            transform: none;
            left: 0;
        }

        .logo img {
            margin-left: -80px;
        }

        .disapp {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .section {
            flex-direction: column;
            align-items: center;
            hero
        }

        .section article {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .swiper-slide img {
            width: 300px;
            height: auto;
            margin: 0 auto;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
        }
    }



    @media (max-width: 425px) {
        .dens {
            display: none;
        }
    }

    @media screen and (max-width: 768px) {
.product-card {
    display: none !important;
}
}


    @media (max-width: 768px) {
        .hide {
            display: none;
        }

        .high {
            margin-top: -370px;
        }
    }

    .header {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            background-color: white;
        }

        .menu-btn {
            border: none;
            background: none;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .logo {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
        }

        .nav-right {
            display: flex;
            gap: 1rem;
        }

        .org-chart {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            text-align: center;
        }

        .global-title {
            font-size: 1.5rem;
            margin: 2rem 0;
            position: relative;
        }

        .global-title::before,
        .global-title::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background-color: #000;
        }

        .global-title::before {
            left: 0;
        }

        .global-title::after {
            right: 0;
        }

        .position {
            margin: 2rem 0;
        }

        .position-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .position-name {
            color: #666;
        }

        .department {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .team-list {
            list-style: none;
        }

        .team-member {
            margin: 0.5rem 0;
            color: #000;
        }

        @media (max-width: 768px) {
            .global-title::before,
            .global-title::after {
                width: 20%;
            }

            .department {
                grid-template-columns: 1fr;
            }
        }

    /* @media (min-width: 350px) and (max-width: 410px) {
    .bottle{
        margin-left: 30px;
        width: 350px;
    }
  } */
</style>
<body>
    <nav class="navbar">
        <div class="bars" style="display: flex; padding: 15px; color: black">
            <a href="javascript:void(0)" onclick="toggleSidebar()"
                style="display:flex; color: black; text-decoration: none">
                <i class="fa fa-bars fa-xl" style="margin-right: 5px"></i>
                <span style="margin-top: -10px;">MENU</span>
            </a>
        </div>

        <div id="sidebar" style="
    overflow-x: hidden;
    display: none;
    width: 300px;
    min-height: 100vh;
    height: 100%;
    background-color: white;
    color: black;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    z-index: 1000;
    flex-direction: column;
  ">
            <a href="javascript:void(0)" onclick="toggleSidebar()" style="
            margin-left: 20px;
            color: black;
            text-decoration: none;
            font-size: 48px;
            display: block;
            margin-bottom: 20px;
          ">&times;</a>

            <div style="
            position: relative;
            display: flex;
            margin-left: 10px;
            width: 250px;
          ">
                <form action="{{ route('search') }}">
                    <input type="text" placeholder="Research" name="search" style="
              width: 100%;
              padding: 15px 50px 15px 20px;
              font-size: 16px;
              border: none;
              border-radius: 25px;
              outline: none;
              box-shadow: none;
            " />
                </form>
                <i class="fa-solid fa-magnifying-glass" style="margin-top: 15px"></i>
            </div>

            <h2 style="margin-top: 20px; margin-left: 27px; font-size: 14px">
                CATEGORIES
            </h2>
            <ul style="
            margin-top: 30px;
            margin-left: 30px;
            list-style-type: none;
            padding: 0;
          ">
                @include('pages.layouts.header')

            </ul>

            <!-- Black Footer Section -->
            <div style="
            background-color: black;
            color: white;
            padding: 20px;
            margin-top: auto;
            bottom: 0;
            left: 0;
            width: 350px;
            box-sizing: border-box;
          ">
                <a href="/">
                    <img src="/images/Lofficiel Peru.png" alt="L'OFFICIEL" style="width: 150px;" />
                </a>
                <div style="margin-bottom: 15px">
                    <a href="#subscribe" style="
                color: white;
                text-decoration: none;
                display: block;
                margin-bottom: 10px;
              ">Subscribe</a>
                    <a href="#" style="color: white; text-decoration: none; display: block">CONTACT</a>
                </div>
                <div style="margin-top: 20px">
                    <div style="display: flex; margin-bottom: 30px; gap: 15px">
                        <a target="_blank" href="https://www.instagram.com/thelofficielmag/">
                            <i class="fa-brands fa-instagram fa-lg" style="color: #ffffff; margin-right: 10px"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div style="
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-sizing: border-box;
      width: 100%;
    ">
    <a href="/" class="logo" style="flex: 1; text-align: center">
        <img src="/images/Lofficiel Peru Black.png" alt="Logo"
            style="background-position: center; display: inline-block;" />
    </a>

    <div class="nav-links" style="display: flex; justify-content: flex-end; margin-top: -170px; gap: 10px">
        <a href="#subscribe" style="color: black; text-decoration: none; font-size: 16px">Subscribe</a>
        {{-- <a href="#" style="color: white; text-decoration: none; font-size: 16px">France</a> --}}
    </div>
</div>
    </nav>


    <section>
        <div class="org-chart">
            <div class="global-title">ORGANIZATION STRUCTURE</div>
    
            <div class="position">
                <div class="position-title">CHIEF EXECUTIVE OFFICER</div>
                <div class="position-name">John Smith</div>
            </div>
    
            <div class="department">
                <div class="position">
                    <div class="position-title">OPERATIONS</div>
                    <div class="position-name">Jane Doe</div>
                    <ul class="team-list">
                        <li class="team-member">Team Member 1</li>
                        <li class="team-member">Team Member 2</li>
                        <li class="team-member">Team Member 3</li>
                    </ul>
                </div>
    
                <div class="position">
                    <div class="position-title">TECHNOLOGY</div>
                    <div class="position-name">Mike Johnson</div>
                    <ul class="team-list">
                        <li class="team-member">Team Member 1</li>
                        <li class="team-member">Team Member 2</li>
                        <li class="team-member">Team Member 3</li>
                    </ul>
                </div>
    
                <div class="position">
                    <div class="position-title">MARKETING</div>
                    <div class="position-name">Sarah Williams</div>
                    <ul class="team-list">
                        <li class="team-member">Team Member 1</li>
                        <li class="team-member">Team Member 2</li>
                        <li class="team-member">Team Member 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="subscribe">
        @include('pages.layouts.footer')
    </section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'none' || sidebar.style.display === '') {
                sidebar.style.display = 'flex';
            } else {
                sidebar.style.display = 'none';
            }
        }



        window.addEventListener("scroll", () => {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</html>