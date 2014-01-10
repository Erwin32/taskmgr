<?php

namespace Models;

/**
 * Description of TasksModel
 *
 * @author petrpallas
 */
class TasksModel extends BaseModel{
    
    
    public function getTasksForProjects($project_id){
        $data=  $this->database->table('tasks')
                ->select('tasks.id,tasks.name,urgency.name AS urgency,urgency.color_hex AS urgency_color,states.name AS state,states.color_hex AS state_color,users.display_name AS asigned_name,users_id AS asigned_id,description,options_json,estimated_time')
                ->where('projects_id=?',$project_id);
        
        $return=array();
        foreach ($data as $row) {
            $rowTime=  $this->database->table('times')->select('SUM(time) AS time')->where('tasks_id=?',$row->id)->fetch();
            $prepare=$row->toArray();
            $prepare['real_time']=$rowTime->time;
            $return[]=$prepare;
            
        }
        
        return $return;
    }
    
    public function addTimeToTask($data){
        $this->database->table('times')->insert($data);
    }
    
    public function getUrgencys(){
        $data=  $this->database->table('urgency')->select('id,name,color_hex');
        $return=array();
        foreach ($data as $row) {
            $return[]=$row->toArray();
        }
        
        return $return;
    }
    
    public function getStates(){
        $data=  $this->database->table('states')->select('id,name,color_hex');
        $return=array();
        foreach ($data as $row) {
            $return[]=$row->toArray();
        }
        
        return $return;
    }
    
    public function addTask($data,$team){
        
        $this->database->table('tasks')->insert($data);
        
        $event=array(
            'event_types_id'=>4,
            'users_id'=>$data['users_id'],
            'time'=>time(),
            'teams_id'=>$team,
            'projects_id'=>$data['projects_id']
        );
        $this->database->table('events')->insert($event);
    }
    
}
