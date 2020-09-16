<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $categorias = listarCatg();

	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Nueva Partitura</h1>

        <div class="alert alert-success col-6 m-auto">
            <form action="agregarPart.php" method="post" enctype="multipart/form-data">
                <!-- Nombre -->
                <div class="form-group">
                    <label for="partNombre">Partitura</label>
                    <input type="text" name="partNombre" class="form-control mb-3" required>
                </div>

                <!-- Autor -->
                <div class="form-group">
                    <label for="partAutor">Autor</label>
                    <input type="text" name="partAutor" class="form-control mb-3" required>
                </div>

                <!-- Categoría -->
                <div class="form-group">
                    <label for="idCategoria">Categoría</label>
                    <select name="idCategoria" class="form-control" required>
                        <option value="">Seleccione una categoría</option>
                        <?php
                            while ($categoria = mysqli_fetch_assoc($categorias)) {
                        ?>
                        <option value="<?= $categoria['idCategoria']; ?>"><?= $categoria['catgNombre']; ?></option>
                        <?php
                            };
                        ?>
                    </select>
                </div>

                <!-- Archivo -->
                <div class="form-group">
                    <label for="partArchivo">Archivo</label>
                    <input type="file" name="partArchivo" class="form-control-file mb-3">
                </div>

                <button class="btn btn-success">
                    <i class="fas fa-plus-circle"></i>
                    Agregar
                </button>

                <a href="../pages/adminPartituras.php" class="btn btn-outline-dark btn-sm">
                    Volver a Partituras
                </a>
            </form>
        </div>

    </main>

<?php  
    include '../includes/footer.php';
?>