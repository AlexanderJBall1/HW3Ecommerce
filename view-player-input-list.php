<select class="form-select" id="ptid" name="ptid">
<?php
while ($teamItem = $teamList->fetch_assoc()) {
    $selText = "";
  if ($selectedTeam == $teamItem['Team_ID']) {
    $selText = " selected";
  }
?>
<option value="<?php echo $teamItem['Team_ID']; ?>"<?=$selText?>><?php echo $teamItem['Name']; ?></option>
<?php
  }
?>
</select>
