      <!--コンタクト-->
      <?php if (!is_page(array('contact', 'thanks')) && !is_404()): ?>
      <section class="contact contact-top">
        <div class="contact__inner inner">
          <div class="contact__container">
            <div class="contact__box contact-box">
              <a href="<?php echo esc_url(home_url('/')); ?>top" class="contact-box__logo-layout">
                <h3 class="contact-box__logo">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-logo.svg" alt="kuratch-club" />
                </h3>
              </a>
              <div class="contact-box__information">
                <ul class="contact-box__items">
                  <li class="contact-box__items-item contact-item">
                    <address class="contact-item__private">
                      <p class="contact-item__text">愛知県名古屋市中区錦1-1</p>
                    </address>
                  </li>
                  <li class="contact-box__items-item contact-item">
                    <a href="TEL:0120-000-0000">
                      <p class="contact-item__text">TEL:0120-000-0000</p>
                    </a>
                  </li>
                  <li class="contact-box__items-item contact-item">
                    <p class="contact-item__text">営業時間:8:30-19:00</p>
                  </li>
                  <li class="contact-box__items-item contact-item">
                    <p class="contact-item__text">定休日:毎週火曜日</p>
                  </li>
                </ul>
                <div class="contact-box__map">
                  <iframe class="contact-box__img"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.444851433876!2d136.889896039894!3d35.17046350251092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376d7a133aebd%3A0xf42789d1d8cc883c!2z44CSNDYwLTAwMDMg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy66Yym77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1740821113086!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border: 0"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__title-layout">
              <div class="contact__title section-title">
                <p class="section-title__sub--large">Contact</p>
                <h2 class="section-title__main">お問い合わせ</h2>
              </div>
              <p class="contact__title-text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button-layout">
                <a href="<?php echo esc_url(home_url('/')); ?>contact" class="button">Contact&nbsp;us<span
                    class="button-arrow2"></span><span class="button-arrow"></span> </a>
              </div>
              <div class="contact__top-button js-top-button">
                <a href="">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-top-button.svg" alt="トップボタン" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
      </main>
      <!--フッター-->
      <footer class="footer footer-top">
        <div class="footer__inner inner">
          <div class="footer__title footer-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-title__name-layout">
              <h3 class="footer-title__name">
                <img class="footer-title__name-logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png"
                  alt="Kuratch-club" />
              </h3>
            </a>
            <div class="footer-title__logo-box">
              <a href="https://www.facebook.com/" target="_blank" class="footer-title__facebook-logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/facebook-logo.svg" alt="facebook" />
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="footer-title__instagram-logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/Insta-logo.svg" alt="instagram" />
              </a>
            </div>
          </div>
          <div class="footer__container footer-menu">
            <div class="footer-menu__left">
              <ul class="footer-menu__left-items-upper">
                <li class="footer-menu__item">
                  <?php
                   // タクソノミー 'campaign_category' のタームを動的に取得
                   $campaign_categories = get_terms(array(
                     'taxonomy' => 'campaign_category', // タクソノミー名
                     'hide_empty' => false,             // 投稿がないタームも取得
                   ));

                   // タームスラッグをキーとしてタームデータをマッピング
                   $category_links = array();
                   if (!empty($campaign_categories) && !is_wp_error($campaign_categories)) {
                     foreach ($campaign_categories as $category) {
                       $category_links[$category->slug] = get_term_link($category);
                     }
                   }
                   ?>

                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="footer-menu__link-main">
                    <p class="footer-menu__logo-text">キャンペーン</p>
                  </a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url($category_links['activity'] ?? '#'); ?>">アクティビティ</a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url($category_links['entertainment'] ?? '#'); ?>">エンターテインメント</a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url($category_links['visiting-temples'] ?? '#'); ?>">お寺・遺跡巡り</a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">私たちについて</p>
                  </a>
                </li>
              </ul>
              <ul class="footer-menu__left-items-bottom">
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>information" class="footer-menu__link-main">
                    <p class="footer-menu__logo-text">ツアー情報</p>
                  </a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url(add_query_arg('id', 'tab1', home_url('/information'))); ?>">お寺・遺跡巡り</a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url(add_query_arg('id', 'tab3', home_url('/information'))); ?>">アクテビティ</a>
                </li>
                <li class="footer-menu__item-text">
                  <a href="<?php echo esc_url(add_query_arg('id', 'tab2', home_url('/information'))); ?>">エンターテイメント</a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>blog" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">ブログ</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-menu__right">
              <ul class="footer-menu__right-items-upper">
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>voice" class="footer-menu__link-main">
                    <p class="footer-menu__logo-text">お客様の声</p>
                  </a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>price" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">料金一覧</p>
                  </a>
                </li>
                <li class="footer-menu__item-text-b">
                  <a href="<?php echo esc_url(home_url('/price#visiting_temples')); ?>">お寺・遺跡巡り</a>
                </li>
                <li class="footer-menu__item-text-b">
                  <a href="<?php echo esc_url(home_url('/price#activity')); ?>">アクテビティ</a>
                </li>
                <li class="footer-menu__item-text-b">
                  <a href="<?php echo esc_url(home_url('/price#entertainment')); ?>">エンターテイメント</a>
                </li>
                <li class="footer-menu__item-text-b">
                  <a href="<?php echo esc_url(home_url('/price#special_tour')); ?>">スペシャルツアー</a>
                </li>
              </ul>
              <ul class="footer-menu__right-items-bottom">
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>faq" class="footer-menu__link-main">
                    <p class="footer-menu__logo-text">よくある質問</p>
                  </a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>privacypolicy" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">プライバシー<br class="md-show" />ポリシー</p>
                  </a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>term-of-service" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">利用規約</p>
                  </a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>sitemap" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">サイトマップ</p>
                  </a>
                </li>
                <li class="footer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>contact" class="footer-menu__link-sub">
                    <p class="footer-menu__logo-text">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <small class="footer__copyright">Copyright &copy; 2021 - 2023 Kuratch-club LLC. All Rights Reserved.</small>
      </footer>
      <?php wp_footer(); ?>
      </body>

      </html>