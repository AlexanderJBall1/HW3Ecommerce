<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>City</th>
      <th>Name</th>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()){
?>
  <tr>
    <td><?php echo $player['Team_ID']; ?></td>
    <td><?php echo $player['City']; ?></td>
    <td><?php echo $player['Name']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
