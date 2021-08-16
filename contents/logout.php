<?php
session_start();
session_destroy();
header('location:contents/welcome.php');
