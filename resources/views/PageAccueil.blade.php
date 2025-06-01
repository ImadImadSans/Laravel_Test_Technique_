@extends('layouts.app')

@section('content')
    <div class="p-6">
        <h1 class="text-primary font-bold text-5xl text-center mb-4">Bienvenue !</h1>

        @if ($properties->isEmpty())
            <p class="text-gray-500">Aucune propriété disponible pour le moment.</p>
        @else
            @foreach ($properties as $property)
                <x-property-card :property="$property" />
            @endforeach
        @endif
    </div>
@endsection
