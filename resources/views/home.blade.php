<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>L'OFFICIEL</title>
    <style>
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
        align-items: center;
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
        width: 300px;
        margin-left: 130px;
      }

      .navbar.scrolled .logo {
        display: none;
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
        bottom: -150px;
        z-index: 2;
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
        color: #666;
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
          transform: none;
          left: 0;
        }

        .logo img {
          margin-left: -80px;
        }
        .disapp{
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

      @media (max-width: 768px) {
        .hide {
          display: none;
        }
      }

      /* @media (min-width: 350px) and (max-width: 410px) {
        .bottle{
            margin-left: 30px;
            width: 350px;
        }
      } */

    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="bars" style="display: flex; padding: 15px; color: white">
        <a
          href="javascript:void(0)"
          onclick="toggleSidebar()"
          style="color: white; text-decoration: none"
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

        <h2 style="margin-top: 20px; margin-left: 20px; font-size: 15px">
          CATEGORIES
        </h2>
        <ul
          style="
            margin-top: 30px;
            margin-left: 30px;
            list-style-type: none;
            padding: 0;
          "
        >
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >L'OFFICIEL ART</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >JOAILLERIE</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >BEAUTÉ</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >VOYAGE</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FEMMES</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >HOMMES</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >INDUSTRY TRENDS</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FOOD</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >SHOPPING</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >POP CULTURE</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FASHION WEEK</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >BEAUTÉ</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >VOYAGE</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FEMMES</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >HOMMES</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >INDUSTRY TRENDS</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FOOD</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >SHOPPING</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >POP CULTURE</a
            >
          </li>
          <li style="margin-bottom: 15px">
            <a
              href="categories.html"
              style="color: black; text-decoration: none"
              >FASHION WEEK</a
            >
          </li>
        </ul>

        <!-- Black Footer Section -->
        <div
          style="
            background-color: black;
            color: white;
            padding: 20px;
            bottom: 0;
            left: 0;
            width: 250px;
            box-sizing: border-box;
          "
        >
          <img
            src="/images/Loffecial_Peru-removebg-preview.png"
            alt="L'OFFICIEL"
            style="width: 120px"
          />
          <div style="margin-bottom: 15px">
            <a
              href="#"
              style="
                color: white;
                text-decoration: none;
                display: block;
                margin-bottom: 10px;
              "
              >BUY THE ISSUE</a
            >
            <a
              href="#"
              style="color: white; text-decoration: none; display: block"
              >CONTACT</a
            >
          </div>
          <div style="margin-top: 20px">
            <p style="margin-bottom: 20px">SUIVEZ-NOUS</p>
            <div style="display: flex; margin-bottom: 30px; gap: 15px">
              <i
                class="fa-brands fa-facebook-f fa-lg"
                style="color: #ffffff; margin-right: 10px"
              ></i>
              <i
                class="fa-brands fa-twitter fa-lg"
                style="color: #ffffff; margin-right: 10px"
              ></i>
              <i
                class="fa-b<span>Menu</span>rands fa-instagram fa-lg"
                style="color: #ffffff; margin-right: 10px"
              ></i>
            </div>
          </div>
        </div>
      </div>

      <div
        style="
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 20px;
          box-sizing: border-box;
          width: 100%;
        "
      >
        <a href="#" class="logo" style="flex: 1; text-align: center">
          <img
            src="/images/1615808428-logo-lofficiel.svg"
            alt="Logo"
            style="background-position: center; display: inline-block"
          />
        </a>

        <div
          class="nav-links"
          style="display: flex; justify-content: flex-end; gap: 10px"
        >
          <a
            href="#"
            style="color: white; text-decoration: none; font-size: 16px"
            >Buy The Issue</a
          >
          <a
            href="#"
            style="color: white; text-decoration: none; font-size: 16px"
            >France</a
          >
        </div>
      </div>
    </nav>

    <section class="hero section" style="font-family: 'Sen', sans-serif">
      <div class="hero-content">
        <div class="category">FEMMES</div>
        <h1 class="title">
          5 tendances mode de l'hiver 2024-25, repérées sur les podiums
        </h1>
        <div class="meta">30.12.2024 by Pauline Borgogno</div>
      </div>

      <div class="content-grid" style="text-align: left">
        <article
          style="
            display: flex;
            align-items: flex-start;
            padding: 20px;
            margin-left: -10px;
            margin-bottom: 20px;
          "
        >
          <img
            src="/images/image_34.jpeg"
            alt="BE WELL"
            style="
              width: 160px;
              height: 120px;
              object-fit: cover;
              margin-right: 20px;
            "
          />
          <div>
            <a
              href="blog.html"
              style="
                display: block;
                font-size: 12px;
                color: #555;
                text-transform: uppercase;
                margin-bottom: 5px;
              "
              >BE WELL</a
            >
            <a
              href="blog.html"
              style="
                display: block;
                font-size: 18px;
                font-weight: bold;
                color: #000;
                text-decoration: none;
                margin-bottom: 10px;
              "
              >Quelles énergies domineront en 2025 ?</a
            >
            <div style="font-size: 14px; color: #888">
              30.12.2024 by Pauline Borgogno
            </div>
          </div>
        </article>

        <article
          style="
            display: flex;
            align-items: flex-start;
            padding: 20px;
            margin-left: -10px;
            margin-bottom: 20px;
          "
        >
          <img
            src="/images/image_202.jpeg"
            alt="BE WELL"
            style="
              width: 160px;
              height: 120px;
              object-fit: cover;
              margin-right: 20px;
            "
          />
          <div>
            <a
              href="blog.html"
              style="
                display: block;
                font-size: 12px;
                color: #555;
                text-transform: uppercase;
                margin-bottom: 5px;
              "
              >BE WELL</a
            >
            <a
              href="#"
              style="
                display: block;
                font-size: 18px;
                font-weight: bold;
                color: #000;
                text-decoration: none;
                margin-bottom: 10px;
              "
              >Quelles énergies domineront en 2025 ?</a
            >
            <div style="font-size: 14px; color: #888">
              30.12.2024 by Pauline Borgogno
            </div>
          </div>
        </article>

        <article
          style="
            display: flex;
            align-items: flex-start;
            padding: 20px;
            margin-left: -10px;
            margin-bottom: 20px;
          "
        >
          <img
            src="/images/image_51.jpeg"
            alt="BE WELL"
            style="
              width: 160px;
              height: 120px;
              object-fit: cover;
              margin-right: 20px;
            "
          />
          <div>
            <a
              href="#"
              style="
                display: block;
                font-size: 12px;
                color: #555;
                text-transform: uppercase;
                margin-bottom: 5px;
              "
              >BE WELL</a
            >
            <a
              href="#"
              style="
                display: block;
                font-size: 18px;
                font-weight: bold;
                color: #000;
                text-decoration: none;
                margin-bottom: 10px;
              "
              >Quelles énergies domineront en 2025 ?</a
            >
            <div style="font-size: 14px; color: #888">
              30.12.2024 by Pauline Borgogno
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="bottle hexx" style="font-family: 'Sen', sans-serif">
      <h2
        style="
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        "
      >
        Trending
      </h2>
      <div
        class="section"
        style="
          display: flex;
          justify-content: space-between;
          gap: 50px;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        "
      >
        <article style="width: 100%; text-align: left">
          <img
            src="/images/1734643794-snapinsta-app_447996286_18439812613061284_3590454578625362646_n_1080.jpg"
            alt="BE WELL"
            style="width: 100%; height: auto; margin-bottom: 15px"
          />
          <a
            href="#"
            style="
              display: block;
              font-size: 12px;
              color: #555;
              text-transform: uppercase;
              margin-bottom: 5px;
            "
            >BE WELL</a
          >
          <a
            href="#"
            style="
              display: block;
              font-size: 18px;
              font-weight: bold;
              color: #000;
              text-decoration: none;
              margin-bottom: 10px;
            "
          >
            6 adresses d’exception, à découvrir d’urgence pour un glow
            incomparable pendant les fêtes
          </a>
          <div style="font-size: 14px; color: #888">
            20.12.2024 by Pauline Borgogno
          </div>
        </article>
    
        <article style="width: 100%; text-align: left">
          <img
            src="/images/1734640073-justin-hailey-bieber-birthday-20221122_50-83127c2f9eb64ea58fac0fece37fe707.jpg"
            alt="FOOD"
            style="width: 100%; height: auto; margin-bottom: 15px"
          />
          <a
            href="#"
            style="
              display: block;
              font-size: 12px;
              color: #555;
              text-transform: uppercase;
              margin-bottom: 5px;
            "
            >FOOD</a
          >
          <a
            href="#"
            style="
              display: block;
              font-size: 18px;
              font-weight: bold;
              color: #000;
              text-decoration: none;
              margin-bottom: 10px;
            "
          >
            Les adresses parisiennes où se réchauffer pendant les fêtes de fin
            d'année
          </a>
          <div style="font-size: 14px; color: #888">
            20.12.2024 by Pauline Borgogno
          </div>
        </article>
      </div>
    </section>
    

    <section>
        <h2 style="
          margin-top: 200px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        ">
          Dernière minute
        </h2>
        
        <div style="
          position: relative;
          width: 100%;
          /* min-width: 410px; */
          height: 90vh;
          background: url('/images/1734511443-img_3996.png') no-repeat center center;
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
          ">
            <p style="
              font-size: clamp(0.8rem, 2vw, 0.9rem);
              margin: 0;
              text-transform: uppercase;
              letter-spacing: 1px;
            ">
              POP CULTURE
            </p>
            <h1 style="
              font-size: clamp(1.5rem, 4vw, 2rem);
              margin: 10px 0;
            ">
              Pourquoi a-t-on hâte de découvrir "Nosferatu" ?
            </h1>
            <p style="
              font-size: clamp(0.7rem, 1.5vw, 0.8rem);
              margin: 0;
            ">
              18.12.2024 by Pauline Borgogno
            </p>
          </div>
        </div>
      </section>

    <section class="bottle" style="margin-top: 50px;">
      <div
        class="section"
        style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1200px;
          margin: 0 auto;
        "
      >
        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_23.jpeg"
            alt="Winter getaway"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Voyage
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Évasion hivernale : l’excellence des séjours au ski avec Airelles
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_24.jpeg"
            alt="Mocha Mousse"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Femmes
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Mocha Mousse : la couleur Pantone 2025 nous envoûte cette saison
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_25.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_28.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_29.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_26.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bottle">
      <div
        style="
          display: flex;
          justify-content: space-between;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        "
      >
        <article style="width: 48%; text-align: left">
          <img
            src="/images/1727171384-cover_joseph_eshop_fr.jpg"
            alt="BE WELL"
            style="width: 100%; height: auto; margin-bottom: 15px"
          />
          <a
            href="#"
            style="
              display: block;
              font-size: 12px;
              color: #555;
              text-transform: uppercase;
              margin-bottom: 5px;
            "
            >BE WELL</a
          >
          <a
            href="#"
            style="
              display: block;
              font-size: 18px;
              font-weight: bold;
              color: #000;
              text-decoration: none;
              margin-bottom: 10px;
            "
          >
            6 adresses d’exception, à découvrir d’urgence pour un glow
            incomparable pendant les fêtes
          </a>
          <div style="font-size: 14px; color: #888">
            20.12.2024 by Pauline Borgogno
          </div>
        </article>

        <article style="width: 48%; text-align: left">
          <img
            src="/images/1733524487-versace_medusa-biggie-2024-campaign_sabrina-carpenter_1.jpeg"
            alt="FOOD"
            style="width: 100%; height: auto; margin-bottom: 15px"
          />
          <a
            href="#"
            style="
              display: block;
              font-size: 12px;
              color: #555;
              text-transform: uppercase;
              margin-bottom: 5px;
            "
            >FOOD</a
          >
          <a
            href="#"
            style="
              display: block;
              font-size: 18px;
              font-weight: bold;
              color: #000;
              text-decoration: none;
              margin-bottom: 10px;
            "
          >
            Les adresses parisiennes où se réchauffer pendant les fêtes de fin
            d'année
          </a>
          <div style="font-size: 14px; color: #888">
            20.12.2024 by Pauline Borgogno
          </div>
        </article>
      </div>
    </section>

    <section class="bottle" style="margin-top: 50px; font-family: 'Sen', sans-serif">
      <h2
        style="
          margin-top: 100px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        "
      >
        À ne pas manquer
      </h2>
      <div
        class="section"
        style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        "
      >
        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_23.jpeg"
            alt="Winter getaway"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Voyage
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Évasion hivernale : l’excellence des séjours au ski avec Airelles
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_24.jpeg"
            alt="Mocha Mousse"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Femmes
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Mocha Mousse : la couleur Pantone 2025 nous envoûte cette saison
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_25.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="margin-top: 50px; display: flex; flex-wrap: wrap">
      <div style="flex: 1; min-width: 300px; position: relative">
        <img
          src="/images/image_20.jpeg"
          alt="Image 1"
          style="position: relative;
          width: 100%;
          min-width: 410px;
           object-fit: cover"
        />
        <div
          style="
            position: absolute;
            bottom: 0;
            left: 0;
            color: white;
            padding: 20px;
            width: 100%;
          "
        >
          <p style="margin: 0; font-size: 14px; text-transform: uppercase">
            Food
          </p>
          <h2 style="margin: 10px 0; font-size: 24px">
            Les gourmandises à s’offrir cet automne
          </h2>
          <p style="margin: 0; font-size: 12px">
            14.11.2024 by Pauline Borgogno
          </p>
        </div>
      </div>

      <div style="flex: 1; min-width: 300px; position: relative">
        <img
          src="/images/image_32.jpeg"
          alt="Image 2"
          style="position: relative;
          width: 100%;
          min-width: 410px;
          object-fit: cover"
        />
        <div
          style="
            position: absolute;
            bottom: 0;
            left: 0;
            color: white;
            padding: 20px;
            width: 100%;
          "
        >
          <p style="margin: 0; font-size: 14px; text-transform: uppercase">
            Food
          </p>
          <h2 style="margin: 10px 0; font-size: 24px">
            Les calendriers de l’Avent gourmands les plus désirables de 2024
          </h2>
          <p style="margin: 0; font-size: 12px">
            19.11.2024 by Pauline Borgogno
          </p>
        </div>
      </div>
    </section>

    <section class="bottle" style="margin-top: 50px">
      <h2
        style="
          margin-top: 100px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        "
      >
        Pop culture
      </h2>
      <div
        class="section"
        style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        "
      >
        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_23.jpeg"
            alt="Winter getaway"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Voyage
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Évasion hivernale : l’excellence des séjours au ski avec Airelles
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_24.jpeg"
            alt="Mocha Mousse"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Femmes
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Mocha Mousse : la couleur Pantone 2025 nous envoûte cette saison
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_25.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="font-family: 'Sen', sans-serif">
      <h2
        style="
          margin-top: 200px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        "
      >
        Industry Trends
      </h2>
      <div
        style="
          position: relative;
    width: 100%;
    min-width: 410px;
          background: url('/images/bag.jpg') no-repeat center center/cover;
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
            POP CULTURE
          </p>
          <h1 style="font-size: 4rem; margin: 10px 0">
            Pourquoi a-t-on hâte de découvrir "Nosferatu" ?
          </h1>
          <p style="font-size: 1rem; margin: 0">
            18.12.2024 by Pauline Borgogno
          </p>
        </div>
      </div>
    </section>

    <section
      style="
        font-family: 'Sen', sans-serif;
        position: relative;
        text-align: left;
        margin-top: 50px;
      "
    >
      <h2
        style="
          margin-top: 200px;
          font-weight: lighter;
          font-size: 20px;
          margin-left: 50px;
          margin-bottom: 50px;
        "
      >
        Shopping
      </h2>
      <div
        style="
          position: relative;
    width: 100%;
    min-width: 410px;
          display: flex;
          background-image: url('/images/image_233.jpeg');
          background-size: cover;
          background-position: center;
        "
      >
        <div
          style="
            width: 100%;
            height: 400px;
            background-image: url('');
            background-size: cover;
            background-position: center;
            position: relative;
          "
        >
          <div
            style="position: absolute; bottom: 70px; left: 20px; color: white"
          >
            <p style="font-size: 12px; margin: 0">SHOPPING</p>
            <h1 style="font-size: 38px; margin-right: 60px; margin: 5px 0">
              Le vestiaire d’automne parfait est signé Kujten x Dr Woo
            </h1>
            <p style="font-size: 14px; margin: 0">
              09.10.2024 by Pauline Borgogno
            </p>
          </div>
        </div>

        <div
          style="
            display: flex;
            justify-content: center;
            margin: 50px;
            gap: 20px;
            padding: 20px;
          "
        >
          <div
            class="hide"
            style="
              background-color: white;
              padding: 20px;
              width: 200px;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            "
          >
            <img
              src="/images/image_187.jpeg"
              alt="Sneakers"
              style="width: 100%; margin-bottom: 10px"
            />
            <p style="margin: 0; font-size: 18px; text-align: center">
              Vos prochaines sneakers préférées sont déjà aux pieds d’Emily
              Ratajkowski
            </p>
          </div>
          <div
            class="hide"
            style="
              background-color: white;
              padding: 20px;
              width: 200px;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            "
          >
            <img
              src="/images/image_187.jpeg"
              alt="Bag"
              style="width: 100%; margin-bottom: 10px"
            />
            <p style="margin: 0; font-size: 18px; text-align: center">
              Le sac de la saison est déjà au bras de Kate Moss
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="disapp" style="margin-top: 100px">
      <div
        style="
          position: relative;
          text-align: center;
          color: white;
          width: 100%;
          overflow: hidden;
        "
      >
        <img
          src="/images/image_234.jpeg"
          alt="Background"
          style="width: 100%; height: auto; object-fit: cover; opacity: 0.85"
        />

        <div
          style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          "
        >
          <p
            style="
              font-size: 20px;
              letter-spacing: 2px;
              text-transform: uppercase;
            "
          >
            Femmes
          </p>
          <h1 style="font-size: 42px; font-weight: bold; margin: 10px 0">
            Frazzled English Woman :
          </h1>
          <h2 style="font-size: 24px; font-weight: normal; margin: 0">
            l’esthétique d’automne par excellence
          </h2>
          <p
            style="
              font-size: 14px;
              margin-top: 20px;
              color: rgba(255, 255, 255, 0.8);
            "
          >
            04.11.2024 by Pauline Borgogno
          </p>
        </div>
      </div>
    </section>

    <section class="bottle" style="margin-top: 50px">
      <div
        class="section"
        style="
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          gap: 23px;
          padding: 20px;
          max-width: 1200px;
          margin: auto;
        "
      >
        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_23.jpeg"
            alt="Winter getaway"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Voyage
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Évasion hivernale : l’excellence des séjours au ski avec Airelles
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_24.jpeg"
            alt="Mocha Mousse"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Femmes
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              Mocha Mousse : la couleur Pantone 2025 nous envoûte cette saison
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>

        <div
          style="
            flex: 1 1 calc(33.33% - 20px);
            margin: 0;
            background-color: #fff;
            overflow: hidden;
          "
        >
          <img
            src="/images/image_25.jpeg"
            alt="Books"
            style="width: 100%; height: 250px"
          />
          <div style="padding: 15px">
            <div
              style="
                color: #666;
                font-size: 14px;
                text-transform: uppercase;
                margin-bottom: 10px;
              "
            >
              Pop Culture
            </div>
            <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px">
              3 ouvrages mode à dévorer pour commencer l’année avec style
            </div>
            <div style="font-size: 14px; color: #999">
              31.12.2024 by Pauline Borgogno
            </div>
          </div>
        </div>
      </div>
    </section>


    @include('layouts.footer')

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

      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 50,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: 100,
          },
          0: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
        },
      });
    </script>
  </body>
</html>
