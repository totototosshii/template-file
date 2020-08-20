<!--
	Template Name: 問い合わせ
-->

<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-content">
      <div class="site-title"><img src="<?php echo esc_url(get_theme_file_uri('images/site-title.png')); ?>" alt="世界最長の領事詩をピーター・ブルック以来の全編舞台化完全版マハーバーラタ"></div><!-- /.site-title -->
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
        <h2 class="section-head">INQUIRY</h2><!-- /.section-head -->
        <div class="section-content">
          <p class="inguiry-read">
            小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
            公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
            お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
          </p><!-- /.inguiry-read -->
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
              <?php the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif; ?>
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
