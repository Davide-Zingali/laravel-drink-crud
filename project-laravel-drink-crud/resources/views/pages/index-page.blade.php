@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            Main
        </h2>
        <div>
            <ul>
                @foreach ($drinks as $item)
                    <li>
                        <a href="{{route('show-route', $item -> id)}}">
                            {{$item -> name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

@endsection