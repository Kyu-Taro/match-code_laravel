
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Match-Code|トップページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
</head>
<body>
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="/detail">Detail</a></li>
            <li><a href="/mypage">Mypage</a></li>
        </ul>
    </div>

    @if (session('flash_message'))
        <h1 class="msg-suc">
            {{ session('flash_message') }}
        </h1>
    @endif

    @component('components.header')
    @slot('route1')
        /login
    @endslot
    @slot('link1')
        Login
    @endslot
    @slot('route2')
        /register
    @endslot
    @slot('link2')
        Register
    @endslot
    @slot('route3')
        /post
    @endslot
    @slot('link3')
        Post
    @endslot
    @slot('route4')
        /detail
    @endslot
    @slot('link4')
        Detail
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        Mypage
    @endslot
    @endcomponent
    <section class="top-container">
        <h1 class="top-title">
            ~Match-Code~<br/>
            First time team development
        </h1>
        <p class="top-coment">
            駆け出し<br class="on">プログラマー・デザイナーのためのサービス<br/>
            一人ではできない<br class="on">チーム開発を<br class="on"><span class="top-span">Match-code</span>なら<br/>
            初めてのチーム開発をここで
        </p>
    </section>
    <section class="detail-container">
        <div class="detail-top site-width scroll-section">
            <h1 class="detail-title"><span class="top-span">Match-Code</span>とは</h1>
            <p class="detail-coment">
                独学でプログラミングや<br class="on">デザインを勉強していると<br/>
                一人で作業することがほとんど。<br/>
                誰かと一緒に作ってみたいや<br class="on">チームで制作してみたい<br/>
                そんなあなたの仲間を<br class="on">ここで探しませんか?<br/>
            </p>
            <a href="register" class="detail-link">Let's develop</a>
        </div>
    </section>
    <section class="usage-container">
        <div class="usage-top site-width scroll-section">
            <h1 class="usage-title">ご利用について</h1>
            <p class="usage-coment">
                完全無料で全ての機能を<br class="on">お使い頂けます<br/>
                会員登録を行いチームの作成や<br class="on">チーム参加を行えます<br/>
                また、募集チームの回覧、<br class="on">チームのメンバーの確認など<br/>
                チーム参加からチーム作成、<br class="on">開発までの流れを<br class="on">以下で確認できます<br/>
            </p>
            <a href="detail" class="detail-link">Click here for details</a>
        </div>
    </section>
    @component('components.footer')
    @slot('route1')
        /login
    @endslot
    @slot('link1')
        Login
    @endslot
    @slot('route2')
        /register
    @endslot
    @slot('link2')
        Register
    @endslot
    @slot('route3')
        /post
    @endslot
    @slot('link3')
        Post
    @endslot
    @slot('route4')
        /detail
    @endslot
    @slot('link4')
        Detail
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        Mypage
    @endslot
    @endcomponent
</body>
</html>

