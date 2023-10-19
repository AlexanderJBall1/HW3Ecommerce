<?php
require_once("util-db.php");
require_once("model-coaches-by-teams.php");
$pageTitle = "Team Coaches";
include "view-header.php";
$coaches = selectCoachesByTeams($_POST['cid']);
include "view-coaches-by-teams.php";
include "view-footer.php";
?>
