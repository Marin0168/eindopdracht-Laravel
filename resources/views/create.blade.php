<x-layout>
    <x-slot:title>
        Create
    </x-slot:title>
    <form method="POST" action="{{ route('oefening.store') }}" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="oefening" class="block text-gray-700 text-sm font-bold mb-2">oefening:</label>
            <input type="text" id="oefening" name="oefening" value="{{ old('oefening') }}" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
            <label for="aantal_keren" class="block text-gray-700 text-sm font-bold mb-2">aantal keer:</label>
            <input type="text" id="aantal_keren" name="aantal_keren" value="{{ old('aantal_keren') }}" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Song
            </button>
        </div>
    </form>
</x-layout>