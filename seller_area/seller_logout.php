<?php
 session_start();
 session_unset();
 session_destroy();
 echo"<script>alert('Variable destroy')</script>";
        echo"<script>window.open('../webhome.php ', '_self')</script>";

 ?>