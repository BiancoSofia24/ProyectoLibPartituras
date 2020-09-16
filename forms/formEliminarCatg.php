<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $cant = partituraPorCatg();

    if ($cant == 0) {
        $categoria = catgPorId();
    }

    include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminar una Categoría</h1>

        <?php
            if ($cant > 0) {
        ?>

        <div class="alert alert-danger col-6 m-auto">
            <p>La categoría selecciona <strong>no puede ser eliminada</strong>  ya que tiene partituras relacionadas.</p>

            <a href="../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm mb-3 mt-3">
                Volver a Categorías
            </a>
        </div>

        <?php
            } else {
        ?>

        <div class="alert alert-danger col-6 m-auto">
            <p> 
                La siguiente categoría va a ser eliminada: <span class="lead"><strong><?= $categoria['catgNombre']; ?></strong></span>
            </p>

            <form action="eliminarCatg.php" method="post">
                <button class="btn btn-danger">
                    Confirmar
                </button>

                <a href="../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm">
                    Volver a Categorías
                </a>

                <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']; ?>">
            </form>
        </div>

        <script src="../js/alertCatg.js"></script>

        <?php
            };
        ?>
    </main>

<?php  
    include '../includes/footer.php';
?>