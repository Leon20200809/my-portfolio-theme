<section id="contact">
    <h3 class="section-title">Contact</h3>
    <div class="contact-inner">
        <p>プラグイン contactform7を 使用</p>

        <div id="contact-form" class="contactform-area">
            <?php echo do_shortcode('[contact-form-7 id="7679318" title="contactform1"]') ?>
        </div>
    </div>
</section>

<style>
    .contact-inner{
        max-width: 1100px;
        margin: 0 auto;
    }
    .contact-inner p{
        margin: 30px 0;
    }

    .contactform-area{
        margin: 0 auto;
        border: 2px solid #fff;
        width: 70%;
        padding: 3%;
    }

    .form-item{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
    .form-item-label{
        width: 30%;
        text-align: left;
        padding-left: 3%;
        margin-bottom: 10px;
    }
    .wpcf7-form-control-wrap{
        width: 70%;
        margin-bottom: 10px;
    }
    .wpcf7-list-item{

    }

    .form-item-label-Required{
        color: red;
        font-size: 0.875rem;
    }
    .wpcf7-form-control-wrap input{
        background-color: #fff;
        color: #000;
        padding: 5px 10px;
        width: 100%;
        text-align: left;
    }
    .wpcf7-form-control-wrap textarea{
        background-color: #fff;
        color: #000;
        padding: 5px 10px;
        width: 100%;
        text-align: left;
    }
    .wpcf7-submit{
        background-color: #fff;
        color: #000;
        display: inline-block;
        padding: 20px 60px;
        font-weight: bold;
        transition: all 0.3s;
    }
    .wpcf7-submit:hover{
        transform: scale(1.1);
        background-color: gray;
    }

    @media screen and (max-width: 768px){
        .contactform-area{
            width: 100%;
            padding: 3% 0;
        }
        .wpcf7-submit{
            transform: scale(0.8);
        }
    }
</style>
