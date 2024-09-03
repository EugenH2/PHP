<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    @vite(['resources/js/app.js', 'resources/js/mobile.js', 'resources/css/base.css', 'resources/css/header.css', 'resources/css/home-main.css', 
    'resources/css/movies/articlePostingMovie.css', 'resources/css/movies/movie.css', 'resources/css/movies/postedArticles.css',
    'resources/css/auth.css', 'resources/css/navigation.css'])
</head>

<body>

    <header id="main-header">
        <div class="nav-base">

            <button id="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div id="div-logo-name"><a id="logo-name" href="/">moviedemo</a></div>

            <div class="nav-union">
                <nav>
                    <x-header-menu />
                </nav>
            </div>

        </div>
    </header>
    <aside id="mobile-menu">
        <nav>
            <x-header-menu />
        </nav>
    </aside>

</body>
<main>
    <h1>{{ $h1Heading }}</h1>
    <?php echo $slot ?>
</main>

</html>