<?php

  session_start();
  unset($_SESSION['sname']);
  header('location:form2.php');
?>