<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blog page</title>

    @include('pages.layouts.seo')

</head>

<style>
    html,
    body {
        overflow-x: hidden;
        width: 100%;
        position: relative;
        margin: 0;
        padding: 0;
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
            font-size: 2rem;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
        }

        .logo img {
            margin-top: -100px;
            width: 300px;
            margin-left: 130px;
        }

        .navbar.scrolled .logo {
            display: none;
        }

        .bars{
            margin-top: 10px;
        }

        @media ( max-width:425px){
            .bars{
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
            /* min-width: 410px; */
            height: 95vh;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url('/images/1735506257-couv-tendances.jpg') center/cover no-repeat;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }


        .hero-content {
            max-width: 800px;
            padding: 2rem;
        }

        .category {
            font-size: 1rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .hexx {
            margin-top: 150px;
        }

        @media only screen and (max-width: 768px) {
            .hexx {
                margin-top: 550px;
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
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            background: white;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -100px;
            z-index: 2;
        }

        @media (min-width: 1400px) and (max-width: 1800px) {
        .content-grid {
            max-width: 1600px;
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
    .main-container > div {
      width: 100% !important;
    }
  }
  
        @media (max-width: 768px) {
            .nav-links a {
                display: none;
            }

            .hero-content {
                margin-top: 500px;
            }

            .logo img {
                width: 100px;
            }

            .title {
                font-size: 2rem;
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
                margin-top: -30px;
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
            }

            .section article {
                width: 100%;
                margin-bottom: 20px;
            }

            .title {
                font-size: 2rem;
            }
        }

    .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
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
                /* Center the slide content */
            }
        }

    .images {
        margin-left: 120px;
    }


    @media (max-width: 768px) {
    .main-container {
      flex-direction: column !important;
    }
    .main-container > div {
      width: 100% !important;
    }
  }

    @media (max-width: 768px) {
        .social-bar {
            display: none !important;
        }

        .france a {
            display: none;
        }
    }

    /* @media (min-width: 350px) and (max-width: 410px) {
        .bottle{
            margin-left: 10px;
            width: 350px;
        }
      } */
</style>



<body>
    <div>
        <div
            style="display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; border-bottom: 1px solid #ddd;">
            <div class="bars" style="display: flex; padding: 15px; color: black">
                <a href="javascript:void(0)" onclick="toggleSidebar()" style="color: black; text-decoration: none">
                    <i class="fa fa-bars fa-xl" style="margin-right: 5px"></i>
                </a>
                <span>MENU</span>
            </div>

            <div id="sidebar"
            style="
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
            <a href="javascript:void(0)" onclick="toggleSidebar()"
                style="
            margin-left: 20px;
            color: black;
            text-decoration: none;
            font-size: 48px;
            display: block;
            margin-bottom: 20px;
          ">&times;</a>

            <div
                style="
            position: relative;
            display: flex;
            margin-left: 10px;
            width: 250px;
          ">
                <form action="{{ route('search') }}">
                    <input type="text" placeholder="RECHERCHER" name="search"
                        style="
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
            <ul
                style="
            margin-top: 30px;
            margin-left: 30px;
            list-style-type: none;
            padding: 0;
          ">
                @include('pages.layouts.header')

            </ul>

            <!-- Black Footer Section -->
            <div
                style="
            background-color: black;
            color: white;
            padding: 20px;
            margin-top: auto;
            bottom: 0;
            left: 0;
            width: 350px;
            box-sizing: border-box;
          ">
                <img src="/images/Lofficiel Peru.png" alt="L'OFFICIEL" style="width: 150px" />
                <div style="margin-bottom: 15px">
                    <a href="#"
                        style="
                color: white;
                text-decoration: none;
                display: block;
                margin-bottom: 10px;
              ">BUY
                        THE ISSUE</a>
                    <a href="#" style="color: white; text-decoration: none; display: block">CONTACT</a>
                </div>
                <div style="margin-top: 20px">
                    <p style="margin-bottom: 20px">SUIVEZ-NOUS</p>
                    <div style="display: flex; margin-bottom: 30px; gap: 15px">
                       
                        <i class="fa-brands fa-instagram fa-lg"
                            style="color: #ffffff; margin-right: 10px"></i>
                    </div>
                </div>
            </div>
        </div>




            <div>
                <img src="/images/logo-lofficiel-amtd.svg" alt="" class="images"
                    style="width: 200px; max-width: 100%;">
            </div>
            <div class="france" style="display: flex; align-items: center;">
                <a href="#" style="margin-right: 20px; font-size: 14px; text-decoration: none; color: black;">BUY
                    THE ISSUE</a>
                <a href="#" style="font-size: 14px; text-decoration: none; color: black;">FRANCE</a>
            </div>
        </div>
        

        
        <div class="bottle" style="text-align: center; padding: 20px; position: relative;">
            @php
             $url = route('blog', ['slug' => $post->slug]);
             $title = Str::title($post->title) ;
             $image = $post->thumbnail ;
             $date = $post->created_at->format('d.m.y') ;
             $author = $post->author?->name ;
             $cat = $post->category->category ;
             $catUrl = route('category', ['category' => $cat]);
             $authDate = "$date by $author" ;
         @endphp
            <div style="margin: 0 auto; max-width: 800px;">
                <div style="
                    color: black;
                    font-size: 19px;
                    text-transform: uppercase;
                    margin-bottom: 10px;
                    border-bottom: 1px solid currentColor; 
                    display: inline-block;">
                    {{ $cat }}
                </div>
                <h2 style="font-size: 37px; font-weight: 600; line-height: 1.4;">{{ $title }}</h2>
            </div>
            <p  style="margin: 0 auto; max-width: 600px; font-size: 22px; line-height: 1.6; color: #555;">
                {{ $post->description }}
            </p>
            <p style="margin-top: 20px; font-size: 14px; color: #888;">{{ $authDate }}</p>

            <div style="display: flex; justify-content: center; align-items: center; padding: 20px;">
                <img src="{{ $image }}" alt="" style="width: 100%; max-width: 900px; height: 630px;">
            </div>
        
            <div id="main-description" class="bottle" style="margin: 0 auto; max-width: 800px; padding: 20px;">
                <style>
                    #main-description img {
                        max-width: 100%;
                        height: auto;
                        width: 700px;
                        display: block;
                        margin: 15px auto;
                    }
                </style>
                {!! $post->blog !!}
            </div>
            

            <div id="social-bar" class="social-bar" style="
                position: fixed;
                top: 50%;
                left: 10%;
                transform: translateY(-50%);
                z-index: 100;">
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-pinterest"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="#" style="display: block; margin-bottom: 10px; text-decoration: none; color: black; font-size: 20px;">
                    <i class="fa-brands fa-telegram"></i>
                </a>
            </div>
        </div>

        <section class="bottle" style="margin-top: 50px;">
            <div class="section"
                style="
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
              gap: 23px;
              padding: 20px;
              max-width: 1700px;
              margin: 0 auto;
            ">

            @foreach ( $relatedPosts->slice(0,6) as $post )

            @php
                $url = route('blog', ['slug' => $post->slug]);
                $title = Str::title($post->title) ;
                $image = $post->thumbnail ;
                $date = $post->created_at->format('d.m.y') ;
                $author = $post->author?->name ;
                $catUrl = route('category', ['category' => $cat]);
                $authDate = "$date by $author" ;
            @endphp
                <div
                        style="
                    flex: 1 1 calc(33.33% - 20px);
                    margin: 0;
                    
                    overflow: hidden;
                    ">
                    <a href="{{ $url }}">
                        <img src="{{ $image }}" alt="Winter getaway" style="object-fit: cover; width: 100%; height: 250px" />
                    </a>
                        <div style="padding: 15px">
                            <div
                                style="
                        color: black;
                        font-size: 19px;
                        text-transform: uppercase;
                        margin-bottom: 10px;
                        border-bottom: 1px solid currentColor; display: inline-block;
                    ">
                            {{ $categoryName }}
                        </div>
                        <div style="font-size: 28px; font-weight :400; margin: 0 0 10px">
                            {{ $title }}
                        </div>
                        <div style="font-size: 14px; ">
                            {{ $authDate }}
                        </div>
                    </div>
                </div>
            @endforeach
         
    
            
            </div>
        </section>

        

    </div>

    <section style="position: relative;
      width: 100%;
      /* height: 120vh; */
      ">


        <div style="background-color: black; ">
            <div style="height: 10px;"></div>
            <div style="margin: 50px;">
                <h4 style="font-size: 28px; color: white; text-align: center;">Recommended for you</h4>
            </div>
            <section class="bottle" style="margin-top: 50px;">
                <div class="section"
                    style="
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: space-between;
                  gap: 23px;
                  color: white;
                  padding: 20px;
                  max-width: 1700px;
                  margin: 0 auto;
                ">

                @foreach ( $randomPosts as $post )

                @php
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title) ;
                    $image = $post->thumbnail ;
                    $date = $post->created_at->format('d.m.y') ;
                    $author = $post->author?->name ;
                    $cat = $post->category->category ;

                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author" ;
                @endphp

                    <div
                        style="
                        flex: 1 1 calc(33.33% - 20px);
                        margin: 0;
                        
                        overflow: hidden;
                        ">

                            <a href="{{ $url }}">
                            <img src="{{ $image }}" alt="Winter getaway" style="object-fit: cover; width: 100%; height: 250px" />
                            </a>
                            <div style="padding: 15px">
                                <div
                                    style="
                            color: white;
                            font-size: 19px;
                            text-transform: uppercase;
                            margin-bottom: 10px;
                            border-bottom: 1px solid currentColor; display: inline-block;
                        ">
                                {{ $cat }}
                            </div>
                            <div style="font-size: 24px; font-weight :400; margin: 0 0 10px">
                                {{ $title }}
                            </div>
                            <div style="font-size: 14px; ">
                                {{ $authDate }}
                            </div>
                        </div>
                    </div>

                @endforeach
        
                   
                </div>
            </section>
        </div>
    </section>
    @include('pages.layouts.footer')

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

        window.addEventListener('scroll', function() {
    const socialBar = document.getElementById('social-bar');
    const mainDesc = document.getElementById('main-description');
    const mainDescEnd = mainDesc.getBoundingClientRect().bottom;
    
    if (window.scrollY > mainDescEnd) {
        socialBar.style.position = 'absolute';
        socialBar.style.top = mainDescEnd + 'px';
        socialBar.style.transform = 'none';
    } else {
        socialBar.style.position = 'fixed';
        socialBar.style.top = '50%';
        socialBar.style.transform = 'translateY(-50%)';
    }
});

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
</body>

</html>
