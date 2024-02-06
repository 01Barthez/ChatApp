<?php
    function verification($data){
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }
    
    function displayErrorMessage($errorEmessage){
        echo "
            <p>
                <hr>
                <span style=\"color: red; font-size: 1.3rem;\">".$errorEmessage."</span>
                <hr>
            </p>
    ";
    }
?>