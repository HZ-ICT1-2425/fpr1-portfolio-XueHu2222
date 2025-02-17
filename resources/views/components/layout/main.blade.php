@php
$navItems = [
['title' => 'Home', 'route' => 'home', 'icon' => 'images/homeIcon.png'],
['title' => 'Profile', 'route' => 'profile'],
['title' => 'Dashboard', 'route' => 'dashboard'],
['title' => 'FAQ', 'route' => 'faqs.index'],
['title' => 'Post', 'route' => 'posts.index'],
];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                @foreach ($navItems as $navItem)
                    <x-navbar-item :item="$navItem"></x-navbar-item>
                @endforeach
            </div>
        </div>
    </div>
</nav>

{{$slot}}

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline content">

            <div class="column has-text-left">
                    <img src="images/hzIcon.png" alt="HZicon" style="width: 100%; max-width: 300px; height: auto;">
            </div>

            <div class="column has-text-centered">
                <div>
                    <h3>
                        Studying at HZ
                    </h3>
                    <p>
                    <a href="https://portal.hz.nl/en/" target="_blank" class="is-underlined has-text-black">
                        HZ Portal
                    </a>
                    </p>
                    <p>
                    <a href="https://learn.hz.nl/my/" target="_blank" class="is-underlined has-text-black">
                        Learn environment
                    </a>
                    </p>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <h3>
                        Contact Me
                    </h3>
                    <a href="https://www.instagram.com/xueeee22/" target="_blank" class="link">
                       <img src="images/insIcon.png" alt="insIcon">
                    </a>
                    <a href="https://github.com/XueHu2222" target="_blank" class="link">
                        <img src="images/githubIcon.png" alt="gitIcon">
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Built by Xue Hu</p>
        </div>
    </div>
</footer>

</body>
</html>
