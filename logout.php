<?php
session_start();
unset($_SESSION['loginStatus']);
session_destroy();

header("Location: /");
