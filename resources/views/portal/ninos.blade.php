{{-- resources/views/portal/ninos.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal para {{ $classification }}</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #e8f5e9; /* Light Green */ margin: 0; padding: 20px; }
        .content-card { background-color: #fff; padding: 30px 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; max-width: 500px; width: 100%; }
        .content-card h1 { color: #388e3c; /* Green */ margin-bottom: 15px; font-size: 1.9em; }
        .content-card p { color: #555; margin-bottom: 25px; font-size: 1.1em; line-height: 1.6; }
        .content-card .portal-link { background-color: #388e3c; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 1em; text-decoration: none; display: inline-block; transition: background-color 0.3s ease; }
        .content-card .portal-link:hover { background-color: #1b5e20; }
    </style>
</head>
<body>
    <div class="content-card">
        <h1>Bienvenido al portal de salud para {{ strtolower($classification) }}.</h1>
        <p>Descubre consejos de salud, juegos y actividades para un crecimiento saludable.</p>
        <a href="{{ route('portal.inicio') }}" class="portal-link">Ingresar otra edad</a>
    </div>
</body>
</html>