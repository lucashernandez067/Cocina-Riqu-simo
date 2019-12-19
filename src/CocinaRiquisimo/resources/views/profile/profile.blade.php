@extends('layouts.main')
@section('title', 'Mi Perfil')
@section('content')
    <center>
        <img src="/img/profile/{{ $user->photo }}" style="border-radius: 100px;width: 150px;height: 150px; border: black 2px solid; margin-top: 15px; margin-bottom: 20px; background-color: white;" class="mCS_img_loaded">
        <br>
        <b>{{ $user->name }}</b>
        <p>@<span>{{ $user->nameuser }}</span></p>

        <button type="button" class="btn btn-primary my-2 ml-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">
            {{ __('Update') }}
        </button>        
    </center>
    <div class="modal fade" id="exampleModalCenter" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle">Actualizar Datos</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="/profile">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Foto de Perfil</label>
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Subir foto .jpg</label>
                            </div>                        
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="nameuser" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                        <div class="col-md-6">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1">@</span>                                
                                <input id="nameuser" type="text" class="form-control @error('nameuser') is-invalid @enderror" name="nameuser" value="{{ Auth::user()->nameuser }}" placeholder="{{ $errors->first('nameuser') }}" required autocomplete="nameuser" autofocus>                                   
                            </div>               
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>       
          </div>
        </div>
      </div>
@endsection