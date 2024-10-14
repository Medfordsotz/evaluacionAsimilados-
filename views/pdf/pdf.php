<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Boleta PDF</title>
    <style>
        /* Agrega estilos específicos para tu PDF */
        body {
            font-family: Arial, sans-serif;
        }

        .header,
        .footer {
            text-align: center;
            font-size: 12px;
            color: gray;
        }

        .content {
            margin-top: 20px;
        }

        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .section {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="content">
        <div class="title">Boleta de Evaluación</div>

        <div class="section">
            <strong>Evaluado:</strong> <?php echo $resultado1['nombres']; ?><br>
            <strong>Grado:</strong> <?php echo $resultado1['gradoEvaluado']; ?><br>
            <strong>Dependencia:</strong> <?php echo $resultado1['dependencia']; ?><br>
            <strong>Puesto:</strong> <?php echo $resultado1['puesto']; ?><br>
            <strong>Tiempo:</strong> <?php echo $resultado1['tiempo']; ?>
        </div>

        <div class="section">
            <strong>Evaluador:</strong> <?php echo $resultado1['nombresEvaluador']; ?><br>
            <strong>Grado Evaluador:</strong> <?php echo $resultado1['gradoE']; ?><br>
            <strong>Dependencia Evaluador:</strong> <?php echo $resultado1['dependenciaEvaluador']; ?><br>
            <strong>Puesto Evaluador:</strong> <?php echo $resultado1['puestoEvaluador']; ?><br>
            <strong>Tiempo Evaluador:</strong> <?php echo $resultado1['tiempoEvaluador']; ?>
        </div>

        <!-- Aquí puedes agregar más secciones según los datos obtenidos -->
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>