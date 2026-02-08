<?php 
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; 
?>

<div class="container mt-4">
    <h3>Exercise 3: Variable, Strings & Operators</h3>

    <form method="post" action="" class="mt-4 shadow p-4 mb-5 bg-body rounded">
        <div class="row mb-3">
            <div class="col">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your first name" required>
            </div>
            <div class="col">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your last name" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
    }
    ?>

    <hr>

    <h4>Bootstrap Styled Table</h4>
    <table class="table table-striped table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>S.n</th><th>Name</th><th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>John</td><td>A</td></tr>
            <tr><td>2</td><td>Alice</td><td>B</td></tr>
            <tr><td>3</td><td>Bob</td><td>C</td></tr>
        </tbody>
    </table>

    <hr>

    <h4>String Variables</h4>
    <?php
    $str1 = "Hello";
    $str2 = "World";
    $combined = $str1 . " " . $str2;
    echo "<p>Joined String: <strong>$combined</strong></p>";
    echo "<p>Length of the string: <strong>" . strlen($combined) . "</strong></p>";
    ?>

    <hr>

    <h4>Number Addition</h4>
    <?php
    $num1 = 298; $num2 = 234; $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>The sum of $num1, $num2, and $num3 is: <strong>$sum</strong></p>";
    ?>

    <hr>

    <h4>Browser Detection</h4>
    <?php
    echo "<p>You are using: <strong>" . $_SERVER['HTTP_USER_AGENT'] . "</strong></p>";
    ?>
</div>

<?php include 'footer.php'; ?>