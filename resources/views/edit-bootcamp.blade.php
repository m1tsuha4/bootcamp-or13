@extends('layouts.main')
@section('content')
<form action="/edit-bootcamp/{{$data->id}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" name="nim" class="form-control" value="{{ $data->nim }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pesan</label>
    <input type="text" name="pesan" class="form-control" value="{{ $data->pesan }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection