<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
      $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($dataArr,$table){

      $getDataKeys = array_keys($dataArr);
      $cols = implode(",",$getDataKeys);
      $questionMarks="";
      foreach($getDataKeys as $key){
        $questionMarks .= "?,";
      }
      $questionMarks = rtrim($questionMarks,",");
      $mysql = "insert into $table ($cols) values ($questionMarks)";
      $statement = $this->pdo->prepare($mysql);
      $getDataValues = array_values($dataArr);
      $statement->execute($getDataValues);
    }

    public function delete($dataArr,$table){
      $filter = "";
      foreach($dataArr as $key=> $value){
        $filter .= " $key = \"$value\" AND";
      }
      $filter = rtrim($filter,"AND");
      $mysql = "delete from $table where $filter";
      $statement = $this->pdo->prepare($mysql);
      $statement->execute();
    }
}