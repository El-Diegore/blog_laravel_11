<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle ?? 'Default title' }} </title>
    <meta name="description" content=" {{$metaDescription ?? 'Default description'}} " />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css'])
</head>

<body class="flex flex-col h-screen bg-slate-100 selection:bg-sky-600 selection:text-justify">
    <x-nav/>

    @session('status')
    <div>
        {{$value}}   
    </div>
    @endsession

    {{ $slot }}
    @isset($sidebar)
        <div id="sidebar">
            <h3>
                Sidebar
                <div>
                    {{ $sidebar }}
                </div>
            </h3>
        </div>
    @endisset
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>
