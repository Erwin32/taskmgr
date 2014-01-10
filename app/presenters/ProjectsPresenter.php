<?php

/**
 * Description of ProjectsPresenter
 *
 * @author petrpallas
 */
class ProjectsPresenter extends BasePresenter {
    
    protected $projectModel;
    protected $teamModel;
    protected $userModel;
    protected $taskModel;
    protected $commentsModel;
    protected $project_id=null;


    public function __construct(\Models\ProjectsModel $projects, \Models\TeamsModel $teams, \Models\UsersModel $users, \Models\TasksModel $tasks, \Models\CommentsModel $comments) {
        $this->projectModel=$projects;
        $this->teamModel=$teams;
        $this->userModel=$users;
        $this->taskModel=$tasks;
        $this->commentsModel=$comments;
    }
    
    public function startup() {
            parent::startup();
            
            if(!$this->user->isLoggedIn()){
                $this->redirect(':sign:in');
            }
        }
        
    public function renderDetail($id) {
        //get part
        $project=  $this->projectModel->getProjectDetail($id);
        $teamMembers=  $this->userModel->getTeamMembers($project['team_id']);
        $tasks=  $this->taskModel->getTasksForProjects($id);
        $comments=  $this->commentsModel->getCommetns($id);
        
        //display part
        $this->template->id=$this->project_id=$id;
        $this->template->project=$project;
        $this->template->teamMebers=$teamMembers;
        $this->template->tasks=$tasks;
        $this->template->comments=$comments;
        
        //debug part
        \Nette\Diagnostics\Debugger::barDump($project);
        \Nette\Diagnostics\Debugger::barDump($teamMembers);
        \Nette\Diagnostics\Debugger::barDump($tasks);
        \Nette\Diagnostics\Debugger::barDump($comments);
    }
    
    public function createComponentAddComent(){
        $form=new \Nette\Application\UI\Form;
        
        $form->addTextArea('coment', 'Coment')->setRequired();
        $form->addHidden('project', $this->project_id);
        $form->addProtection();
        
        $form->addSubmit('send', 'Send');
        
        $form->onSuccess[]=  callback($this,'addComent');
        
        return $form;
    }
    
    public function addComent($form) {
        $vals=$form->getValues();
        
        $data=array(
            'text'=>$vals['coment'],
            'time'=>  time(),
            'projects_id'=>$vals['project'],
            'users_id'=>  $this->user->id
        );
        
        $this->commentsModel->saveComent($data,$this->user->identity->data['teams_id']);
        $this->redirect('this');
    }
}
