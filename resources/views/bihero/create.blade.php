@extends('layouts.master')
@section('content')
<body style="background-color: #f9fbe7">
<div class="container" style="margin-bottom:3%;">
        <form method="post" action="{{url('bihero/save')}}" enctype="multipart/form-data" style="padding-top: 30px; margin-bottom: 3%;">
          {{csrf_field()}}

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="nama">
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
              <input type="text" class="form-control" name="asal" placeholder="asal">
  </div>
  <div class="form-group">
   <label for="lahirwafat">Lahirwafat</label>
              <input type="text" class="form-control" name="lahirwafat" placeholder="lahirwafat">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="penetapan">Penetapan</label>
              <input type="text" class="form-control" name="penetapan" placeholder="penetapan">
    </div>
    <div class="form-group col-md-6">
      <label for="ringkasan">Ringkasan</label>
              <input type="text" class="form-control" name="ringkasan" placeholder="ringkasan">
    </div>

  </div>
   <div class="form-group">
   <label for="penjelasan">Penjelasan</label>
              <textarea class="form-control" rows="3" type="text" class="form-control" name="penjelasan"></textarea> 
  
  </div>

    <div class="text-right" style="margin-top: 2%;">
        <button type="submit" class="btn btn-info">POST</button>
        </div>
</form>
</div>
</body>
@endsection