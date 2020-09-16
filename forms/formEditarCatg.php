<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $categorias = listarCatg();
    $categoria = catgPorId();

    include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1>Editar una Categoría</h1>

        <div class="alert alert-primary col-6 m-auto">
            <form action="editarCatg.php" method="post">
                Categoría:
                <!-- Nombre -->
                <input type="text" name="catgNombre" value="<?= $categoria['catgNombre']; ?>" class="form-control mb-3" required>

                <button class="btn btn-primary">
                    <i class="far fa-edit"></i>
                    Editar
                </button>

                <a href="../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm">
                    Volver a Categorías
                </a>

                <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria']; ?>">
            </form>
        </div>

    </main>

<?php  
    include '../includes/footer.php';
?>