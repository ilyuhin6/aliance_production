<style>
  .gendir-avtohim {
    position: relative;
  }

  .catalog {
    background-image: url(./img/legend/catalog.png);
    position: absolute;
    width: 960px;
    height: 676px;
    right: 0;
    bottom: 0;
  }

  .bg-grey {
    padding-top: 4rem;
    padding-bottom: 6rem;
  }

  .wrapper-gendir-avtohim {
    max-width: 40.625rem;
  }

  .gendir-avtohim-text {
    margin-bottom: 1.875rem;
  }

  .gendir-avtohim-list {
    margin-bottom: 3.125rem;
  }

  @media (max-width: 1635px) {
    .catalog {
      display: none;
    }
  }

  @media (max-width: 500px) {
    .catalog-button {
      width: 100%;
    }
  }
</style>


<section class="gendir-avtohim section">
  <div class="bg-grey">
    <div class="catalog"></div>
    <div class="container">
      <div class="wrapper-gendir-avtohim">
        <div class="separator separator-section-steps"></div>
        <h2 class="section-title">
          Генеральный дистрибьютор премиальной
          автохимии
        </h2>
        <p class="founder-text legend-text gendir-avtohim-text">Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.</p>
        <ul class="clients-list gendir-avtohim-list">
          <li class="clients-list-item">
            <img src="./img/product svg/him.svg" alt="Химические производства" width="30" height="30" class="clients-list-icon">
            Химические производства
          </li>
          <li class="clients-list-item">
            <img src="./img/product svg/car.svg" alt="Автомойки" width="30" height="30" class="clients-list-icon">
            Автомойки
          </li>
          <li class="clients-list-item">
            <img src="./img/product svg/eat.svg" alt="Пищевая продукция" width="30" height="30" class="clients-list-icon">
            Пищевая продукция
          </li>
          <li class="clients-list-item">
            <img src="./img/product svg/brush.svg" alt="Лаки и краски" width="30" height="30" class="clients-list-icon">
            Лаки и краски
          </li>
        </ul>
        <button class="button catalog-button" data-toggle="modal" data-target="#feedback-modal">
          <img src="./img/legend/save.svg" alt="скачать каталог">
          <span class="button-text">скачать каталог</span>
        </button>
      </div>
    </div>
  </div>
</section>