<?php

namespace application\models;


use application\core\Model;

class Main extends Model
{
    public function getExample(){
        $result = $this->db->resultRow('select from ');
    }
}