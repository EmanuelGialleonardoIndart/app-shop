@extends('layouts.app')

@section ('title','Listado de productos')

@section('body-class','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Products</h2>
        <div class="team">
          
          <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>
          <table class="table text-center">
          <thead>
              <tr>
                  <th class="text-center" style="width: 5%">Id</th>
                  <th style="width: 5%">Name</th>
                  <th style="width: 30%">Description</th>
                  <th style="width: 10%">Price</th>
                  <th class="text-right" style="width: 10%">Category</th>
                  <th class="text-right" style="width: 40%">Actions</th>
              </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
              <tr>
                  <td class="text-center">{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td> &dollar; {{$product->price}}</td>
                  <td class="text-right">{{$product->category? $product->category->name:'general'}}</td>
                  <td class="td-actions text-right">
                      <form method="POST" action="{{url('/admin/products/'.$product->id.'/delete')}}">
                      @csrf
                      <a href="#" rel="tooltip" class="btn btn-info btn-round">
                         <i class="material-icons">info</i>
                      </a>
                      <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" class="btn btn-success btn-round">
                         <i class="material-icons">edit</i>
                      </a>
                      <a href="{{ url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" class="btn btn-warning btn-round">
                         <i class="material-icons">image</i>
                      </a>
                      <button type="submit" rel="tooltip" class="btn btn-danger btn-round">
                         <i class="material-icons">close</i>
                      </button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
          </table> 
          <div style="margin-left:30%">
          {{$products->links()}} 
          </div>        
         </div>
      </div>
    </div>
  </div>
  @include('includes.footer')
@endsection