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
    <meta name="description" content="<?php echo e(getPageDescription($current_page)); ?>">
    <meta name="keywords" content="<?php echo e(getPageKeywords($current_page)); ?>">
    <meta name="author" content="iMediahuus Basel">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo e(getCanonicalUrl($current_page)); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="alternate icon" href="favicon.ico">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(getCanonicalUrl($current_page)); ?>">
    <meta property="og:title" content="<?php echo e(getPageTitle($current_page)); ?>">
    <meta property="og:description" content="<?php echo e(getPageDescription($current_page)); ?>">
    <meta property="og:site_name" content="<?php echo e(SITE_TITLE); ?>">
    <meta property="og:locale" content="de_CH">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?php echo e(getPageTitle($current_page)); ?>">
    <meta property="twitter:description" content="<?php echo e(getPageDescription($current_page)); ?>">
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "<?php echo e(SITE_TITLE); ?>",
      "description": "<?php echo e(SITE_DESCRIPTION); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Güterstrasse 249",
        "addressLocality": "Basel",
        "postalCode": "4053",
        "addressCountry": "CH"
      },
      "telephone": "+41615541600",
      "email": "<?php echo e(CONTACT_EMAIL); ?>",
      "url": "https://imediahuus.ch",
      "openingHours": "Mo-Do 10:00-19:00, Fr 10:00-13:00 15:00-19:00, Sa 10:00-18:00",
      "priceRange": "$$",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "200"
      }
    }
    </script>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>📱 <span class="logo-i">i</span>Mediahuus Basel</h2>
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