<select class="form-select" id="tid" name="tid">
<?php
while ($playerItem = $playerList->fetch_assoc()) {
  $selText = "";
  if ($selectedPlayer == $playerItem['Player_ID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $playerItem['Player_ID']; ?>"<?=$selText?>><?php echo $playerItem['Player_Name']; ?></option>
<?php
}
?>
</select>
