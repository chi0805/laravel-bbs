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
        @if( Auth::check() )
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="検索...">
                <button type="submit" class="btn attention-btn btn-outline-success my-2 my-sm-0">検索</button>
            </form>
        @endif
        <a class="my-navbar-brand" href="/">Restaurants</a>
        <div class="my-navbar-control">
            @if( Auth::check() )
                <a href="/records/create" class="btn attention-btn">投稿する</a>
                ｜
                <a class="btn btn-light" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            @endif
            @if( !Auth::check() )
                ｜
                <a class="btn btn-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                ｜
                <a class="btn btn-light" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </div>
    </nav>
</header>
<main>
@yield('content')
</main>
@yield('scripts')
</body>
</html>
