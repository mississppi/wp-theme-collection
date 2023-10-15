<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900&display=swap&subset=japanese" rel="stylesheets">
    <?php wp_head(); ?>
</head>
<body>
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

    <section class="hero">
        <div class="catch">
            <div class="container">
                <h1>
                    <img src="" alt="">
                </h1>
                <p>裏方としてお仕事を支えます</p>
            </div>
        </div>
    </section>

    <section class="message">
        <div class="container">
            <h2>ビジネスアシスタントとして<br>サポートを続けて30年</h2>
            <p>プロのビジネスアシスタントとして独立して以来、幅広いクライアントからの依頼に応じ、業務の多様性や事業の効率化などをサポートしてまいりました。当社のスタッフはさまざまな分野に精通しており、必要に応じて様々な業務に対応できます。雑務に費やす時間を最小限に抑え、クライアント様が重要なプロジェクトに専念できるようお手伝いしています。</p>
        </div>
    </section>
    
    <section class="service">
        <div class="container">
            <h2>アシスタントサービス</h2>
            <p>私たちにできること</p>

            <div class="details">
                <article class="detail office">
                    <figure></figure>
                    <h3>開発業務<br>サポート</h3>
                    <p>開発プロジェクトをバックアップいたします。設計、実装、テストなどさまざまな開発業務をサポートいたします。また、多言語でのサポートを提供いたします。</p>
                    <a href="#" class="btn" >DEVELOP</a>
                </article>

                <article class="detail office">
                    <figure></figure>
                    <h3>マネージメント<br>サポート</h3>
                    <p>プロジェクトチームの構成メンバーのマネージメント、案件の進捗管理、リーダーのアシスタントサポートなどを行います。</p>
                    <a href="#" class="btn" >MANAGEMENT</a>
                </article>

                <article class="detail office">
                    <figure></figure>
                    <h3>調査・研究<br>サポート</h3>
                    <p>各種事業の立ち上げ、運営にかかわる調査・研究のサポートや、特定分野の専門家との提携のお手伝いなどを行います。</p>
                    <a href="#" class="btn" >RESEARCH</a>
                </article>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="text">
                <h2>お問い合わせ</h2>
                <p>もっと開発業務を効率化したい<br>
                マネージメントの煩わしさから解放されたい<br>
                本業に集中したいなどなど、<br>些細なことでもお気軽にお問い合わせください
                </p>
            </div>

            <form action="" class="form">
                <p><label ><span class="sr-only">名前</span><input type="text"></label></p>
                <p><label ><span class="sr-only">メールアドレス</span><input type="email"></label></p>
                <p><label ><span class="sr-only">メッセージ</span><textarea name="" id="" cols="30" rows="10"></textarea></label></p>
                <p><input type="submit" value="送信" class="btn"></p>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="info">
                <div class="site">
                    <img src="" alt="">
                    <div>
                        <p class="corp">テストカンパニー</p>
                    </div>
                </div>
                <p class="add">
                    〒001-0001<br>
                    北海道中央区南99条東西ビル10F<br>
                    011-1111-2222
                </p>
            </div>

            <ul class="sns">
                <li><a href="#"><img src="" alt="Twitter"></a></li>
                <li><a href="#"><img src="" alt="Facebook"></a></li>
                <li><a href="#"><img src="" alt="Instagram"></a></li>
            </ul>
        </div>
    </footer>

    <script>
        function navFunc(){
            document.querySelector('html').classList.toggle('open');
        }
    </script>
</body>
</html>