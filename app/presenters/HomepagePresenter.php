<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
        protected $usersModel;
        protected $projectsModel;
        protected $eventsModel;
        
        public function __construct(\Models\UsersModel $users, \Models\ProjectsModel $projects, \Models\EventsModel $events) {
            $this->usersModel=$users;
            $this->projectsModel=$projects;
            $this->eventsModel=$events;
        }
        
        public function startup() {
            parent::startup();
            
            if(!$this->user->isLoggedIn()){
                $this->redirect(':sign:in');
            }
        }

        public function renderDashboard(){
           
           $events=$this->eventsModel->getEvents($this->user->identity->data['teams_id'],10);
           $projects=$this->projectsModel->getProjects($this->user->identity->data['teams_id']);
           $this->template->projectsList=$projects;
           $this->template->events=$events;
           
           \Nette\Diagnostics\Debugger::barDump($events);
	}
        
        public function actionDefault(){
            $this->redirect(':homepage:dashboard');
        } 

}
