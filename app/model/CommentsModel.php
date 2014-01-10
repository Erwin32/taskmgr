<?php

namespace Models;

/**
 * Description of CommentsModel
 *
 * @author petrpallas
 */
class CommentsModel extends BaseModel{
    
    
    public function saveComent(array $array,$team){
        
        $event=array(
            'event_types_id'=>2,
            'users_id'=>$array['users_id'],
            'time'=>$array['time'],
            'teams_id'=>$team,
            'projects_id'=>$array['projects_id']
        );
        
        $this->database->table('coments')->insert($array);
        $this->database->table('events')->insert($event);
    }
    
    public function getCommetns($id){
        
        $data=  $this->database->table('coments')->select('text,users.display_name,users.id AS user_id')->where('projects_id=?',$id)->order('time DESC');
        
        $return=array();
        foreach ($data as $row) {
            $return[]=$row->toArray();
        }
        return $return;
    }
    
}
