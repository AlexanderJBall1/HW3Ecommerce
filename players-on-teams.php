<?php
require_once("util-db.php");
require_once("model-player-on-teams.php");
$pageTitle = "Players on Team";
include "view-header.php";
$players = selectPlayerOnTeams($_GET['id']);
include "view-player-on-teams.php";
include "view-footer.php";
?>
