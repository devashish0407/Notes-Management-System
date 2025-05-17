<?php
include './connection.php';
if(isset($_POST["hidden"])){
  $title = mysqli_real_escape_string($conn, $_POST['edittitle']);
  $desc = mysqli_real_escape_string($conn, $_POST['editdesc']);
  $id = mysqli_real_escape_string($conn, $_POST['hidden']);
    $sql="UPDATE `notes` SET `sno`='$id',`title`='$title',`desciption`='$desc' WHERE `sno`='$id'";
    $result=mysqli_query($conn,$sql);
}



echo'



 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="POST">
        <input type="hidden" name="hidden" id="hidden">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edittitle" placeholder="Enter Title..." name="edittitle">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="editdesc" rows="3" placeholder="Enter Description..." name="editdesc"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="sign">Update Note</button>
                </form>
                <div class="modal-footer">
                    <button type="button" classs="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
      </div>
      
    </div>
  </div>
</div>';
?>