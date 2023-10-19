<?php
require_once("util-db.php");
require_once("model-playerteams.php");
$pageTitle = "Player Teams";
include "view-header.php";
$players = selectPlayerTeams($_POST['tid']);
include "view-playerteams.php";
include "view-footer.php";
?>
