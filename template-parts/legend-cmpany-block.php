<style>
  .legend-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  @media (max-width: 1250px) {
    .legend-wrapper {
      display: flex;
      flex-direction: column;
    }

    .legend-content {
      max-width: 40rem;
    }
  }

  @media (max-width: 550px) {
    .legend-photo {
      position: relative;
      width: auto;
      height: 350px;
    }
  }
</style>





<section class="legend-company-block section founder">
  <div class="container">

    <div class="legend-wrapper founder-content-wrapper">
      <img src="<?= $legend_photo; ?>" alt="логотип компании" class="legend-photo">
      <div class="founder-content legend-content">
        <div class="separator separator-section-steps"></div>
        <h2 class="section-title">
          <?= $legend_title; ?>
        </h2>
        <p class="founder-text legend-text">
          <?= $legend_text ?>
        </p>
      </div>

    </div>
  </div>
</section>