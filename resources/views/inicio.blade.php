@extends('plantilla')

@section('contenido')

    <div class="container text-center">
      <h1 class= "display-1 mt-4 text-primary "> Pagina de inicio</h1>
    </div>

    <div class="display-4 mt-5 mb-5">
      <a href="<?php echo route('rutaInicio')?>">Inicio</a>
      <a href="<?php echo route('rutaAdminInstru')?>">Admin Instru</a>
      <a href="<?php echo route('rutaAdminCompo')?>">Admin Compo</a>
      <a href="<?php echo route('rutaInventario')?>">Inventario</a>
      <a href="<?php echo route('rutaReportes')?>">Reportes</a>
      <a href="<?php echo route('rutaVentasCompo')?>">Ventas Compo</a>
      <a href="<?php echo route('rutaVentasInstru')?>">Ventas Instru</a>
      </div>

    @stop 