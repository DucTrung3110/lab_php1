<?php
session_start();
require 'functions.php';
doLogout();
header('Location: login.php');
exit;
