<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document- @yield('title','website')</title>
</head>
<body>
    <h1 style="text-align: center; background-color:aqua">Header</h1>

{{-- @hasSection checks that content is placed --}}
    
@endif

    @hasSection('content')
    @yield('content')
    @else
    <h2>'No Content Found'</h2>
    @endif

   @section('footer')
   <h1 style="text-align: center; background-color:aqua; margin-top: 500px; mar">Footer</h1>
   @show  

   {{-- show diplay the value whic is given extra --}}

   {{ $count }}
</body>
</html>

{{-- page1 and page2 for testing --}}