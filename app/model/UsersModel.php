<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of UsersModel
 *
 * @author petrpallas
 */
class UsersModel extends BaseModel {
        
        public function createUser($user,$pass,$name){
            
            $data=array(
                'username'=>$user,
                'password'=> \Authenticator::calculateHash($pass),
                'display_name'=>$name
            );
            
            $this->database->table('users')->insert($data);
        }
        
        public function getTeamMembers($team_id){   
            
            $data=$this->database->table('users')->select('id,display_name')->where('teams_id=?',$team_id);
            
            $return=array();
            foreach ($data as $row) {
                $return[]=$row->toArray();
            }
            return $return;
        }
        
        public function getUserDetail($id){
            $row=  $this->database->table('users')->select('display_name,email,roles.name AS role_name,teams.name AS team_name,teams.id AS team_id')->where('users.id=?',$id)->fetch();
            
            return $row->toArray();
        }
}
