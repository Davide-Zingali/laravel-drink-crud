@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            <a href="{{route('create-route')}}">
                <button>
                    Add Element
                </button>
            </a>
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