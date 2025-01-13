<?php
unlink('data/'.$_GET['id']);
header('Location: /portfolio.php')
?>