<section class="cta">
  <div class="bg-grey section-cta">
    <picture>
      <source type="image/webp" srcset="./img/cta.webp">
      <source type="image/jpeg" srcset="./img/cta.png">
      <img src="./img/cta.png" alt="call to action" class="cta-image">
    </picture>
    <div class="cta-form-wrapper container">
      <form action="./handler.php" method="POST" class="cta-form">
        <h2 class="section-title cta-form-title">
          Хотите сотрудничать?
        </h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
          вопросы и поможем даже в самых сложных случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input id="user-name" name="username" type="text" class="input" placeholder=" " required />
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <!-- /.input-group -->
          <div class="input-group">
            <input id="user-phone" name="userphone" type="tel" class="input phone-mask" placeholder=" " required />
            <label class="input-group-label" for="user-phone">Номер телефона</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">Отправить заявку</button>
          <div class="notify">
            <img src="./img/svg/shield.svg" alt="shield" width="14" height="14" class="notify-icon">
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
              конфиденциальность информации!
            </p>
          </div>
        </div>
        <!-- /.cta-form-footer -->
      </form>
    </div>
    <!-- /.cta-form-wrapper -->
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <svg class="footer-logo">
        <use href="./img/sprite.svg#logo"></use>
      </svg>
      <a href="tel:+79236861014" class="footer-phone">+7 (923) 686-10-14</a>

      <div class="footer-info">
        <!-- <svg class="address-svg">
                        <use href="./img/sprite.svg#address"></use>
                    </svg> -->
        <img src="./img/svg/address.svg" alt="address">
        <address class="footer-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="footer-info">
        <!-- <svg class="mail-svg">
                        <use href="./img/sprite.svg#mail"></use>
                    </svg> -->
        <img src="./img/svg/mail.svg" alt="mail">
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <img src="./img/svg/vk.svg" alt="vk" class="footer-social-icon" width="24" height="24">
        </a>
        <a href="#" class="footer-social-link">
          <img src="./img/svg/inst.svg" alt="instagram" class="footer-social-icon" width="24" height="24">
        </a>
      </div>
      <!-- /.footer-social -->

    </div>
    <!-- /.footer-top -->
  </div>
  <!-- /.container -->
  <hr class="footer-seporator" />
  <div class="container">
    <div class="footer-bottom">
      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Контрактное производство</h2>
        <ul class="footer-menu-list footer-menu-column-2">
          <li class="footer-menu-item">
            <a href="./product-avtohim.php" class="footer-menu-link">
              Автомобильная химия
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">
              Бытовая химия
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">
              Дезинфицирующие средства
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">
              Пищевые аэрозоли
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">
              Косметическая продукция
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">
              Краски аэрозольные
            </a>
          </li>
        </ul>
      </div>
      <!-- /.footer-menu-wrapper -->

      <div class="footer-menu-wrapper">
        <h2 class="footer-menu-title">Собственные марки</h2>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="./avtohim-ag.php" class="footer-menu-link">
              Автохимия AG-Tech
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="./avtohim-ag.php" class="footer-menu-link">
              Автохимия AP
            </a>
          </li>
        </ul>
      </div>
      <div class="footer-menu-wrapper">
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="./about.php" class="footer-menu-link footer-menu-link-bold">
              О компании
            </a>
          </li>
          <li class="footer-menu-item ">
            <a href="./blog.php" class="footer-menu-link footer-menu-link-bold">
              Новости
            </a>
          </li>
          <li class="footer-menu-item">
            <a href="./contact.php" class="footer-menu-link footer-menu-link-bold">
              Контакты
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container -->
  <hr class="footer-seporator" />
  <div class="container">
    <div class="footer-wrapper footer-bottom-titri">
      <div class="footer-legal">
        <p class="footer-copyright">
          &copy
          <?php echo date('Y') ?> «Aliance Production». Все права защищены.
        </p>
        <a href="./postics.php" class="footer-policy">Политики конфиденциальности</a>
      </div>
      <!-- /.footer-legal -->
      <div class="footer-author">
        <span class="made-in">Сделано в</span>
        <img src="./img/svg/ruso.svg" alt="ruso" class="footer-author-icon" width="52" height="11">
      </div>
    </div>
    <!-- /.footer-wrapper -->
  </div>
  <!-- /.container -->
</footer>
<!-- /.footer -->

<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <img src="./img/svg/close.svg" alt="" class="close-icon" width="24" height="24">
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
      поможем даже в самых сложных случаях!
    </p>
    <form action="./handler.php" method="POST" class="modal-form">
      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input id="modal-user-name" type="text" name="username" class="input modal-input" placeholder=" " required />
          <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
        </div>
        <!-- /.input-group -->
        <div class="input-group modal-input-group">
          <input id="modal-user-phone" type="tel" name="userphone" class="input modal-input phone-mask" placeholder=" " required />
          <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
        </div>
        <!-- /.input-group -->
      </div>
      <!-- /.input-group-wrapper -->
      <div class="modal-form-footer">
        <button type="submit" class="button modal-form-button">Отправить заявку</button>
        <div class="notify">
          <img src="./img/svg/shield.svg" alt="shield" width="14" height="14" class="notify-icon">
          <p class="notify-text">
            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
            конфиденциальность информации!
          </p>
        </div>
      </div>
      <!-- /.modal-form-footer -->
    </form>
    <!-- /.modal-form -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal" id="alert-modal">
  <div class="modal-dialog alerrt-modal-dialog">
    <img src="./img/thanks.png" alt="спасибо" class="alert-modal-image" width="285" height="245">
    <h2 class="modal-title alert-modal-title">Спасибо за заявку!</h2>
    <a href="#" class="modal-close alert-modal-close" data-toggle="modal" data-target="#alert-modal">
      <img src="./img/svg/close.svg" alt="" class="close-icon" width="24" height="24">
    </a>
    <p class="modal-text alert-modal-text">
      Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <a href="./index.php" class="button modal-form-button alert-modal-link">Вернуться на главную</a>
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="./js/just-validate.production.min.js"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/main.js"></script>
</body>

</html>