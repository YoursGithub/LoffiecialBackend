<style>
  .modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
  }

  .modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.7);
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transition: all 0.3s ease-in-out;
    text-align: center;
    width: 80%;
  max-width: 600px;
  }

  .modal.show {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
  }

  .modal h2 {
    margin: 0;
    color: #2d3748;
    font-size: 24px;
  }

  .modal p {
    margin: 1rem 0;
    color: #4a5568;
    font-size: 16px;
  }

  .close-btn {
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #4299e1;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
  }

  .close-btn:hover {
    background-color: #3182ce;
  }

  .show-modal-btn {
    padding: 1rem 2rem;
    background-color: #4299e1;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
</style>

  <div class="modal-overlay">
    <div class="modal">
      <h2>🎉 Success!</h2>
      <p>Thanks for subscribing!</p>
      <button class="close-btn">Close</button>
    </div>
  </div>


<div style="display: flex; width: 100%; height: 100%;" class="main-container">
    

  <div style="width: 50%; background-color: #1c1c1c; padding: 40px 20px; color: white;">
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 40px; font-weight: 300;">Magazines</h2>
    
   
    <div class="swiper" style="width: 100%; margin: 0 auto;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1713967720-cover_jackson_wang_eshop.jpg" alt="Magazine Cover 1" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Precious Issue</div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1711544836-e-shop_fr.jpg" alt="Magazine Cover 2" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Creative Issue</div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1713341482-img_4043.jpeg" alt="Magazine Cover 3" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Creative Issue</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1717057274-img_5535.jpeg" alt="Magazine Cover 2" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Creative Issue</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1719301890-img_6568.webp" alt="Magazine Cover 2" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Creative Issue</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div style="cursor: pointer;">
            <img src="/images/1713967720-cover_jackson_wang_eshop.jpg" alt="Magazine Cover 2" style="width: 100%; height: 250px; display: block;">
            <div style="text-align: center; margin-top: 15px; text-transform: uppercase; font-size: 12px; font-weight: 300;">The Creative Issue</div>
          </div>
        </div>
      </div>
      
      <div class="swiper-button-prev" style="color: white;"></div>
      <div class="swiper-button-next" style="color: white;"></div>
    </div>
  </div>

  <div style="width: 50%; background-color: #2d2d2d; padding: 40px 20px; color: white;">
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 40px; font-weight: 300;">Newsletter</h2>
    
    <div style="max-width: 500px; margin: 0 auto; padding: 0 20px;">
      <div style="margin-bottom: 20px;">
        <input type="text" placeholder="Name" style="width: 100%; padding: 10px; background: transparent; border: none; border-bottom: 1px solid white; color: white; margin-bottom: 15px; outline: none;">
        <input type="text" placeholder="First Name" style="width: 100%; padding: 10px; background: transparent; border: none; border-bottom: 1px solid white; color: white; margin-bottom: 15px; outline: none;">
        <input type="email" placeholder="E-Mail" style="width: 100%; padding: 10px; background: transparent; border: none; border-bottom: 1px solid white; color: white; margin-bottom: 15px; outline: none;">
      </div>
      
      <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
        <input type="checkbox" id="privacy" style="margin-right: 10px; margin-top: 3px;">
        <label for="privacy" style="text-align:center; font-size: 16px; color: #aaa;">I hereby authorize the processing of my personal data for the purposes of the <a style="color:white;" href="">Privacy Policy</a></label>
      </div>
      
      <div style="display: flex; justify-content: center; align-items: center;">
        <button class="show-modal-btn" style="padding: 12px; background-color: white; cursor: pointer; text-transform: uppercase; font-size: 14px; color: black; border: 1px solid black;">SUBSCRIBE</button>
      </div>
      
    </div>
  </div>
</div>

<section style="position: relative;
    width: 100%;
    /* min-width: 410px; */
 background-color: #131312">
      <div>
        <a href="/">
        <div
          style="display: flex; justify-content: center; align-items: center"
        >
          <img
            src="/images/Lofficiel Peru.png"
            alt=""
            width="400"
            height="400"
            style="margin-top: -100px"
          />
        </div>
        </a>

        <div
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
          "
        >
          <div style="margin-top: -230px; display: flex; gap: 10px">
            <a target="_blank" href="https://www.instagram.com/lofficielperu/">
            <i
              class="fa-brands fa-instagram fa-lg"
              style="color: #ffffff; margin-right: 10px"
            ></i>
            </a>
          </div>
        </div>

        <div
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
          "
        >
          <a
            class="text-red-600"
            href="mailto:contact@lofficiel.pe"
            style="color: white; text-decoration: none; margin-top: -60px; margin-bottom: 10px; border-bottom: 1px solid currentColor; display: inline-block;"
            >Contact</a
          >
          <a
            href="https://www.iubenda.com/privacy-policy/8009358"
            style="color: white; text-decoration: none; margin-top: -60px; margin-bottom: 10px; border-bottom: 1px solid currentColor; display: inline-block;"
            >Privacy Policy</a
          >
          <a
            href="https://www.iubenda.com/privacy-policy/8009358/cookie-policy"
            style="color: white; text-decoration: none; margin-top: -60px; margin-bottom: 10px; border-bottom: 1px solid currentColor; display: inline-block;"
            >Cookie Policy</a
          >
        </div>
      </div>
    </section>


    <script>
      const modalOverlay = document.querySelector('.modal-overlay');
      const modal = document.querySelector('.modal');
      const showModalBtn = document.querySelector('.show-modal-btn');
      const closeBtn = document.querySelector('.close-btn');
  
      function showModal() {
        modalOverlay.style.display = 'block';
        setTimeout(() => {
          modal.classList.add('show');
        }, 10);
      }
  
      function hideModal() {
        modal.classList.remove('show');
        setTimeout(() => {
          modalOverlay.style.display = 'none';
        }, 300);
      }
  
      showModalBtn.addEventListener('click', showModal);
      closeBtn.addEventListener('click', hideModal);
      modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) hideModal();
      });
    </script>