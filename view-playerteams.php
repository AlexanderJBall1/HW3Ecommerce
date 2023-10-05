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
while ($playerteam = $playerteams->fetch_assoc()){
?>
  <tr>
    <td><?php echo $playerteam['Player_ID']; ?></td>
    <td><?php echo $playerteam['Salary']; ?></td>
    <td><?php echo $playerteam['Years']; ?></td>
    <td>
      <form method = "post" action = "Player-Teams.php">
        <input type = "hidden" name = "ptid" value = <?php echo $playerteam['PT_ID']; ?>">
        <button type = "submit" class = "btn btn-primary">PlayerInfo</button>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
