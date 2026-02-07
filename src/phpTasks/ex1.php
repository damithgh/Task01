
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Exercise 1: Getting Started with PHP - Damith</title>
    
<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Damith</title>
</head>
<body>

   
    <?php
        echo 'Hello world! My name is "David"';
    ?>

   
    <?php
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>

    
    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table>
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

    
    <p>This is the screenshot of my development environment:</p>

    <img src="screenshot.png" width="550" alt="Development Environment Screenshot">
    <img src="screenshot2.png" width="550" alt="Development Environment Screenshot 2">

</body>
</html>
