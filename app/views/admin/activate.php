<?php
 if (!($_SESSION['admin'])) {
    header('Location: ' . BASEURL . '/wallet/login');
  }
?>