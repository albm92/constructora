@extends('layouts.app')

@section('content')

<h2 style="text-align:center; margin:30px 0;">Nuestros Servicios</h2>

<div style="
display:grid;
grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
gap:20px;
padding:20px;
">

    <div class="card">
        <img src="/img/8.jpeg" style="width:100%; height:180px; object-fit:cover; border-radius:10px;">
        <h3>Trabajos en altura y fachadas</h3>
        <p>Ejecución de acabados modernos, instalación de ventanales y detalles arquitectónicos.</p>
    </div>

    <div class="card">
        <img src="/img/15.jpeg" style="width:100%; height:180px; object-fit:cover; border-radius:10px;">
        <h3>Cubiertas e impermeabilización</h3>
        <p>Protección contra humedad, instalación de tragaluces y mantenimiento de techos.</p>
    </div>

    <div class="card">
        <img src="/img/1.jpeg" style="width:100%; height:180px; object-fit:cover; border-radius:10px;">
        <h3>Pintura y acabados</h3>
        <p>Acabados modernos para interiores y exteriores con excelente calidad.</p>
    </div>

    <div class="card">
        <img src="/img/4.jpeg" style="width:100%; height:180px; object-fit:cover; border-radius:10px;">
        <h3>Instalación de tumbados gypsum</h3>
        <p>Diseño e instalación de tumbados modernos, divisiones interiores y acabados decorativos en gypsum.</p>
    </div>

</div>

@endsection