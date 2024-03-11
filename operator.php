<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 5;
$b = 10;

?>

<div>
    <?php echo $a + $b; ?>
</div>
<div>
<?php echo $a - $b; ?>
</div>
<div>
<?php echo $a * $b; ?>
</div>
<div>
<?php echo $a / $b; ?>
</div>
<div>
<?php echo $a % $b; ?>
</div>
<div>
<?php echo $a++; ?>  // 4
<?php echo $a; ?>  // 5
</div>
<div>
<?php echo ++$a; ?> // 6
<?php echo $a; ?>
</div>
