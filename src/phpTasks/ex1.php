
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Damith</title>
</head>
<body>

    <h3>Task 1: Hello World Message</h3>
    <?php
        echo 'Hello world! My name is "David"';
    ?>

    <h3>Task 2: Display Title Variable</h3>
    <?php
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>

    <h3>Task 3: Grades Table</h3>
    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table border="1" cellpadding="6">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>

    <h3>Task 4: Development Environment Screenshot</h3>
    <p>This is the screenshot of my development environment:</p>

    <img src="screenshot.png" width="550" alt="Development Environment Screenshot">

</body>
</html>
