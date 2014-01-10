<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of ProjectsModel
 *
 * @author petrpallas
 */
class ProjectsModel extends BaseModel{
    
    public function getProjectDetail($id) {
        $row=  $this->database->table('projects')->select('projects.name,projects.description,teams.name AS team_name,teams.id AS team_id,users.display_name AS owner')->where('projects.id=?',$id)->fetch();
        
        return $row->toArray();
    }
    
    public function getProjects($team){
        $data=$this->database->table('projects')->select('name,id')->where('teams_id=?',$team);
        $retrun=array();
        foreach ($data as $row) {
            $retrun[]=$row->toArray();
        }
        return $retrun;
    }
    
    public function addProject($data){
        
        $row=$this->database->table('projects')->insert($data);
        
        $event=array(
            'event_types_id'=>1,
            'users_id'=>$data['users_id'],
            'time'=>time(),
            'teams_id'=>$data['teams_id'],
            'projects_id'=>$row->id
        );
        $this->database->table('events')->insert($event);
    }
    
    public function updateProject($data,$id){
        $this->database->table('projects')->where('id=?',$id)->update($data);
        
        $event=array(
            'event_types_id'=>3,
            'users_id'=>$data['users_id'],
            'time'=>time(),
            'teams_id'=>$data['teams_id'],
            'projects_id'=>$id
        );
        $this->database->table('events')->insert($event);
    }
    
}
