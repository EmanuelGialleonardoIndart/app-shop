@extends('layouts.app')

@section ('title','Bienvenido a app-shop')

@section('body-class','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Editar producto seleccionado</h2>
         <form method="POST" action="{{url('/admin/products/'.$product->id.'/edit')}}">
         @csrf
         <div class="row">
         <div class="col-md-6">
	         <div class="form-group label-floating">
		          <label class="control-label">Nombre del producto</label>
		          <input type="text" name="name" class="form-control" value="{{$product->name}}">
	         </div>
          </div> 
           <div class="col-md-6">
           <div class="form-group label-floating">
		          <label class="control-label">Precio del producto</label>
		          <input type="number" step="0.01" name="price" class="form-control" value="{{$product->price}}">
         </div>
         </div>
         </div>        
	         <div class="form-group label-floating">
		          <label class="control-label">Decripcion corta</label>
		          <input type="text" name="description" class="form-control" value="{{$product->description}}">
         </div>
	        
         <textarea class="form-control" placeholder="Descripcion extensa del producto" name="long_description"  rows="5">{{$product->long_description}}</textarea>  
         <button type="submit" class="btn btn-primary">Guardar cambios</button>  
         <a href="{{url('/admin/products')}}" class="btn btn-default">Cancelar</a>     
         </form>
      </div>
    </div>
  </div>
@endsection