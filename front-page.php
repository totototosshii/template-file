<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-content">
      <h1 class="site-title"><img src="<?php echo esc_url(get_theme_file_uri( 'images/site-title.png' )); ?>" alt="世界最長の領事詩をピーター・ブルック以来の全編舞台化完全版マハーバーラタ"></h1><!-- /.site-title -->
      <div class="fv-contents">
        <p class="schedule">
          <img src="<?php echo esc_url(get_theme_file_uri( 'images/schedule.png' )); ?>" alt="2020年７月４日〜７日 なかのZERO大ホール">
        </p><!-- /.schedule -->
        <p class="announcement">
          小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<span class="announcement-title">完全版マハーバーラタ</span><!-- /.announcement-title -->の公演が決定！！<br>
          アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
        </p><!-- /.announcement -->
      </div><!-- /.fv-contents -->
      <a href="#" class="btn topPage-ticket-btn">チケット予約サイトへ</a><!-- /.btn -->
    </div><!-- /.fv-content -->
  </div><!-- /.fv -->

  <!-- メインコンテンツ -->
  <main>
    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">INTRODUCTION</h2><!-- /.section-head -->
          <h3 class="asc">なぜ今「マハーバーラタ」なのか？</h3><!-- /.asc -->
          <div class="synopsis">
            <p class="synopsis-text">
              「平和」について改めて考えるストーリー全世界を司るものが神だ<br>とすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人<br>物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。<br>戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う<br>物語が「マハーバーラタ」と言える。<br>平和とは？私たちには何ができるのか？根源的な「平和」を希求す<br>る物語。
            </p><!-- /.synopsis-text -->
            <p class="synopsis-text">
              現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に<br>見られるように、文化的背景が「異」なるものに対して非寛容にな<br>りつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場<br>人物たちが破滅していく様を描いた「マハーバーラタ」のストーリー<br>は、人類が歩んできた争いの歴史の物語とも言い換えられる非寛容<br>による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わ<br>せつつ描くことで「寛容」の重要性を示す。
            </p><!-- /.synopsis-text -->
          </div><!-- /.synopsis -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">NEWS</h2><!-- /.section-head -->
          <div class="section-contents">
            <?php
              $args = array(
              'posts_per_page' => 5 // 表示件数
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): // ループの開始
              setup_postdata( $post ); // 記事データの取得
            ?>
            <a href="<?php the_permalink(); ?>" class="contents-item">
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
            <?php
              endforeach; // ループの終了
            ?>
          </div><!-- /.section-contents -->
          <a href="<?php echo home_url( '/category/news' ); ?>" class="btn news-btn">ニュース一覧へ</a><!-- /.btn -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">STORY</h2><!-- /.section-head -->
          <div class="section-contents">
            <p class="story">
              マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
              世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
            </p><!-- /.story -->
            <a href="<?php echo home_url( '/story' ); ?>" class="btn more-btn">もっと詳しく</a><!-- /.btn -->
          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
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
              「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
              まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池<br>博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋<br>を起こしてゆく。
            </p><!-- /.director-message -->
            <a href="<?php echo home_url( '/comments' ); ?>" class="btn more-btn">もっと見る</a><!-- /.btn -->
          </div><!-- /.section-contents -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section" data-fadeIn>
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">CAST</h2><!-- /.section-head -->
          <div class="section-contents">
            <div class="cast-item">
              <div class="cast-img"><img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img1.jpg' )); ?>" alt=""></div><!-- /.cast-img -->
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
              <div class="cast-img"><img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img2.jpg' )); ?>" alt=""></div><!-- /.cast-img -->
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
              <div class="cast-img"><img src="<?php echo esc_url(get_theme_file_uri( 'images/cast-img3.jpg' )); ?>" alt=""></div><!-- /.cast-img -->
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
          <a href="<?php echo home_url( '/cast' ); ?>" class="cast-more-btn">もっと見る</a><!-- /.cast-more-btn -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- SCHEDULE -->
    <?php get_template_part('template-parts/schedule-section'); ?>
  </main>

<?php get_footer(); ?>
