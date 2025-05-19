<?php get_header(); ?>


<main>
    <section id="about">
        <h1>Aboutの固定ページ</h1>
        <div class="about-inner">

            <h3>
                デザインはちょっと苦手だけどコードを書くのは大好き。<br>
                PHPで業務アプリケーションなども作ってみたい。<br>
                ちゃっとGPT君のアシスタントがあれば、なんとかなると思っている。
            </h3>

            <div class="s1">
                <p>触ったことあるもの</p>
                <ul>
                    <li>jQuery inview</li>
                    <li>swiper</li>
                    <li>PHP laravel</li>
                </ul>
            </div>

            <div class="s1">
                <p>テーマフォルダの中身</p>
                <div class="tc">
                    <img src=" <?php echo esc_url(get_theme_file_uri('/img/portfoliosite.png')); ?>" alt="">
                </div>
            </div>

            <div class="s1">
                <p>メモ書き</p>
                <ul>
                    <li>模写したサイトのHTMLファイルなどはuploadフォルダに置いてある</li>
                    <li>ヘッダーのナビメニューはregister_nav_menusで管理画面に追加している。</li>
                </ul>
            </div>
        </div>
    </section>
    
</main>

<style>
    #about{
        padding: 0;
    }
    .about-inner{
        max-width: 1000px;
        margin: 0 auto;
    }

    #about h1{
        font-size: 2rem;
        background-color: var(--color-btn-r);
        text-align: center;
    }
    #about h3{
        padding: 20px;
    }
    .s1{
        margin: 50px 0;
    }

    .tc{
        display: flex;
        justify-content: center;
    }

    @media screen and (max-width: 768px){
        #about h3{
            text-align: left;
        }
    }


</style>
<?php get_footer(); ?>