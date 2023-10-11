
<!DOCTYPE html>
<html>
<head>
    <title>Mi Aplicación</title>
</head>
<body>
    <header>
        <x-header-component />
    </header>

    <nav>
        <x-menu-component />
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <x-footer-component />
    </footer>
</body>
</html>