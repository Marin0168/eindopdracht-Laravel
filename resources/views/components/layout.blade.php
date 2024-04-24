<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- @vite('resources/css/app.css') -->
    <script src="https://cdn.tailwindcss.com" ></script>
</head>

<body class="bg-gray-100 font-sans">
    <nav class="bg-blue-500 p-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('oefening.index') }}" class="text-white font-bold">Home</a>
            <a href="{{ route('oefening.create') }}" class="text-white font-bold">Create</a>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        {{$slot}}
    </div>
</body>
</html>
