<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trisna Collection</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <x-navbar></x-navbar>
    
    <main class="pt-16">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>

</html>
