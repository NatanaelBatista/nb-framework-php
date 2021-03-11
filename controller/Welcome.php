<?php

class Welcome extends Main
{
    /**
     * Main page of the module
     * 
     * @return Response
     */
    public function index()
    {
        require_once 'view/welcome.php';
    }
}