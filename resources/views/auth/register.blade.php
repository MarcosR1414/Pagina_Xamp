@extends('layouts.app')

@section('content')
<head>
    <title>Registrarse</title>
    <link href="{{ asset('css/login.blade.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://www.dafontfree.net/embed/c2FudGVsaWEtcm91Z2gtYWx0LWJvbGQtdGhyZG1vJmRhdGEvNTEvcy8/2MTkzMi9TYA50RWxpYVJvdWdoQWx0Qm9sZFRockRFTU8ub3Rm" rel="stylesheet" type="text/css">
</head>

<body class="img" style="background-image: url(fondo/fond.jpg);">
    <div class="Nil">
        <h1>Senati</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box2">
                <h2>Registrar</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="user-box2">
                        <input type="text" placeholder="username" name="username">
                        <label>Usuario</label>
                    </div>
                    <div class="user-box2">
                        <input type="password" placeholder="password" name="password">
                        <label>Contraseña</label>
                    </div>

                    <div class="user-box2">
                        <input type="text" placeholder="name" name="name">
                        <label>Nombre</label>
                    </div>

                    <div class="user-box2">
                        <input type="text" placeholder="Apellido" name="apellido">
                        <label>Apellido</label>
                    </div>

                    <div class="user-box2">
                        <input type="text" placeholder="email" name="email">
                        <label>Correo</label>
                    </div>

                    <button class="button1" type="submit" name="registrarme">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Registrarme
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
