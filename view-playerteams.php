<h1>Player Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Salary</th>
      <th>Years</th>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()){
?>
  <tr>
    <td><?php echo $player['Player_ID']; ?></td>
    <td><?php echo $player['Salary']; ?></td>
    <td><?php echo $player['Years']; ?></td>
    <td>
      <form method = "post" action = "Player-Teams.php">
        <input type = "hidden" name = "pid" value = <?php echo $player['Player_ID']; ?>">
        <button type = "submit" class = "btn btn-primary">PlayerInfo</button>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
