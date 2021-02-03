@extends('layouts.main-layout')
@section('content')
    <div>
        <form action="{{route('store-route')}}" method="post">
            @csrf
            @method('post')

            <label for="name">Name: </label>
            <input type="text" name='name'>
            <br>
            <label for="gradation">Gradation: </label>
            <input type="text" name='gradation'>
            <br>
            <label for="price">Price: </label>
            <input type="text" name='price'>
            <br>
            <input type="submit" value="Salva">
            
        </form>
    </div>
@endsection()