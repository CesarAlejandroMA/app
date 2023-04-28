<?php namespace baseControler;

    abstract class BaseController{
        abstract function create($model);
        abstract function read();
        abstract function update($id, $model);
        abstract function delete($id); //Recibe el parametro ID del registro
        abstract function readRow($id);
    }

?>