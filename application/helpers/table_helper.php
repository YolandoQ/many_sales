<?php 

/**
 * Funções para tornar o manejo das tabelas mais fácil.
 */

 if(!function_exists("colaboradores")) {
    function colaboradores() {
        return "colaboradores";
    }
}

if(!function_exists("enderecos")) {
    function enderecos() {
        return "enderecos";
    }
}

if(!function_exists("ips")) {
    function ips() {
        return "ips_bloqueados";
    }
}

if(!function_exists("permissoes")) {
    function permissoes() {
        return "permissoes";
    }
}

if(!function_exists("produtos")) {
    function produtos() {
        return "produtos";
    }
}

if(!function_exists("pedidos")) {
    function pedidos() {
        return "pedidos";
    }
}

if(!function_exists("itens")) {
    function itens() {
        return "itens_pedido";
    }
}

if(!function_exists("logs")) {
    function logs() {
        return "logs";
    }
}
?>