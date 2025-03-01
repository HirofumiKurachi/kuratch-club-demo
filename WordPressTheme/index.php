<?php get_header(); ?>
<main>
  <!--メインビュー-->
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__title-sub">DIVING</h2>
        <h3 class="mv__text">into the ocean</h3>
      </div>
      <div class="mv__slider swiper js-mv-swiper">
        <div class="mv__slider swiper-wrapper">
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img1-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img1.jpg" alt="船が砂浜に停泊している様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img2-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img2.jpg" alt="二頭の親子ゾウ寄り添っている様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img3-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img3.jpg" alt="山の上の寺院が夕日で赤く染まっている様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img4-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img4.jpg"
                alt="2台のトゥクトゥクがヤワラートのネオンの前に置いてある様子" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--キャンペーン-->
  <section class="campaign campaign-top">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <p class="section-title__sub">Campaign</p>
        <h2 class="section-title__main">キャンペーン</h2>
      </div>
      <div class="campaign__container">
        <div class="campaign__container-slider swiper js-campaign-swiper">
          <div class="campaign__container-wrapper swiper-wrapper">
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img1.jpg"
                    alt="バンコク三大寺院＋アユタヤ遺跡ツアー" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">お寺・遺跡巡り</p>
                    <p class="campaign-card__title-sub">お寺・遺跡巡り</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥25,000</p>
                      <p class="campaign-card__price-new">¥20,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img2.jpg" alt="タイ式全身マッサージ" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">アクテビティ</p>
                    <p class="campaign-card__title-sub">アクテビティ</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥58,000</p>
                      <p class="campaign-card__price-new">¥40,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img3.jpg"
                    alt="寺院巡り＋水上マーケットツアー" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">アクテビティ</p>
                    <p class="campaign-card__title-sub">ナイトダイビング</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥15,000</p>
                      <p class="campaign-card__price-new">¥9,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img4.jpg" alt="【クラビ発】島巡りツアー" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">エンターテイメント</p>
                    <p class="campaign-card__title-sub">エンターテイメント</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥25,000</p>
                      <p class="campaign-card__price-new">¥20,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="campaign__container-button-box">
          <div class="campaign__container-button-prev"></div>
          <div class="campaign__container-button-next"></div>
        </div>
      </div>
      <div class="campaign__button-layout">
        <a href="campaign-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span></a>
      </div>
    </div>
  </section>
  <!--アバウトアス-->
  <section class="about-us about-us-top">
    <div class="about-us__inner inner">
      <div class="about-us__title section-title">
        <p class="section-title__sub">About us</p>
        <h2 class="section-title__main">私たちについて</h2>
      </div>
      <div class="about-us__img-box">
        <div class="about-us__img">
          <div class="about-us__img-small">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img1.jpg" alt="サングラスの男性がピースしている様子"
              class="about-us-page__img1" />
          </div>
          <div class="about-us__img-big">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img3.jpg"
              alt="ボートが何艇も停泊している浜辺に夕陽が沈もうとしている様子" class="about-us-page__img2" />
          </div>
        </div>
      </div>
      <div class="about-us__container">
        <h3 class="about-us__head">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
        <div class="about-us__container-box">
          <p class="about-us__text">
            私たちは、ただの旅行ではなく 心に残る体験
            を提供することを大切にしています。<br />美しい自然、異文化との出会い、新しい挑戦——旅は人生を豊かにする最高の冒険です。<br />世界をもっと深く感じ、忘れられない思い出を一緒に作りませんか？<br />あなたの次の旅が、最高の冒険になりますように。
          </p>
          <div class="about-us__button-layout">
            <a href="aboutus-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                class="button-arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--インフォメーション-->
  <section class="information information-top">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__sub">Information</p>
        <h2 class="section-title__main">ツアー情報</h2>
      </div>
      <div class="information__container">
        <div class="information__img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information-img.jpg" alt="バンコク三大寺院＋アユタヤ遺跡ツアー" />
        </div>
        <div class="information__box">
          <h3 class="information__box-title">お寺・遺跡巡り</h3>
          <p class="information__text">
            歴史と文化が息づくタイのお寺や遺跡を巡るツアー。荘厳な建築や美しい仏像を眺めながら、タイ仏教の魅力に触れてみませんか？日本語ガイドが分かりやすく解説し、初心者でも安心して楽しめます。静寂な空間で心を落ち着かせ、神聖な雰囲気を体験できる貴重な時間。ゆったりとしたペースで巡るため、リラックスしながら観光を満喫できます！
          </p>
          <div class="information__button-layout">
            <a href="information-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                class="button-arrow"></span> </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--ブログ-->
  <section class="blog blog-top">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__sub section-title__sub--white">Blog</p>
        <h2 class="section-title__main section-title__main--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img2.jpg" alt="山に囲まれた海がある街の様子" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2025-02-28">2025.02/28</time>
              <h3 class="blog-card__text">自然を感じに</h3>
              <p class="blog-card__text-sub">
                朝の静けさの中、広がる雄大な山々を眺めに行ってきました。霧がかかった幻想的な風景と、澄んだ空気に包まれながら、心が洗われるような気分を味わいました。自然の中に身を置くと、</p>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img3.jpg" alt="ムエタイ選手が練習している様子" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2025-02-26">2025.02/26</time>
              <h3 class="blog-card__text">ムエタイ観戦</h3>
              <p class="blog-card__text-sub">
                タイの国技「ムエタイ」の試合を観戦してきました！リング上で繰り広げられる選手たちの激しい攻防、繊細なテクニック、そして熱気あふれる会場の雰囲気はまさに圧巻。観客の声援が飛</p>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img4.jpg" alt="無性に食べたくなるパッタイ" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2025-02-24">2025.02/24</time>
              <h3 class="blog-card__text">無性に食べたくなる</h3>
              <p class="blog-card__text-sub">
                ある日、突然「パッタイが食べたい！」という衝動に駆られ、ついに本場の味を求めてタイ料理店へ。炒めたての米麺に、甘辛いタマリンドソースの香ばしい香りが広がり、食欲をそそられ</p>
            </div>
          </div>
        </a>
      </div>
      <div class="blog__button-layout">
        <a href="blog-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
      </div>
    </div>
  </section>
  <!--ボイス-->
  <section class="voice voice-top">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__sub">Voice</p>
        <h2 class="section-title__main">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <p class="voice-card__title-sub">40代(夫婦)</p>
                  <p class="voice-card__title">アクティビティ</p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text">まるで絵画のような景色に感動！泣けてきた</p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-img1.jpg" alt="木々を背景に腕を組んで写真を撮る夫婦" />
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                結婚記念日に特別な旅行をしたくて、このツアーに申し込みました。写真では見たことがありましたが、実際に訪れるとその美しさに息をのむほどでした。朝靄がかかる山々の景色は、まるで幻想的な絵画のよう！静かな自然の中で、夫婦でゆっくりと時間を過ごすことができました。忙しい日常を忘れて、心からリフレッシュできた旅になりました。次回は秋の紅葉の季節にも訪れてみたいです。
              </p>
            </div>
          </div>
        </div>
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <p class="voice-card__title-sub">20代(男性)</p>
                  <p class="voice-card__title">お寺・遺跡巡り</p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text">めちゃくちゃ良かった！また申し込みたいです</p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-img2.jpg" alt="紺色のネクタイをした若いスーツの男性" />
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                海外旅行自体初めてでどこのツアーにしようか悩んでいたら、会社の先輩におすすめされて申し込みました。
                一人で行くには寂しかったのですが、一人参加のツアーがあったので即決しました！ガイドさんも流暢な日本語で楽しく観光ができました！ 周りはカップルや夫婦だけだったので悔しかったので次回は絶対彼女ときます！！
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="voice__button-layout">
        <a href="voice-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
      </div>
    </div>
  </section>
  <!--プライス-->
  <section class="price price-top">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__sub">Price</p>
        <h2 class="section-title__main">料金一覧</h2>
      </div>
      <div class="price__container">
        <div class="price__img-sp md-show">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img2.jpg" alt="二つのお寺の間に仏の置物が立っている様子" />
        </div>
        <div class="price__items">
          <div class="price__items-item price-item">
            <h3 class="price-item__title">お寺・遺跡巡り</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">半日お寺・遺跡巡り</dt>
              <dd class="price-item__text-sub">¥20,000</dd>
              <dt class="price-item__text">1日お寺・遺跡巡り</dt>
              <dd class="price-item__text-sub">¥40,000</dd>
              <dt class="price-item__text">2日お寺・遺跡巡り</dt>
              <dd class="price-item__text-sub">¥70,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">アクテビティ</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">【クラビ発】3島巡りツアー</dt>
              <dd class="price-item__text-sub">¥20,000</dd>
              <dt class="price-item__text">【クラビ発】7島巡りツアー</dt>
              <dd class="price-item__text-sub">¥80,000</dd>
              <dt class="price-item__text">【プーケット発】おまかせ3島巡りツアー</dt>
              <dd class="price-item__text-sub">¥28,000</dd>
              <dt class="price-item__text">【プーケット発】おまかせ5島巡りツアー</dt>
              <dd class="price-item__text-sub">¥36,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">エンターテイメント</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">ニューハーフの踊りを見に行こうツアー</dt>
              <dd class="price-item__text-sub">¥14,000</dd>
              <dt class="price-item__text">ムエタイ観戦ツアー</dt>
              <dd class="price-item__text-sub">¥8,000</dd>
              <dt class="price-item__text">ゾウ使いになるぞ！ツアー</dt>
              <dd class="price-item__text-sub">¥24,000</dd>
              <dt class="price-item__text">タイのサ活ツアー</dt>
              <dd class="price-item__text-sub">¥10,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">スペシャルダイビング</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">コムローイツアー</dt>
              <dd class="price-item__text-sub">¥24,000</dd>
              <dt class="price-item__text">1日ソンクラーン体験ツアー</dt>
              <dd class="price-item__text-sub">¥32,000</dd>
              <dt class="price-item__text">バンコクディープツアー</dt>
              <dd class="price-item__text-sub">¥80,000</dd>
            </dl>
          </div>
        </div>
        <div class="price__img-pc md-none colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img1.jpg" alt="二つのお寺の間に仏の置物が立っている様子" />
        </div>
      </div>
      <div class="price__button-layout">
        <a href="price-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>