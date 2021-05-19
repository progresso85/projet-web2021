<?php 

include "Config.php";

    $sql = "SELECT * FROM Server";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
                 echo "<div class='col' id='sous_server'>
                 <a id='pastille' href='ServerView.php?severName=".$row['nameServer']."'>" .$row['nameServer']."</a>
                 </div>";
        }
    }
?>