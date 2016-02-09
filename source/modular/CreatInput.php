<?php
/**
 * Created by PhpStorm.
 * User: DC
 * Date: 09/02/2016
 * Time: 19:32
 */

namespace source\modular;


class CreatInput
{



    public function textInput()
    {
        return "<input type='text' value='Campo do tipo texto'>"."</br></br>";
    }

    public function passInput()
    {
        return "<input type='password' value='....'>"."</br></br>";
    }


}