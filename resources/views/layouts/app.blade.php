<!DOCTYPE html>
<html>
<head>
    <title>Decoraciones y Mantenimientos Vera</title>

    <style>
        body {
            margin:0;
            font-family: Arial, sans-serif;
            background:#f5f5f5;
        }

        /* HEADER */
        header{
            background:#1f1f1f;
            border-bottom:3px solid #25D366;
            padding:15px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo-area{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .logo{
            height:70px;
            border-radius:8px;
        }

        .logo-area h2{
            color:white;
            margin:0;
            font-size:24px;
            font-weight:bold;
        }

        nav{
            display:flex;
            gap:25px;
        }

        nav a{
            color:white;
            text-decoration:none;
            font-size:18px;
            transition:0.3s;
        }

        nav a:hover{
            color:#25D366;
        }

        /* WHATSAPP */
        .whatsapp{
            position:fixed;
            bottom:20px;
            right:20px;
            background:#25D366;
            color:white;
            font-size:30px;
            padding:15px;
            border-radius:50%;
            text-decoration:none;
            z-index:999;
        }

        /* ANIMACIONES */
        .fade-in{
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(20px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        /* IMÁGENES */
        img{
            transition:transform 0.3s ease;
        }

        img:hover{
            transform:scale(1.05);
        }

        /* TARJETAS */
        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        .card img{
            margin-bottom:10px;
        }

        /* FOOTER */
        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }
    </style>
</head>

<body>

<header>

    <div class="logo-area">
        <img src="/img/logo.jpg" class="logo">

        <h2>DECORACIONES Y MANTENIMIENTOS VERA</h2>
    </div>

    <nav>
        <a href="/">Inicio</a>
        <a href="/galeria">Galería</a>
        <a href="/servicios">Servicios</a>
    </nav>

</header>

@yield('content')

<a href="https://wa.me/593991402421?text=Hola%20quiero%20informaci%C3%B3n%20sobre%20sus%20servicios"
target="_blank"
class="whatsapp">
    💬
</a>

<footer>
    <p>© 2025 Todos los derechos reservados</p>
    <p>Desarrollado por AdnCodEc</p>
</footer>

</body>
</html>