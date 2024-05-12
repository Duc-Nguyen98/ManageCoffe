<?php include '../../layout/header.php'; ?>
<!--Main layout-->
<h2>Add User</h2>
<form autocomplete="off" action="" method="post">
    <label for="">Name</label>
    <input type="text" id="name" value=""> <br>
    <label for="">Email</label>
  
    <button type="button" onclick="submitData('insert');">Insert</button>
</form>
<br>
<a href="index.php">Go To Index</a>


<?php require 'script.php'; ?>


<?php include '../utils/resetInput.php'; ?>

<!-- resetInputs -->


<script src="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/js/mdb.umd.min.js"></script>
<?php include '../../layout/footer.php'; ?>