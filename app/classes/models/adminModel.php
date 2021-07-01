<?php


class adminModel extends Model
{
    public function Index() {

    }

    public function dashboard() {

    }

    public function users() {
        $query = "SELECT * FROM cms_users";
        $this->mdbx_query($query);
        return $this->resultSet();
    }
}