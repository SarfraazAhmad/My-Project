<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>
    @livewireStyles
</head>
<body>
    <h1>Dashboard Page</h1>
<a href="/post">Post</a>
{{-- <a href="{{route('about')}}">About</a> --}}
@livewire('counter')
@livewireScripts
</body>
</html>