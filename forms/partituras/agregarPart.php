<?php  

    require '../../functions/conexion.php';
    require '../../functions/crud.php';

    $ok = agregarPart();

	include '../includesForms/head.html';
	include '../includesForms/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Nueva Partitura</h1>

        <a href="../../pages/adminPartituras.php" class="btn btn-outline-dark btn-sm mb-3">
            Volver a Partituras
        </a>

        <?php
            $clase = 'error';
            $mensaje = '¡Ups! No es posible añadir una nueva partitura.';

            if ($ok) {
                $clase = 'success';
                $mensaje = '¡Añadiste una nueva partitura!';
            }
        ?>

        <div class="alert alert-<?= $clase; ?> col-6 m-auto">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  
    include '../includesForms/footer.php';
?>