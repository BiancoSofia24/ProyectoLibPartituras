<?php

    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const _DB_ = 'musica';

    /**
     * @return mysqli $link;
     */
    function conectar() {
        $link = mysqli_connect(HOST, USER, PASS, _DB_);
        return $link;
    }
?>