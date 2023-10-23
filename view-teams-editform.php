<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['Team_ID']; ?>"

</button>

<!-- Modal -->
<div class="modal fade" id="editTeamModal<?php echo $team['Team_ID']; ?>" tabindex="-1" aria-labelledby="editTeamModalLabel<?php echo $team['Team_ID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTeamModalLabel<?php echo $team['Team_ID']; ?>">Edit Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">
<form method = "post" action="">
  <div class="mb-3">
    <label for="tName<?php echo $team['Team_ID']; ?>" class="form-label">Team Name</label>
    <input type="text" class="form-control" id="tName<?php echo $team['Team_ID']; ?>" name = "tName" value = "<?php echo $team['Name']; ?>">
  </div>
  <div class="mb-3">
    <label for="tCity<?php echo $team['Team_ID']; ?>" class="form-label">Team City</label>
    <input type="text" class="form-control" id="tCity<?php echo $team['Team_ID']; ?>" name = "tCity" value = "<?php echo $team['City']; ?>" >
  </div>
        <input type = "hidden" name = "tid" value = "<?php echo $team['Team_ID']; ?>">
        <input type = "hidden" name = "actionType" value = "Edit">
  <button type="submit" class="btn btn-primary">Save</button>
</form>
      </div>
    </div>
  </div>
</div>
