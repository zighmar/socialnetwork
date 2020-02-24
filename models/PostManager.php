<?php
  include_once "PDO.php";

  function GetOnePostFromId($id) {
    global $PDO;
    $response = $PDO->query("SELECT * FROM post WHERE id = " . $id);
    $row = $response->fetch();
    return $row;
  }

  function GetAllPosts() {
    global $PDO;
    $response = $PDO->query(
      "SELECT post.*, user.nickname "
      ."FROM post LEFT JOIN user on (post.user_id = user.id) "
      ."ORDER BY post.created_at DESC");
    $rows = $response->fetchAll();
    return $rows;
  }

  function GetAllPostsFromUserId($userId) {
    global $PDO;
    $response = $PDO->query("SELECT * FROM post WHERE user_id = " . $userId . " ORDER BY created_at DESC");
    $rows = $response->fetchAll();
    return $rows;
  }

?>
