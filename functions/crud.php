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

    function partituraPorCatg() {
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
        $catgNombre = $_GET['catgNombre'];

        $link = conectar();
        $sql = "INSERT INTO categorias
                VALUES
                (DEFAULT, '".$catgNombre."')";

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function editarCatg() {
        $idCategoria = $_GET['idCategoria'];
        $catgNombre = $_GET['catgNombre'];

        $link = conectar();
        $sql = "UPDATE categorias
                SET catgNombre = '".$catgNombre."'
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }

    function eliminarCatg() {
        $idCategoria = $_GET['idCategoria'];

        $link = conectar();
        $sql = "DELETE FROM categorias
                WHERE idCategoria = ".$idCategoria;

        $result = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $result;
    }
?>