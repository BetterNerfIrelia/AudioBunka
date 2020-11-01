<?php
$link = mysqli_connect("lx18.hoststar.hosting", "at33693_audiobunka", "3BrKY?e7", "at33693_audiobunka");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$track = mysqli_real_escape_string($link, $_REQUEST['track']);
$artist = mysqli_real_escape_string($link, $_REQUEST['artist']);
 
$sql = "INSERT INTO SongOfTheYearSubs (track, artist) VALUES ('$track', '$artist')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 mysqli_close($link);
?>