<?php
$page_title = 'Контакты';
$header_style = 'header-page';
include_once('./header-page.php');
// header
?>

<div class="section">
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
    </div>
  </div>
  <div class="karta">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab7aa19f04691fc88619c268e2f69dbb334c29af6ec79acbbfa2ce39dbef52631&amp;width=auto&amp;height=436&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>
</div>

<?php
include_once('./footer.php'); ?>