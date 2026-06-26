<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-700 text-white p-4">
        <h1 class="text-xl font-bold">LinkUp</h1>
    </nav>

    <main class="container mx-auto mt-6">
        @yield('content')
    </main>

</body>
</html>