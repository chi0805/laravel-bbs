<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurants App</title>
    @yield('styles')
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <nav class="my-navbar">
        <a class="my-navbar-brand" href="/">Restaurants</a>
        <div class="my-navbar-control">
        <a href="/records/search" class="btn btn-light ">探す</a>
        ｜
            @if( Auth::check() )
                <a href="/records/create" class="btn btn-light ">投稿する</a>
                ｜
                <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
                </form>
            ｜
            @endif
            <a class="btn btn-light" href="{{ route('login') }}">{{ __('Login') }}</a>
            ｜
            <a class="btn btn-light" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </nav>
</header>
<main>
@yield('content')
</main>
@yield('scripts')
</body>
</html>
