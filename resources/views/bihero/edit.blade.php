@extends('layouts.master')
@section('content')
<body style="background-color: #f9fbe7">
    <div class="container" style="margin-top:2%;">
       <form method="post" action="{{url('bihero/update')}}">
          {{csrf_field()}}
          <input class="form-control" name="id" type="hidden" value="{{$bihero->id}}">
            <div class="form-row">
             <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                   <input type="text" class="form-control" name="nama" value="{{$bihero->nama}}">
              </div>
              <div class="form-group col-md-6">
                  <label class="control-label">Foto</label>
                   <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="validatedCustomFile">pilih gambar...</label>  
                  </div>
              </div>
            </div>
            <div class="form-group">
                <label for="asal">Asal</label>
                    <input type="text" class="form-control" name="asal" value="{{$bihero->asal}}">
            </div>
            <div class="form-group">
               <label for="lahirwafat">Lahirwafat</label>
                    <input type="text" class="form-control" name="lahirwafat" value="{{$bihero->lahirwafat}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="penetapan">Penetapan</label>
                      <input type="text" class="form-control" name="penetapan" value="{{$bihero->penetapan}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="ringkasan">Ringkasan</label>
                      <input type="text" class="form-control" name="ringkasan" value="{{$bihero->ringkasan}}">
                </div>
            </div>
            <div class="form-group">
                <label for="penjelasan">Penjelasan</label>
                  <textarea class="form-control" rows="3" type="text" class="form-control" name="penjelasan">{{$bihero->penjelasan}}</textarea>
            </div>
            <div class="text-right" style="margin-top: 2%;">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
      </form>
    </div>
</body>
@endsection
