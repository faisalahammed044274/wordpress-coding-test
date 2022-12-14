<?Php
function greetings($name, $lang){
    echo "<p>Hello,I am $name . This is my first function and i love to work with $lang.</p>";
}

greetings('Faisal','WordPress');
greetings('Ahammed', 'Laravel');
greetings('faisalahammed044274', 'PHP');
?>
<h1> <?php bloginfo('name'); ?> </h1>
<p> <?php bloginfo('description'); ?> </p>


<?php 
    $names = array('faisal ahammed', 'faisal', 'ahammed','setu', 'setufaisal');
?>
<p> Hi, My name is <?php echo $names[0]; ?></p>

<?php

$count = 1;

while($count < 30){
    echo "<li>$count</li>";
    $count++;
}


