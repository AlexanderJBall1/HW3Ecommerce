<h1>Player Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      <th>Team</th>
      <th>Salary</th>
      <th>Years</th>
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
    <td><?php echo $player['Salary']; ?></td>
    <td><?php echo $player['Years']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
