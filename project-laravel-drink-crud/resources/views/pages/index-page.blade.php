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
                            {{$item -> name}} -
                        </a>
                        <a href="{{route('edit-route', $item -> id)}}">Edit</a>
                        <a href="{{route('delete-route', $item -> id)}}">Delete</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

@endsection