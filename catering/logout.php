<?php
session_start();
session_destroy();

?>
<script>
    alert('Anda telah logout.');
    location.href = 'login.php';
</script>