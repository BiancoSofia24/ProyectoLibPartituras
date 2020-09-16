<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $categorias = listarCatg();

	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Categorías</h1>

        <a href="admin.php" class="btn btn-outline-dark btn-sm mb-3">
            Ir a Secciones
        </a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Categoría</th>
                    <th colspan="2">
                        <a href="../forms/formAgregarCatg.php" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-plus-circle"></i>
                            Nueva categoría
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($categoria = mysqli_fetch_assoc($categorias)) {
                ?>
                <tr>
                    <td>
                        <a href="#" class="text-dark">
                            <?= $categoria['catgNombre']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="../forms/formEditarCatg.php?idCategoria=<?= $categoria['idCategoria']; ?>" class="btn btn-outline-primary btn-sm">
                            <i class="far fa-edit"></i>
                            Editar
                        </a>
                    </td>
                    <td>
                    <a href="../forms/formEliminarCatg.php?idCategoria=<?= $categoria['idCategoria']; ?>" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php
                    };
                ?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-dark btn-sm mb-3">
            Ir a Secciones
        </a>
    </main>

<?php  
    include '../includes/footer.php';
?>