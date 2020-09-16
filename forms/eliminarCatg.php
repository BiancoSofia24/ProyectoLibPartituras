<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $ok = eliminarCatg();

	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Eliminar una Categoría</h1>

        <a href="../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm mb-3">
            Volver a Categorías
        </a>

        <?php
            $clase = 'error';
            $mensaje = 'No fue posible eliminar esta categoría.';

            if ($ok) {
                $clase = 'success';
                $mensaje = '¡Eliminaste la categoría con éxito!';
            }
        ?>

        <div class="alert alert-<?= $clase; ?> col-6 m-auto">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  
    include '../includes/footer.php';
?>