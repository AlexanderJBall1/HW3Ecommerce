<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['Team_ID']; ?">

</button>

<!-- Modal -->
<div class="modal fade" id="newTeamModal" tabindex="-1" aria-labelledby="newTeamModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTeamModalLabel">New Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">
<form method = "post" action="">
  <div class="mb-3">
    <label for="tName" class="form-label">Team Name</label>
    <input type="text" class="form-control" id="tName" name = "tName">
  </div>
  <div class="mb-3">
    <label for="tCity" class="form-label">Team City</label>
    <input type="text" class="form-control" id="tCity" name = "tCity">
  </div>
        <input type = "hidden" name = "actionType" value = "Add">
  <button type="submit" class="btn btn-primary">Save</button>
</form>
      </div>
    </div>
  </div>
</div>
