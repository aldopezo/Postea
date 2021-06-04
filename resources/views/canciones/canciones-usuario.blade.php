@if($user_like)
    <img src="{{asset('img/heart-red.png')}}" data-id="{{$image}}">
@endif
    <div class="action">
    <a href=""class="btn btn-warning">Borrar</a>
    <a href=""class="btn btn-danger">Actualizar</a>
</div>