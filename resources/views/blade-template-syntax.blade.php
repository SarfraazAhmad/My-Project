{!!"<h1>Blade Template Syntax<h1>"!!}
{{5+2}}
<br>
{{"Hellow World"}}
<br>
{{"<h2>Hellow World</h2>"}}
<br>

{{-- use for html and javascript text --}}
{{-- HTML --}}
{!!"<h2>Hellow World</h2>"!!}

{{-- JavaScript --}}
{!!"<script>alert('hellow')</script>"!!}

{{-- Variable --}}
@php
    $user="sarfraz"
@endphp

{{$user}} <br>

{{-- Arrray --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
<li>{{$n}}</li>
@endforeach
</ul>

{{-- show in same text --}}

@php
    $name="sarfraz";
@endphp

@{{$name}} <br>
@@if()

{{-- Blade Loop Variable for Array --}}

{{-- Arrray Index --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
<li>{{$loop->index}}-{{$n}}</li> <br>
@endforeach
</ul>


{{-- Arrray Iteration --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
<li>{{$loop->iteration}}-{{$n}}</li> <br>
@endforeach
</ul>


{{-- Arrray Count --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
<li>{{$loop->count}}-{{$n}}</li>
@endforeach
</ul>

{{-- Arrray loop For 1st and Last --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
@if ($loop->first)
<li style="color: red">{{$n}}</li>
  @elseif($loop->last) 
  <li style="color: green">{{$n}}</li>
  @else
  <li>{{$n}}</li>
@endif
@endforeach
</ul>

{{-- even & odd --}}

{{-- Arrray loop For 1st and Last --}}
@php
    $names=["sarfraz","Adil","Talha"]
@endphp
<ul>
@foreach ($names as $n)
@if ($loop->even)
<li style="color: red">{{$n}}</li>
  @elseif($loop->odd) 
  <li style="color: green">{{$n}}</li>
@endif
@endforeach
</ul>