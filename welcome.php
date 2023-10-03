<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calculadora de Conversiones">
    <title>Calculadora de Conversiones</title>

    <!-- Favicon -->
    <link rel="icon" href="./assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<!-- Incluir el encabezado -->
<?php include './View/header.php'; ?>

<main>
    <!-- Contenedor principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Columna izquierda: Información -->
            <div class="col-md-7">
                <h1 class="display-4">Bienvenido a la Calculadora de Conversiones</h1>
                <p class="lead">Seleccione el tipo de conversión que desea realizar:</p>
                <div class="row">
                    <!-- Categoría: Longitud -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-ruler category-icon"></i>
                            <h2 class="category-title">Longitud</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Longitud</a>
                        </div>
                    </div>
                    <!-- Categoría: Masa -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-weight category-icon"></i>
                            <h2 class="category-title">Masa</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Masa</a>
                        </div>
                    </div>
                    <!-- Categoría: Volumen -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-flask category-icon"></i>
                            <h2 class="category-title">Volumen</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Volumen</a>
                        </div>
                    </div>
                    <!-- Categoría: Datos -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-database category-icon"></i>
                            <h2 class="category-title">Datos</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Datos</a>
                        </div>
                    </div>
                    <!-- Categoría: Moneda -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-dollar-sign category-icon"></i>
                            <h2 class="category-title">Moneda</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Moneda</a>
                        </div>
                    </div>
                    <!-- Categoría: Tiempo -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="category-card text-center">
                            <i class="fas fa-clock category-icon"></i>
                            <h2 class="category-title">Tiempo</h2>
                            <a href="http://localhost/CALCULADORA_CONVERSIONES/View/index.php" class="btn btn-primary btn-lg btn-block">Ir a Tiempo</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna derecha: Logo -->
            <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                <img src="./assets/img/logo1.png" alt="Logo" class="img-fluid">
            </div>
        </div>
    </div>
</main>

<!-- Incluir el pie de página -->
<?php include './View/footer.php'; ?> 

    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Incluye Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>

    <!-- Incluye Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>


</body>
</html>

