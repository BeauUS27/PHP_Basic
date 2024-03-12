<?php

$name = $_GET['name'];

// $name != null == !empty($name)
if ($name != null) {
    echo "name = $name";
}

?>

<a href="getvalue.php?name=kob">
    Click Link
</a>