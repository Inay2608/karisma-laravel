@extends('template')

@section('main')
    <div style="overflow-y:scroll" height: 100%>        
        <h2>Ini Halaman Coba</h2>
    
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
            <h1>Ini Perulangan</h1>
        <?php } ?>
    
        @for ($i=1; $i <= 10 ; $i++) 
            @if ($i % 2)
                <h1>Ini Menggunakan Blade Php</h1>
            @endif
        @endfor
    
        @php
            $no = 5;
            echo $no;
        @endphp
    
        <img src="{{asset('/img/petroport.JPG')}}" width="60%" alt="">
    </div>
@endsection

    
