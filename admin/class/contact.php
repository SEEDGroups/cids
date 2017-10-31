<?php
/**
 * this class is for all the operation of contact
 */
class Contact extends Database
{
  public function contact(){
    try{
      $this->table(' contact');
      Database::Database();
    }catch(Exception $e){
      error_log(date('Y-m-d h:m:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }
  }
  public function getContact(){
    $data = $this->select();
    return $data;
  }
  public function updateContact($data){
    $fields = array_keys($data);
    $values = array_values($data);
    debugger($fields);
    debugger($values);
    exit;
    $this->where(' id = 1');
    $data = $this->update(true);
    return $data;
  }
}

?>
