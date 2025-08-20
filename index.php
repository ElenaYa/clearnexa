<?php
// SEO Meta Variables
$meta_title = "Clearnexa Analytics Co. - Data-analytiikka ja liiketoimintatiedon asiantuntijat Suomessa";
$meta_description = "Clearnexa Analytics Co. tarjoaa edistyneitä data-analytiikka- ja liiketoimintatiedon ratkaisuja yrityksille. BI, visualisointi, ennustava analytiikka ja big data -palvelut Suomessa.";
$meta_keywords = "data-analytiikka, liiketoimintatiedon hallinta, BI, business intelligence, datan visualisointi, ennustava analytiikka, big data, ETL, data governance, Suomi";

include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="hero section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <h1 class="mb-4">
                        Muutamme datasi 
                        <span class="text-gradient">kilpailueduksi</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Clearnexa Analytics Co. on johtava data-analytiikan ja liiketoimintatiedon 
                        asiantuntija Suomessa. Autamme yrityksiä tekemään älykkäitä, 
                        datalähtöisiä päätöksiä, jotka kasvattavat liiketoimintaa.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4 mb-lg-0">
                        <a href="services.php" class="btn btn-primary">
                            <i class="bi bi-rocket-takeoff me-2"></i>
                            Tutustu palveluihin
                        </a>
                        <a href="contact.php" class="btn btn-outline-primary">
                            <i class="bi bi-chat-dots me-2"></i>
                            Aloita keskustelu
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="position-relative bg-gradient" style="padding-top: 66.6667%; border-radius: 24px 8px 24px 8px !important; overflow: hidden;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('images/hero-analytics.webp'); background-size: cover; background-position: center; -webkit-clip-path: inset(0 round 24px 8px 24px 8px); clip-path: inset(0 round 114px 8px 114px 8px);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insights Showcase (Full-Width Custom Section) -->
<section class="section section-insights">
    <div class="insights-grid">
        <div class="insights-content reveal">
            <h2 class="mb-3">Älykkäät oivallukset, jotka ohjaavat päätöksiä</h2>
            <p class="lead text-muted mb-4">
                Yhdistämme laadukkaan datan, mallinnuksen ja visualisoinnin
                tarjotaksemme selkeitä suosituksia – ei vain numeroita.
            </p>
            <div class="insights-stats">
                <div class="insight-pill">
                    <span class="pill-label">Mallien tarkkuus</span>
                    <span class="pill-value">98%</span>
                </div>
                <div class="insight-pill">
                    <span class="pill-label">Dataputkien luotettavuus</span>
                    <span class="pill-value">99.95%</span>
                </div>
                <div class="insight-pill">
                    <span class="pill-label">Raporttien SLA</span>
                    <span class="pill-value">&lt; 1h</span>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a href="services.php#predictive" class="btn btn-primary">
                    <i class="bi bi-lightning-charge me-2"></i>
                    Tutustu analytiikkaan
                </a>
                <a href="services.php#visualization" class="btn btn-outline-primary">
                    <i class="bi bi-bar-chart-line me-2"></i>
                    Katso visualisoinnit
                </a>
            </div>
        </div>
        <div class="insights-visual reveal">
            <div class="insights-card">
                <div class="insights-card-bg"></div>
                <div class="insights-card-grid"></div>
                <div class="insights-card-content">
                    <div class="metric">
                        <span class="metric-label">Konversioputki</span>
                        <div class="metric-bar"><span style="width: 82%"></span></div>
                        <span class="metric-value">82%</span>
                    </div>
                    <div class="metric">
                        <span class="metric-label">Churn</span>
                        <div class="metric-bar"><span style="width: 7%"></span></div>
                        <span class="metric-value">7%</span>
                    </div>
                    <div class="metric">
                        <span class="metric-label">CLTV kasvu</span>
                        <div class="metric-bar"><span style="width: 34%"></span></div>
                        <span class="metric-value">+34%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="insights-decoration insights-decoration-1"></div>
    <div class="insights-decoration insights-decoration-2"></div>
    <div class="insights-decoration insights-decoration-3"></div>
</section>

<!-- Statistics Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <div class="reveal">
                    <h2 class="mb-3">Tuloksia, joihin voit luottaa</h2>
                    <p class="lead text-muted">
                        Yli kymmenen vuoden kokemus data-analytiikasta ja 
                        satoja onnistuneita projekteja
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="text-center">
                        <div class="stat-number" data-target="150" data-suffix="+">0+</div>
                        <h5 class="text-primary mb-2">Asiakasprojektia</h5>
                        <p class="text-muted">Onnistuneesti toteutettua data-analytiikkaprojektia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="text-center">
                        <div class="stat-number" data-target="95" data-suffix="%">0%</div>
                        <h5 class="text-primary mb-2">Asiakastyytyväisyys</h5>
                        <p class="text-muted">Asiakkaistamme suosittelee palveluitamme</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="text-center">
                        <div class="stat-number" data-target="25" data-suffix="%">0%</div>
                        <h5 class="text-primary mb-2">Keskimääräinen ROI</h5>
                        <p class="text-muted">Parannus asiakkaiden tuottavuudessa ensimmäisenä vuonna</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="text-center">
                        <div class="stat-number" data-target="24" data-suffix="/7">0/7</div>
                        <h5 class="text-primary mb-2">Tuki</h5>
                        <p class="text-muted">Ympärivuorokautinen tekninen tuki kriittisissä projekteissa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <div class="reveal">
                    <h2 class="mb-3">Palvelumme</h2>
                    <p class="lead text-muted">
                        Kattava valikoima data-analytiikka- ja liiketoimintatiedon palveluita
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="reveal">
                    <div class="service-card h-100">
                        <img src="images/business-intelligence.webp" alt="Liiketoimintatiedon hallinta" class="img-fluid mb-4">
                        <div class="service-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h5 class="text-primary mb-3">Liiketoimintatiedon hallinta</h5>
                        <p class="text-muted mb-3">
                            Muutamme raakadatan ymmärrettäviksi ja toimiviksi 
                            liiketoimintatiedoiksi, jotka tukevat päätöksentekoa.
                        </p>
                        <a href="services.php#business-intelligence" class="text-primary text-decoration-none">
                            Lue lisää <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reveal">
                    <div class="service-card h-100">
                        <img src="images/data-visualization.webp" alt="Datan visualisointi" class="img-fluid mb-4">
                        <div class="service-icon">
                            <i class="bi bi-pie-chart-fill"></i>
                        </div>
                        <h5 class="text-primary mb-3">Datan visualisointi</h5>
                        <p class="text-muted mb-3">
                            Luomme selkeitä ja vaikuttavia visualisointeja, 
                            jotka tekevät monimutkaisesta datasta helposti ymmärrettävää.
                        </p>
                        <a href="services.php#visualization" class="text-primary text-decoration-none">
                            Lue lisää <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reveal">
                    <div class="service-card h-100">
                        <img src="images/predictive-analytics.webp" alt="Ennustava analytiikka" class="img-fluid mb-4">
                        <div class="service-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h5 class="text-primary mb-3">Ennustava analytiikka</h5>
                        <p class="text-muted mb-3">
                            Hyödynnämme koneoppimista ja tilastollisia malleja 
                            ennustamaan tulevia trendejä ja liiketoiminnan kehitystä.
                        </p>
                        <a href="services.php#predictive" class="text-primary text-decoration-none">
                            Lue lisää <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="reveal">
                    <a href="services.php" class="btn btn-outline-primary">
                        <i class="bi bi-grid-3x3-gap me-2"></i>
                        Katso kaikki palvelut
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <img 
                        src="images/team-collaboration.webp" 
                        alt="Tiimi työskentelee data-analytiikan parissa" 
                        class="img-fluid rounded"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <h2 class="mb-4">Miksi valita Clearnexa?</h2>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="bi bi-award text-bg fs-5"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-primary">Asiantuntemus</h5>
                                    <p class="text-muted mb-0">
                                        Yli 10 vuoden kokemus data-analytiikasta ja 
                                        syvä ymmärrys suomalaisesta liiketoimintaympäristöstä.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="bi bi-gear text-bg fs-5"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-primary">Räätälöidyt ratkaisut</h5>
                                    <p class="text-muted mb-0">
                                        Jokaiselle asiakkaalle suunnitellut yksilölliset 
                                        ratkaisut, jotka vastaavat tarkalleen liiketoiminnan tarpeisiin.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="bi bi-shield-check text-bg fs-5"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-primary">Tietoturva</h5>
                                    <p class="text-muted mb-0">
                                        Korkean tason tietoturvastandardit ja 
                                        GDPR-yhteensopivuus kaikissa ratkaisuissamme.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <div class="reveal">
                    <h2 class="mb-3">Prosessimme</h2>
                    <p class="lead text-muted">
                        Tehokas ja läpinäkyvä lähestymistapa jokaiseen projektiin
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="process-card h-100">
                        <div class="process-icon">
                            <div class="bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <span class="text-bg fw-bold fs-4">1</span>
                            </div>
                        </div>
                        <h5 class="text-primary mb-3">Analyysi</h5>
                        <p class="text-muted">
                            Kartoitamme nykyisen datatilanne ja 
                            tunnistamme kehittämiskohteet yhdessä kanssanne.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="process-card h-100">
                        <div class="process-icon">
                            <div class="bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <span class="text-bg fw-bold fs-4">2</span>
                            </div>
                        </div>
                        <h5 class="text-primary mb-3">Suunnittelu</h5>
                        <p class="text-muted">
                            Luomme yksityiskohtaisen suunnitelman ja 
                            roadmapin tavoitteidenne saavuttamiseksi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="process-card h-100">
                        <div class="process-icon">
                            <div class="bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <span class="text-bg fw-bold fs-4">3</span>
                            </div>
                        </div>
                        <h5 class="text-primary mb-3">Toteutus</h5>
                        <p class="text-muted">
                            Implementoimme ratkaisut vaiheittain, 
                            varmistaen saumattoman integraation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="reveal">
                    <div class="process-card h-100">
                        <div class="process-icon">
                            <div class="bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                <span class="text-bg fw-bold fs-4">4</span>
                            </div>
                        </div>
                        <h5 class="text-primary mb-3">Tuki</h5>
                        <p class="text-muted">
                            Tarjoamme jatkuvaa tukea ja optimointia 
                            varmistaaksemme pitkäaikaisen menestyksen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="reveal">
                    <h2 class="mb-4">Valmis aloittamaan data-analytiikkamatkasi?</h2>
                    <p class="lead text-muted mb-4">
                        Ota yhteyttä jo tänään ja selvitetään yhdessä, 
                        miten voimme auttaa yritystäsi menestymään.
                    </p>
                    <p class="lead text-muted mb-4">
                        Clearnexa Analytics Co. tarjoaa räätälöityjä data-analytiikkaratkaisuja, 
                        jotka auttavat sinua ymmärtämään liiketoimintaasi paremmin ja 
                        tekemään tietoon perustuvia päätöksiä. Asiantuntijamme ovat 
                        valmiina tukemaan sinua jokaisessa vaiheessa.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>
                            Ota yhteyttä
                        </a>
                        <a href="testimonials.php" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-star me-2"></i>
                            Lue asiakaskokemuksia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/cookie-banner.php'; ?>
<?php include 'partials/footer.php'; ?>