<html>
    <head>
       
    </head>
    <body>
        <h1>Hello</h1>

        @foreach($name as $n)
        @if($n =="prashant")
            <h3> {{$n}}</h3>
            @else
            <h3>Wrong Message</h3>
            @endif
        @endforeach
        @include('contact');
 @csrf



       

    </body>
    <script type="text/javascript">
        var data = @json($name);
        console.log(data);
    </script>
</html>