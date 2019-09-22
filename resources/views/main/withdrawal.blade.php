<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/withdrwal.css" type="text/css">
    <title>Match-Code|退会</title>
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
                <li><a href="/logout">Logout</a></li>
                <li><a href="/create">Create</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="/detail">Detail</a></li>
                <li><a href="/mypage">Mypage</a></li>
            </ul>
        </div>

    @component('components.header')
        @slot('route1')
            /logout
        @endslot
        @slot('link1')
            Logout
        @endslot
        @slot('route2')
            /create
        @endslot
        @slot('link2')
            Create
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

    <main class="top-container">
        <section class="form-container">
            <div class="site-width">
                <h1 class="title">本当に退会しますか？</h1>
                <form action="/laravel-match-code/public/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                   <input type="submit" name="withdraw" value="Yes">
                   <input type="submit" name="withdraw" value="No">
                </form>
            </div>
        </section>
    </main>

    @component('components.footer')
        @slot('route1')
            /logout
        @endslot
        @slot('link1')
            Logout
        @endslot
        @slot('route2')
            /create
        @endslot
        @slot('link2')
            Create
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
