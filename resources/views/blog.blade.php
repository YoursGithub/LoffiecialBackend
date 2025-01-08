<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blog page</title>
</head>

<style>
  html, body {
    overflow-x: hidden;
    width: 100%;
    position: relative;
    margin: 0;
    padding: 0;
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
</style>



<body style="margin: 0; font-family: Arial, sans-serif; color: black; background-color: white;">
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
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">L'OFFICIEL ART</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">JOAILLERIE</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">BEAUTÉ</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">VOYAGE</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FEMMES</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">HOMMES</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">INDUSTRY TRENDS</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FOOD</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">SHOPPING</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">POP CULTURE</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FASHION WEEK</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">BEAUTÉ</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">VOYAGE</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FEMMES</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">HOMMES</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">INDUSTRY TRENDS</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FOOD</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">SHOPPING</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">POP CULTURE</a></li>
                <li style="margin-bottom: 15px;"><a href="categories.html" style="color: black; text-decoration: none;">FASHION WEEK</a></li>
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
    
    <div class="bottle" style="text-align: center; padding: 20px;">
        <div style="margin: 0 auto; max-width: 800px;">
            <h2 style="font-size: 32px; line-height: 1.4;">Dua Lipa et Callum Turner se seraient secrètement fiancés</h2>
        </div>
        <p style="margin: 0 auto; max-width: 600px; font-size: 16px; line-height: 1.6; color: #555;">La chanteuse et l’acteur semblent avoir officialisé leurs fiançailles pendant les fêtes. Entre amour discret et projets futurs, le couple enchante leurs fans avec cette grande annonce.</p>
        <p style="margin-top: 20px; font-size: 14px; color: #888;">30.12.2024 by Pauline Borgogno</p>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; padding: 20px;">
        <img src="/images/dua.jpeg" alt="" style="width: 100%; max-width: 500px; height: 230px;">
    </div>
    <div class="bottle" style="margin: 0 auto; max-width: 800px; padding: 20px;">
        <h4 style="font-weight: 100; font-size: 16px; line-height: 1.6;">Dua Lipa, connue pour ses nombreux succès musicaux, a récemment terminé la première partie de sa tournée dans les stades et est rentrée au Royaume-Uni pour les fêtes de fin d’année. Callum Turner, quant à lui, est reconnu pour ses rôles dans des films tels que <i>Queen and Country</i> et la série <i>Les Animaux fantastiques</i>, où il incarne Theseus Scamander. Le couple, qui a maintenu une certaine discrétion sur leur relation, semble plus épanoui que jamais. Des photos récentes les montrent heureux et amoureux, renforçant l’enthousiasme de leurs fans pour cette nouvelle étape de leur vie commune.</h4>
    </div>

    <section class="bottle" style="margin-top: 50px; padding: 20px;">
        <div class="section" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px; max-width: 1200px; margin: auto;">
            <div style="flex: 1 1 calc(33.33% - 20px);    overflow: hidden;">
                <img src="/images/image_23.jpeg" alt="Winter getaway" style="width: 100%; height: 250px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Voyage</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px;">Evasion hivernale : l’excellence des séjours au ski avec Airelles</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>
            <div style="flex: 1 1 calc(33.33% - 20px);    overflow: hidden;">
                <img src="/images/image_24.jpeg" alt="Mocha Mousse" style="width: 100%; height: 250px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Femmes</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px;">Mocha Mousse : la couleur Pantone 2025 nous envûte cette saison</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>
            <div style="flex: 1 1 calc(33.33% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 250px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>
        </div>
    </section>

    <div 
    style="position: fixed; top: 50%; left: 40px; transform: translateY(-50%); display: block;" 
    class="social-bar">
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

    <section style="position: relative;
      width: 100%;
      /* ; */
      /* height: 120vh; */
      ">

    <div style="background-color: black; ">
        <div style="height: 10px;"></div>
            <div style="margin: 50px;">
                <h4 style=" color: white; text-align: center;">Recommandé pour vous</h4>
                </div>
        <div class="section" style="margin-top:200px; display:  flex; flex-wrap: wrap; justify-content: space-between; gap: 25px; max-width: 1270px; margin: auto;">
            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_23.jpeg" alt="Winter getaway" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Voyage</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">Evasion hivernale : l’excellence des séjours au ski avec Airelles</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>
            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_24.jpeg" alt="Mocha Mousse" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Femmes</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">Mocha Mousse : la couleur Pantone 2025 nous envûte cette saison</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>
            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>

            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>

            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>

            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>

            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
                </div>
            </div>

            <div style="flex: 1 1 calc(25% - 20px);    overflow: hidden;">
                <img src="/images/image_25.jpeg" alt="Books" style="width: 100%; height: 230px;">
                <div style="padding: 15px;">
                    <div style="color: #666; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Pop Culture</div>
                    <div style="font-size: 18px; font-weight: bold; margin: 0 0 10px; color:white;">3 ouvrages mode à dévorer pour commencer l’année avec style</div>
                    <div style="font-size: 14px; color: #999;">31.12.2024 by Pauline Borgogno</div>
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
