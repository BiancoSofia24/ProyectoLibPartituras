<?php  
	include '../includes/head.html';
	include '../includes/nav.php';  
?>

    <main class="container">
        <h1>Nueva Categoría</h1>

        <div class="alert alert-success col-6 m-auto">
            <form action="#" method="post">
                Categoría:
                <!-- Nombre -->
                <input type="text" class="form-control mb-3" required>

                <button class="btn btn-success">
                    Agregar Categoría
                </button>

                <a href="../pages/adminCategorias.php" class="btn btn-outline-dark btn-sm">
                    Volver a Categorías
                </a>
            </form>
        </div>

    </main>

<?php  
    include '../includes/footer.php';
?>