<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Медиа библиотека')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header style="padding: 12px 0; border-bottom: 1px solid #ddd;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 16px; display: flex; gap: 12px; align-items: center; justify-content: space-between;">
            <div>
                <a href="{{ route('home') }}" style="text-decoration: none; font-weight: 700;">
                    Медиа-библиотека
                </a>
            </div>

            <nav class="nav-menu">
                <a href="{{ route('home') }}">Главная</a>
            </nav>
        </div>
    </header>

    <main style="max-width: 900px; margin: 0 auto; padding: 24px 16px;">
        @yield('content')
    </main>

    <footer style="padding: 16px 0; border-top: 1px solid #ddd; margin-top: 24px;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 16px; color: #666;">
            © {{ date('Y') }} Catalog App
        </div>
    </footer>
    </body>
</html>
