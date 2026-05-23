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
        @if (session('success'))
            <div style="border:1px solid #0a0; padding:10px; margin:10px 0;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div style="border:1px solid #c00; padding:10px; margin:10px 0;">
                {{ session('error') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer style="padding: 16px 0; border-top: 1px solid #ddd; margin-top: 24px;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 16px; color: #666;">
            © {{ date('Y') }} Catalog App
        </div>
    </footer>
    </body>
</html>
