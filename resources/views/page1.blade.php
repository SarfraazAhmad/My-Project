@extends('layout.layout')

@section('content')
    <h1>Page 1</h1>
    <p>The margin-bottom property is specified as the keyword auto, or a <length>, 
        or a <percentage>. Its value can be positive, zero, or negative.
        The margin-bottom property is specified as the keyword auto, or a <length>, 
            or a <percentage>. Its value can be positive, zero, or negative.

    </p>
@endsection
@section('title')
page1    
@endsection

@section('footer')

{{-- first parent data shows the this show --}}
@parent
<p>Page 1</p>    
@endsection