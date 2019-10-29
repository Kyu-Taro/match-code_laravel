
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/detail.css" type="text/css">
    <title>Match-Code|トップページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>

    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/login">ログイン</a></li>
            <li><a href="/register">新規登録</a></li>
            <li><a href="/">トップ</a></li>
            <li><a href="/post">募集一覧</a></li>
            <li><a href="/mypage">マイページ</a></li>
        </ul>
    </div>

    @component('components.header')
    @slot('route1')
        /login
    @endslot
    @slot('link1')
        ログイン
    @endslot
    @slot('route2')
        /register
    @endslot
    @slot('link2')
        新規登録
    @endslot
    @slot('route3')
        /
    @endslot
    @slot('link3')
        トップ
    @endslot
    @slot('route4')
        /post
    @endslot
    @slot('link4')
        募集一覧
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        マイページ
    @endslot
    @endcomponent
    <section class="detail-container">
            <div class="detail-top site-width js-detail">
                <h1 class="detail-title"><span class="top-span">Match-Code</span>~会員登録編~</h1>
                <p class="sub-title">まずは会員登録をしよう！</p>
                <p class="detail-coment">
                    会員登録するには、画面右上の<span class="top-span">Register</span>をクリック<br>
                    記事の回覧や募集及び参加には、<br class="on">会員登録が必須です<br>
                    会員登録をすることで、<br class="on">全ての機能をご利用いただけます<br>
                    <br>
                    会員登録はわずか１分！！<br/>
                    <a href="{{ route('register') }}" class="link">今すぐ登録</a>
                </p>
            </div>
        </section>
    <section class="detail2-container">
        <div class="detail2-top site-width js-detail">
            <h1 class="detail2-title"><span class="top-span">Match-Code</span><br class="on">~プロジェクト参加編~</h1>
            <p class="detail2-coment">
                まずは、画面右上<span class="top-span">Post</span>をクリック<br/>
                そこにはたくさんの募集記事が<br class="on">まとめられています<br/>
                そこで、自分の目的にあった<br class="on">参加したいプロジェクトを<br class="on">探してみよう！！<br/>
                参加したいプロジェクトを<br class="on">見つけたら、参加を送ることで<br/>
                募集主に通知が届きます<br>
                募集が許可されると、<br class="on">募集主に対して登録してある<br class="on">メールアドレスが伝えられます<br>
                連絡を待ちましょう<br/>
                <a href="post" class="link">募集を見てみる</a>
            </p>
        </div>
    </section>
    <section class="detail3-container">
        <div class="detail3-top site-width js-detail">
            <h1 class="detail3-title"><span class="top-span">Match-Code</span>~募集編~</h1>
            <p class="detail3-coment">
                募集に参加するだけでなく<br class="on">自分で募集を作成し集めよう！<br/>
                会員登録が済んだら<br class="on"><span class="top-span">Mypage</span>に行き、画面右上の<br class="on"><span class="top-span">Create</span>をクリック<br/>
                そこから募集記事を出して<br class="on">人を集めることもできます<br/>
                必要事項を全て記入し<br class="on">投稿するだけで完了！<br/>
                自分の目的にマッチした<br class="on">相手を探してみよう！<br/>
                <a href="create" class="link">投稿してみる</a>
            </p>
        </div>
    </section>
    <section class="detail4-container">
        <div class="detail4-top site-width js-detail">
            <h1 class="detail4-title"><span class="top-span">Match-Code</span>~認証編~</h1>
            <p class="detail4-coment">
                自分の募集に参加申請があれば、<br class="on">マイページに下部欄に<br/>
                申請者の情報と共に通知が届きます<br/>
                <span class="top-span">承諾</span>or <span class="top-span">断る</span>を選択することが<br class="on">できるようになっています<br/>
                承諾した場合はマイページ右上<span class="top-span">News</span>に申請メンバーの<br class="on">情報が送られます<br/>
                そこから、申請者に<br class="on">連絡を取りましょう<br/>
                <a href="news" class="link">通知を確認する</a>
            </p>
        </div>
    </section>
    @component('components.footer')
    @slot('route1')
        /login
    @endslot
    @slot('link1')
        ログイン
    @endslot
    @slot('route2')
        /register
    @endslot
    @slot('link2')
        新規登録
    @endslot
    @slot('route3')
        /
    @endslot
    @slot('link3')
        トップ
    @endslot
    @slot('route4')
        /post
    @endslot
    @slot('link4')
        募集一覧
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        マイページ
    @endslot
    @endcomponent
</body>
</html>

