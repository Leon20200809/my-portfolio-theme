<?php get_header(); ?>

<?php $works_url = get_post_meta(get_the_ID(), 'works_url', true); ?>

<main>
    <article>
        <div class="single-inner">
            <div class="the-title">
                <h1><?php the_title(); ?></h1>
            </div>
            
            <div class="post-thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php echo esc_url($works_url); ?>" target="_blank" rel="noopener">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="content">
                <?php the_content(); ?>
            </div>

            <ul class="post-link">
                <li><?php previous_post_link('%link', '« 前のページ'); ?></li>
                <li><?php next_post_link('%link', '次のページ »'); ?></li>
            </ul>

            <div class="go-link">
                <?php if($works_url): ?>
                    <p>
                        <a href="<?php echo esc_url($works_url); ?>" target="_blank" rel="noopener" class="btn">
                            <span class="btn-text">模写サイトを見る</span>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
            

            <div class="back-archive">
                <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn">
                    <span class="btn-text">一覧に戻る</span>
                </a>
            </div>
        </div>
        
    </article>
</main>

<?php get_footer(); ?>

<style>
    .single-inner{
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .the-title{
        font-size: 2.25rem;
        text-align: center;
        margin: 50px;
    }

    .post-thumbnail{
        display: block;
        height: 250px;
        border-radius: 5px;
        /* box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.3); */
        margin: 0 auto;
        padding: 5px;
    }
    .post-thumbnail img{
        width: 100%;
        height: 250px;
        display: block;
        object-fit: contain;
        border-radius: 5px;
        /* box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.3); */
        margin: 0 auto;
        padding: 5px;
    }
    .content{
        margin: 80px 0;
    }

    .back-archive{
        text-align: center;
    }

    .post-link{
        display: flex;
        justify-content: space-around;
        margin: 50px 0;
    }

    .go-link{
        display: none;
        text-align: center;
    }

    @media screen and (max-width: 768px){
        .the-title{
            font-size: 1rem;
            margin: 20px;
        }
    }
</style>