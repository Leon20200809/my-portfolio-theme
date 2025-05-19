
<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'works',  // 投稿タイプを指定（'post' = 通常の投稿）
        'posts_per_page' => 6, // 1ページに表示する記事数
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // 何ページ目かを取得する
    );
    $query = new WP_Query($args);
?>

<main>
    <div class="archive-inner">
        <h1 class="page-title">制作実績一覧</h1>

        <div class="works-list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="work-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </a>

            </div>
            <?php endwhile; else : ?>
            <p>まだ制作実績がありません。</p>
            <?php endif; ?>
        </div>

        <!-- ページネーション -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $query->max_num_pages,   // 総ページ数
                'current' => max( 1, get_query_var('paged') ),  // 現在のページ番号
                'mid_size' => 3,  // ページ番号の前後に表示するリンク数
                'prev_text' => '« 前のページ',  // 前ページのリンクテキスト
                'next_text' => '次のページ »',  // 次ページのリンクテキスト
            ));
            ?>
        </div>

    </div>
    
</main>

<?php get_footer(); ?>

<style>
    .archive-inner{
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .page-title{
        font-size: 2.25rem;
        text-align: center;
        margin: 50px;
    }

    .work-item a{
        color: #000;
    }
    .work-item a:hover{
        text-decoration: none;
    }
    .work-item:hover{
        opacity: 0.8;
    }

    .pagination{
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 50px 0;
        font-size: 1rem;
    }
</style>