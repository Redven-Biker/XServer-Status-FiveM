<?php
include( "config.php" );

if(isset($_POST['deleteservers']) and is_numeric($_POST['deleteservers']))
{
  $id = $_POST['deleteservers'];
  $count=$bdd->prepare("DELETE FROM servers WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../admin/index.php');
};

?>
