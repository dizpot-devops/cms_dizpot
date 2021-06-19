<?php


class Auth
{

    private $is_authenticated = false;
    private $user_id;
    private $first_name;
    private $last_name;
    private $email;
    private $authType = 0;


    public function __construct()
    {

    }
    public function updateSession() {
        $info = (new userModel())->getAuthedUserInfo();
        if(!$info) { die("Could not get updated info"); }
        $this->createSession($info);
    }
    public function createSession($info) {
        $this->setUserInfo($info);
        $this->writeToSession();
    }
    public function setUserInfo($info) {
        $this->setLastName($info["lastName"]);
        $this->setFirstName($info['firstName']);
        $this->setEmail($info['email']);
        $this->setUserId($info['id']);
        $this->setAuthType($info['authType']);
        $this->setAuthenticated(true);
    }
    public function writeToSession() {
        $_SESSION[SESSION_AUTH_KEY] = serialize($this);
    }
    public function destroySession() {
        unset($_SESSION[SESSION_AUTH_KEY]);
        session_destroy();
    }
    public function revive() {
        if(isset($_SESSION[SESSION_AUTH_KEY])) {
            return unserialize($_SESSION[SESSION_AUTH_KEY]);
        }
        return new Auth();
    }


    public function isAuthenticated() {
        if(!isset($_SESSION[SESSION_AUTH_KEY])) {
            return false;
        }
        return $this->is_authenticated;
    }




    public function setAuthenticated(bool $auth) {;
        $this->is_authenticated = $auth;
        $this->writeToSession();
    }





    public function getUserId()
    {
        return $this->user_id;
    }
    private function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }
    public function getFirstName()
    {
        return $this->first_name;
    }
    private function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    private function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    private function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getAuthType()
    {
        return $this->authType;
    }
    private function setAuthType($authType)
    {
        $this->authType = $authType;
    }

}