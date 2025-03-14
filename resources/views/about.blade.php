@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <div class="container">
        <h1>Welcome to My About Page</h1>
        <h2>Meet me: {{ $who }}</h2>
        <img src="{{ asset('img/menhera.jpg') }}" alt="Menhera Image" width="200" style="border-radius: 50%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); margin-top: 20px;">



        <div class="intro">
            <p>
                Hello, I'm {{ $who }}! I'm a passionate content creator, tech enthusiast, and a bit of a gamer.
                My journey is all about learning new things, building projects, and connecting with others.
                Stick around as I share my experiences and knowledge with you!
            </p>
        </div>

        <div class="social-links">
            <h3>Connect with me:</h3>
            <a href="mailto:your-email@example.com">Email</a>
            <a href="https://www.linkedin.com/in/your-profile" target="_blank">LinkedIn</a>
            <a href="https://www.instagram.com/your-profile" target="_blank">Instagram</a>
            <a href="https://wa.me/your-number" target="_blank">WhatsApp</a>
        </div>
    </div>
@endsection

@section('extra_styles')
    <style>
        /* Additional custom styles for About page */

        .intro p {
            font-size: 1rem;
            line-height: 1.6;
            color: #ddd;
        }

        .social-links a {
            font-size: 1.2rem;
            margin: 0 15px;
            color: #fff;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #f1f1f1;
        }

        img {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
