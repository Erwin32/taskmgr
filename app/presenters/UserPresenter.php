<?php
/**
 * Description of UserPresenter
 *
 * @author petrpallas
 */
class UserPresenter extends BasePresenter{
    
    protected $userModel;


    public function __construct( \Models\UsersModel $users) {
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
        $user=  $this->userModel->getUserDetail($id);
        
        //display part
        $this->template->id=$id;
        $this->template->userDetail=$user;
        
        //debug part
        \Nette\Diagnostics\Debugger::barDump($user);
    }
    
}
