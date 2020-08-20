<!--
	Template Name: ニュース
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
  <p class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
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
          <div class="section-contents">

            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $the_query = new WP_Query( array(
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 9, // 表示件数
                'orderby'     => 'date',
                'order' => 'DESC'
              ) );
              if ($the_query->have_posts()) :
            ?>

              <?php while ($the_query->have_posts()) : $the_query->the_post();?>

                <a href="<?php the_permalink(); ?>" class="content-item">
                  <picture class="news-img">
                    <!-- アイキャッチ画像が設定されているなら -->
                    <?php if ( has_post_thumbnail() ) : ?>
                      <!-- アイキャッチ画像を大サイズで表示 -->
                      <?php the_post_thumbnail( 'large' ); ?>
                    <?php else : ?>
                    <!-- アイキャッチ画像が無ければnoimage 画像を表示 -->
                      <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="NO IMAGEと灰色文字で記載された白背景画像">
                    <?php endif; ?>
                  </picture><!-- /.news-img -->
                  <div class="news-text">
                    <time class="article-time"><?php the_time( 'Y/n/j' ); ?></time><!-- /.article-time -->
                    <h1 class="news-head">
                      <?php the_title(); ?>
                    </h1><!-- /.news-head -->
                  </div><!-- /.news-text -->
                </a><!-- /.contents-item -->

              <?php endwhile;?>
            <?php endif; ?>

          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->

        <!-- ページネーション -->
        <div class="pagenation">
          <?php
            if ($the_query->max_num_pages > 1) {
              echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%/',
                'current' => max(1, $paged),
                'mid_size' => 1,
                'prev_text' => '<i class="fas fa-chevron-left fa-xs"></i>',
                'next_text' => '<i class="fas fa-chevron-right fa-xs"></i>',
                'total' => $the_query->max_num_pages
              ));
            }
            wp_reset_postdata();
          ?>
        </div><!-- /pagenation -->

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
