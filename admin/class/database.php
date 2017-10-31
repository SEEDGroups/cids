<?php
abstract class Database{
  private $conn;
  private $db;

  private $sql;
  private $where;
  private $fields;
  private $stmt;

  public function Database(){
    try{ //PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $this->conn = new PDO('mysql:host='.db_host.'; dbname='.db_name, db_user, db_password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, 'error.log');
      return false;
    }
  }
  protected function table($tablename){
    try{
      $this->table = $tablename;
    }catch(Exception $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, 'error.log');
    }
  }
  protected function fields($fields = ' * '){
    try{
      $this->fields = $fields;
    }catch(Exception $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }
  }
  protected function where($where = 1){
    try{
      $this->where = $where;
    }catch(Exception $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
    }
  }
  protected function select($is_die = false){
    try{/* SELECT FIELDS FROM TABLE LEFT JOIN TABLE1 ON TABLE.COLUMN = TABLE1.COLUMN WHERE CONDITION GROUP BY CONDITION ORDER BY CONDITION LIMIT START, COUNT */
          $this->sql = "SELECT ";
          if(!isset($this->fields)){
            $this->fields();      //$this->fields already set gareko chaina bhane $this->fields() ly call garcha ra * select garcha
          }

          $this->sql .= $this->fields;
          $this->sql .= "FROM ".$this->table;

          /*left join ko lagi*/

          if(isset($this->where)){
            $this->sql .= " WHERE ".$this->where;
          }

          if($is_die){
            echo $this->sql;
            exit;
          }

          $this->stmt = $this->conn->prepare($this->sql);
          $this->stmt->execute();
          $data = array();
          while($row = $this->stmt->fetchObject()){
            $data[]=$row;
          }
          return $data;
        }catch(PDOExecption $e){
          error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
          return false;
        }catch(Execption $e){
          error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
          return false;
        }

  }

  protected function update($is_die = false){
    /*UPDATE TABLENAME where FIELD = VALUE */
    try{
        $this->sql = "UPDATE";
        $this->sql .= $this->table;
        if(isset($this->where)){
          $this->sql .= " WHERE".$this->where;
        }
        if($is_die){
          echo $this->sql;
          exit;
        }
    }catch(PDOExecption $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }catch(Execption $e){
      error_log(date('Y-m-d h:i:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }
  }
}
?>
