<x-layout>
    <x-slot:title>
        Oefeningen
    </x-slot:title>
<div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Oefeningen</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($oefeningen as $oefening)
            <a href="{{ route('oefening.show', $oefening->id)}}">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $oefening->naam }}</h2>
                    <p class="text-gray-600">Aantal keer: {{ $oefening->aantal_keren }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-layout>