<?php

spl_autoload_register(function (string $nomeCompleto) {
    $caminhoArquivo = 'src\\' . $nomeCompleto;
    $caminhoArquivo = str_replace('\\' , DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});