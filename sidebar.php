<div class="blog-news">
  <div class="container blog-news-container">
    <section class="section-blog">
      <h3 class="blog_title">ブログ</h3>
      <div class="blog_articles">

        <?php
        $args = array(
          'posts_per_page' => 3 // 表示件数の指定
        );
        $posts = get_posts($args);
        foreach ($posts as $post) : // ループの開始
          setup_postdata($post); // 記事データの取得
        ?>

          <article class="blog_article">
            <figure class="blog_article-img-box"><img src="<?php echo get_stylesheet_uri(); ?>/../img/sample01.svg" alt="">
              <small class="blog_category"><?php the_category(); ?></small>
            </figure>
            <div class="blog_article-text-box">
              <p class="blog_article-title"><?php the_title(); ?></p><small class="blog_article-date"><?php the_time('Y-m-d'); ?></small>
            </div>
          </article>

        <?php
        endforeach; // ループの終了
        wp_reset_postdata(); // 直前のクエリを復元する
        ?>

      </div>
    </section>
    <section class="news">
      <h3 class="news_title">お知らせ</h3>
      <div class="news_articles">

        <?php
        $args = array(
          'posts_per_page' => 3 // 表示件数の指定
        );
        $posts = get_posts($args);
        foreach ($posts as $post) : // ループの開始
          setup_postdata($post); // 記事データの取得
        ?>

          <article class="news_article"><small class="news_article-date"><?php the_time('Y-m-d'); ?></small>
            <p class="news_article-title"><?php echo get_the_title('archive-news'); ?></p>
          </article>
      </div>

    <?php
        endforeach; // ループの終了
        wp_reset_postdata(); // 直前のクエリを復元する
    ?>

    </section>
  </div>
</div>
