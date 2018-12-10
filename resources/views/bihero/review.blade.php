@extends('layouts.master')

@section('content')

<body style="background: #f9fbe7">
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          @if(isset($bihero))
          @foreach($bihero as $key)
          <h1 class="mt-4">{{$key->nama}}</h1>
          <hr>
          <p>Posted on {{$key->created_at}}</p>
          <hr>
          <img class="img-fluid rounded" style="" src="{{asset('upload/'.$key->image)}}" alt="">
          <hr>
       <div class="row">
           <div class="col-12">
           <p align="justify" class="text-capitalize" style="line-height: 1.5;">{{$key->penjelasan}}</p>
           </div>
       </div>   
          <hr>
         @endforeach
         @endif
 </body>     
<hr>
@endsection