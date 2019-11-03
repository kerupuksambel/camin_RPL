@extends('template.master')
@section('title', 'List Data')

@section('content')
    <div class="columns">
        @foreach ($result as $res)
        <div class="contact column">
            <ul>
                {{ $res['Nama'] }}<br/>
                {{ $res['No_HP'] }}<br/>
                {{ $res['Pekerjaan'] }}<br/>
            </ul>
        </div>
        @endforeach
    </div>
@endsection
