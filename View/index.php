<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calculadora de Conversiones"/>
    <title>Calculadora de Conversiones</title>

    <!-- favicon -->
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<!-- Incluir el encabezado -->
<?php include_once "header.php"; ?>


<!-- Incluye el archivo que contiene las clases -->
<?php include_once "../Controller/ConvertidorController.php"; ?>

<!-- Contenedor principal -->
<main class="container">
    <h1 class="text-center fw-bold py-4">Calculadora de Conversiones</h1>
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-6">
                <!-- Selección de Unidad de Medida -->
                <div class="mb-3">
                    <label for="categoria" class="form-label">Unidad de Medida:</label>
                    <select class="form-select" name="categoria" id="categoria">
                        <option value="">-- Seleccione Medida --</option>
                        <option value="longitud">Longitud</option>
                        <option value="masa">Masa</option>
                        <option value="volumen">Volumen</option>
                        <option value="datos">Datos</option>
                        <option value="moneda">Moneda</option>
                        <option value="tiempo">Tiempo</option>
                    </select>
                </div>

                <!-- Valor a Convertir -->
                <div class="mb-3">
                    <label for="value" class="form-label">Valor a Convertir:</label>
                    <input type="number" class="form-control" name="value" id="value" placeholder="Cantidad a convertir" required>
                </div>

                <!-- De Unidad Inicial -->
                <div class="mb-3">
                    <label for="uni" class="form-label">De Unidad Inicial:</label>
                    <select class="form-select" name="uni" id="uni">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <!-- A Unidad Final -->
                <div class="mb-3">
                    <label for="unf" class="form-label">A Unidad Final:</label>
                    <select class="form-select" name="unf" id="unf">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <!-- Botones (centrados horizontalmente) -->
                <div class="d-flex justify-content-center mb-3">
                    <input type="submit" class="buton btn btn-primary btblue me-2" value="CALCULAR">
                    <input type="button" class="buton btn btn-danger btred" value="LIMPIAR" onclick="clean()">
                </div>



            </div>
        </div>
    </form>
</main>

<!-- Incluir el pie de página -->
<?php include_once "footer.php"; ?>


</body>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../assets/js/unidades.js"></script>
<script src="../assets/js/limpiar.js"></script>
</html>
