<?php

/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/05/16
 * Time: 13:57
 */
class Application
{


    /**
     * @var
     */
    public $myVar;

    /**
     * @var
     */
    public $xxx_0s;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->myFunction("abc");
    }

    /**
     * @param $myParam
     * @throws Error
     */
    public function myFunction($myParam)
    {
        if(empty($myParam))
            throw new Error("xxx");

        echo ($myParam);

        
    }
}