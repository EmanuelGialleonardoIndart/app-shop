@extends('layouts.app')

@section ('title','Imagenes del productos')

@section('body-class','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Imagenes del producto: {{$product->name}}</h2>
        <div class="card">
        <div class="card-body">
        <form method="POST" action="{{url('/admin/products/'.$product->id.'/images')}}" enctype="multipart/form-data">
        @csrf
                <input type="file" name="photo" required>
                <button type="submit" class="btn btn-primary btn-round">Agregar imagen</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado</a>
        </form>
        </div>
        </div>
        
       
       <div class="row">
        @foreach($images as $image)
        <div class="col-md-4">
        <div class="card">
           <div class="card-body">
             <img src="{{$image->url}}" width="250px">
             <form method="POST" action="{{url('/admin/images/'.$image->id.'/delete')}}">
             @csrf
             <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
             @if($image->featured==true)
             <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round">
             <i class="material-icons">favorite</i>
             </button>
             @else
             <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
             <i class="material-icons">favorite</i>
             </a>
             @endif
             
             </form>
           </div>
        </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection