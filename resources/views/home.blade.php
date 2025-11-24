<html>
    <body>
        <p>Hello ,{{ $framework }}</p>
        @if($framework==='laravel')
        <p>j'ai raison</p> 
        @else
        <p>non</p>
        @endif

        @foreach(['a','d','c'] as $var)
        <li>{{$var}}=>{{$loop->index}}</li>
        @endforeach

        @env('production')
        <p>j'ai encore raison</p>
        @endenv
    </body>
</html>