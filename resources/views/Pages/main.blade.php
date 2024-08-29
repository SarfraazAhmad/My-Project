{{-- Main directive @include --}}

{{-- @include('Pages.header')

<h1>Main Page</h1>

@include('Pages.footer') --}}


{{--1 if you want to snd some value --}}

{{-- @include('Pages.header',['name'=>'sarfraz'])

<h1>Main Page</h1>

@include('Pages.footer') --}}


{{-- 2 if you have array values --}}

{{-- @php
    $fruits=['Apple','Banana','Orange'];
@endphp

@include('Pages.header',['names'=>$fruits])

<h1>Main Page</h1>

@include('Pages.footer') --}}


{{-- 3 if you have Associative-array values --}}

{{-- @php
    $fruits=['one'=>'Apple','two'=>'Banana','three'=>'Orange'];
@endphp

@include('Pages.header',['names'=>$fruits])

<h1>Main Page</h1>

@include('Pages.footer') --}}

{{-- 4 if you have no-array value then use forelse loo --}}

{{-- @php
    $fruits=[];
@endphp

@include('Pages.header',['names'=>$fruits])

<h1>Main Page</h1>

@include('Pages.footer') --}}

{{-- 5= this directry check if file not exist then not show --}}

{{-- @includeIf('Pages.content') --}}


{{-- 6= Conditional Directives --}}
{{-- @includeWhen -Run when value is true--}}


{{-- @php
    $fruits=['one'=>'Apple','two'=>'Banana','three'=>'Orange'];
    $boolean=true;
@endphp

@includeWhen($boolean,'Pages.header',['names'=>$fruits])

<h1>Main Page</h1>

@include('Pages.footer') --}}

{{-- @includeUnless -Run when value is false--}}

@php
    $fruits=['one'=>'Apple','two'=>'Banana','three'=>'Orange'];
    $value="hellow";
@endphp

@includeUnless(empty($value),'Pages.header',['names'=>$fruits])

<h1>Main Page</h1>

@include('Pages.footer')