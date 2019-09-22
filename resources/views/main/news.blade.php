<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
    <title>Match-Code|お知らせ</title>
</head>
<body>
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/">Top</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="/detail">Detail</a></li>
            <li><a href="/mypage">Mypage</a></li>
        </ul>
    </div>
    @component('components.header')
        @slot('route1')
            /
        @endslot
        @slot('link1')
            TOP
        @endslot
        @slot('route2')
            /logout
        @endslot
        @slot('link2')
            Logout
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

    <section class="post-section">
        <div class="post-container">
            <div class="site-width">
                <div class="text-contents">
                    <h1>お知らせ一覧</h1>
                    <div class="content-wrap">
                        @if (!(count($entory)))
                        <p class="font22">現在、お知らせはありません。</p>
                        @endif
                        @foreach($entory as $item)
                            <div class="text-content">
                                @if($item->decision == 1)
                                <p>【{{ $item->updated_at }}】  参加申請のあった<a href="mypageDetail/{{ $item->user->id }}">{{ $item->user->name }}</a>さんの申請を許可しました。<span class="color">{{ $item->user->email }}</span>に連絡をしましょう。</p>
                                @elseif($item->decision == 2)
                                <p>【{{ $item->updated_at }}】  参加申請のあった<a href="mypageDetail/{{ $item->user->id }}">{{ $item->user->name }}</a>さんの申請を拒否しました。</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @component('components.footer')
        @slot('route1')
            /
        @endslot
        @slot('link1')
            TOP
        @endslot
        @slot('route2')
            /logout
        @endslot
        @slot('link2')
            Logout
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
