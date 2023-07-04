<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
    {{-- <script src="{{ Vite::asset('resources/js/app.js') }}"></script> --}}
</head>
<body>
    

    <p><Strong>Trade: </Strong><span id="trade-data"></span></p>

    <script src="{{ Vite::asset('resources/js/app.js') }}"></script>
    <script>
        Echo.private('one-to-one-chat').listen('PrivateChannelMessage', (e) => {
            // console.log("sasaasaas", e.trade);
            // $('#trade-data').html(e.trade);
            
            document.getElementById('trade-data').innerHTML = e.trade;
        });
    </script>

</body>
</html>