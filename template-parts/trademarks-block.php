<section class="section trademark section-trademark">
  <div class="container">
    <!-- <div class="separator separator-section-steps"></div> -->
    <!-- <h2 class="section-title">собственные торговые марки</h2> -->
    <?php
    if (!empty($block_title)) {
      echo '<div class="separator separator-section-steps"></div>';
      echo '<h2 class="section-title">' . $block_title . '</h2>';
    }
    ?>
    <div class="trademark-cards">
      <div class="trademark-card">
        <img src="./img/svg/ag-tech.svg" alt="AGTECH" class="trademark-card-logo" width="140" height="121">
        <!-- <svg class="trademark-card-logo">
                        <use href="./img/sprite.svg#AGTECH"></use>
                    </svg> -->
        <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
      <div class="trademark-card">
        <img src="./img/svg/logo-blue.svg" alt="AP" class="trademark-card-logo" width="103" height="140">
        <!-- <svg class="trademark-card-logo">
                        <use href="./img/sprite.svg#AP"></use>
                    </svg> -->
        <h3 class="trademark-card-title">Автохимия AP</h3>
        <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии,
          рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
      </div>
    </div>
  </div>
</section>