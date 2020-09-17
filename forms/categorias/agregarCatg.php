<?php  

    require '../../functions/conexion.php';
    require '../../functions/crud.php';

    $ok = agregarCatg();

	include '../includesForms/head.html';
	include '../includesForms/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Nueva Categoría</h1>

        <a href="../../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm mb-3">
            Volver a Categorías
        </a>

        <?php
            $clase = 'error';
            $mensaje = 'No es posible añadir una nueva categoría.';

            if ($ok) {
                $clase = 'success';
                $mensaje = '¡Añadiste una nueva categoría!';
            }
        ?>

        <div class="alert alert-<?= $clase; ?> col-6 m-auto">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  
    include '../includesForms/footer.php';
?>