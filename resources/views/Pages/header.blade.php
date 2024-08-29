<h1>Header Page</h1>

{{--1 single variable --}}
{{-- {{$name}} --}}

{{-- 2 if you have index-array values --}}

{{-- @foreach ($names as $n)
    <p>{{$n}}</p>
@endforeach --}}


{{-- 3 if you have Associative-array values --}}

{{-- @foreach ($names as $key=> $values)
    <p>{{$key}}-{{$values}}</p>
@endforeach --}}


{{-- 4 if you have no-array value then use forelse loo --}}


{{-- @forelse ($names as $key=> $values)
    <p>{{$key}}-{{$values}}</p>
@empty
    <p>No Value in array</p>
@endforelse --}}


{{-- 6= Conditional Directives --}}
{{-- @includeWhen -Run when value is true --}}


{{-- @foreach ($names as $key=> $values)
    <p>{{$key}}-{{$values}}</p>
@endforeach --}}

{{-- @includeUnless -Run when value is false --}}

{{-- @foreach ($names as $key=> $values)
    <p>{{$key}}-{{$values}}</p>
@endforeach --}}