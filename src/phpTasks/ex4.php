<?php 
$title = "Exercise 4: Control flow and loops";
include 'header.php'; 
?>

<div class="container mt-4">
    <h3>Exercise 4: Control flow and loops</h3>

    <section class="mt-4 p-3 border rounded bg-light">
        <h4>1. Voting Eligibility</h4>
        <form method="post" action="">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
            </div>
            <button type="submit" name="check_vote" class="btn btn-primary">Check Eligibility</button>
        </form>
        <?php
        if (isset($_POST['check_vote'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            if ($age >= 18) {
                echo "<p class='mt-2 text-success'>Hello $name, You are eligible for voting!</p>";
            } else {
                echo "<p class='mt-2 text-danger'>Hello $name, You are not eligible for voting yet.</p>";
            }
        }
        ?>
    </section>

    <section class="mt-4 p-3 border rounded bg-light">
        <h4>2. Current Month Check</h4>
        <?php
        $currentMonth = date("F");
        switch ($currentMonth) {
            case "August":
                echo "<p>It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p>Not August, this is <b>$currentMonth</b> so I don't have any holidays.</p>";
        }
        ?>
    </section>

    <section class="mt-4 p-3 border rounded bg-light">
        <h4>3. Multiplication Table</h4>
        <form method="post" action="">
            <div class="mb-3">
                <input type="number" name="num_table" class="form-control" placeholder="Enter a number" required>
            </div>
            <button type="submit" name="gen_table" class="btn btn-secondary">Generate Table</button>
        </form>
        <?php
        if (isset($_POST['gen_table'])) {
            $n = $_POST['num_table'];
            echo "<ul class='mt-2'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$n x $i = " . ($n * $i) . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </section>

    <section class="mt-4 p-3 border rounded bg-light">
        <h4>4. Numbers from 1 to n</h4>
        <form method="post" action="">
            <div class="mb-3">
                <input type="number" name="n_limit" class="form-control" placeholder="Enter n" required>
            </div>
            <button type="submit" name="print_n" class="btn btn-info text-white">Print Numbers</button>
        </form>
        <?php
        if (isset($_POST['print_n'])) {
            $n = $_POST['n_limit'];
            $i = 1;
            echo "<p class='mt-2'>";
            while ($i <= $n) {
                echo "$i " . ($i < $n ? ", " : "");
                $i++;
            }
            echo "</p>";
        }
        ?>
    </section>

    <section class="mt-4 p-3 border rounded bg-light mb-5">
        <h4>5. Array Elements (Foreach)</h4>
        <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        echo "<ul>";
        foreach ($myarray as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
        ?>
    </section>
</div>

<?php include 'footer.php'; ?>