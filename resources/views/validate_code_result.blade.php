<!DOCTYPE html>
<html>
<head>
    <title>Resultados de la Validación</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .valid {
            color: green;
            font-size: 24px;
            font-weight: bold;
        }
        .invalid {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        ul {
            font-size: 18px;
        }
        .content {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="content">
        @if (empty($errors))
            <p class="valid text-center">No se encontraron errores en el pseudocódigo.</p>
            <script>
                alert('El pseudocódigo se validó correctamente.');
            </script>
        @else
            <p class="invalid text-center">Errores encontrados:</p>
            <ul class="text-center">
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <script>
                alert('El pseudocódigo contiene errores.');
            </script>
        @endif
        <div class="text-center">
            <a href="/validate-code" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>
</html>
