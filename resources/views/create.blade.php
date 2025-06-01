@extends('layouts.app')

@section('content')
    <div class="p-6 max-w-xl mx-auto bg-tertiary text-quaternary rounded shadow">
        <h1 class="text-2xl font-bold mb-4 text-center">Réserver : {{ $property->name }}</h1>

        <form method="POST" action="{{ route('booking.store') }}" class="space-y-4">
            @csrf

            <input type="hidden" name="property_id" value="{{ $property->id }}">

            <div>
                <label for="start_date" class="block mb-1">Date de début</label>
                <input type="date" id="start_date" name="start_date" class="w-full p-2 rounded text-black" required>
            </div>

            <div>
                <label for="end_date" class="block mb-1">Date de fin</label>
                <input type="date" id="end_date" name="end_date" class="w-full p-2 rounded text-black" required>
            </div>

            <div class="pt-4 text-center">
                <x-button type="submit">Confirmer la réservation</x-button>
            </div>
        </form>
    </div>
@endsection