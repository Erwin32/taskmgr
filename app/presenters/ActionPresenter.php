<?php

class ActionPresenter extends BasePresenter{
    
    protected $projectsModel;
    protected $taskModel;
    protected $userModel;
    
    protected $projectID=null;
    protected $taskID=null;


    public function __construct(\Models\ProjectsModel $projects, \Models\TasksModel $tasks, \Models\UsersModel $users) {
        $this->projectsModel=$projects;
        $this->taskModel=$tasks;
        $this->userModel=$users;
    }
    
    
    public function startup() {
            parent::startup();
            
            if(!$this->user->isLoggedIn()){
                $this->redirect(':sign:in');
            }
        }
        
    public function renderAddTime(){
        
    }
    
    public function renderAddProject(){
        
    }
    
    public function renderEditProject($id){
        $this->projectID=$id;
    }
    
    public function renderAddTask(){
        
    }

        private function helperGenerateOprionsArrayProjects(){
        $projects=$this->projectsModel->getProjects($this->user->identity->data['teams_id']);
        $return=array();
        foreach ($projects as $value) {
            $tasks=  $this->taskModel->getTasksForProjects($value['id']);
            \Nette\Diagnostics\Debugger::barDump($tasks);
            foreach ($tasks as $valueTask) {
                $return[$value['name']]=array($valueTask['id']=>$valueTask['name']);
            }
        }
        return $return;
    }


    public function createComponentAddTime() {
        $form=new \Nette\Application\UI\Form;
        
        $items=  $this->helperGenerateOprionsArrayProjects();
        
        $form->addProtection();
        
        $form->addSelect('project', 'Project', $items);
        
        $form->addText('hours', 'Hours')->setDefaultValue(0)->setType('number')->setRequired();
        $form->addText('mins', 'Minutes')->setDefaultValue(0)->setType('number')->setRequired();
        $form->addTextArea('coment', 'Comment');
        
        $form->addSubmit('send', 'Send');
        
        $form->onSuccess[]=  callback($this, 'AddTimeSucces');
        
        return $form;
    }
    
    public function AddTimeSucces($form){
        $vals=$form->getValues();
        
        $time=($vals['mins']*60)+($vals['hours']*60*60);
        
        $data=array(
            'time'=>$time,
            'coment'=>$vals['coment'],
            'tasks_id'=>$vals['project'],
            'users_id'=>  $this->user->id,
            'reported_in'=>time()
        );
        
        $this->taskModel->addTimeToTask($data);
        $this->flashMessage('Time Reported');
        $this->redirect('this');
        
    }
    
    public function createComponentAddProject(){
        $form=new \Nette\Application\UI\Form;
        
        $items=  $this->helperGetTeamArray();
        
        $project=array(
            'name'=>'',
            'description'=>'',
            'owner'=>''
        );
        
        if($this->projectID!==null){
            $project=  $this->projectsModel->getProjectDetail($this->projectID);
        }
        
        \Nette\Diagnostics\Debugger::barDump($project);
        
        $form->addProtection();
        $form->addText('name', 'Project Name')->setRequired()->setDefaultValue($project['name']);
        $form->addTextArea('desc', 'Description')->setDefaultValue($project['description']);
        $form->addSelect('owner', 'Project Manager', $items)->setDefaultValue($project['owner']);
        $form->addHidden('id',  $this->projectID);
        
        $form->addSubmit('send', 'Send');
        
        $form->onSuccess[]=  callback($this, 'addProjectSucces');
        
        return $form;
    }
    
    public function helperGetTeamArray(){
        $arr=$this->userModel->getTeamMembers($this->user->identity->data['teams_id']);
        
        $return=array();
        foreach ($arr as $value) {
            $return[$value['id']]=$value['display_name'];
        }
        
        return $return;
        
    }
    
    public function addProjectSucces($form){
        $vals=$form->getValues();
        
        $data=array(
            'name'=>$vals['name'],
            'description'=>$vals['desc'],
            'users_id'=>$vals['owner'],
            'teams_id'=>$this->user->identity->data['teams_id'],
            'last_edit'=>  time()
        );
        
        if(empty($vals['id'])){
            $this->projectsModel->addProject($data);
            $this->flashMessage('Project Added');
            $this->redirect('this');
        }
        else{
            $this->projectsModel->updateProject($data,$vals['id']);
            $this->flashMessage('Project Updated');
            $this->redirect('this');
        }
    }
    
    public function createComponentAddTask(){
        $form=new Nette\Application\UI\Form;
        
        $items=  $this->helperGetProjectsArray();
        $urgency=  $this->helperGetUrgencysArray();
        $states=  $this->helperGetStatesArray();
        $users=  $this->helperGetTeamArray();
        
        $form->addProtection();
        $form->addSelect('project', 'Project', $items);
        $form->addText('name','Name')->setRequired();
        $form->addSelect('urgency', 'urgency', $urgency);
        $form->addSelect('state', 'State', $states);
        $form->addSelect('asigned', 'Asign', $users);
        $form->addTextArea('desc', 'description');
        $form->addText('estimate','Esitimated time (hours)')->setType('number')->setRequired()->setDefaultValue(0);
        $form->addHidden('id')->setDefaultValue($this->taskID);
        
        $form->addSubmit('send','Send');
        
        $form->onSuccess[]=  callback($this,'addTaskSucces');
        
        return $form;
    }
    
    public function addTaskSucces($form){
        
        $vals=$form->getValues();
        
        $data=array(
            'projects_id'=>$vals['project'],
            'name'=>$vals['name'],
            'urgency_id'=>$vals['urgency'],
            'states_id'=>$vals['state'],
            'users_id'=>$vals['asigned'],
            'description'=>$vals['desc'],
            'options_json'=>'',//unused atm
            'estimated_time'=>($vals['estimate']*60*60)
        );
        
        if(empty($vals['id'])){
            $this->taskModel->addTask($data, $this->user->identity->data['teams_id']);
            $this->flashMessage('Task added');
            $this->redirect('this');
        }
        else {
            echo 'edit';
            dump($vals);
            dump($data);
            exit();
        }
        
        
    }
    
    public function helperGetProjectsArray(){
        $projects=$this->projectsModel->getProjects($this->user->identity->data['teams_id']);
        $return=array();
        foreach ($projects as $value) {
            $return[$value['id']]=$value['name'];  
        }
        
        return $return;
    }
    
    public function helperGetUrgencysArray(){
        $data=$this->taskModel->getUrgencys();
        $return=array();
        foreach ($data as $value){
            $return[$value['id']]=$value['name'];
        }
        return $return;
    }
    
    public function helperGetStatesArray(){
        $data=$this->taskModel->getStates();
        $return=array();
        foreach ($data as $value){
            $return[$value['id']]=$value['name'];
        }
        return $return;
    }
    
}

