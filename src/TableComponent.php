<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 1/03/16
 * Time: 02:36 PM
 */

namespace Joseomar94\Table;



class TableComponent
{

    public function table($data=null, $names=null, $display_names=null)
    {
        if(is_null($display_names)){
            $display_names = $names;
        }

        return view(
            'joseomar94.themes.bootstrap.table',
            [
                'data' => $data,
                'names' => $names,
                'displayName' => $display_names
            ]
        );
    }
}