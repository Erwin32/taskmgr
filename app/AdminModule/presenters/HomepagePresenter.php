<?php
namespace AdminModule;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
        protected $usersModel;
        protected $projectsModel;
        
        public function __construct(\Models\UsersModel $users, \Models\ProjectsModel $projects) {
            $this->usersModel=$users;
            $this->projectsModel=$projects;
        }
        
        public function startup() {
            parent::startup();
            
            if(!$this->user->isLoggedIn()){
                $this->redirect(':sign:in');
            }
        }

        public function renderDefault(){
            
	}

}
