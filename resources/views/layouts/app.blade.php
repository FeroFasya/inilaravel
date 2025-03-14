<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        /* Global Reset */

            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        * {
            margin: 10px 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #111;
            color: #f7f7f7;
            line-height: 1.6;
            text-align: center;
            min-height: 100vh;
            margin: 0;
            height: 100%;
        }

        /* Navbar Styling */
        nav {
            width: 100%;
            background-color: transparent;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #f7f7f7;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1rem;
            padding: 15px 0;
            display: inline-block;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #f1c40f;
            border-bottom: 2px solid #f1c40f;
        }

        /* Container for content */
        .container {
            padding-top: 60px; /* space for fixed navbar */
            padding: 20px;
        }

        h1, h2 {
            font-size: 1.5rem;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        /* Section Styles */
        section {
            padding: 40px 0;
            background-color: #333;
            margin: 20px 0;
            border-radius: 10px;
        }

        /* Footer */
      
        footer {
            background-color: #222;
            padding: 10px 0;
            width: 100%;
            color: #f7f7f7;
            text-align: center;
            position: relative;
            bottom: 0;
            margin-top: auto; /* Memastikan footer berada di bawah */
        }

        footer p {
            color: #f7f7f7;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            nav a {
                margin: 0 10px;
                font-size: 1rem;
            }
            h1, h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/blog">Articles</a>
        <a href="/kontak">Contact</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 by kinder. All Rights Reserved.</p>
    </footer>

</body>

</html>
