@extends('layouts.main-layout')
@section('content')
    
    <main>

        <h2>Edit</h2>

        <div>
            <form action="{{route('update-route', $drink -> id)}}" method="post">
                @csrf
                @method('post')
    
                <label for="name">Name: </label>
                <input type="text" name='name' value='{{$drink -> name}}'>
                <br>
                <label for="gradation">Gradation: </label>
                <input type="text" name='gradation' value='{{$drink -> gradation}}'>
                <br>
                <label for="price">Price: </label>
                <input type="text" name='price' value='{{$drink -> price}}'>
                <br>
                <input type="submit" value="Update">
                
            </form>
        </div>
    </main>

@endsection