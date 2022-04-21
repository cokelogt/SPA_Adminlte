<?php
session_start();
$_SESSION['sidebar'] = array('url' => $_POST['url'],'menu' => $_POST['menu']);
echo $_SESSION['sidebar']['url']; ?>