<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Information</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-sp-img.jpg" alt="黄色い魚の群れの中をダイバーが泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--タブ-->
<div class="information-page information-page-top">
  <div class="information-page__inner inner">
    <div class="information-page__tab information-tab">
      <ul class="information-tab__list">
        <li id="tab1" class="information-tab__button js-tab-button is-active">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo.svg"
              alt="飛行機のアイコン" />
          </div>
          <h2 class="information-tab__title">お寺・<br class="md-show" />遺跡巡り</h2>
        </li>
        <li id="tab2" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo.svg"
              alt="飛行機のアイコン" />
          </div>
          <h2 class="information-tab__title">アクテビ<br class="md-show" />ティ</h2>
        </li>
        <li id="tab3" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo.svg"
              alt="飛行機のアイコン" />
          </div>
          <h2 class="information-tab__title">エンター<br class="md-show" />テイメント</h2>
        </li>
      </ul>
      <div class="information-tab__contents">
        <div class="information-tab__content js-tab-content is-active">
          <ul class="information-tab__cards information-cards">
            <li id="tab1" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">お寺・遺跡巡り</h3>
                <p class="information-card__text">
                  歴史と文化が息づくタイのお寺や遺跡を巡るツアー。荘厳な建築や美しい仏像を眺めながら、タイ仏教の魅力に触れてみませんか？日本語ガイドが分かりやすく解説し、初心者でも安心して楽しめます。静寂な空間で心を落ち着かせ、神聖な雰囲気を体験できる貴重な時間。ゆったりとしたペースで巡るため、リラックスしながら観光を満喫できます！
                </p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img1.jpg"
                  alt="カラフルなお寺が並んでいる様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab2" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">アクテビティ</h3>
                <p class="information-card__text">
                  心も体も癒される極上の体験を楽しみませんか？本格的なスパやマッサージでリラックスしたり、大自然の中でアクティブに過ごしたり、気分に合わせたプランをご用意。リゾートならではの贅沢なひとときを満喫し、旅の疲れを癒しましょう。非日常の空間で、特別なリフレッシュ体験をお楽しみください！
                </p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img2.jpg"
                  alt="女性がオイルマッサージを受けている様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab3" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">エンターテイメント</h3>
                <p class="information-card__text">
                  特別な体験で旅の思い出をさらに鮮やかに！夜空を彩るコムローイ祭りや伝統舞踊のショー、幻想的なナイトマーケットなど、多彩なエンターテイメントをご用意。文化に触れながら、ワクワクする体験をお楽しみください。美しい景色と感動的な瞬間を体験しましょう！
                </p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img3.jpg"
                  alt="カップルがコームーロイをしている様子" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>