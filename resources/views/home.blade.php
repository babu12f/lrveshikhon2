@extends('myLayout')

@section('title', 'home page')

@section('mainconent')
    <h1>New Home Page</h1>
    @include('successalert', ['msg' => 'this is a simple success message form laravel'])

    <ul>
        @foreach ($people as $p)
            @if($loop->last)
                <li style="color:red">{{ $p }}</li>
            @else
                <li>{{ $p }}</li>
            @endif
        @endforeach
    </ul>

    @if($number%2 != 0)
        {{ "this is odd num" }}
    @else
        {{ "This is Even Number" }}
    @endif

    @switch($number)
        @case(10)
            {{ "Ten" }}
            @break
        @case(11)
            {{ "Elaven" }}
            @break
        @default
            {{ "Nothing Match" }}
    @endswitch

    {{-- <ul>
        @for($i = 1; $i <= 10; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul> --}}

    <ul>
        @forelse ($reg as $r)
            <li>{{$r}}</li>
        @empty
            <li>This List Is Empty</li>
        @endforelse
    </ul>

    @php 
        $name = "habib";

        echo $name;
    @endphp

@endsection