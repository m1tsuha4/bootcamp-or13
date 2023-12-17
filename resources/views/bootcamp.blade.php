@extends('layouts.main')
@section('content')
  <body>
    <h1>Halaman Bootcamp</h1>
    <a href="/add-bootcamp">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Pesan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($data as $d)
  <tbody>
    <tr>
      <th scope="row">{{ $d->id }}</th>
      <td>{{ $d->nama }}</td>
      <td>{{ $d->nim }}</td>
      <td>{{ $d->pesan }}</td>
      <td>
        <a href="edit-bootcamp/{{ $d->id }}">Edit</a>
      <a href="delete-bootcamp/{{ $d->id }}">Hapus</a>
    </td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection
