<?php
$title = "Update/Delete Student";
include 'header.php';
include 'db.php';

// 1. Fetch the existing data to fill the form
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM studentsInfo WHERE id='$id'");
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    // 2. Handle Update
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group = $_POST['groupid'];

    $update_query = "UPDATE studentsInfo SET first_name='$fname', last_name='$lname', city='$city', group_id='$group' WHERE id='$id'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "<div class='alert alert-success'>Information updated successfully!</div>";
        header("Refresh:2; url=read.php"); // Redirects back to list after 2 seconds
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

if (isset($_POST['delete'])) {
    // 3. Handle Delete
    $delete_query = "DELETE FROM studentsInfo WHERE id='$id'";
    
    if (mysqli_query($conn, $delete_query)) {
        echo "<div class='alert alert-danger'>Record deleted successfully!</div>";
        header("Refresh:2; url=read.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>

<h2>Update Information</h2>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col"><input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>" required></div>
        <div class="col"><input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>" required></div>
    </div>
    <div class="row mb-3">
        <div class="col"><input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" required></div>
        <div class="col">
            <select name="groupid" class="form-control">
                <option value="BBCAP22" <?php if($row['group_id'] == 'BBCAP22') echo 'selected'; ?>>BBCAP22</option>
                <option value="BBCAP23" <?php if($row['group_id'] == 'BBCAP23') echo 'selected'; ?>>BBCAP23</option>
                <option value="Others" <?php if($row['group_id'] == 'Others') echo 'selected'; ?>>Others</option>
            </select>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update Information</button>
    <button type="submit" name="delete" class="btn btn-danger">Delete Information</button>
</form>

<?php 
$conn->close();
include 'footer.php'; 
?>