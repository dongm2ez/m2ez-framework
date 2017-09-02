<?php
/**
 * Created by PhpStorm.
 * User: dongyuxiang
 * Date: 2017/9/3
 * Time: 00:34
 */

namespace App\Http\Controllers;

use Interop\Container\ContainerInterface;

abstract class Controller
{
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }

}