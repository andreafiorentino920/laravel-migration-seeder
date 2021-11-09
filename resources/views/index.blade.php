<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($travels as $travel)
            <div class="card">
                <h1>{{$travel['destinazione']}}</h1>
                <h2>{{$travel['passeggeri']}}</h2>
                <h2>{{$travel['partenza']}}</h2>
                <h4>{{$travel['ritorno']}}</>
                <h4>{{$travel['descrizione']}}</h4>
                <h4>{{$travel['prezzo']}}</h4>
            </div>
        @endforeach
    </ul>
</div>
</body>
</html>