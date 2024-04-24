<x-layout>
    <x-slot:title>
        Show
    </x-slot:title>
    @if ($oefening)
        <h1>{{ $oefening->naam }}</h1>
        <p>{{ $oefening->aantal_keren }}</p>
    @endif

    <a href="{{ route('oefening.edit', $id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>


</x-layout>