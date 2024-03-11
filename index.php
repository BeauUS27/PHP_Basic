<?php

$a = 10;
$b = 10+$a;
$c = "Hello $a";
$d = "Hi" . $a

?>

<div>
    <?php echo $a; ?>
</div>

<div>
    <?php echo $b; ?>
</div>
<div>
    <?php echo $c; ?>
</div>
<div>
    <?= $c; ?>
</div>
<div>
    <?php echo $d; ?>
</div>