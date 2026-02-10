<?php include 'header.php'; ?>

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
<h7> student Grade Table</h7>
    <table class="table table-bordered" style="width:300px;">
        <thead>
            <tr>
                <th>S.n</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>john</td>
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
        </tbody>
        </table>

    <p>This is the screenshot of my development environment:</p>
    <img src="screenshot.png" width="550" alt="Development Environment Screenshot">
    <img src="screenshot2.png" width="550" alt="Development Environment Screenshot 2">

<?php include 'footer.php'; ?>