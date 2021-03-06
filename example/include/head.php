<?php
    $type = isset($_GET['type']) ? $_GET['type'] : 'include';
?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" href="../include/style.css" />
<?php if ($type === 'light'): ?>
    <link rel="stylesheet" type="text/css" href="../../src/dependencies/themes/aristo/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="../../src/theme/theme.css" />
    <script src="../../src/dependencies/jquery.js"></script>
    <script src="../../src/dependencies/jquery-ui.js"></script>
    <script src="../../packages/raptor.light.min.js"></script>
<?php elseif ($type === 'rails'): ?>
    <link rel="stylesheet" type="text/css" href="../../src/dependencies/themes/redmond/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="../../packages/raptor-front-end.css" />
    <script src="../../src/dependencies/jquery.js"></script>
    <script src="../../src/dependencies/jquery-ui.js"></script>
    <script src="../../packages/raptor.rails.js"></script>
<?php elseif ($type === 'mammoth'): ?>
    <link rel="stylesheet" type="text/css" href="../../src/dependencies/themes/mammoth/theme.css" />
    <link rel="stylesheet" type="text/css" href="../../src/dependencies/themes/mammoth/theme-icons.css" />
    <script src="../../src/dependencies/jquery.js"></script>
    <script src="../../src/dependencies/jquery-ui.js"></script>
    <script src="../../packages/raptor.mammoth.js"></script>
<?php elseif ($type === '0deps'): ?>
    <script src="../../packages/raptor.0deps.js"></script>
<?php elseif ($type === '0depsnc'): ?>
    <script src="../../packages/raptor.0depsnc.js"></script>
<?php elseif ($type === 'include'): ?>
    <?php $uri = '../../src/'; include __DIR__ . '/../../src/include.php'; ?>
<?php endif; ?>
