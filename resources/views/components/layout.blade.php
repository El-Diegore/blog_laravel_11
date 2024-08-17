<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle ?? 'Default title' }} </title>
    <meta name="description" content=" {{$metaDescription ?? 'Default description'}} " />
</head>

<body>
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

</body>

</html>
