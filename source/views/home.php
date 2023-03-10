<?php
ob_start();
?>

<div class="min-h-screen bg-base-200">
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>