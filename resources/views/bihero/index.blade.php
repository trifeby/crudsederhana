@extends('layouts.master')

@section('content')

<body style="background-color: #f9fbe7">
<div class="container">
<section class="content">
<div class="row">
        <div class="col-lg-12">
         <h2 class="my-5">  </h2>
        </div>
        <div class="row"> 


        @foreach($bihero as $key)
        <div class="col-lg-4 col-sm-6 text-center mb-4">
        <a href="{{url('bihero/review',[$key->id])}}">
          <img class="rounded-circle img-fluid d-block mx-auto" src="{{asset('upload/'.$key->image)}}" alt=""></a>
          <h3>{{$key->nama}}</h3>
          <h5>( {{$key->asal}} )</h5>
          <small>{{$key->lahirwafat}}</small>
          <p>Penetapan : {{$key->penetapan}}</p>
          <p>{{$key->ringkasan}}</p>
        </div>

       @endforeach
 </div>
      </div>
      </section>
      </div>
</body>
@endsection