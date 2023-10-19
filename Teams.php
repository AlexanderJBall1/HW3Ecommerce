<?php
require_once("util-db.php");
require_once("model-teams.php");
$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
      if(insertTeam($_POST['tName'], $_POST['tCity'])){
        echo '<div class="alert alert-success" role="alert">Team Added</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break; 
  }
}
$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
