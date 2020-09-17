<?php

    #######################
    ### CRUD CATEGORIAS ###
    #######################

    /**
     * @return bool|mysqli_result
     */
    function listarCatg() {
        $link = conectar();
        $sql = "SELECT  idCategoria,
                        catgNombre
                FROM categorias";

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function catgPorId() {
        $idCategoria = $_GET['idCategoria'];

        $link = conectar();
        $sql = "SELECT  idCategoria,
                        catgNombre
                FROM categorias
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $categoria = mysqli_fetch_assoc($result);
        return $categoria;
    }

    function cantPartPorCatg() {
        $idCategoria = $_GET['idCategoria'];

        $link = conectar();
        $sql = "SELECT  1
                FROM partituras
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        // Cantidad de partituras por categoría
        $cantidad = mysqli_fetch_assoc($result);
        return $cantidad;
    }

    function agregarCatg() {
        $catgNombre = $_POST['catgNombre'];

        $link = conectar();
        $sql = "INSERT INTO categorias
                VALUES
                (DEFAULT, '".$catgNombre."')";

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function editarCatg() {
        $idCategoria = $_POST['idCategoria'];
        $catgNombre = $_POST['catgNombre'];

        $link = conectar();
        $sql = "UPDATE categorias
                SET catgNombre = '".$catgNombre."'
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function eliminarCatg() {
        $idCategoria = $_POST['idCategoria'];

        $link = conectar();
        $sql = "DELETE FROM categorias
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    #######################
    ### CRUD PARTITURAS ###
    #######################

    /**
     * @return boil|mysqli_result
     */
    function listarPart() {
        $link = conectar();
        $sql = "SELECT  idPartitura,
                        partNombre,
                        partAutor,
                        p.idCategoria, catgNombre,
                        partArchivo
                FROM partituras p, categorias c
                WHERE c.idCategoria = p.idCategoria";
        
        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function agregarPart() {
        $partNombre = $_POST['partNombre'];
        $partAutor = $_POST['partAutor'];
        $idCategoria = $_POST['idCategoria'];
        $partArchivo = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO partituras
                VALUES
                (DEFAULT,
                '".$partNombre."',
                '".$partAutor."',
                ".$idCategoria.",
                '".$partArchivo."')";
        
        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function subirArchivo() {
        $url = '../files/';
        $partArchivo = 'no-disponible.jpg';

        if (isset($_POST['archivoPrevio'])) {
            $partArchivo = $_POST['archivoPrevio'];
        }

        if ($_FILES['partArchivo']['error'] == 0) {
            $partArchivo = $_FILES['partArchivo']['name'];
            $temporal = $_FILES['partArchivo']['tmp_name'];

            move_uploaded_file($temporal, $url.
            $partArchivo);
        }

        return $partArchivo;
    }

    function editarPart() {
        $idPartitura = $_POST['idPartitura'];
        $partNombre = $_POST['partNombre'];
        $partAutor = $_POST['partAutor'];
        $idCategoria = $_POST['idCategoria'];
        $partArchivo = subirArchivo();

        $link = conectar();
        $sql = "UPDATE partituras
                SET partNombre = '".$partNombre."',
                    partAutor = '".$partAutor."',
                    idCategoria = ".$idCategoria.",
                    partArchivo = '".$partArchivo."'
                WHERE idPartitura = ".$idPartitura;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function eliminarPart() {
        $idPartitura = $_POST['idPartitura'];

        $link = conectar();
        $sql = "DELETE FROM partituras
                WHERE idPartitura = ".$idPartitura;
        
        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function partPorId() {
        $idPartitura = $_GET['idPartitura'];

        $link = conectar();
        $sql = "SELECT  idPartitura,
                        partNombre,
                        partAutor,
                        p.idCategoria, catgNombre,
                        partArchivo
                FROM partituras p, categorias c
                WHERE c.idcategoria = p.idCategoria
                AND idPartitura = ".$idPartitura;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $partitura = mysqli_fetch_assoc($result);
        return $partitura;
    }

    function partPorCatg() {
        $idCategoria = $_GET['idCategoria'];

        $link = conectar();
        $sql = "SELECT  idPartitura,
                        partNombre,
                        partAutor,
                        p.idCategoria, catgNombre,
                        partArchivo
                FROM partituras p, categorias c
                WHERE c.idCategoria = p.idCategoria
                AND p.idCategoria = ".$idCategoria;
        
        $result = mysqli_query($link, $sql)
                or die(mysqli_erro($link));
        return $result;
    }

    function autorPorCatg() {
        $idCategoria = $_GET['idCategoria'],

        $link = conectar();
        $sql = "SELECT  partAutor,
                        p.idCategoria
                FROM partituras p, categorias c
                WHERE c.idCategoria = p.idCategoria
                AND p.idCategoria = ".$idCategoria;
        
        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $autor = mysqli_fetch_assoc($result);
        return $autor;
    }
?>