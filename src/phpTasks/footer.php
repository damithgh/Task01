<hr>
    <footer class="mt-5 p-3 text-center bg-light">
    <p>© 2026 Damith - PHP Tasks</p>
    <p>
        <?php
            $filename = basename($_SERVER['PHP_SELF']); 
            $last_modified = filemtime($filename); 
            echo "Last modified: " . date("F d Y H:i:s.", $last_modified); 
        ?>
    </p>
</footer>
</body>
</html>