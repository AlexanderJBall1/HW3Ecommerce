<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      <th>Team</th>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()){
?>
  <tr>
    <td><?php echo $player['Player_ID']; ?></td>
    <td><?php echo $player['Player_Name']; ?></td>
    <td><?php echo $player['Player_Number']; ?></td>
    <td><?php echo $player['Player_Team']; ?></td>
    <td><a href= player-teams.php?id=<?php echo $player['Player_ID']; ?>">Player Info</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
