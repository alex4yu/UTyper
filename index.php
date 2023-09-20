<?php
    include "header.php";
?>

<link rel="stylesheet" href="indexstyle.css">
        <div class = "testParent" id="modes">
            <p class = "child_mode" id = "mode">mode: </p>
            <p class = "child_modes" id = "normalMode">normal </p>
            <p class = "child_modes" id = "wikiMode">random wiki </p>
            <p class = "child_words" id = "words">words: </p>
            <p class = "child_count" id ="10">10</p>
            <p class = "child_count" id = "20">20</p>
            <p class = "child_count" id = "40">40</p>
            <p class = "child_quote" id = "quote">Quote</p>
        </div>
        <div class = "promptTrackerParent">
            <div class = "trackerParent">
                <div class = "tracker" id = "timer"></div>
                <div class = "tracker" id = "wpm"></div>
                <div class = "tracker" id = "accuracy"></div>
            </div>
            <div class="prompt" id = "prompt"></div>
        </div>
        <div id="next" class = "next">></div>      
       

<?php
    include "footer.php";
?>