@extends('template.master')
@section('title', 'List Data')

@section('content')
    @isset(session('status')['msg'])
    <div class="notification {{ session('status')['class'] }}">
        {{ session('status')['msg'] }}
    </div>
    @endisset
    <div class="columns is-multiline is-mobile">
        @foreach ($result as $res)
        <div class="column is-one-quarter">
            <div class="contact">
                <ul>
                    {{ $res['Nama'] }}<br/>
                    {{ $res['No_HP'] }}<br/>
                    {{ $res['Pekerjaan'] }}<br/>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
@endsection
