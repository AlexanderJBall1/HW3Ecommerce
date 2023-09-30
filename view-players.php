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
    <td><?php echo $player['player_id']; ?></td>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['player_number']; ?></td>
    <td><?php echo $player['player_team']; ?></td>
  </tr>
  
}

    </tbody>
  </table>
</div>
