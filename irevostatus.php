<?php
  if (isset($_GET['status']) && isset($_GET['pcid'])) {
      if ($_GET['status'] == "OFFLINE") {
        echo "PC $_GET['pcid'] going offline! Add database link here";
      }
      if ($_GET['status'] == "ONLINE") {
        echo "PC $_GET['pcid'] is online! add database link here";
      }
  }
?>
