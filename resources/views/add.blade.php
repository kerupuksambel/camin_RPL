@extends('template.master')

@section('title', 'Add Data')

@section('content')
    <form method="POST" action="add/submit">
        {{ csrf_field() }}
        <input type="text" name="nama" placeholder="Nama"/><br/>
        <input type="text" name="no_telp" placeholder="No. Telepon"/><br/>
        <input type="text" name="pekerjaan" placeholder="Pekerjaan"/><br/>
        <input type="submit" value="Tambah Data"/><br/>
    </form>
@endsection