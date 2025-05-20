<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clasificación por Edad - Salud Preventiva</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f4f7f6; margin: 0; padding: 20px;}
        .container { background-color: #fff; padding: 30px 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; max-width: 400px; width: 100%;}
        h1 { color: #333; margin-bottom: 10px; font-size: 1.8em;}
        p { color: #555; margin-bottom: 25px; font-size: 1em; }
        label { display: block; margin-bottom: 8px; color: #555; text-align: left; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; font-size: 1em; }
        input[type="text"]:focus { border-color: #007bff; outline: none; box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25); }
        button { background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 1em; width: 100%; transition: background-color 0.3s ease; }
        button:hover { background-color: #0056b3; }
        .error-messages { color: #dc3545; margin-top: -10px; margin-bottom:15px; font-size: 0.9em; text-align: left; list-style-position: inside; padding-left: 0;}
        .error-messages ul { margin:0; padding:0; list-style-type:none;}
        .error-messages li { margin-bottom: 5px;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Sistema de Salud Preventiva</h1>
        <p>Por favor, ingresa tu edad para acceder al contenido adecuado:</p>

        <form action="{{ route('portal.verificarEdad') }}" method="POST">
            @csrf {{-- Directiva de Blade para protección CSRF --}}
            <div>
                <label for="age">Tu Edad:</label>
                <input type="text" id="age" name="age" value="{{ old('age') }}" required>
                <!-- //Le quito min y max para poder probar las validaciones -->
            </div>

            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            {{-- Mostrar mensaje de error de query param si existe --}}
            @if(request()->has('error_general'))
                <div class="error-messages">
                   <p>{{ request('error_general') }}</p>
                </div>
            @endif

            <button type="submit">Verificar Edad</button>
        </form>
    </div>
</body>
</html>