<?php
include 'head.php';

if (isset($_SESSION['sessao'])) {
	include 'headeradmin.php';
} else {
	include 'login.php';
}
