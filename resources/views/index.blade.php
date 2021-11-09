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
                <h1>Destinazione: {{$travel['destinazione']}}</h1>
                <h2>Passeggeri: {{$travel['passeggeri']}}</h2>
                <h2>Partenza: {{$travel['partenza']}}</h2>
                <h4>Ritorno: {{$travel['ritorno']}}</>
                <h4>Descrizione viaggio: {{$travel['descrizione']}}</h4>
                <h4>Prezzo: {{$travel['prezzo']}}</h4>
            </div>
        @endforeach
    </ul>
</div>
</body>
</html>