@extends('layouts.app')

@section('content')

<!-- HERO -->
<section style="
height:90vh;
background:url('/img/1.jpeg') center/cover no-repeat;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
position:relative;
">

<div style="
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.5);
"></div>

<div class="fade-in" style="position:relative; color:white;">

    <h1 style="font-size:55px; margin-bottom:20px;">
        Construcción y acabados modernos
    </h1>

    <p style="margin-bottom:20px; font-size:18px;">
        Calidad, seguridad y resultados profesionales
    </p>

    <a style="
    background:#25D366;
    padding:18px 30px;
    color:white;
    text-decoration:none;
    font-size:20px;
    border-radius:8px;"
    href="https://wa.me/593991402421">
        📲 Solicitar cotización
    </a>

</div>

</section>

<!-- POR QUE ELEGIRNOS -->
<section style="padding:60px; background:#f5f5f5; text-align:center;">

<h2 style="margin-bottom:40px;">¿Por qué elegirnos?</h2>

<div style="
display:grid;
grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
gap:20px;
max-width:1000px;
margin:auto;
">

    <div class="card">
        <h3>✔ Experiencia</h3>
        <p>Proyectos reales en construcción moderna.</p>
    </div>

    <div class="card">
        <h3>✔ Calidad</h3>
        <p>Materiales duraderos y acabados finos.</p>
    </div>

    <div class="card">
        <h3>✔ Seguridad</h3>
        <p>Trabajo en altura con protección.</p>
    </div>

    <div class="card">
        <h3>✔ Responsabilidad</h3>
        <p>Cumplimos tiempos y acuerdos.</p>
    </div>

</div>

</section>

<!-- CTA FINAL -->
<section style="padding:40px; background:#111; color:white; text-align:center;">

<h2>¿Necesitas un trabajo profesional?</h2>
<p>Contáctanos ahora y recibe asesoría sin compromiso</p>

<a href="https://wa.me/593991402421"
style="background:#25D366; padding:15px 25px; color:white; text-decoration:none; border-radius:5px;">
Escribir por WhatsApp
</a>

</section>

@endsection