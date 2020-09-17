<?php  
	include '../includesForms/head.html';
	include '../includesForms/nav.php';  
?>

    <main class="container">
        <h1 class="text-center">Nueva Categoría</h1>

        <div class="alert alert-success col-6 m-auto">
            <form action="agregarCatg.php" method="post">
                Categoría:
                <!-- Nombre -->
                <input type="text" name="catgNombre" class="form-control mb-3" required>

                <button class="btn btn-success">
                    <i class="fas fa-plus-circle"></i>
                    Agregar
                </button>

                <a href="../../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm">
                    Volver a Categorías
                </a>
            </form>
        </div>

    </main>

<?php  
    include '../includesForms/footer.php';
?>