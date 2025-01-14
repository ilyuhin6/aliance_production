<style>
  .legend-product-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.875rem;
  }

  @media (max-width: 1250px) {
    .legend-product-wrapper {
      flex-direction: column-reverse;
    }
  }
</style>



<section class="section legend-product">
  <div class="container">
    <div class="legend-product-wrapper">
      <div class="founder-content legend-product-content">
        <div class="separator separator-section-steps"></div>
        <h2 class="section-title">
          <?= $legend_product_title; ?>
        </h2>
        <p class="founder-text legend-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
        </p>
        <p class="founder-text legend-text">
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
        </p>

        <ul class="clients-list">
          <li class="clients-list-item">
            <img src="<?= $legend_product_photo; ?>" alt="Химические производства" width="30" height="30" class="clients-list-icon">
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
          <li class="clients-list-item">
            <img src="./img/product svg/cosmetic.svg" alt="Косметические средства" width="30" height="30" class="clients-list-icon">
            Косметические средства
          </li>
          <li class="clients-list-item">
            <img src="./img/product svg/car-cosm.svg" alt="Автомобильная косметика" width="30" height="30" class="clients-list-icon">
            Автомобильная косметика
          </li>
        </ul>

      </div>
      <img src="./img/legend/legend-product.jpg" alt="наше производство">
    </div>
  </div>
</section>