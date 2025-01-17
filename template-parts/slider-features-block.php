<style>
  .header-features {
    color: #292D33;
  }

  .header-faetures-item {
    border: 1px solid rgba(235, 235, 240, 1.2);
  }

  .swiper {
    margin-top: -15rem;
  }

  .slider-to-product {
    margin-top: -4rem;
  }

  @media (max-width: 992px) {

    .slider-button-prev,
    .slider-button-next {
      border: 1px solid rgba(235, 235, 240, 1.2);
    }
  }
</style>

<div class="container">
  <!-- Основной блок слайдера -->
  <div class="swiper features-slider <?= $slider_to_product; ?>">
    <!-- Обертка слайдера -->
    <ul class=" swiper-wrapper header-features">
      <!-- Слайды -->
      <li class="swiper-slide header-faetures-item"><svg class="time-svg" width="36" height="36">
          <use href="./img/sprite.svg#time"></use>
        </svg>
        <p class="header-features-text">
          Непрерывная работа c 2017 года
        </p>
      </li>
      <li class="swiper-slide header-faetures-item"><svg class="sertificate-svg" width="29" height="29">
          <use href="./img/sprite.svg#sertificate"></use>
        </svg>
        <p class="header-features-text">
          Вся продукция сертифицирована
        </p>
      </li>
      <li class="swiper-slide header-faetures-item"><svg class="control-svg" width="36" height="36">
          <use href="./img/sprite.svg#control"></use>
        </svg>
        <p class="header-features-text">
          Контроль качества на всех этапах
        </p>
      </li>
      <li class="swiper-slide header-faetures-item"><svg class="deliveri-svg" width="36" height="36">
          <use href="./img/sprite.svg#deliveri"></use>
        </svg>
        <p class="header-features-text">
          Возможны поставки по всей России
        </p>
      </li>
      <li class="swiper-slide header-faetures-item">
        <svg class="speed-svg" width="36" height="36">
          <use href="./img/sprite.svg#speed"></use>
        </svg>
        <p class="header-features-text">
          Оперативное производство
        </p>
      </li>
    </ul>


    <!-- Кнопки навигации -->
    <div class="slider-buttons">
      <div class="slider-button-prev">
        <!-- <svg class="prev-svg" width="36" height="36">
                            <use href="./img/sprite.svg#prev"></use>
                        </svg> -->
        <img src="./img/legend/left.png" alt="prev">
      </div>
      <div class="slider-button-next">
        <!-- <svg class="next-svg" width="36" height="36">
                            <use href="./img/sprite.svg#next"></use>
                        </svg> -->
        <img src="./img/legend/rightsvg.svg" alt="next">
      </div>
    </div>
  </div>
  <!-- END Slider header-features swiper -->
</div>