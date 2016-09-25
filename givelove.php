<?php  
    include("thediscovery-config.php");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $songID = $_POST['songID'];
        
        if (array_key_exists($songID, unserialize($_COOKIE["loves"])) && unserialize($_COOKIE["loves"])[$songID] > 0) {
            $voteValue = -1;
            $loves = unserialize($_COOKIE["loves"]);
            $loves[$songID] = 0;
            setcookie("loves", serialize($loves), time() + (86400 * 30), "/");
        }
        else {
            $voteValue = 1;
            $loves = unserialize($_COOKIE["loves"]);
            $loves[$songID] = 1;
            setcookie("loves", serialize($loves), time() + (86400 * 30), "/");
        }
        mysqli_query($con, "UPDATE songs SET loves=loves+" . $voteValue . " WHERE songID=$songID;");
    } else {
        header("Location: " . get_home_url()); /* Redirect browser */
        exit();
    }
?>