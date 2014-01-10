<?php

namespace Models;

/**
 * Description of EventsModel
 *
 * @author petrpallas
 */
class EventsModel extends BaseModel {
    
    public function getEvents($team,$limit){
        $data=$this->database->table('events')
                ->select('time,event_types.text,users.display_name,projects.name,projects_id,users.id AS user_id')
                ->where('events.teams_id=? ',$team)
                ->limit($limit)->order('time DESC');//AND event_types.id=events.event_types_id AND users.id=events.users_id AND projects.id=events.projects_id

        
        $retrun=array();
        foreach ($data as $row) {
            $retrun[]=$row->toArray();
        }
        return $retrun;
    }
    
}
