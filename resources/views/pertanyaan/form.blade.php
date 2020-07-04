@extends('master')

@section ('content')
<div class="ml-3 mr-3 mt-3">

<h1>Silahkan Bertanya</h1>
<form action="/pertanyaans" method="POST">
  @csrf  
  <div class="form-group">
    <label for="judul">Judul Pertanyaan</label>
    <input type="text" class="form-control" placeholder="Ketik judul" id="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi Pertanyaan</label>
    <textarea class="form-control" id="isi" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
