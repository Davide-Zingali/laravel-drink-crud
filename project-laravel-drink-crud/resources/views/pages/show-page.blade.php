@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            Main
        </h2>
        <div>
            <h3>
                Name: {{$drink -> name}} <br>
                Price: {{$drink -> price}} $ <br>
                Gradation: {{$drink -> gradation}} degrees
            </h3>
        </div>
    </main>

@endsection