<?php  

    require '../../functions/conexion.php';
    require '../../functions/crud.php';

    $partitura = partPorId();

    include '../includesForms/head.html';
	include '../includesForms/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Eliminar una Partitura</h1>

        <div class="alert alert-danger col-6 m-auto">
            <p> 
                La siguiente partitura va a ser eliminada: <span class="lead"><strong><?= $partitura['partNombre']; ?></strong></span>
            </p>
            <p> 
                Partitura de: <span class="lead"><strong><?= $partitura['partAutor']; ?></strong></span> en la categoría <span class="lead"><strong><?= $partitura['catgNombre']; ?></strong></span>
            </p>

            <form action="eliminarPart.php" method="post">
                <button class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                    Confirmar
                </button>

                <a href="../../pages/adminPartituras.php" class="btn btn-outline-dark btn-sm">
                    Volver a Partituras
                </a>

                <input type="hidden" name="idPartitura" value="<?= $partitura['idPartitura']; ?>">
            </form>
        </div>

        <script src="../../js/alertPart.js"></script>
    </main>

<?php  
    include '../includesForms/footer.php';
?>