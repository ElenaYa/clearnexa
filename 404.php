
<?php 
// Set 404 HTTP status code
http_response_code(404);
include 'partials/header.php'; 
?>

<!-- 404 Error Section -->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="reveal">
                    <div class="error-number mb-4">404</div>
                    <h1 class="mb-4">Sivua ei löytynyt</h1>
                    <p class="lead text-muted mb-4">
                        Pahoittelemme, mutta etsimääsi sivua ei löytynyt. 
                        Sivu on saatettu siirtää, poistaa tai osoite on kirjoitettu väärin.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
                        <a href="index.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-house me-2"></i>
                            Takaisin etusivulle
                        </a>
                        <a href="services.php" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-gear me-2"></i>
                            Tutustu palveluihin
                        </a>
                    </div>
                    
                    <!-- Popular Links -->
                    <div class="row g-4 mt-4">
                        <div class="col-md-3 col-6">
                            <div class="card-diagonal p-3 h-100">
                                <i class="bi bi-house text-primary fs-4 mb-2"></i>
                                <h6 class="text-primary mb-2">Etusivu</h6>
                                <a href="index.php" class="text-decoration-none text-muted small">
                                    Palaa aloitussivulle
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card-diagonal p-3 h-100">
                                <i class="bi bi-gear text-primary fs-4 mb-2"></i>
                                <h6 class="text-primary mb-2">Palvelut</h6>
                                <a href="services.php" class="text-decoration-none text-muted small">
                                    Katso tarjontaamme
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card-diagonal p-3 h-100">
                                <i class="bi bi-info-circle text-primary fs-4 mb-2"></i>
                                <h6 class="text-primary mb-2">Tietoa meistä</h6>
                                <a href="about.php" class="text-decoration-none text-muted small">
                                    Tutustu yritykseen
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card-diagonal p-3 h-100">
                                <i class="bi bi-envelope text-primary fs-4 mb-2"></i>
                                <h6 class="text-primary mb-2">Yhteystiedot</h6>
                                <a href="contact.php" class="text-decoration-none text-muted small">
                                    Ota yhteyttä
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Search Alternative -->
                    <div class="mt-5">
                        <h5 class="text-primary mb-3">Etsitkö jotain tiettyä?</h5>
                        <p class="text-muted mb-3">
                            Voit selata suosituimpia sivujamme tai ottaa suoraan yhteyttä:
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="services.php#bi" class="text-primary text-decoration-none">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Liiketoimintatiedon hallinta (BI)
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="services.php#visualization" class="text-primary text-decoration-none">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Datan visualisointi
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="services.php#predictive" class="text-primary text-decoration-none">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Ennustava analytiikka
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="testimonials.php" class="text-primary text-decoration-none">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Asiakaskokemukset
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="faq.php" class="text-primary text-decoration-none">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Usein kysytyt kysymykset
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="mt-5 p-4 bg-primary bg-opacity-10 rounded" style="border-radius: 24px 8px 24px 8px !important;">
                        <h6 class="text-primary mb-3">
                            <i class="bi bi-headset me-2"></i>
                            Tarvitsetko apua?
                        </h6>
                        <p class="text-muted mb-3">
                            Jos et löydä etsimääsi, älä epäröi ottaa yhteyttä. 
                            Autamme mielellämme!
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:admin@clearnexa.com" class="btn btn-primary">
                                <i class="bi bi-envelope me-2"></i>
                                admin@clearnexa.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/cookie-banner.php'; ?>
<?php include 'partials/footer.php'; ?>