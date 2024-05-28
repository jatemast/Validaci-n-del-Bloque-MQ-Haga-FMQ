<!DOCTYPE html>
<html>
<head>
    <title>Validador de Pseudocódigo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        .carousel {
            width: 100%;
            height: 25vh;
        }
        .content {
            min-height: calc(100vh - 25vh - 220px); /* Ajusta el valor según sea necesario */
        }
        .footer {
            margin-top: 20px;
            text-align: center;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        textarea {
            width: 80%;
            max-width: 800px;
            height: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            font-family: monospace;
            resize: vertical;
            margin-bottom: 40px;
        }
        .btn-validar {
            width: 400px; /* Ajusta el ancho según tus preferencias */
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-validar:hover {
            background-color: #0056b3;
        }
        .title {
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Carrusel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/id/1/1920/480" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/2/1920/480" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/3/1920/480" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <!-- Contenido -->
    <div class="content">
        <!-- Agrega tu contenido adicional aquí -->
    </div>

    <!-- Validador -->
    <div class="footer">
        <form action="/validate-code" method="POST" class="form-container">
            @csrf
            <h1 class="title">Validación del Bloque MQ-Haga-FMQ</h1>
            <textarea name="code" placeholder="Ingrese su pseudocódigo aquí..."></textarea>
            <button type="submit" class="btn-validar">Validar</button>
        </form>
    </div>
</body>
</html>
