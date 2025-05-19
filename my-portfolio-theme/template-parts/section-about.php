<section class="about">
    <h3 class="section-title">About Me</h3>
    <div class="about-inner">
        <div class="mosya">
            <p>模写練習させていただいた神サイト</p>
            <ul>
                <li>
                    <a href="https://code-jump.com/" target="_blank">Codejump様</a>
                </li>
                <li>
                    <a href="https://webdesigner-go.com/" target="_blank">webdesigner-go様</a>
                </li>
            </ul>
        </div>

        <div class="mycms">
            <h3>X（Twitter）風の自作CMS作ってみた</h3>
            <p>ユーザー名：user1</p>
            <p>パスワード：user1</p>
            <p>とてもデータベース操作のお勉強になりました。</p>
            <a href="https://xs981006.xsrv.jp/KR_portfolio/my-cms" target="_blank" class="btn">
                <span class="btn-text">自作CMSを見てみる</span>
            </a>
        </div>

        <div class="inview fadeIn_up">
            <div class="author-img">
                <img src="<?php echo get_theme_file_uri('/img/author.png'); ?>" alt="本人画像">
            </div>
            <div>
                <dl>
                    <dt>Name</dt><dd>L</dd>
                    <dt>Skill</dt><dd>HTML・CSS　1年</dd>
                    <dt></dt><dd>Javascript（jQuery）　1年</dd>
                    <dt></dt><dd>PHP　1年</dd>
                    <dt></dt><dd>MySQL　少し</dd>
                    <dt>Can Do</dt><dd>デザインカンプ（Figma）からHTML/CSSコーディング</dd>
                    <dt></dt><dd>WordPressのカスタマイズ。オリジナルテーマ作成　など</dd>
                    <dt></dt><dd>シンプルかつ高品質な制作を心がけています。</dd>
                    <dt></dt><dd>相談しながら、一番いいカタチを一緒に探します。</dd>
                    <dt></dt><dd>コードもデザインも気軽に頼ってください。</dd>
                    <dt>Hourly Rate</dt><dd>2000円～</dd>
                </dl>
            </div>
        </div>
        
        
        
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="btn">
            <span class="btn-text">本サイトの詳細</span>
        </a>
    </div>
</section>

<style>
    .mosya{
        padding: 20px;
        background-color: #fff;
        color: #000;
        border-radius: 10px;
        font-weight: bold;
        margin-bottom: 50px;
    }
    .mosya a{
        color: blue;
        font-size: 1.25rem;
        letter-spacing: 0.02;
    }

    .about dl{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 20px 0 20% 60px;
    }
    .about dt{
        width: 25%;
        text-align: left;
        margin-bottom: 10px;
    }
    .about dd{
        width: 75%;
        text-align: left;
        margin-bottom: 10px;
    }

    @media screen and (max-width: 768px){
        dl{
            margin: 0px;
            padding: 0 20px;
            font-size: 0.875rem;
        }

    }
</style>
