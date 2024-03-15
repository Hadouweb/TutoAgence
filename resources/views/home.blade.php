@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem ipsum</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias qui maxime nam vero unde, nemo fugiat sed rem
                placeat officiis tenetur voluptates repellendus nesciunt odio accusamus ab corrupti vel aut.
            </p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
