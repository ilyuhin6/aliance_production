<style>
  .legend-photo {
    position: absolute;
  }

  @media (max-width: 1250px) {
    .legend-photo {
      position: relative;
      /* align-content: center; */
      /* text-align: center; */
      display: block;
      margin: 0 auto;

    }

    .legend-content {
      max-width: 63rem;
    }
  }

  @media (max-width: 550px) {
    .legend-photo {
      position: relative;
      width: 350px;
      height: 350px;
    }
  }
</style>





<section class="legend-company-block section founder">
  <div class="container">
    <img src="<?= $legend_photo; ?>" alt="логотип компании" class="legend-photo">
    <div class="legend-wrapper founder-content-wrapper">
      <div class="founder-content legend-content">
        <div class="separator separator-section-steps"></div>
        <h2 class="section-title">
          <?= $legend_title; ?>
        </h2>
        <p class="founder-text legend-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
  </div>
</section>