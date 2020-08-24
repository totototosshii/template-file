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
