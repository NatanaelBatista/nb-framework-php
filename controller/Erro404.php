<?php

class Erro404
{
    /**
     * Main page of the module
     * 
     * @return Response
     */
    public function index()
    {
        require_once 'view/erro404.php';
    }
}