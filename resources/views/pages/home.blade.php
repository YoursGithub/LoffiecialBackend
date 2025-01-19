<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet" />
    <title>L'OFFICIEL</title>

    @include('pages.layouts.seo')

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
            font-size: 2rem;
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

        @media (max-width: 768px) {
            .logo img {
                margin-left: -150px;
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

        /* @media (min-width: 350px) and (max-width: 410px) {
        .bottle{
            margin-left: 30px;
            width: 350px;
        }
      } */

      .logo-img {
  background-position: center;
  display: inline-block;
  max-width: 200%;
}

/* Desktop styles */
@media screen and (min-width: 768px) {
  .logo-img {
    margin-left: 120px;
  }
}

/* Mobile styles */
@media screen and (max-width: 767px) {
  .logo-img {
    margin-left: 190px;
  }
}
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="bars" style="display: flex; padding: 15px; color: white">
            <a href="javascript:void(0)" onclick="toggleSidebar()"
                style="display:flex; color: white; text-decoration: none">
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
      padding: 10px 20px;
      box-sizing: border-box;
      width: 100%;
    ">
    <a href="/" class="logo" style="flex: 1; text-align: center">
        <img src="/images/Lofficiel Peru.png" class="logo-img" alt="Logo"
            style="background-position: center; display: inline-block; max-width: 200%;" />
    </a>

    <div class="nav-links" style="display: flex; justify-content: flex-end; margin-top: -170px; gap: 10px">
        <a href="#subscribe" style="color: white; text-decoration: none; font-size: 16px">Subscribe</a>
        {{-- <a href="#" style="color: white; text-decoration: none; font-size: 16px">France</a> --}}
    </div>
</div>
    </nav>



    <section style="font-family: 'Sen', sans-serif">
        <div class="hero section" style="position: relative; width: 100%; height: 95vh;">
            <a href="{{  route('blog', ['slug' => $firstPost?->slug]) }}"
                style="display: block; width: 100%; height: 100%;">
                <img src="{{ $firstPost?->thumbnail }}" alt="{{ $firstPost?->title }}" style="
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    position: absolute;
                    top: 0;
                    left: 0;
                ">
                <div style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.3);
                "></div>
            </a>

            <div class="hero-content">
                <a href="{{  route('blog', ['slug' => $firstPost?->slug]) }}"
                    style="text-decoration: none; color: white;">
                    <div class="category">{{ $firstPost?->category?->category }}</div>
                </a>
                <a href="{{  route('blog', ['slug' => $firstPost?->slug]) }}"
                    style="text-decoration: none; color: white;">
                    <div class="title">
                        {{ $firstPost?->title }}
                    </div>
                </a>
                <a href="{{  route('blog', ['slug' => $firstPost?->slug]) }}"
                    style="text-decoration: none; color: white;">
                    <div class="meta">{{ $firstPost?->created_at->format('d.m.y') }} by {{ $firstPost?->author?->name }}
                    </div>
                </a>
            </div>
        </div>

        <div class="content-grid" style="text-align: left">
            @foreach ($recentPosts->slice(0, 3) as $post)
                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                        @endphp

                        <article style="
                            display: flex;
                            align-items: flex-start;
                            /* margin-left: -30px; */
                            margin-bottom: 20px;
                            gap: 20px;
                        ">
                        <a href="{{ $url }}">

                            <img src="{{ $image }}" alt="BE WELL" style="
                            width: 100%;
                            height: 100px;
                            object-fit: cover;
                            object-position: center; 
                            margin-right: 20px;
                            aspect-ratio: 4 / 3;
                        ">
                        </a>
                        
                        <div style="gap: 20px;">
                            <a href="{{ $catUrl }}" style="
                                display: block;
                                font-size: 12px;
                                color: #555;
                                text-transform: uppercase;
                                margin-bottom: 5px;
                                overflow-wrap: break-word; /* Ensure long text wraps */
                            ">
                                {{$cat}}
                            </a>
                        
                            <a href="{{ $url }}" style="
                                display: block;
                                font-size: 18px;
                                font-weight: bold;
                                color: #000;
                                text-decoration: none;
                                margin: 0 0 10px 0; /* Remove any right margin */
                                padding: 0; /* Ensure no extra padding */
                            ">
                            {{$title}}
                            </a>

                        
                            <div style="
                                font-size: 14px;
                                color: #888;
                                overflow-wrap: break-word; /* Prevent date text from overflowing */
                            ">
                                {{ $authDate }}
                            </div>
                        </div>
                        
                        </article>
            @endforeach
        </div>
    </section>

    <section class="bottle hexx" style="font-family: 'Sen', sans-serif">
        <h2 class="high" style="
          font-weight: lighter;
          font-size: 20px;
          margin-left: 32px;
          /* margin-bottom: 50px; */
        ">
            Trending
        </h2>
        <div class="section" style="
          display: flex;
          justify-content: space-between;
          gap: 10px;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        ">
            @foreach ($trendingPosts->slice(0, 2) as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                         @endphp

                        <article style="width: 100%; text-align: left">
                            <a href="{{ $url }}">
                                <img src="{{ $image }}" alt="BE WELL"
                                    style="object-fit: cover;  width: 100%; height: 600px; margin-bottom: 15px" />
                            </a>
                            <a href="{{ $catUrl }}" style="
                            display: block;
                            font-size: 12px;
                            color: #555;
                            text-transform: uppercase;
                            margin-bottom: 5px;
                            ">{{$cat}}</a>
                            <a href="{{$url}}" style="
                          display: block;
                          font-size: 28px;
                          font-weight: bold;
                          color: #000;
                          text-decoration: none;
                          margin-bottom: 10px;
                         ">
                                {{ $title }}
                            </a>
                            <div style="font-size: 14px; color: #888">
                                {{ $authDate }}
                            </div>
                        </article>

            @endforeach

        </div>
    </section>


    <section>
        <h2 style="
          margin-top: 30px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 32px;
          margin-bottom: 10px;
        ">
            Last minute
        </h2>

        @foreach ($ranPosts as $post)

                @php
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title);
                    $image = $post->thumbnail;
                    $date = $post->created_at->format('d.m.y');
                    $author = $post->author?->name;
                    $cat = $post->category->category;
                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author";
                @endphp

                <a href="{{ $url }}" style="text-decoration: none;">
                    <div style="
                        position: relative;
                        width: 100%;
                        /* min-width: 410px; */
                        height: 60vh;
                        background: url('{{ $image }}') no-repeat center center;
                        background-size: cover;
                        color: white;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        ">
                        <div style="
                    text-align: center;
                    padding: 20px;
                    width: 100%;
                    max-width: 800px;
                    text-decoration: none;
                  ">
                            <p style="
                      font-size: clamp(0.8rem, 2vw, 0.9rem);
                      margin: 0;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                      text-decoration : none;
                    ">
                                {{ $cat }}
                            </p>
                         <h1 style="
                      font-size: clamp(1.5rem, 4vw, 2rem);
                      margin: 10px 0;
                    ">
                                {{ $title }}
                            </h1>
                            <p style="
                      font-size: clamp(0.7rem, 1.5vw, 0.8rem);
                      margin: 0;
                    ">
                                {{ $authDate }}
                            </p>
                        </div>
                    </div>
                </a>

        @endforeach
    </section>

    <section class="bottle" style="margin-top: 50px;">
        <div class="section" style="
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 23px;
            padding: 20px;
            max-width: 1700px;
            margin: 0 auto;
            ">

            @foreach ($recentPosts->slice(2, 6) as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                        @endphp

                        <div style="
                            flex: 1 1 calc(33.33% - 20px);
                            margin: 0;
                            background-color: #fff;
                            overflow: hidden;
                            ">
                            <a href="{{ $url }}">
                                <img src="{{ $image }}" alt="Winter getaway" style="object-fit:cover; width: 100%; height: 250px" />
                            </a>
                            <div style="padding: 15px">
                                <a href="{{ $catUrl }}">
                                <div style="
                            color: black;
                            font-size: 19px;
                            text-transform: uppercase;
                            margin-bottom: 10px;
                            border-bottom: 1px solid currentColor; display: inline-block;
                          ">
                                    {{ $cat }}
                                </div>
                                </a>
                                <a href="{{ $url }}" style="text-decoration: none; color: black;">
                                <div style="font-size: 28px; font-weight :400; margin: 0 0 10px">
                                    {{ $title }}
                                </div>
                                </a>
                                <div style="font-size: 14px; ">
                                    {{ $authDate }}
                                </div>
                            </div>
                        </div>

            @endforeach


        </div>
    </section>

    <section class="bottle">
        
            @foreach ($trendingPosts->slice(2, 2) as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                         @endphp

                        <article class="dens" style="width: 48%; text-align: left">
                            <img src="{{ $image }}" alt="BE WELL"
                                style="object-fit:cover; width: 100%; height: 600px; margin-bottom: 15px" class="responsive-img" />
                            <a href="{{ $catUrl }}" style="
                                display: block;
                                font-size: 12px;
                                color: #555;
                                text-transform: uppercase;
                                margin-bottom: 5px;
                                ">{{$cat}}</a>
                            <a href="{{ $url }}" style="
                                display: block;
                                font-size: 28px;
                                font-weight: bold;
                                color: #000;
                                text-decoration: none;
                                margin-bottom: 10px;
                                ">
                                {{ $title }}
                            </a>
                            <div style="font-size: 14px; color: #888">
                                {{ $authDate }}
                            </div>
                        </article>

            @endforeach

        </div>
    </section>

    <section class="bottle" style="margin-top: 50px;">
        <h2 style="
          /* margin-top: 30px; */
          font-weight: lighter;
          font-size: 20px;
          margin-left: 32px;
          /* margin-bottom: 50px; */
        ">
            Not to be missed
        </h2>
        <div class="section" style="
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 23px;
                padding: 20px;
                max-width: 1700px;
                margin: 0 auto;
                ">

            @foreach ($recentPosts->slice(8, 3) as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                        @endphp

                        <div style="
                                flex: 1 1 calc(33.33% - 20px);
                                margin: 0;
                                background-color: #fff;
                                overflow: hidden;
                            ">
                            <a href="{{ $url }}">
                                <img src="{{ $image }}" alt="Winter getaway"
                                    style="object-fit: cover; width: 100%; height: 250px" />
                            </a>
                            <div style="padding: 15px">
                                <a href="{{ $catUrl }}">

                                <div style="
                                    color: black;
                                    font-size: 19px;
                                    text-transform: uppercase;
                                    margin-bottom: 10px;
                                    border-bottom: 1px solid currentColor; display: inline-block;
                                ">
                                    {{ $cat }}
                                </div>
                                </a>
                                <a href="{{ $url }}" style="text-decoration: none; color: black;">
                                    <div style="font-size: 28px; font-weight :400; margin: 0 0 10px">
                                        {{ $title }}
                                    </div>
                                    </a>
                                <div style="font-size: 14px; ">
                                    {{ $authDate }}
                                </div>
                            </div>
                        </div>

            @endforeach


        </div>
    </section>

    <h2 style="
      /* margin-top: 30px; */
      font-weight: lighter;
      font-size: 20px;
      margin-left: 32px;
      /* margin-bottom: 50px; */
    ">
        Lifestyle
    </h2>
    <section style="margin-top: 10px; display: flex; flex-wrap: wrap">

        @foreach ($lifestylePosts as $post)

                @php
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title);
                    $image = $post->thumbnail;
                    $date = $post->created_at->format('d.m.y');
                    $author = $post->author?->name;
                    $cat = $post->category->category;
                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author";
                @endphp

<div style="flex: 1; min-width: 300px; position: relative; overflow: hidden;">
    <a href="{{ $url }}">
        <img src="{{ $image }}" alt="Image 1" style="
            position: relative;
            width: 100%;
            height: 75vh;
            min-width: 410px;
            object-fit: cover;
        " />
    </a>
    <div style="
        position: absolute;
        bottom: 0; /* Align text at the bottom of the image */
        left: 0;
        color: white;
        padding: 20px;
        width: 100%;
        box-sizing: border-box; /* Ensures padding is included in width */
    ">
        <p style="
            margin: 0;
            font-size: 20px; 
            text-transform: uppercase;
            word-wrap: break-word; /* Break long words if necessary */
        ">
            {{ $cat }}
        </p>
        <a href="{{ $url }}" style="text-decoration: none; color: white;">
        <h2 style="
            margin: 10px 0; 
            font-size: 32px; 
            word-wrap: break-word; /* Ensure title fits within the container */
            max-width: 100%; /* Prevent overflow */
        ">
            {{ $title }}
        </h2>
        </a>
        <p style="
            margin: 0; 
            font-size: 16px; 
            word-wrap: break-word;
        ">
            {{ $authDate }}
        </p>
    </div>
</div>


        @endforeach

    </section>

    <section class="bottle" style="margin-top: 50px;">
        <h2 style="
      margin-top: 30px;
      font-weight: lighter;
      font-size: 20px;
      margin-left: 32px;
      /* margin-bottom: 50px; */
    ">
            Entertainment
        </h2>
        <div class="section" style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1700px;
          margin: 0 auto;
        ">


            @foreach ($entertainmentPosts as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                        @endphp
                        <div style="
                                        flex: 1 1 calc(33.33% - 20px);
                                        margin: 0;
                                        background-color: #fff;
                                        overflow: hidden;
                                    ">
                            <a href="{{ $url }}">
                                <img src="{{ $image }}" alt="Winter getaway"
                                    style="object-fit: cover; width: 100%; height: 250px" />
                            </a>
                            <div style="padding: 15px">
                                <a href="{{ $catUrl }}">

                                <div style="
                                    color: black;
                                    font-size: 19px;
                                    text-transform: uppercase;
                                    margin-bottom: 10px;
                                    border-bottom: 1px solid currentColor; display: inline-block;
                                ">
                                    {{ $cat }}
                                </div>

                                </a>
                                <a href="{{ $url }}" style="text-decoration: none; color: black;">
                                <div style="font-size: 28px; font-weight :400; margin: 0 0 10px">
                                    {{ $title }}
                                </div>
                                </a>
                                <div style="font-size: 14px; ">
                                    {{ $authDate }}
                                </div>
                            </div>
                        </div>

            @endforeach


        </div>
    </section>

    <section style="font-family: 'Sen', sans-serif">
        <h2 style="
          font-weight: lighter;
          font-size: 20px;
          margin-left: 32px;
          margin-bottom: 10px;
        ">
            Beauty
        </h2>
        @foreach ($beautyPosts as $post)

                @php
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title);
                    $image = $post->thumbnail;
                    $date = $post->created_at->format('d.m.y');
                    $author = $post->author?->name;
                    $cat = $post->category->category;
                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author";
                @endphp

        
                <div style="
                        position: relative;
                    width: 100%;
                    min-width: 410px;
                        background: url('{{ $image }}') no-repeat center center/cover;
                        color: white;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        cursor: pointer;
                        "
                        onclick="location.href'{{ $url }}'"
                        >
                    <div style="text-align: center; margin-top: 200px; padding: 20px;">
                        <p style="
                      font-size: 1.2rem;
                      margin: 0;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                      border-bottom: 1px solid currentColor; display: inline-block;
                    ">
                            {{ $cat }}
                        </p>
                        <a href="{{ $url }}" style="text-decoration: none; color: white;">
                        <h1 style="font-size: 2rem; margin: 10px 0">
                            {{ $title }}
                        </h1>
                        </a>
                        <p style="font-size: 1rem; margin: 0">
                            {{ $authDate }}
                        </p>
                    </div>
                </div>
        @endforeach
    </section>

    <section style="
        font-family: 'Sen', sans-serif;
        position: relative;
        text-align: left;
        margin-top: 20px;
      ">
        <h2 style="
          margin-top: 10px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 32px;
          margin-bottom: 20px;
        ">
            Fashion
        </h2>
        @isset($fashionPosts[0])

                @php
                    $post = $fashionPosts[0];
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title);
                    $image = $post->thumbnail;
                    $date = $post->created_at->format('d.m.y');
                    $author = $post->author?->name;
                    $cat = $post->category->category;
                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author";
                @endphp

<a href="{{ $url }}" style="color: white ; text-decoration:none">


                <div style="
                        position: relative;
                    width: 100%;
                    min-width: 410px;
                        display: flex;
                        background-image: url('{{ $image }}');
                        background-size: cover;
                        background-position: center;
                        ">
                    <div style="
                        width: 100%;
                        height: 400px;
                        background-image: url('');
                        background-size: cover;
                        background-position: center;
                        position: relative;
                    ">
                        <div style="position: absolute; bottom: 70px; left: 20px; color: white">
                            <p style="font-size: 20px; margin: 0; text-transform: uppercase; border-bottom: 1px solid currentColor; display: inline-block;">
                                {{ $cat }}
                            </p>
                            <a href="{{ $url }}" style="text-decoration: none; color: white;">
                            <h1 style="font-size: 2rem; margin-right: 160px; margin: 5px 0">
                                {{ $title }}
                            </h1>
                            </a>
                            <p style="font-size: 14px; margin: 0">
                                {{ $authDate }}
                            </p>
                        </div>
                    </div>

                    <div style="
                            display: flex;
                            justify-content: center;
                            margin: 50px;
                            /* gap: 20px; */
                            padding: 20px;
                        ">

                        @foreach ($fashionPosts->slice(1, 2) as $post)

                                    @php
                                        $url = route('blog', ['slug' => $post->slug]);
                                        $title = Str::title($post->title);
                                        $image = $post->thumbnail;
                                        $date = $post->created_at->format('d.m.y');
                                        $author = $post->author?->name;
                                        $cat = $post->category->category;
                                        $catUrl = route('category', ['category' => $cat]);
                                        $authDate = "$date by $author";
                                    @endphp
                                    
                                    <a href="{{ $url }}" style="color: black ; text-decoration:none">


                                    <div class="hide" style="
                                        background-color: white;
                                        padding: 20px;
                                        width: 200px;
                                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                                        ">
                                        <img src="{{ $image }}" alt="Sneakers"
                                            style="width: 100%; object-fit: cover; margin-bottom: 10px" />
                                        <p style="margin: 0; font-size: 18px; text-align: center">
                                            {{$title}}
                                        </p>
                                    </div>
                                    </a>

                        @endforeach

                    </div>
                </div>
</a>
        @endisset

    </section>

    <section class="disapp" style="margin-top: 50px">
        <h2 style="
        margin-top: 10px;
        font-weight: lighter;
        font-size: 20px;
        margin-left: 32px;
        margin-bottom: 20px;
      ">
         Music
      </h2>
        @foreach ($musicPosts->slice(0, 1) as $post)

                @php
                    $url = route('blog', ['slug' => $post->slug]);
                    $title = Str::title($post->title);
                    $image = $post->thumbnail;
                    $date = $post->created_at->format('d.m.y');
                    $author = $post->author?->name;
                    $cat = $post->category->category;
                    $catUrl = route('category', ['category' => $cat]);
                    $authDate = "$date by $author";
                @endphp
                <div style="
                        position: relative;
                        text-align: center;
                        color: white;
                        width: 100%;
                        overflow: hidden;
                        ">
                    <a href="{{ $url }}">
                        <img src="{{ $image }}" alt="Background"
                            style="width: 100%; height: 400px; object-fit: cover; opacity: 0.85" />
                    </a>

                    
                    <div style="
                    position: absolute;
                    top: 70%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                  ">
                        <p style="
                      font-size: 20px;
                      letter-spacing: 2px;
                      text-transform: uppercase;
                      border-bottom: 1px solid currentColor; display: inline-block;
                    ">
                            {{ $cat }}
                        </p>
                        <h1 style="font-size: 42px; font-weight: bold; margin: 10px 0">
                            {{ $title }}
                        </h1>

                        <p style="
                      font-size: 14px;
                      margin-top: 20px;
                      color: rgba(255, 255, 255, 0.8);
                    ">
                            {{ $authDate }}
                        </p>
                    </div>
                </div>

        @endforeach
    </section>

    <section class="bottle" style="margin-top: 50px;">
        <div class="section" style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1700px;
          margin: 0 auto;
        ">
            @foreach ($musicPosts->slice(1, 3) as $post)

                        @php
                            $url = route('blog', ['slug' => $post->slug]);
                            $title = Str::title($post->title);
                            $image = $post->thumbnail;
                            $date = $post->created_at->format('d.m.y');
                            $author = $post->author?->name;
                            $cat = $post->category->category;
                            $catUrl = route('category', ['category' => $cat]);
                            $authDate = "$date by $author";
                         @endphp
                        <div style="
                                flex: 1 1 calc(33.33% - 20px);
                                margin: 0;
                                background-color: #fff;
                                overflow: hidden;
                            ">
                            <a href="{{ $url }}">
                                <img src="{{ $image }}" alt="Winter getaway"
                                    style="object-fit: cover; width: 100%; height: 250px" />
                            </a>
                            <a href="{{ $url }}" style="color: black ; text-decoration:none">

                            <div style="padding: 15px">
                                <div style="
                                    color: black;
                                    font-size: 19px;
                                    text-transform: uppercase;
                                    margin-bottom: 10px;
                                    border-bottom: 1px solid currentColor; display: inline-block;
                                ">
                                    {{ $cat }}
                                </div>
                                <div style="font-size: 28px; font-weight :400; margin: 0 0 10px">
                                    {{ $title }}
                                </div>
                                <div style="font-size: 14px; ">
                                    {{ $authDate }}
                                </div>
                            </div>
                            </a>
                        </div>

            @endforeach


        </div>
    </section>

    <section id="subscribe">
        @include('pages.layouts.footer')
    </section>

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
</body>

</html>