<?php  

    require '../functions/conexion.php';
    require '../functions/crud.php';

    $partituras = listarPart();

	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Partituras</h1>

        <a href="admin.php" class="btn btn-outline-dark btn-sm mb-3">
            Ir al tablero
        </a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Partitura</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Archivo</th>
                    <th colspan="2">
                        <a href="../forms/formAgregarPart.php" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-plus-circle"></i>
                            Nueva partitura
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($partitura = mysqli_fetch_assoc($partituras)) {
                ?>
                <tr>
                    <td>
                        <a href="#" class="text-dark">
                            <?= $partitura['partNombre']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <?= $partitura['partAutor']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <?= $partitura['catgNombre']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="../files/<?= $partitura['partArchivo']; ?>" class="text-dark" target="_blank">
                            <?php
                                $img = 'no-disponible.jpg';
                                $archivo = $partitura['partArchivo'];

                                if($archivo == $img){
                                    echo 'partitura-';
                                } echo $archivo;
                            ?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="far fa-edit"></i>
                            Editar
                        </a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-outline-danger btn-sm">
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