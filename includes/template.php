<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(getPageTitle($current_page)); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>📱 <?php echo e(SITE_TITLE); ?></h2>
                <span class="slogan"><?php echo e(SITE_SLOGAN); ?></span>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <?php foreach (NAVIGATION as $page => $nav): ?>
                <li><a href="<?php echo e(getNavUrl($page)); ?>" class="nav-link <?php echo isActivePage($page, $current_page); ?>"><?php echo e($nav['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <?php includePage($current_page); ?>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><?php echo e(SITE_TITLE); ?></h4>
                    <p>Ihr vertrauensvoller Partner<br>seit 20 Jahren</p>
                </div>
                <div class="footer-section">
                    <h4>Kontakt</h4>
                    <p><?php echo CONTACT_ADDRESS; ?><br>Tel: <?php echo e(CONTACT_PHONE); ?><br>E-Mail: <a href="<?php echo e(getEmailLink()); ?>"><?php echo e(CONTACT_EMAIL); ?></a></p>
                </div>
                <div class="footer-section">
                    <h4>Öffnungszeiten</h4>
                    <p><?php echo implode('<br>', OPENING_HOURS); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>