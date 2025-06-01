<div class="bg-tertiary rounded shadow p-4 mb-4">
    <h2 class="text-quaternary font-bold mb-2">{{ $property->name }}</h2>
    <p class="text-quaternary mb-2">{{ $property->description }}</p>
    <p class="text-quaternary font-semibold">€{{ $property->price_per_night }} / nuit</p>
    
    <a href="{{ route('booking.create', ['property' => $property->id]) }}">
        <x-button>Réserver</x-button>
    </a>
</div>
