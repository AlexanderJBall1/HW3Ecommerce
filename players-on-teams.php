<?php
require_once("util-db.php");
require_once("model-players-on-teams.php");
$pageTitle = "Players on Teams";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSection($_POST['iid'], $_POST['cid'], $_POST['sem'], $_POST['room'], $_POST['daytime'])) {
        echo '<div class="alert alert-success" role="alert">Section added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateSection($_POST['iid'], $_POST['cid'], $_POST['sem'], $_POST['room'], $_POST['daytime'], $_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Section edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteSection($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Section deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$teams = selectTeams();
include "view-player-on-teams.php";
include "view-footer.php";
?>
