<?php

class User extends Main
{
    /**
     * Main page of the module
     * 
     * @return Response
     */
    public function index()
    {
        require_once 'view/user/index_user.php';
    }

    /**
     * Dispalys a form for entering data
     * 
     * @return Response
     */
    public function create()
    {
        require_once 'view/template/top.php';
        require_once 'view/user/create_user.php';
        require_once 'view/template/footer.php';
    }

    /**
     * Dispalys a form for editing data
     * 
     * @param Request $param
     * @return Response
     */
    public function edit($param = null)
    {   
        //
    }
}