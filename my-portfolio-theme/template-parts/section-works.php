<?php
    // テーマやプラグインに関係なく使える！
    $upload_dir = wp_upload_dir();

    $aegs = [
        'post_type' => 'works',
        'post_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    $query = new WP_Query($aegs);
?>

<section class="works">
    <h3 class="section-title">Works</h3>
    <div class="works-inner">
        <p>制作実績</p>

        <div style="display: none;">
            <a href="<?php echo $upload_dir['baseurl']; ?>/engbody/index.html">
                アップロードフォルダリンクテスト
            </a>
        </div>


        <div class="slider-photo">
            <h4>Swiperを使ったスライダー</h4>
            <p>最新のカスタム投稿６件が並ぶように設定</p>

            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="work-item">

                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </a>
                                <p><?php the_title(); ?></p>
                            </div>
                            
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-button-prev custom-prev"></div>
                <div class="swiper-button-next custom-next"></div>
                <div class="swiper-pagination"></div>
            </div>
            
        </div>

        <div>
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="btn">
                <span class="btn-text">制作実績一覧へ</span>
            </a>
        </div>

    </div>
</section>

<style>
    .slider-photo{
        z-index: 1;
        margin: 0 auto;
    }
    .slider-photo h4{
        font-size: 1rem;
    }
    .swiper{
        padding: 20px 0 50px;
        width: 100%;
        height: auto;
        box-sizing: border-box;
        overflow: hidden;
    }
    .swiper img{
        width: 100%;
        height: 250px;
        display: block;
        object-fit: contain;
        border-radius: 5px;
        box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
        margin: 0 auto;
        padding: 5px;
    }
    .swiper p{
        padding: 20px;
    }
    .swiper-slide{
        text-align: center;
    }
    .swiper-pagination-bullet{
        background-color: red;
        transform: scale(1.5);

    }
    .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet 
    {
        margin: 0 10px;
    }

    .custom-prev, .custom-next{
        display: none;
    }
</style>
