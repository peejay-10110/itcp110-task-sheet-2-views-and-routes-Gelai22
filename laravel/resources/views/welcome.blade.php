<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angela Marie H. Vasquez — Portfolio</title>

    <!-- Professional Styling -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: #0A0A0F;
            color: #F0EDE8;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
        }

        /* NAVIGATION BAR */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid #1E1E2A;
            height: 60px;
        }
        .nav-inner {
            max-width: 1100px; margin: 0 auto; height: 100%;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 24px;
        }
        .nav-logo { color: #C8F060; font-weight: 800; text-decoration: none; font-size: 18px; }
        .nav-links { display: flex; list-style: none; gap: 10px; }
        .nav-links a {
            color: #7A7880; text-decoration: none; font-size: 13px;
            padding: 5px 12px; border-radius: 6px; font-family: monospace;
            transition: 0.2s;
        }
        .nav-links a:hover, .nav-links a.active { color: #C8F060; background: rgba(200, 240, 96, 0.08); }

        /* MAIN CONTENT AREA */
        main {
            padding-top: 100px; /* Space for fixed nav */
            min-height: calc(100vh - 150px);
            max-width: 1100px;
            margin: 0 auto;
            padding-inline: 24px;
        }

        /* FOOTER */
        footer {
            border-top: 1px solid #1E1E2A;
            padding: 40px 24px;
            text-align: center;
            font-family: monospace;
            color: #4A4855;
            font-size: 12px;
        }

        /* Utility Card for Pages */
        .card {
            background: #16161E;
            border: 1px solid #1E1E2A;
            padding: 24px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        h1 { color: #C8F060; margin-bottom: 20px; font-family: Georgia, serif; }
    </style>
</head>
<body>

<nav>
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">AMHV_DEV</a>
        <ul class="nav-links">
            <!-- Using request()->is() to highlight the active page automatically -->
            <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('work') }}" class="{{ request()->is('work') ? 'active' : '' }}">Work</a></li>
            <li><a href="{{ route('projects') }}" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('skills') }}" class="{{ request()->is('skills') ? 'active' : '' }}">Skills</a></li>
            <li><a href="{{ route('experience') }}" class="{{ request()->is('experience') ? 'active' : '' }}">Experience</a></li>
            <li><a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>
</nav>

<main>
    <!-- This is where the unique content of each page will appear -->
    @yield('content')
</main>

<footer>
    <p>&copy; {{ date('Y') }} ANGELA MARIE H. VASQUEZ &middot; TAGUIG CITY, PH &#127477;&#127469;</p>
</footer>

</body>
</html>
