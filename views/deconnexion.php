<?php
session_start();
session_destroy();
header("Location: " . NDD_PATH);
?>
