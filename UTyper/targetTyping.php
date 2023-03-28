<?php
    include "header.php";
?>
    <link rel="stylesheet" href="targetTypingstyle.css">

        <div class = "testParent" id="modes">
            <p class = "child_words" id = "words">words: </p>
            <p class = "child_count" id ="10">10</p>
            <p class = "child_count" id = "20">20</p>
            <p class = "child_count" id = "40">40</p>
        </div>
        <div class = "targets" id = "targets"></div>
        <div class = "trackerParent">
            <div class = "timer" id = "timer"></div>
            <div class = "timer" id = "wpm"></div>
            <div class = "timer" id = "accuracy"></div>
        </div>
        <div class="prompt" id = "prompt"></div>
        
            
        
        <div id="next" class = "next">></div>
<?php
    include "footer.php";
?>