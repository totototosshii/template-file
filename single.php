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

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">SCHEDULE</h2><!-- /.section-head -->
          <div class="section-contents">
            <ul class="schedule-list">

              <li class="schedule-item">
                <time class="schedule-time">2020.07.04</time>
                <p class="start-time">17:00開演</p>
                <p class="place">中野ZERO大ホール</p><!-- /.place -->
                <a href="#" class="ticket-link">チケット予約受付中</a><!-- /.ticket-link -->
              </li><!-- /.schedule-item -->

              <li class="schedule-item">
                <time class="schedule-time">2020.07.05</time>
                <p class="start-time">17:00開演</p>
                <p class="place">中野ZERO大ホール</p><!-- /.place -->
                <a href="#" class="ticket-link">チケット予約受付中</a><!-- /.ticket-link -->
              </li><!-- /.schedule-item -->

              <li class="schedule-item">
                <time class="schedule-time">2020.07.06</time>
                <p class="start-time">17:00開演</p>
                <p class="place">中野ZERO大ホール</p><!-- /.place -->
                <a href="#" class="ticket-link">チケット予約受付中</a><!-- /.ticket-link -->
              </li><!-- /.schedule-item -->

              <li class="schedule-item">
                <time class="schedule-time">2020.07.07</time>
                <p class="start-time">17:00開演</p>
                <p class="place">中野ZERO大ホール</p><!-- /.place -->
                <a href="#" class="ticket-link">チケット予約受付中</a><!-- /.ticket-link -->
              </li><!-- /.schedule-item -->

            </ul><!-- /.schedule-list -->
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