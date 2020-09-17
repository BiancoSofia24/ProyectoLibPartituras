<?php  

    require '../../functions/conexion.php';
    require '../../functions/crud.php';

    $categorias = listarCatg();
    $partitura = partPorId();

	include '../includesForms/head.html';
	include '../includesForms/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Editar una Partitura</h1>

        <div class="alert alert-primary col-6 m-auto">
            <form action="editarPart.php" method="post" enctype="multipart/form-data">
                <!-- Nombre -->
                <div class="form-group">
                    <label for="partNombre">Partitura</label>
                    <input type="text" name="partNombre" value="<?= $partitura['partNombre']; ?>" class="form-control mb-3" required>
                </div>

                <!-- Autor -->
                <div class="form-group">
                    <label for="partAutor">Autor</label>
                    <input type="text" name="partAutor" value="<?= $partitura['partAutor']; ?>" class="form-control mb-3" required>
                </div>

                <!-- Categoría -->
                <div class="form-group">
                    <label for="idCategoria">Categoría</label>
                    <select name="idCategoria" class="form-control" required>
                        <option value="<?= $partitura['idCategoria']; ?>"><?= $partitura['catgNombre']; ?></option>
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
                    <a href="../files/<?= $partitura['partArchivo']; ?>" name="archivoPrevio" target="_blank" class="text-primary">
                        <?= $partitura['partArchivo']; ?>
                    </a>
                    <input type="file" name="partArchivo" class="form-control-file mb-3 mt-1">
                </div>

                <button class="btn btn-primary">
                    <i class="far fa-edit"></i>
                    Editar 
                </button>

                <a href="../../pages/adminPartituras.php" class="btn btn-outline-dark btn-sm">
                    Volver a Partituras
                </a>

                <input type="hidden" name="idPartitura" value="<?= $partitura['idPartitura']; ?>">
                <input type="hidden" name="archivoPrevio" value="<?= $partitura['partArchivo']; ?>">
            </form>
        </div>

    </main>

<?php  
    include '../includesForms/footer.php';
?>