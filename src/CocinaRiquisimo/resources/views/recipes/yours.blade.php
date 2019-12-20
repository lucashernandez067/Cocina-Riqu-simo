@extends('layouts.main')
@section('title', 'Tus Recetas')
@section('content')
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight"><h2>Tus Recetas</h2></div>
            <div class="p-2 bd-highlight"><a href="{{ route('recipes.create') }}" class="btn btn-info">Añadir</a></div>
        </div>
        
        
        <div class="table-responsive">
            <table id="myTable" class="table table-hover table-bordered">
            <caption>Lista de recetas registradas</caption>
            <thead class="">
                <tr class="info">                
                    <th scope="col">Categoría</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha de Registro</th>                    
                    <th scope="col">Fecha de Actualización</th>                    
                    <th scope="col">Actualizar</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>                    
                @foreach($recipes as $recipe)
                @if(Auth::user()->id == $recipe->fk_user)
                <tr>		
                    <td>
                        @foreach($categorias as $categoria)
                            @if($recipe->fk_categoria == $categoria->id_categoria)
                                {{ $recipe->fk_categoria = $categoria->categoria }}                
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $recipe->name }}</td>
                    <td>{{ $recipe->description }}</td>                    
                    <td>{{ $recipe->created_at }}</td>
                    <td>{{ $recipe->updated_at }}</td>
                    <td><a class="btn btn-primary" href="{{ route('recipes.edit', $recipe->id) }}">Actualizar</a></td>
                    <td><a class="btn btn-secondary" href="{{ route('recipes.show', $recipe->id) }}">Detalles</a></td>
                    <td>
                    <form action="{{ route('recipes.viewDestroy', $recipe->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
            </table>
        </div>
@endsection