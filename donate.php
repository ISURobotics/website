<?php
    require_once('init/initialize.php');
    $pageTitle = "DONATE";
    ?>
<!DOCTYPE html>
<html>
    <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
<body>
<main>
<?php
    include(TEMPLATE_PATH . '/header.php');
    include(CONTENT_PATH . '/donate.php');
    include(CONTENT_PATH . '/contact_isu_foundation.php');
    include(TEMPLATE_PATH . '/footer.php');
    ?>
</main>
<?php include(TEMPLATE_PATH . '/script.php') ?>
</body>
</html>
