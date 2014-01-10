<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of BaseModel
 *
 * @author petrpallas
 */
class BaseModel extends \Nette\Object{
    
    protected $database;


    public function __construct(\Nette\Database\Connection $database){
		$this->database = $database;
	}
        
        
}
