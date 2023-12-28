<?php
    /*
    Template Name: Главная страница
    */
?>

<?php get_header(); ?>


<main class="main-index" data-test="main">

<!-- hero -->
<section class="hero" data-test="hero" style="
  background: url('<?php echo get_template_directory_uri(); ?>/images/hero-background-mask.svg') no-repeat center bottom -1px, 
              url('<?php the_field('hero_bg'); ?>') no-repeat center/cover;
">
  <h1 class="visually-hidden">Добро пожаловать в Седону!</h1>
  <img class="hero-img" src="<?php the_field('hero_img'); ?>" width="458" height="352" alt="Добро пожаловать в Седону.">
</section>

<!-- advantages -->
<section class="advantages" data-test="advantages">
  <h2 class="visually-hidden">преимущества.</h2>

  <!-- Использован плагин Advanced Custom Fields (ACF) -->
  <p class="advantages-intro"><?php echo wp_kses_post ( get_field('advantages_intro') ); ?></p>
  <p class="advantages-text"><?php echo esc_html( get_field('advantages_text') ); ?></p>

  <ul class="advantages-list">
    <li class="advantages-item advantages-item--blue">
      <div class="item-blue-wrapper">
        <h3 class="advantages-item-title advantages-item-title--blue">Настоящий городок</h3>
        <p class="advantages-item-text">Седона — не аттракцион для туристов, там течёт своя жизнь</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/city-sedona.jpg" alt="городок Седона." width="800" height="385">
    </li>
    <li class="advantages-item advantages-item--light">
      <h3 class="advantages-item-title">Небольшая площадь</h3>
      <p class="advantages-item-text">Все достопримечательности находятся очень близко</p>
    </li>
    <li class="advantages-item">
      <h3 class="advantages-item-title">Красивая дорога</h3>
      <p class="advantages-item-text">Ехать в Седону из Лас-Вегаса совсем не скучно!</p>
    </li>
    <li class="advantages-item advantages-item--light">
      <h3 class="advantages-item-title">Мало туристов</h3>
      <p class="advantages-item-text">Большинство едет в Гранд Каньон и толпится там</p>
    </li>
    <li class="advantages-item advantages-item--blue">
      <img src="<?php echo get_template_directory_uri(); ?>/images/devil-bridge.jpg" alt="Мост дьявола." width="800" height="385">
      <div class="item-blue-wrapper">
        <h3 class="advantages-item-title advantages-item-title--blue">Там есть<br> мост дьявола</h3>
        <p class="advantages-item-text">Да, по нему можно пройти! Если вы осмелитесь, разумеется</p>
      </div>
    </li>
  </ul>
</section>

<!-- features -->
<section class="features" data-test="service">
  <h2 class="features-title">Приезжайте в Седону отдохнуть<br> в комфорте и уюте!</h2>
  <p class="features-text">Опытный персонал и качественное обслуживание!</p>
  <ul class="features-list">
    <li class="features-item features-item--housing">
      <h3 class="features-item-title">Жильё</h3>
      <p class="features-item-text">Рекомендуем пожить в&nbsp;настоящем мотеле, всё&nbsp;как&nbsp;в&nbsp;кино!
      </p>
    </li>
    <li class="features-item features-item--food">
      <h3 class="features-item-title">Еда</h3>
      <p class="features-item-text">Всегда заказывайте топовый&nbsp;фирменный&nbsp;бургер, вы не разочаруетесь!
      </p>
    </li>
    <li class="features-item features-item--souvenirs">
      <h3 class="features-item-title">Сувениры</h3>
      <p class="features-item-text">Не только китайского, но&nbsp;и&nbsp;настоящего местного производства!</p>
    </li>
  </ul>
</section>

<!-- search -->
<section class="search" data-test="search">
  <h2 class="visually-hidden">Поиск гостиницы в Седоне.</h2>
  <p class="search-intro">Заинтересовались?</p>
  <p class="search-text">Укажите предполагаемые даты поездки,<br> и мы покажем вам лучшие предложения гостиниц в
    Седоне</p>
  <a class="search-link" href="#">поиск гостиницы в седоне</a>
</section>

<!-- subscription -->
<section class="subscription" data-test="subscribe">
  <h2 class="subscription-title">Подпишитесь на рассылку</h2>
  <p class="subscription-text">Только полезная информация и никакого спама, честное бойскаутское!</p>
  <form class="subscription-form" action="https://echo.htmlacademy.ru/" method="post">
    <input class="subscription-form-email" type="email" name="email" placeholder="Ваш e-mail" required aria-label="Ваш e-mail">
    <button class="subscription-form-btn" type="submit">Подписаться</button>
  </form>
</section>
</main>


<?php get_footer(); ?>
