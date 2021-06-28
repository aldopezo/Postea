@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center h-100">
        <div class="card col-md-8 mx-auto">
            <div class="card-body ">
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->created_at }}
                </h6>
                <img src="{{ asset($post->image) }}" alt="..." class="card-img-top">
                <p class="card-text">
                    {{ $post->content }}
                </p>                    
            </div>
            @guest
                @if (Route::has('login'))
                @endif

                @if (Route::has('register'))
                @endif

                @else
                  <div class="card-body ">
                    <form>
                      <div class="form-group">
                        <label for="Comentario" class="card-title">
                          <h5><b>Nuevo comentario</b></h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </form>
                  </div>
                  <div class="card-body ">
                    <ul class="list-unstyled">
                      <h5><b>Comentarios</b></h5>
                      <li class="media">
                        <div class="media-body">
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p class="text-right">Usuario 1</p>
                        </div>
                      </li>
                      <li class="media my-4">
                        <div class="media-body">
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p class="text-right">Usuario 2</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p class="text-right">Usuario 3</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                @endguest 
        </div>     
    </div>
</div>

@endsection
