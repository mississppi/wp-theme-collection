<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900&display=swap&subset=japanese" rel="stylesheets">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="site">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/w.svg?<?php echo date("YmdHis");?>" alt="" />
                <div>
                    <p class="corp">テストカンパニー</p>
                    <p class="desc">確かなサポート</p>
                </div>
            </div>

            <nav class="nav">
                <ul>
                    <li><a href="#">会社情報</a></li>
                    <li><a href="#">サービス</a></li>
                    <li><a href="#" class="btn">お問い合わせ</a></li>
                </ul>
            </nav>

            <button type="button" class="nav-button" onClick="navFunc()">
                <span class="sr-only">MENU</span>
            </button>
        </div>
    </header>