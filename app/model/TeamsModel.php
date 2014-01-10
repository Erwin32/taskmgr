<?php

namespace Models;

/**
 * Description of TeamsModel
 *
 * @author petrpallas
 */
class TeamsModel extends BaseModel {
    
    
    
    public function getTeamDetail($id){
        $row=  $this->database->table('teams')->select('name,moto')->where('id=?',$id)->fetch();
        
        return $row->toArray();
    }
}
