<?php
$page_title = 'Современная методология разработки одухотворила всех причастных';
$header_style = 'header-content-post';
include_once('./header-dlog-content.php');
?>


<style>
  .content-blog-wraper {
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;
  }

  .blog-content-text {
    max-width: 70rem;
    position: relative;
  }

  .blog-text {
    font-size: 1rem;
    font-weight: 400;
    color: #292D33;
    line-height: 160%;
  }

  .social-twit {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .blog-social-svg {
    margin-right: 10px;

  }


  @media (max-width:1520px) {
    .legend-photo-content {
      display: block;
      width: 750px;
      height: 550px;
    }
  }

  @media (max-width:830px) {
    .legend-photo-content {
      display: block;
      width: 500px;
      height: 350px;
    }

    .content-blog-wraper {
      display: flex;
      flex-direction: column;
    }
  }

  @media (max-width:500px) {
    .legend-photo-content {
      display: block;
      width: 550px;
      height: 150px;
    }
</style>

<section class="section founder blog-content">
  <div class="container">
    <div class="content-blog-wraper">
      <div class="blog-content-text">
        <h2 class="section-title">Реализация намеченных плановых заданий</h2>
        <p class="blog-text">
          Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же укрепление и развитие структуры в значительной степени обуславливает создание форм развития. С другой стороны укрепление и развитие структуры способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. Повседневная практика показывает, что укрепление и развитие структуры требуют определения и уточнения систем массового участия. Таким образом начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.
        </p>
        <h3 class="blog-smail-title">Равным образом консультация с широким активом</h3>
        <p class="blog-text">
          Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить значение дальнейших направлений развития. Разнообразный и богатый опыт реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. С другой стороны консультация с широким активом позволяет оценить значение форм развития. Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке соответствующий условий активизации. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.
        </p>
        <img src="./img/blog/image-post.jpg" alt="картинка поста" width="960" height="550" class="legend-photo-content">
        <p class="blog-content-title-list">
          Равным образом консультация с широким активом:
        </p>
        <ul class="blog-content-list">
          <li class="blog-content-item">Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций.</li>
          <li class="blog-content-item">С другой стороны консультация с широким активом позволяет оценить значение форм развития.</li>
          <li class="blog-content-item">Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет выполнять важные задания.</li>
        </ul>
        <h3 blog-smail-title>Равным образом консультация с широким активом</h3>
        <p class="blog-text">
          С другой стороны рамки и место обучения кадров влечет за собой процесс внедрения и модернизации систем массового участия. Равным образом консультация с широким активом в значительной степени обуславливает создание дальнейших направлений развития. Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Равным образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации дальнейших направлений развития.
        </p>
      </div>
      <div class="social-twit">
        <span class="founder-text">Поделиться:</span>
        <div class="social-twit-icon">
          <img src="./img/social/vk.svg" alt="вк" class="blog-social-svg">
          <img src="./img/social/fs.svg" alt="фейсбук" class="blog-social-svg">
          <img src="./img/social/twiter.svg" alt="твитер" class="blog-social-svg">
          <img src="./img/social/G+r.svg" alt="гугол" class="blog-social-svg">
        </div>
      </div>

    </div>


  </div>
</section>

<?php include_once('./template-parts/slider-research-block.php'); ?>

<?php include_once('./footer.php'); ?>