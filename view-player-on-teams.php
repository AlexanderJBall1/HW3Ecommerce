<h1>Player Info</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()){
?>
`<div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
  <tr>
    <td><?php echo $player['Player_ID']; ?></td>
    <td><?php echo $player['Player_Name']; ?></td>
    <td><?php echo $player['Salary']; ?></td>
    <td><?php echo $player['Years']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
