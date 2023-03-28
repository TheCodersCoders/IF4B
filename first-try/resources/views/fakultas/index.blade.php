<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakultas</title>
</head>
<style>
    body{
        background-color: rgb(120, 207, 125);
    }
</style>
<body>
    <h1>Ini adalah halaman fakultas</h1>
    <h2>
        <ul>
        
            @foreach ($dataFakultas as $item)
            <li>
                {{ $item }}
            </li>
            @endforeach
        
        </ul>

    </h2>
</body>
</html>