<?php
  include_once "PDO.php";

  function GetOneUserFromId($id) {
    global $PDO;
    $response = $PDO->query("SELECT * FROM user WHERE id = " . $id);
    $row = $response->fetch();
    return $row;
  }

  function GetAllUsers() {
    global $PDO;
    $response = $PDO->query("SELECT * FROM user ORDER BY nickname ASC");
    $rows = $response->fetchAll();
    return $rows;
  }

?>
