<h1>Players on Team</h1>
  <?php
    include "view-player-on-teams-newform.php";
  ?>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
while ($team = $teams->fetch_assoc()){
?>
<div class = "col">
`<div class="card h-100">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['Name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
<?php
 $playeronteams = selectPlayerOnTeams($team['Team_ID']);
while($player = $playeronteams->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $player['Player_Name']; ?> - <?php echo $player['Salary']; ?> - <?php echo $player['Years']; ?></li>
<?php
}
?>

        </ul>
      </p>
    </div>
  </div>
</div>
<?php
}
?>
    </tbody>
  </table>
</div>
