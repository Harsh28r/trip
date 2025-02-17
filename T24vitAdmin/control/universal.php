<?php
session_start();

if (empty($_SESSION['adminuid']) && empty($_SESSION['vendoruid'])) {
  $_SESSION['redirect_url'] = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  echo '<script>
            // alert("Please log in to access this page.");
            window.location.href = "index.php?Please-Login";
        </script>';
  exit;
}

// If either adminuid or vendoruid is set, the script will continue here (dashboard access).
