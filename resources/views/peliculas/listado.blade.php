@include('includes.header')
@include('includes.header')
@include('includes.header')

<!-- Imprimir por pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[1]}}</h2>
<p>{!! date('Y') !!}</p>

<!-- Comentarios -->
<!-- Esto es un comentario html -->
<?php 
// Esto es un comentario php
?>

{{--Esto es un comentario blade--}}

<!-- Mostrar si existe -->
<!--<?= isset($director) ? $director : 'No hay director'; ?>-->

<!-- Condicionales -->

@if($titulo && count($listado) >= 2)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 2</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else 
    <h1>El titulo no existe</h1>
@endif

<!-- BUCLES -->

@for($i = 1; $i <= 20; $i++)
    El numero es: {{$i}} <br/>
@endfor

<hr/>

<?php $contador = 1 ?>
@while($contador < 50)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}} <br/>
    @endif

    <?php $contador++; ?>
@endwhile

<hr/>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach


@include('includes.footer')