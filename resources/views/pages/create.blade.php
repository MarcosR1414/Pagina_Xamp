@extends('layouts.app')
 
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.blade.css') }}">

  <div class="img" style="background-image: url('{{ asset('fondo/fond.jpg') }}');">
    <div class="row" >
      <div class="col-12 col-lg-6" >
        <div class="container">
          <div class="login-box4">
            <h5 style="color: #ffffff;">Agregar productos</h5> 
            <hr>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name" class="form-control-label" style="color: #ffffff;" >Nombre</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="image" class="form-control-label" style="color: #ffffff;">Imagen</label>
                <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg .jfif" required>
              </div>
              <div class="form-group">
                <label for="description" class="form-control-label" style="color: #ffffff;" >Descripcion</label>
                <textarea rows="6" name="description" class="form-control" id="description" required></textarea>
              </div>
              <div class="form-group">
                <label for="price" class="form-control-label" style="color: #ffffff;">Precio</label>
                <input type="number" name="price" class="form-control" id="price" required>
                <small> Mínimo S/. 1</small>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Agregar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection