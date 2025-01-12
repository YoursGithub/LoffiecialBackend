<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0  maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<style>
  html, body {
    overflow-x: hidden;
    width: 100%;
    position: relative;
    margin: 0;
    padding: 0;
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

@media (max-width: 768px) {
    .main-container {
      flex-direction: column !important;
    }
    .main-container > div {
      width: 100% !important;
    }
  }
.container {
      max-width: 1700px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .article-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      
    }

    .article-card {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }

    .article-image {
      width: 130px;
      height: 100px;
      object-fit: cover;
      flex-shrink: 0;
    }

    .article-content {
      flex: 1;
    }

    .article-category {
      text-transform: uppercase;
      color: #333;
      font-size: 12px;
      margin-bottom: 8px;
    }

    .article-title {
      margin: 0 0 8px 0;
      font-size: 23px;
      font-weight: 500;
      color: #000;
      line-height: 1.4;
    }

    .article-meta {
      color: #666;
      font-size: 16px;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
      .article-grid {
        grid-template-columns: 1fr;
      }

      .article-card {
        margin-bottom: 20px;
      }
    }


    .images{
        margin-left: 120px;
    }

    @media (max-width: 768px) {
    .section {
        flex-direction: column;
        align-items: center;
    }
    .images{
        margin-left: -20px;
    }
    .section article {
        width: 100%;
        margin-bottom: 20px;
    }
}

@media (max-width: 768px) {
        .social-bar {
            display: none !important;
        }
        .france a{
            display: none;
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
          justify-content: center; /* Center the slide content */
        }
      }

      /* @media (min-width: 350px) and (max-width: 410px) {
        .bottle{
            margin-left: 10px;
            width: 350px;
        }
      } */
      
        @media (max-width: 768px) {
            div[style*="position: relative;"] {
                padding: 0 10px; 
            }

            .input-field{
              padding: 15px;
            }
        }

        @media (max-width: 1024px) {
      div[style*="grid-template-columns"] {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }
    
    @media (max-width : 768px){

    }

</style>

<body>
  <div>
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; border-bottom: 1px solid #ddd;">
        <div class="bars" style="display: flex; padding: 15px; color: black">
            <a
              href="javascript:void(0)"
              onclick="toggleSidebar()"
              style="color: black; text-decoration: none"
            >
              <i class="fa fa-bars fa-xl" style="margin-right: 5px"></i>
            </a>
            <span>MENU</span>
        </div>
    
        <div
  id="sidebar"
  style="
    overflow-x: hidden;
    display: none;
    width: 250px;
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
  "
>
<a
href="javascript:void(0)"
onclick="toggleSidebar()"
style="
  margin-left: 20px;
  color: black;
  text-decoration: none;
  font-size: 48px;
  display: block;
  margin-bottom: 20px;
"
>&times;</a
>

<div
style="
  position: relative;
  display: flex;
  margin-left: 10px;
  width: 200px;
"
>
<input
  type="text"
  placeholder="RECHERCHER"
  style="
    width: 100%;
    padding: 15px 50px 15px 20px;
    font-size: 16px;
    border: none;
    border-radius: 25px;
    outline: none;
    box-shadow: none;
  "
/>
<i class="fa-solid fa-magnifying-glass" style="margin-top: 15px"></i>
</div>
        
            <h2 style="margin-top: 20px; margin-left: 20px; font-size: 15px;">CATEGORIES</h2>
            <ul style="margin-top:30px; margin-left: 30px; list-style-type: none; padding: 0;">
              @include('pages.layouts.header')
                
            </ul>
        
            <!-- Black Footer Section -->
            <div style="
                background-color: black;
                color: white;
                padding: 20px;
                bottom: 0;
                left: 0;
                width: 250px;
                box-sizing: border-box;
            ">
                <img src="/images/Loffecial_Peru-removebg-preview.png" alt="L'OFFICIEL" style="width: 120px;">
                <div style="margin-bottom: 15px;">
                    <a href="#" style="color: white; text-decoration: none; display: block; margin-bottom: 10px;">BUY THE ISSUE</a>
                    <a href="#" style="color: white; text-decoration: none; display: block;">CONTACT</a>
                </div>
                <div style="margin-top: 20px;">
                    <p style="margin-bottom: 20px;">SUIVEZ-NOUS</p>
                    <div style="display: flex; margin-bottom: 30px; gap: 15px;">
                        <i class="fa-brands fa-facebook-f fa-lg" style="color: #ffffff; margin-right: 10px;"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #ffffff; margin-right: 10px;"></i>
                        <i class="fa-brands fa-instagram fa-lg" style="color: #ffffff; margin-right: 10px;"></i>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img src="/images/logo-lofficiel-amtd.svg" alt="" class="images" style="width: 200px; max-width: 100%;">
        </div>
        <div class="france" style="display: flex; align-items: center;">
            <a href="#" style="margin-right: 20px; font-size: 14px; text-decoration: none; color: black;">BUY THE ISSUE</a>
            <a href="#" style="font-size: 14px; text-decoration: none; color: black;">FRANCE</a>
        </div>
    </div>

    <section style="text-align: center; margin-top: 100px;">
      <div style="margin-bottom: 30px; position: relative; max-width: 600px; margin: 0 auto; padding: 0 20px;">

        <input 
            type="text" 
            placeholder="Search..." 
            style="width: 100%; padding: 35px; font-size: 18px; border: 1px solid #e6e6e6; border-radius: 5px; outline: none; box-sizing: border-box;"
            class="input-field">

        <i class="fa-solid fa-magnifying-glass" 
           style="position: absolute; right: 35px; top: 50%; transform: translateY(-50%); font-size: 20px; color: #888;"></i>
    </div>
      

    <div style="margin-top: 40px; ">
        <u style="font-size: 16px; color: #333; margin: 0; text-transform: uppercase; letter-spacing: 1px;">RESULTS OF THE SEARCH FOR</u>
        <h2 style="font-size: 48px; margin: 10px 0; font-weight: normal;">"{{ $search }}"</h2>
        <p style="font-size: 28px; color: #333; margin: 0;">found {{ $number }} results</p>
    </div>

    
    </section>

    <section style="font-family: 'Sen', sans-serif; margin-top: 70px;">

      @isset($posts[0])

      @php
                  $post = $posts[0] ;
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
              position: relative;
        width: 100%;
        min-width: 410px;
              background: url('{{ $image }}') no-repeat center center/cover;
              color: white;
              display: flex;
              justify-content: center;
              align-items: center;
            "
        >
        <div style="text-align: center; margin-top: 200px; padding: 20px">
          <p
            style="
              font-size: 1.2rem;
              margin: 0;
              text-transform: uppercase;
              letter-spacing: 1px;
            "
          >
          {{ $cat }}
        </p>
          <h1 style="font-size: 3rem; margin: 10px 0">
            {{ $title }}
            </h1>
          <p style="font-size: 1rem; margin: 0">
            {{ $authDate }}
          </p>
        </div>
      </div>

      @endisset
    </section>

    <section style="margin-top: 50px; display: flex; flex-wrap: wrap">
        

      @foreach ( $posts->slice(1,2) as $post )

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

      <div style="flex: 1; min-width: 300px; position: relative">
          <img src="{{ $image }}" alt="Image 1"
              style="position: relative;
        width: 100%;
        height : 60vh;
        min-width: 410px;
         object-fit: cover" />
          <div
              style="
          position: absolute;
          margin-top: -200px;
          left: 0;
          color: white;
          padding: 20px;
          width: 100%;
        ">
              <p style="margin: 0; font-size: 28px; text-transform: uppercase">
                  {{ $cat }}
              </p>
              <h2 style="margin: 10px 0; margin-right: 300px; font-size: 39px">
                  {{ $title }}
              </h2>
              <p style="margin: 0; font-size: 18px">
                  {{ $authDate }}
              </p>
          </div>
      </div>

      @endforeach

  </section>

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
    @foreach ( $posts->slice(3,6) as $post )

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
                background-color: #fff;
                overflow: hidden;
            ">
            <img src="{{ $image }}" alt="Winter getaway" style="width: 100%; height: 250px" />
            <div style="padding: 15px">
                <div
                    style="
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
        </div>

    @endforeach

      
    </div>
</section>



    <section style="margin-top: 40px;">
      <div class="container">
        <div class="article-grid">

          @foreach ( $posts->slice(9,9) as $post )

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

          <article class="article-card">
            <img src="{{ $image }}" alt="Article Image" class="article-image">
            <div class="article-content">
              <div class="article-category">{{ $cat }}</div>
              <h2 class="article-title">{{ $title }}</h2>
              <div class="article-meta">{{ $authDate }}</div>
            </div>
          </article>

          @endforeach
  
         
        </div>
      </div>
    </section>




    <section class="bottle" style="margin-top: 100px;">
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

        @foreach ( $posts->slice(18) as $post )

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
                    <img src="{{ $image }}" alt="Winter getaway" style="width: 100%; height: 250px" />
                    <div style="padding: 15px">
                        <div
                            style="
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
                </div>

        @endforeach
    
               
            </div>
    </section>

    @include('pages.layouts.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

    <script>
        function toggleSidebar() {
          const sidebar = document.getElementById("sidebar");
          sidebar.style.display =
            sidebar.style.display === "block" ? "none" : "block";
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