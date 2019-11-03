@foreach ($result as $res)
<div class="contact">
    <ul>
            {{ $res['Nama'] }}<br/>
            {{ $res['No_HP'] }}<br/>
            {{ $res['Pekerjaan'] }}<br/>
    </ul>
</div>
@endforeach
        