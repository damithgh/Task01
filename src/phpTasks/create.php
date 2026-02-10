<?php 
$title = "Create Data";
include 'header.php'; 
?>

<h2>Input Your Information Below:</h2>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="First Name" name="fname" required>
        </div>
        <div class="col">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label>City:</label>
            <input type="text" class="form-control" placeholder="City" name="city" required>
        </div>
        <div class="col">
            <label>Group ID:</label>
            <select class="form-control" name="groupid">
                <option value="BBCAP22">BBCAP22</option>
                <option value="BBCAP23">BBCAP23</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    include 'db.php'; // connect to the database here that we created in db.php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    //this is  (SQL Query)
    $sql = "INSERT INTO studentsInfo (first_name, last_name, city, group_id) 
        VALUES ('$fname', '$lname', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>New record added successfully!</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
include 'footer.php'; 
?>s