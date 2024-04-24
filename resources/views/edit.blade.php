<x-layout>
    <x-slot:title>
        EditPage
    </x-slot:title>

    <div class="flex justify-between max-w-md mx-auto">
    <form method="POST" action="{{ route('oefening.update', $id) }}" class="mr-2">
        @csrf 
        @method('PUT')

        <div class="mb-4">
        <label for="oefening" class="block text-gray-700">Oefening</label>
            <input type="text" name="oefening" id="oefening" value="{{ old('oefening', $oefening->naam) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">

            <label for="aantal_keren" class="block text-gray-700">Aantal keer</label>
            <input type="text" name="aantal_keren" id="aantal_keren" value="{{ old('aantal_keren', $oefening->aantal_keren) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Save</button>
    </form>

    <form method="POST" action="{{ route('oefening.destroy', $id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
    </form>
</div>



</x-layout>

