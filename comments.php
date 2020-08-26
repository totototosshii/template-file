<!--
	Template Name: 著名人コメント
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
  <p class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
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
          <div class="section-head">COMMENTS</div><!-- /.section-head -->
          <h3 class="comment-read">
            舞台関係者のみならず各界著名人からコメントが届いています！
          </h3><!-- /.comment-read -->
          <div class="section-contents">
            <h3 class="director">京都佛立ミュージアム館長 <br><span class="director-name">長松清潤</span><!-- /.director-name -->
            </h3><!-- /.director -->
            <p class="director-message">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池<br>博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋<br>を起こしてゆく。
            </p><!-- /.director-message -->
          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <?php
            $page_id = get_page_by_path('comments');
            if(have_rows('repeat_comment', $page_id)):
          ?>
          <div class="section-contents">
            <?php $page_counter = 9; ?><!-- 表示件数 -->
            <?php while(have_rows('repeat_comment', $page_id)): the_row(); ?>
              <?php $page_counter--; ?>
              <!-- ループ内容 -->
              <div class="comment-item">
                <h4 class="comment-item-name">
                  <?php the_sub_field('repeat_name'); ?>
                </h4><!-- /.comment-item-name -->
                <p class="profession">
                  <?php the_sub_field('repeat_profession'); ?>
                </p><!-- /.profession -->
                <?php
                  $message = get_sub_field('repeat_message',false);
                  if( $message ):
                ?>
                  <p class="comment-message"><?php echo nl2br($message); ?></p><!-- /.comment-message -->
                <?php endif; ?>
              </div><!-- /.comment-item -->
              <?php if ($page_counter === 0) break; ?>
            <?php endwhile; ?>
          </div><!-- /.section-contents -->
          <?php endif; ?>
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- SCHEDULE -->
    <?php get_template_part('template-parts/schedule-section'); ?>
  </main>

<?php get_footer(); ?>
