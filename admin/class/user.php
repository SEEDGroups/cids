<?php
  /**
   * This class will do all the operation regarding user
   */
  class User extends Database
  {
    public function User(){
      $this->table('users');
      Database::Database();
    }
    public function getUserByUsername($username){
      $this->where(' username = "'.$username.'" AND STATUS = 1');
      $data = $this->select();
      return $data;
    }
  }

?>
