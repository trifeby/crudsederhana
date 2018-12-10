@extends('layouts.master')

@section('content')
<body style="background: #f9fbe7">
<style type="text/css">
	.tabel {
		margin-right: 1%;
		margin-left: 1%;
	}
</style>
<div class="table" style="padding-top: 30px; margin-bottom: 3%;">
    <div class="row">
        <div class="col-lg-12">
         <a href="{{route('readpdf')}}"><button class="btn btn-success" class="text-right" style="margin-bottom: 1%; color: #fff">CETAK</button>
         </a>
        <table class="table table-hover">
            <thead style="background-color: #fff8e1 ; color: black;">
        	   <tr>
                <th><b>Tanggal Posting</b></th>
             		<th><b>Nama</b></th>
            		<th><b>Asal</b></th>
            		<th><b>Lahir Wafat</b></th>
            		<th><b>Penetapan</b></th>
                <th>Ringkasan</th>
            	    <th style="text-align: center;"><b>Aksi</b></th>
        		</tr>
            </thead>
            <tbody>
            @foreach($bihero as $key)
                <tr>
                  <td>{{$key->created_at}}</td>
                	<td>{{$key->nama}}</td>
                	<td>{{$key->asal}}</td>
                	<td>{{$key->lahirwafat}}</td>
                	<td>{{$key->penetapan}}</td>
                  <td>{{$key->ringkasan}}</td>
                	<td>
                	  <center>
                		<form action="{{route('delete')}}" method="POST" onclick="return confirm('Hapus Data ?')">
        		          {{csrf_field()}} 
        		          <input type="hidden" name="iditem" value="{{$key->id}}">
        		          <button type="submit" class="btn btn-danger">hapus</button>
        		      </form>
                		  <a href="{{route('edit',[$key->id])}}"><button type="submit" class="btn btn-warning" style="color: #fff;margin-top: 2%;">edit</button>
                          </a>
                	  </center>
                  </td>
        	   </tr>
        	@endforeach
            </tbody>
         </table>
       </div>
    </div>
  </div>
</body>
@endsection