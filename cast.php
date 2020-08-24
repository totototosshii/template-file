<!--
	Template Name: キャスト
-->

<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-content">
      <div class="site-title"><img src="<?php echo esc_url(get_theme_file_uri( 'images/site-title.png' )); ?>" alt="世界最長の領事詩をピーター・ブルック以来の全編舞台化完全版マハーバーラタ"></div><!-- /.site-title -->
      <p class="schedule">
        <img src="<?php echo esc_url(get_theme_file_uri( 'images/schedule.png' )); ?>" alt="2020年７月４日〜７日 なかのZERO大ホール">
      </p><!-- /.schedule -->
      <a href="#" class="btn underlayer-ticket-btn">チケット予約サイトへ</a><!-- /.btn -->
    </div><!-- /.fv-content -->
  </div><!-- /.fv -->

  <!-- パンくずリスト -->
  <p class="breadcrumbs">
    <!-- Breadcrumb NavXT のパンくずを表示するための記述 -->
    <?php if(function_exists('bcn_display')){
        bcn_display();
      }
    ?>
  </p>

  <!-- メインコンテンツ -->
  <main>
    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">CAST</h2><!-- /.section-head -->
          <div class="section-contents">

            <div class="cast-item">
              <div class="cast-img">
                <img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img1.jpg' )); ?>" alt="">
              </div><!-- /.cast-img -->
              <p class="cast-role">作・演出・振付・構成</p><!-- /.cast-role -->
              <p class="cast-name">小池博史</p><!-- /.cast-name -->
              <p class="cast-career">
                茨城県日立市出身。一橋大学卒業。<br>
                演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
                1982年「パパ・タラフマラ」設立。<br>
                演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
                3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
                著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
              </p><!-- /.cast-career -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="cast-img">
                <img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img2.jpg' )); ?>" alt="">
              </div><!-- /.cast-img -->
              <p class="cast-role">出演</p><!-- /.cast-role -->
              <p class="cast-name">白井さち子</p><!-- /.cast-name -->
              <p class="profession">
                (バレエ、コンテンポラリーダンス)
              </p><!-- /.profession -->
              <p class="cast-career">
                7歳よりクラシックバレエを始める。<br>
                82年より6年間橘バレエ学校に在籍。<br>
                牧阿佐美に師事。<br>
                日本女子体育短期大学舞踊コース卒。<br>
                在籍中、太田順造にパントマイムを師事。<br>
                89年よりパパ・タラフマラに参加。<br>
                以降国内外の公演に出演。<br>
                後身のパフォーマーのダンス指導にもあっている。<br>
                パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。<br>
                これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。
              </p><!-- /.cast-career -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="cast-img">
                <img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img3.jpg' )); ?>" alt="">
              </div><!-- /.cast-img -->
              <p class="cast-role">出演</p><!-- /.cast-role -->
              <p class="cast-name">小谷野哲郎</p><!-- /.cast-name -->
              <p class="profession">(バリ舞踏)</p><!-- /.profession -->
              <p class="cast-career">
                東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。<br>
                1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br>
                学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。<br>
                2006年、Asian Cultural Councilの助成によりアメリカに滞在。<br>
                パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。
              </p><!-- /.cast-career -->
            </div><!-- /.cast-item -->

          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <?php
            $page_id = get_page_by_path('cast');
            if(have_rows('repeat_cast', $page_id)):
          ?>
          <div class="section-contents">
            <?php $page_counter = 4; ?><!-- 表示件数 -->
            <?php while(have_rows('repeat_cast', $page_id)): the_row(); ?>
              <?php $page_counter--; ?>
              <!-- ループ内容 -->
              <div class="cast-item">
                <div class="cast-img">
                  <?php
                    $image = get_sub_field('cast_img');
                    if( !empty( $image ) ):
                  ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  <?php endif; ?>
                </div><!-- /.cast-img -->
                <div class="status">
                  <p class="cast-role"><?php the_sub_field('cast_role'); ?></p><!-- /.cast-role -->
                  <p class="cast-name"><?php the_sub_field('cast_name'); ?></p><!-- /.cast-name -->
                  <p class="profession">
                    <?php the_sub_field('cast_profession'); ?>
                  </p><!-- /.profession -->
                  <?php
                    $career = get_sub_field('cast_career',false);
                    if( $career ):
                  ?>
                    <p class="cast-career"><?php echo nl2br($career); ?></p><!-- /.cast-career -->
                  <?php endif; ?>
                </div><!-- /.status -->
              </div><!-- /.cast-item -->
              <?php if ($page_counter === 0) break; ?>
            <?php endwhile; ?>
          </div><!-- /.section-contents -->
          <?php endif; ?>
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <div class="section-contents">

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  作・演出・振付・構成
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  小池博史
                </p><!-- /.cast-name -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  出演
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  白井さち子
                </p><!-- /.cast-name -->
                <p class="profession">
                  (バレエ、コンテンポラリーダンス)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">出演</p><!-- /.cast-role -->
                <p class="cast-name">小谷野哲郎</p><!-- /.cast-name -->
                <p class="profession">
                  (バリ舞踏)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->
            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  作・演出・振付・構成
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  小池博史
                </p><!-- /.cast-name -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  出演
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  白井さち子
                </p><!-- /.cast-name -->
                <p class="profession">
                  (バレエ、コンテンポラリーダンス)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">出演</p><!-- /.cast-role -->
                <p class="cast-name">小谷野哲郎</p><!-- /.cast-name -->
                <p class="profession">
                  (バリ舞踏)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->
            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  作・演出・振付・構成
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  小池博史
                </p><!-- /.cast-name -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  出演
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  白井さち子
                </p><!-- /.cast-name -->
                <p class="profession">
                  (バレエ、コンテンポラリーダンス)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">出演</p><!-- /.cast-role -->
                <p class="cast-name">小谷野哲郎</p><!-- /.cast-name -->
                <p class="profession">
                  (バリ舞踏)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->
            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  作・演出・振付・構成
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  小池博史
                </p><!-- /.cast-name -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">
                  出演
                </p><!-- /.cast-role -->
                <p class="cast-name">
                  白井さち子
                </p><!-- /.cast-name -->
                <p class="profession">
                  (バレエ、コンテンポラリーダンス)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

            <div class="cast-item">
              <div class="status">
                <p class="cast-role">出演</p><!-- /.cast-role -->
                <p class="cast-name">小谷野哲郎</p><!-- /.cast-name -->
                <p class="profession">
                  (バリ舞踏)
                </p><!-- /.profession -->
              </div><!-- /.status -->
            </div><!-- /.cast-item -->

          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">SCHEDULE</h2><!-- /.section-head -->
          <div class="section-contents">
            <?php
              $page_id = get_page_by_path('top-page');
              if(have_rows('repeat_schedule', $page_id)):
            ?>
              <ul class="schedule-list">
                <?php $page_counter = 4; ?><!-- 表示件数 -->
                <?php while(have_rows('repeat_schedule', $page_id)): the_row(); ?>
                <?php $page_counter--; ?>
                  <!-- ループ内容 -->
                  <li class="schedule-item">
                    <time class="schedule-time"><?php the_sub_field('schedule_date'); ?></time>
                    <p class="start-time"><?php the_sub_field('schedule_starttime'); ?></p>
                    <p class="place"><?php the_sub_field('schedule_place'); ?></p><!-- /.place -->
                    <?php
                      $link = get_sub_field('schedule_linktext');
                      if( $link ):
                    ?>
                      <a href="<?php echo $link; ?>" class="ticket-link">チケット予約受付中</a><!-- /.ticket-link -->
                    <?php endif; ?>
                  </li><!-- /.schedule-item -->
                <?php if ($page_counter === 0) break; ?>
                <?php endwhile; ?>
              </ul><!-- /.schedule-list -->
            <?php endif; ?>
          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->

        <div class="buttons">
          <a href="<?php echo home_url('/inguiry'); ?>" class="btn contact-btn">お問い合わせはこちら</a><!-- /.btn -->
          <a href="#" class="btn ticket-btn">チケット予約サイトへ</a><!-- /.btn -->
        </div><!-- /.buttons -->

      </div><!-- /.section-inner -->
    </section><!-- /.section -->
  </main>

<?php get_footer(); ?>
