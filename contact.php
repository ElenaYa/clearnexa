
<?php include 'partials/header.php'; ?>

<!-- Hero Section -->
<section class="section hero">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center">
                <div class="reveal">
                    <h1 class="mb-4">
                        <span class="text-gradient">Ota yhteyttä</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Olemme valmiita auttamaan yritystäsi data-analytiikan 
                        haasteissa. Kerro meille tarpeistasi, niin palaamme 
                        asiaan nopeasti.
                    </p>
                    <div class="d-flex justify-content-center gap-4 mb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope text-primary me-2 fs-5"></i>
                            <a href="mailto:admin@clearnexa.com" class="text-primary text-decoration-none">
                                admin@clearnexa.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="reveal">
                    <div class="card-diagonal p-5">
                        <h3 class="text-primary mb-4 text-center">Lähetä meille viesti</h3>
                        <form id="contactForm">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="company" class="form-label text-primary">
                                        <i class="bi bi-building me-1"></i>
                                        Yritys *
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="company" 
                                        name="company" 
                                        placeholder="Yrityksesi nimi"
                                        required
                                        aria-describedby="companyHelp"
                                    >
                                    <div id="companyHelp" class="form-text text-muted">
                                        Kerro meille, missä yrityksessä työskentelet
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label text-primary">
                                        <i class="bi bi-person me-1"></i>
                                        Nimi *
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="name" 
                                        name="name" 
                                        placeholder="Etunimesi ja sukunimesi"
                                        required
                                        aria-describedby="nameHelp"
                                    >
                                    <div id="nameHelp" class="form-text text-muted">
                                        Koko nimesi, jotta tiedämme keneen olla yhteydessä
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label text-primary">
                                        <i class="bi bi-envelope me-1"></i>
                                        Sähköpostiosoite *
                                    </label>
                                    <input 
                                        type="email" 
                                        class="form-control" 
                                        id="email" 
                                        name="email" 
                                        placeholder="sinun@yritys.fi"
                                        required
                                        aria-describedby="emailHelp"
                                    >
                                    <div id="emailHelp" class="form-text text-muted">
                                        Vastaamme tähän sähköpostiosoitteeseen
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label text-primary">
                                        <i class="bi bi-chat-dots me-1"></i>
                                        Viesti *
                                    </label>
                                    <textarea 
                                        class="form-control" 
                                        id="message" 
                                        name="message" 
                                        rows="6"
                                        placeholder="Kerro meille data-analytiikan haasteistasi ja siitä, miten voimme auttaa..."
                                        required
                                        aria-describedby="messageHelp"
                                    ></textarea>
                                    <div id="messageHelp" class="form-text text-muted">
                                        Mitä yksityiskohtaisempi kuvaus, sitä paremmin voimme auttaa
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            id="privacy" 
                                            name="privacy"
                                            required
                                        >
                                        <label class="form-check-label text-muted" for="privacy">
                                            Olen lukenut ja hyväksyn 
                                            <a href="privacy-policy.php" class="text-primary text-decoration-none">
                                                tietosuojaselosteen
                                            </a> 
                                            ja suostun yhteydenottoon. *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="bi bi-send me-2"></i>
                                            Lähetä viesti
                                        </button>
                                        <button type="reset" class="btn btn-outline-primary">
                                            <i class="bi bi-arrow-clockwise me-2"></i>
                                            Tyhjennä lomake
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <div class="reveal">
                    <h2 class="mb-3">Muut tavat olla yhteydessä</h2>
                    <p class="lead text-muted">
                        Valitse sinulle sopiva tapa ottaa meihin yhteyttä
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="reveal">
                    <div class="card-diagonal p-4 text-center h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-envelope-open"></i>
                        </div>
                        <h5 class="text-primary mb-3">Sähköposti</h5>
                        <p class="text-muted mb-3">
                            Lähetä meille sähköpostia ja vastaamme 
                            virka-aikana 24 tunnin sisään.
                        </p>
                        <a href="mailto:admin@clearnexa.com" class="btn btn-outline-primary">
                            <i class="bi bi-envelope me-2"></i>
                            admin@clearnexa.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="reveal">
                    <div class="card-diagonal p-4 text-center h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h5 class="text-primary mb-3">Vastausaika</h5>
                        <p class="text-muted mb-3">
                            Pyrimme vastaamaan kaikkiin yhteydenottoihin 
                            mahdollisimman nopeasti.
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="text-center">
                                <div class="stat-number text-primary">< 24h</div>
                                <small class="text-muted">Keskimääräinen vastausaika</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="reveal">
                    <div class="card-diagonal p-4 text-center h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h5 class="text-primary mb-3">Sijainti</h5>
                        <p class="text-muted mb-3">
                            Toimistomme sijaitsee Suomessa ja 
                            palvelemme asiakkaita kaikkialla maassa.
                        </p>
                        <div class="d-flex justify-content-center">
                            <span class="badge bg-primary">
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                Suomi 🇫🇮
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Preview Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <div class="reveal">
                    <h2 class="mb-3">Usein kysyttyjä kysymyksiä</h2>
                    <p class="lead text-muted">
                        Vastauksia yleisimpiin kysymyksiin ennen yhteydenottoa
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="card-diagonal p-4 h-100">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-question-circle me-2"></i>
                            Kuinka nopeasti projekti voidaan aloittaa?
                        </h5>
                        <p class="text-muted mb-0">
                            Riippuen projektin laajuudesta, voimme yleensä aloittaa 
                            1-2 viikon sisällä ensimmäisestä tapaamisesta. 
                            Kiireellisissä tapauksissa pystymme reagoimaan nopeamminkin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="card-diagonal p-4 h-100">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-question-circle me-2"></i>
                            Millaisia projekteja voitte toteuttaa?
                        </h5>
                        <p class="text-muted mb-0">
                            Toteutamme kaiken kokoisia projekteja pienistä 
                            dashboardeista suuriin big data -ratkaisuihin. 
                            Katso lisää palvelusivultamme tai ota yhteyttä.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="card-diagonal p-4 h-100">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-question-circle me-2"></i>
                            Tarjoatteko myös koulutusta?
                        </h5>
                        <p class="text-muted mb-0">
                            Kyllä! Tarjoamme kattavaa koulutusta tiimeillesi, 
                            jotta he voivat hyödyntää uusia työkaluja ja 
                            prosesseja tehokkaasti.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="card-diagonal p-4 h-100">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-question-circle me-2"></i>
                            Miten hinnoittelu toimii?
                        </h5>
                        <p class="text-muted mb-0">
                            Hinnoittelu perustuu projektin laajuuteen ja 
                            vaativuuteen. Tarjoamme aina läpinäkyvän ja 
                            kilpailukykyisen hinnoittelun.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="reveal">
                    <a href="faq.php" class="btn btn-outline-primary">
                        <i class="bi bi-question-square me-2"></i>
                        Katso kaikki FAQ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="reveal">
                    <h2 class="mb-4">Valmis aloittamaan?</h2>
                    <p class="lead text-muted mb-4">
                        Ensimmäinen konsultaatio on aina ilmainen. 
                        Kerromme, miten voimme auttaa yritystäsi.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="#contactForm" class="btn btn-primary btn-lg">
                            <i class="bi bi-arrow-up me-2"></i>
                            Täytä lomake
                        </a>
                        <a href="mailto:admin@clearnexa.com" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>
                            Lähetä sähköpostia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/cookie-banner.php'; ?>
<?php include 'partials/footer.php'; ?>