<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@yield('href')" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

        <main class="top-container">
                <section class="form-container">
                    <div class="site-width">
                    <h1>@yield('h1_title')</h1>
                        <form action="@yield('action')" method="POST">
                            @csrf
                            @yield('form')
                        </form>
                    </div>
                </section>
            </main>

    @yield('footer')
</body>
</html>
