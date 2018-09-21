<?php

function formInput() {
    include 'connect.php';
    
    // Check if sumbit is clicked
    if(isset($_GET['submitproject'])) {
        $naam = $_GET['projectnaam'];
        $type = $_GET['type'];
        $omschrijving = $_GET['projectomschrijving'];
        $thumbnail = $_GET['projectthumbnail'];
        $zip = $_GET['projectzip'];
        $submit = $_GET['submitproject'];

        // Check if fields are left empty
        if(empty($naam)) {echo '<div class="perror"><p>Vul een naam in.<br></p></div>';}
        else if(empty($omschrijving)) {echo '<div class="perror"><p>Vul een omschrijving in.<br></p></div>';}
        else if(empty($thumbnail)) {echo '<div class="perror"><p>Kies een thumbnail.<br></p></div>';}
        else if(empty($zip)) {echo '<div class="perror"><p>Upload je project<br></p></div>';}

        // Submit do database
        $sql = "INSERT INTO projecten (naam, type, omschrijving, thumbnail, source) VALUES
        ('$naam', '$type', '$omschrijving', '$thumbnail', '$zip')";

        if ($conn->query($sql) === TRUE) {
            //echo Project "toegevoegd;";
        } else {
            echo"Mislukt: " . $conn->error;
        }
    } 
}

function printTable() {
    include '../php/connect.php';
    $sql = "SELECT * FROM projecten";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="projectpostwrap">';
            echo '<div class="projectpost">';
            echo "<h1>" . $row['naam'] . "</h1><br>";
            echo "<p>" . "Project soort: " . $row['type'] . "</p><br>";
            echo "<p>" . "Omschrijving: " . $row['omschrijving'] . "</p><br>";
            echo "<p>" .  "Download: " . $row['source'] . "</p><br>";
            echo '</div>';
            echo '<div class="prthumb">' . $row['thumbnail'] . '</div>';
            echo '</div>';
        }
    }
}


?>