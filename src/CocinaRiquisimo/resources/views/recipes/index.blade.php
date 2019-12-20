@extends('layouts.main')
@section('title', 'Recetas')
@section('content')     
    <center><h2 class="text-warning text-center mb-3"><b>Recetas de nuestra comunidad</b></h2></center>
    
    <div class="row grid">
        @foreach($recipes as $recipe)        
        <div class="col-lg-4 col-md-6 grid-item mb-3 hvr-reveal">
            <div class="blog-wrapper mt-2">
                <br>
                <div class="recipe-img">
                    <a href="#"><img src="img/recipes/{{ $recipe->photo }}" alt="" width="300" height="auto"></a>
                </div>
                <div class="">
                    <!-- Información de la receta -->
                    <div class="recipe-info pt-2">
                        <ul>
                            <li><a href="#"><b>
                                @foreach($categorias as $categoria)
                                    @if($recipe->fk_categoria == $categoria->id_categoria)
                                        {{ $recipe->fk_categoria = $categoria->categoria }}                
                                    @endif
                                @endforeach    
                            </b></a></li>
                            <li>Subido hace 2 horas</li>
                        </ul>
                    </div>
                    <!-- Título de la receta -->
                    <h4><a href="#">{{ $recipe->name }}</a></h4>
                    <!-- Descripción -->
                    <p>{{ $recipe->description }}</p>
                    <p><b>Hecha por:</b>
                        @foreach($users as $user)
                            @if($recipe->fk_user == $user->id)
                                <span>@</span>{{ $recipe->fk_user = $user->nameuser }}                
                            @endif
                        @endforeach     
                    </p>                    
                    <a class="btn btn-6" href="#">Leer Más</a>                                
                </div>
                <br>
            </div>
        </div>                    
        @endforeach            
    </div>
@endsection