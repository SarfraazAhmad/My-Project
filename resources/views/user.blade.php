<h1>User Page</h1>

{{-- //13.pass Data Route to view*(single value) --}}

{{-- {{$user}} <br> --}}

{{-- {{ !@empty($city) ? $city : 'No City'
    
@endempty }} <br> --}}

{{-- {!!$script!!} --}}


{{-- //13.pass Data Route to view*(Array) --}}

@foreach ($user as $id =>$u)
{{$id}} | {{$u['name']}} | {{$u['pno']}} <br>
    
@endforeach