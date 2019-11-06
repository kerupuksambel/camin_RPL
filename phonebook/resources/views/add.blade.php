@extends('template.master')

@section('title', 'Add Data')

@section('content')
    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="add/submit">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Nama</label>
            <div class="control">
                <input class="input" name="nama" type="text" placeholder="Nama">
            </div>
        </div>

        <div class="field">
            <label class="label">No. Telepon</label>
            <div class="control">
                <input class="input" name="no_telp" type="text" placeholder="No. Telepon">
            </div>
        </div>

        <div class="field">
            <label class="label">Pekerjaan</label>
            <div class="control">
                <input class="input" name="pekerjaan" type="text" placeholder="Pekerjaan">
            </div>
        </div>
        <input type="submit" class="button is-info" value="Tambah Data"/><br/>
    </form>
@endsection