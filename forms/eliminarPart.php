<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $ok = eliminarPart();

	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Eliminar una Partitura</h1>

        <a href="../pages/adminPartituras.php" class="btn btn-outline-dark btn-sm mb-3">
            Volver a Partituras
        </a>

        <?php
            $clase = 'error';
            $mensaje = 'No fue posible eliminar esta partitura.';

            if ($ok) {
                $clase = 'success';
                $mensaje = '¡Eliminaste la partitura con éxito! Espero que no la extrañes...';
            }
        ?>

        <div class="alert alert-<?= $clase; ?> col-6 m-auto">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  
    include '../includes/footer.php';
?>