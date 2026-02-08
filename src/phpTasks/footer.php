<hr>
    <footer>
        <p>© 2026 Damith - My PHP Tasks Project</p>
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