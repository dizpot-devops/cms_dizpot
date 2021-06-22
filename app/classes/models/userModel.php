<?php


class userModel extends Model
{
    public function login()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //$password = md5($post['password']);


//        if($post['rbe']){
//            $result = $this->mdbx_query("SELECT u.id,u.firstName,u.lastName,u.email,u.accessLevel as authType FROM cms_users u WHERE u.email=? and u.password=? and date_deleted IS NULL",$post['email'],$password);
//            $row = $result->fetchFirst();
//
//            if($row) {
//                (new Auth())->createSession($row);
//                //$this->mdbx_query("INSERT INTO logins (actionDateTime,userId,ipaddress) VALUES (NOW(),?,?)",$row['id'],$_SERVER['REMOTE_ADDR']);
//                header('Location: '.ROOT_URL . 'admin/dashboard/');
//            }
//            else {
//                Messages::setMessage('Incorrect email or password','error');
//            }
//        }
        return;
    }

    public function getAuthedUserInfo()
    {
        $auth = (new Auth())->revive();

        if (!$auth) {
            return false;
        }

        $userId = $auth->getUserId();
        $result = $this->mdbx_query("SELECT * FROM cms_users where id=?", $userId);
        return $result->fetchFirst();
    }

    public function add($firstName, $lastName, $email, $password = '')
    {
        $password = md5($password);
        $this->mdbx_query("INSERT INTO cms_users (firstName,lastName,email,password,date_created) VALUES (?,?,?,?,NOW())", $firstName, $lastName, $email, $password);
        return $this->lastInsertId();
    }

    public function doesUserEmailExist($email)
    {
        $query = $this->mdbx_query("select * FROM cms_users WHERE email=? AND date_deleted IS NULL", $email);
        $results = $this->fetch();
        if (count($results) == 0) {
            return false;
        } else {
            return $results['id'];
        }
    }

    public function create()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($post['form-submit']) && $post['form-submit'] == 'users-create') {
            $fName = $post['fName'];
            $lName = $post['lName'];
            $email = $post['email'];

            $query = "INSERT INTO cms_users (firstName, lastName, email) VALUES (?, ?, ?)";
            $this->mdbx_query($query, $fName, $lName, $email);
        }

        if(isset($post['form-submit']) && $post['form-submit'] == 'users-create'){
            $query  ="SELECT * FROM cms_users where email=?";
            $this->mdbx_query($query, $email);
            $result = $this->fetch();

            $util = new Util();
            $codeCreation = Util::random(6, true, false, false);

            $query = "UPDATE cms_users SET codeCreation=? WHERE email=?";
            $this->mdbx_query($query, $codeCreation, $email);

            $email = new Email();
            $email->sendNewEmployeeInvite($result['firstName'], $result['lastName'], $result['email'], $codeCreation);
        }
    }

    public function tempPass(){
        if (isset($post['form-submit']) && $post['form-submit'] == "temp-pass"){
            $code = $post['tempPass'];
            $password = $post['password'];
            $newPass = $post['newPass'];
            $confirmPass = $post['confirm'];
        }

        $query = "UPDATE cms_users SET password=? "
    }
}



