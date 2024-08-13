<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: {{ $bg_color ?? 'transparent' }};
            background-image: url('{{ $bg_image->url ?? '' }}');
            background-size: cover;
        }
    </style>
</head>
<body>
    @if(isset($message))
        <h1>{{ $message }}</h1>
    @else
        <h1>{{ $quote->text }}</h1>
    @endif
</body>
</html>
