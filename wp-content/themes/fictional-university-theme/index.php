<?php
    $names = array('Brad', 'john', 'Jane', 'Test');

    $count = 0;
    while($count < count($names)) {
        echo "<li>Hi, my name is $names[$count].</li>";
        $count++;
    }
?>


