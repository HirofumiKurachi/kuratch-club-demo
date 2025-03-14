<?php get_header(); ?>
<main>
  <!--メインビュー-->
  <?php
   $slider_images = SCF::get('mv_slider_images'); // SCFからデータ取得
   $valid_images = []; // 有効なスライドを格納

   // 画像が存在するかチェック
   if (!empty($slider_images)) {
       foreach ($slider_images as $image) {
           $img_src_pc = wp_get_attachment_image_src($image['mv_slider_pc_img'], 'large')[0] ?? '';
           $img_src_sp = wp_get_attachment_image_src($image['mv_slider_sp_img'], 'full')[0] ?? '';
           $alt_text = esc_attr($image['mv_slider_alt']);

           // **PC画像とSP画像の両方が存在する場合のみスライドを表示**
           if (!empty($img_src_pc) && !empty($img_src_sp)) {
               $valid_images[] = [
                   'pc'  => $img_src_pc,
                   'sp'  => $img_src_sp,
                   'alt' => $alt_text
               ];
           }
       }
   }

   // **有効なスライドが1枚以上ある場合のみスライダーを表示**
   if (!empty($valid_images)) :
   ?>
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__title-sub">Life is a journey</h2>
        <h3 class="mv__text">Let's weave your story</h3>
      </div>
      <div class="mv__slider swiper js-mv-swiper">
        <div class="mv__slider swiper-wrapper">
          <?php foreach ($valid_images as $image): ?>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo esc_url($image['pc']); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url($image['sp']); ?>" alt="<?php echo $image['alt']; ?>" />
            </picture>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>


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

            <?php
          // カスタム投稿タイプ 'campaign' から投稿を取得
          $args = array(
            'post_type'      => 'campaign', // カスタム投稿タイプのスラッグ
            'posts_per_page' => 4,    // 表示する投稿数
            'orderby'        => 'date', // 日付で並び替え
            'order'          => 'DESC' // 新しい順
          );
          $campaign_query = new WP_Query($args);

          if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post();
              // カテゴリー（タクソノミー）名を取得
              $terms = get_the_terms(get_the_ID(), 'campaign_category'); // 'campaign_category' はカスタムタクソノミーのスラッグ
              $category_name = $terms && !is_wp_error($terms) ? esc_html($terms[0]->name) : '未分類';
          ?>
            <div class="campaign__container-slide swiper-slide">
              <a href="<?php the_permalink(); ?>" class="campaign-card">
                <div class="campaign-card__img">
                  <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title"><?php echo $category_name; ?></p>
                    <p class="campaign-card__title-sub"><?php the_title(); ?></p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <?php
                      $campaign_price = get_field('campaign_price'); // ACF のデータを取得
                      ?>
                      <p class="campaign-card__price-old">
                        ¥<?php echo esc_html($campaign_price['original_price']); ?>
                      </p>
                      <p class="campaign-card__price-new">
                        ¥<?php echo esc_html($campaign_price['discount_price']); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
            <p>現在、キャンペーンはありません。</p>
            <?php endif; ?>
          </div>
        </div>
        <div class="campaign__container-button-box">
          <div class="campaign__container-button-prev"></div>
          <div class="campaign__container-button-next"></div>
        </div>
      </div>
      <div class="campaign__button-layout">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
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
        <h3 class="about-us__head">Adventure<br />is&nbsp;calling</h3>
        <div class="about-us__container-box">
          <p class="about-us__text">
            私たちは、ただの旅行ではなく 心に残る体験
            を提供することを大切にしています。<br />美しい自然、異文化との出会い、新しい挑戦——旅は人生を豊かにする最高の冒険です。<br />世界をもっと深く感じ、忘れられない思い出を一緒に作りませんか？<br />あなたの次の旅が、最高の冒険になりますように。
          </p>
          <div class="about-us__button-layout">
            <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="button">View&nbsp;more<span
                class="button-arrow2"></span><span class="button-arrow"></span></a>
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
            <a href="<?php echo esc_url(home_url('/')); ?>information" class="button">View&nbsp;more<span
                class="button-arrow2"></span><span class="button-arrow"></span> </a>
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
        <?php
      // 通常投稿タイプ 'post' から投稿を取得
      $args = array(
        'post_type' => 'post',        // 投稿タイプ（通常投稿は 'post'）
        'posts_per_page' => 3,       // 表示する投稿数
        'orderby' => 'date',         // 日付で並び替え
        'order' => 'DESC'            // 新しい順に表示
      );
      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
        <a href="<?php the_permalink(); ?>" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <?php if (has_post_thumbnail()) : ?>
              <!-- 投稿のアイキャッチ画像を表示 -->
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                alt="<?php echo esc_attr(get_the_title()); ?>">
              <?php else : ?>
              <!-- アイキャッチ画像がない場合のデフォルト画像 -->
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?>
              </time>
              <h3 class="blog-card__text"><?php the_title(); ?></h3>
              <p class="blog-card__text-sub">
                <?php echo wp_trim_words( get_the_content(), 85 , '…' ); ?>
              </p>
            </div>
          </div>
        </a>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p>現在、ブログ記事はありません。</p>
        <?php endif; ?>
      </div>
      <div class="blog__button-layout">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
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
        <?php
            // カスタム投稿タイプ 'voice' から投稿を取得
            $args = array(
                'post_type'      => 'voice', // カスタム投稿タイプのスラッグ
                'posts_per_page' => 2,    // 表示する投稿数
                'orderby'        => 'date', // 日付で並び替え
                'order'          => 'DESC' // 新しい順
            );
            $voice_query = new WP_Query($args);

            if ($voice_query->have_posts()) :
                while ($voice_query->have_posts()) : $voice_query->the_post();
                    // ACFのグループフィールドから「年代」と「性別」を取得
                    $user_info = get_field('user_information'); // グループフィールドの取得
                    $era = !empty($user_info['era']) ? $user_info['era'] : '年代不明';
                    $sex = !empty($user_info['sex']) ? $user_info['sex'] : '性別不明';

                    // 「年代（性別）」の形式にする
                    $user_profile = esc_html($era) . '（' . esc_html($sex) . '）';

                    // ボイスカテゴリー（タクソノミー）名を取得
                    $terms = get_the_terms(get_the_ID(), 'voice_category'); // 'voice_category' はカスタムタクソノミーのスラッグ
                    if (!empty($terms) && !is_wp_error($terms)) {
                        // 複数カテゴリーがある場合はカンマ区切りで表示
                        $category_names = wp_list_pluck($terms, 'name');
                        $category_name = implode(', ', $category_names);
                    } else {
                        $category_name = '未分類'; // カテゴリーがない場合のデフォルト値
                    }
            ?>
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <!--  年代（性別）を voice-card__title-sub に表示 -->
                  <p class="voice-card__title-sub"><?php echo $user_profile; ?></p>
                  <!--  カテゴリー名を voice-card__title に表示 -->
                  <p class="voice-card__title"><?php echo esc_html($category_name); ?></p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text"><?php the_field('title-text') ?></p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <?php if (has_post_thumbnail()) : ?>
                <!-- アイキャッチ画像を表示 -->
                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                  alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php else : ?>
                <!-- アイキャッチ画像がない場合のデフォルト画像 -->
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                <?php echo wp_trim_words( get_field('text_sub'), 300, '…' ); ?>
              </p>
            </div>
          </div>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
        <p>現在、お客様の声はありません。</p>
        <?php endif; ?>
      </div>
      <div class="voice__button-layout">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
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
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img3.jpg" alt="二つのお寺の間に仏の置物が立っている様子" />
        </div>
        <div class="price__items">
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからお寺・遺跡巡りデータを取得
         $visiting_temples = SCF::get('visiting_temples', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">お寺・遺跡巡り</h3>

            <?php if (!empty($visiting_temples)): ?>
            <dl class="price-item__box">
              <?php foreach ($visiting_temples as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-1']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-1']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからアクティビティデータを取得
         $activity = SCF::get('activity', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">アクテビティ</h3>

            <?php if (!empty($activity)): ?>
            <dl class="price-item__box">
              <?php foreach ($activity as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-2']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-2']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからエンターテイメントデータを取得
         $entertainment = SCF::get('entertainment', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">エンターテイメント</h3>

            <?php if (!empty($entertainment)): ?>
            <dl class="price-item__box">
              <?php foreach ($entertainment as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-3']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-3']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからスペシャルツアーデータを取得
         $special_tour = SCF::get('special_tour', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">スペシャルダイビング</h3>

            <?php if (!empty($special_tour)): ?>
            <dl class="price-item__box">
              <?php foreach ($special_tour as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-4']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-4']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
        </div>
        <div class="price__img-pc md-none colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img1.jpg" alt="二つのお寺の間に仏の置物が立っている様子" />
        </div>
      </div>
    </div>
    <div class="price__button-layout">
      <a href="<?php echo esc_url(home_url('/')); ?>price" class="button">View&nbsp;more<span
          class="button-arrow2"></span><span class="button-arrow"></span> </a>
    </div>
    </div>
  </section>

  <?php get_footer(); ?>