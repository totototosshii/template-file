<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-content">
      <div class="site-title"><img src="<?php echo esc_url(get_theme_file_uri( 'images/site-title.png' )); ?>" alt="世界最長の領事詩をピーター・ブルック以来の全編舞台化完全版マハーバーラタ"></div><!-- /.site-title -->
      <p class="schedule">
        <img src="<?php echo esc_url(get_theme_file_uri('images/schedule.png')); ?>" alt="2020年７月４日〜７日 なかのZERO大ホール">
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
          <h2 class="section-head">NEWS</h2><!-- /.section-head -->
          <!-- 記事があれば以下を表示 -->
          <?php if( have_posts() ) : ?>
            <!-- 記事数分ループ -->
            <?php while( have_posts() ) : ?>
              <?php the_post(); ?>
              <article class="section-contents">
                <figure class="thumbnail">
                  <!-- アイキャッチ画像が設定されているなら -->
                  <?php if ( has_post_thumbnail() ) : ?>
                    <!-- アイキャッチ画像を大サイズで表示 -->
                    <?php the_post_thumbnail( 'large' ); ?>
                  <?php else : ?>
                  <!-- アイキャッチ画像が無ければnoimage 画像を表示 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="NO IMAGEと灰色文字で記載された白背景画像">
                  <?php endif; ?>
                </figure>
                <div class="title-wrap">
                  <time class="article-time"><?php the_time( 'Y/n/j' ); ?></time><!-- /.article-time -->
                  <h1 class="article-title"><?php the_title(); ?></h1><!-- /.article-title -->
                </div><!-- /.title-wrap -->
                <div class="article-text">
                  <?php the_content(); ?>
                </div><!-- /.article-text -->
              </article><!-- /.section-contents -->
            <?php endwhile; ?>
          <?php endif; ?>

          <!-- 前後記事ページネーション -->
          <div class="pagenation-single">
            <?php the_post_navigation(
              array(
                'prev_text' => '<i class="fa fa-chevron-circle-left fa-2x"></i><time class="article-time">%date</time>「%title」',
                'next_text' => '<time class="article-time">%date</time>「%title」<i class="fa fa-chevron-circle-right fa-2x"></i>',
                'screen_reader_text' => '前後の投稿へのリンク'
              ));
            ?>
          </div><!-- /.pagenation-single -->
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
