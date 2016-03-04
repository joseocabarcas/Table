<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 1/03/16
 * Time: 03:50 PM
 */
namespace Joseomar94\Table\Facades;
use Illuminate\Support\Facades\Facade;

class TableFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'table';
    }

}
