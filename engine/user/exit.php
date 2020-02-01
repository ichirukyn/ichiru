<?php
session_start();

unset($_SESSION['userlogin'], $_SESSION['userpass'], $_SESSION['userid']);
session_unset();
session_destroy();

?>
<script type="text/javascript">
window.location = "http://ichiru"
</script>

<?php exit;