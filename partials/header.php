<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if (isset($meta_title) && isset($meta_description) && isset($meta_keywords)): ?>
        <title><?= htmlspecialchars($meta_title) ?></title>
        <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
        <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
    <?php else: ?>
        <title>Clearnexa Analytics Co. - Data-analytiikka ja liiketoimintatiedon asiantuntijat</title>
        <meta name="description" content="Clearnexa Analytics Co. tarjoaa edistyneitä data-analytiikka- ja liiketoimintatiedon ratkaisuja yrityksille. BI, visualisointi, ennustava analytiikka ja big data -palvelut.">
        <meta name="keywords" content="data-analytiikka, liiketoimintatiedon hallinta, BI, visualisointi, ennustava analytiikka, big data, ETL, data governance">
    <?php endif; ?>
    
    <meta name="robots" content="index, follow">
    <meta name="author" content="Clearnexa Analytics Co.">
    <meta name="geo.region" content="FI">
    <meta name="geo.placename" content="Suomi">
    <meta name="language" content="Finnish">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Clearnexa Analytics Co. - Data-analytiikka ja liiketoimintatiedon asiantuntijat">
    <meta property="og:description" content="Edistyneitä data-analytiikka- ja liiketoimintatiedon ratkaisuja yrityksille.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://clearnexa.com">
    <meta property="og:locale" content="fi_FI">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Clearnexa Analytics Co.">
    <meta name="twitter:description" content="Data-analytiikka ja liiketoimintatiedon asiantuntijat">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Clearnexa Analytics Co.",
        "url": "https://clearnexa.com",
        "logo": "https://clearnexa.com/images/logo.webp",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "admin@clearnexa.com",
            "contactType": "customer service",
            "availableLanguage": "Finnish"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "FI"
        },
        "sameAs": [
            "https://clearnexa.com"
        ]
    }
    </script>
</head>
<body<?php if (isset($page_class)): ?> class="<?= htmlspecialchars($page_class) ?>"<?php endif; ?>>

<header class="angle-banner">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo-header.webp" alt="Clearnexa Analytics Co." height="28" class="me-2">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Avaa navigaatio">
                <i class="bi bi-list"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" aria-label="Etusivu">Etusivu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" aria-label="Tietoa meistä">Tietoa meistä</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php" aria-label="Palvelut">Palvelut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.php" aria-label="Asiakaskokemukset">Asiakaskokemukset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php" aria-label="Usein kysytyt kysymykset">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" aria-label="Ota yhteyttä">Yhteystiedot</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>