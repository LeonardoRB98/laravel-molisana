<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Document</title>
</head>
<body>
    @include ('partials.header')

    <main>
        <div class="container">
            <div class="card_container">
                <h2>LE LUNGHE</h2>
                @foreach($lunghe as $lunga)
                <div class="card">
                    <img src=" {{ $lunga['src'] }} " alt="{{ $lunga['titolo'] }}">
                </div>
                @endforeach
            </div>

            <div class="card_container">
                <h2>LE CORTE</h2>
                @foreach($corte as $corta)
                <div class="card">
                    <img src=" {{ $corta['src'] }} " alt="{{ $corta['titolo'] }}">
                </div>
                @endforeach
            </div>

            <div class="card_container">
                <h2>LE CORTISSIME</h2>
                @foreach($cortissime as $cortissima)
                <div class="card">
                    <img src=" {{ $cortissima['src'] }} " alt="{{ $cortissima['titolo'] }}">
                </div>
                @endforeach
            </div>

        </div>
    </main>

    @include ('partials.footer')
</body>
</html>