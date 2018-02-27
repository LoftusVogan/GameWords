<?php
/**
 * Main Class Model
 */
namespace application\core;

use application\lib\Database;

abstract class Model
{
    public function __construct()
    {
        $this->db = new Database();
    }
}
