<?php
require_once("util-db.php");
require_once("model-coaches.php");
$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      if(insertTeam($_POST['cName'], $_POST['cRecord'])){
        echo '<div class="alert alert-success" role="alert">Team Added</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;

    case "Edit":
      if(updateTeam($_POST['cName'], $_POST['cRecord'], $_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Team Edited.</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;

    case "Delete":
      if(deleteTeam($_POST['cid'],)){
        echo '<div class="alert alert-success" role="alert">Team Deleted.</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}
$teams = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
?>
