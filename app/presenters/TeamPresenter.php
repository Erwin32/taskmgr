<?php
/**
 * Description of TeamPresenter
 *
 * @author petrpallas
 */
class TeamPresenter extends BasePresenter{
    
    protected $teamModel;
    protected $userModel;


    public function __construct( \Models\TeamsModel $teams, \Models\UsersModel $users) {
        $this->teamModel=$teams;
        $this->userModel=$users;
    }
    
    public function startup() {
            parent::startup();
            
            if(!$this->user->isLoggedIn()){
                $this->redirect(':sign:in');
            }
        }
        
    public function renderDetail($id) {
        //get part
        $team=  $this->teamModel->getTeamDetail($id);
        $teamMembers=  $this->userModel->getTeamMembers($id);
        
        //display part
        $this->template->id=$id;
        $this->template->team=$team;
        $this->template->teamMebers=$teamMembers;
        
        //debug part
        \Nette\Diagnostics\Debugger::barDump($team);
        \Nette\Diagnostics\Debugger::barDump($teamMembers);
    }
}
