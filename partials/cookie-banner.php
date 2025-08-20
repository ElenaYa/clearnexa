 
<!-- Cookie Consent Banner -->
<div id="cookieBanner" class="cookie-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-3 mb-lg-0">
                <div class="d-flex align-items-start">
                    <i class="bi bi-cookie text-primary me-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <h6 class="mb-2 text-primary">Evästeiden käyttö</h6>
                        <p class="mb-0 text-muted small">
                            Käytämme evästeitä parantaaksemme käyttökokemustasi ja analysoidaksemme 
                            sivuston käyttöä. Välttämättömät evästeet ovat aina käytössä, 
                            mutta voit valita muut evästeet alla olevista vaihtoehdoista.
                            <a href="cookie-policy.php" class="text-primary text-decoration-none ms-1">
                                Lue lisää evästekäytännöstämme
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                    <button 
                        type="button" 
                        class="btn btn-primary btn-sm" 
                        data-cookie-action="accept-all"
                        aria-label="Hyväksy kaikki evästeet"
                    >
                        <i class="bi bi-check-circle me-1"></i>
                        Hyväksy kaikki
                    </button>
                    <button 
                        type="button" 
                        class="btn btn-outline-primary btn-sm" 
                        data-cookie-action="essential-only"
                        aria-label="Hyväksy vain välttämättömät evästeet"
                    >
                        Vain välttämättömät
                    </button>
                    <button 
                        type="button" 
                        class="btn btn-outline-primary btn-sm" 
                        data-cookie-action="customize"
                        aria-label="Mukauta evästeasetuksia"
                    >
                        <i class="bi bi-gear me-1"></i>
                        Mukauta
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Preferences Modal -->
<div id="cookieModal" class="cookie-modal">
    <div class="cookie-modal-content">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="text-primary mb-0">
                <i class="bi bi-gear me-2"></i>
                Evästeasetukset
            </h5>
            <button 
                type="button" 
                class="btn-close btn-close-white" 
                data-cookie-action="close-modal"
                aria-label="Sulje modal"
            ></button>
        </div>
        
        <p class="text-muted mb-4">
            Valitse, mitä evästeitä haluat sallia. Voit muuttaa asetuksiasi milloin tahansa.
        </p>
        
        <div class="mb-4">
            <div class="card-diagonal p-3 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1 text-primary">
                            <i class="bi bi-shield-check me-2"></i>
                            Välttämättömät evästeet
                        </h6>
                        <p class="mb-0 text-muted small">
                            Nämä evästeet ovat välttämättömiä sivuston toiminnalle ja ne ovat 
                            aina käytössä. Ne mahdollistavat sivustolla navigoinnin ja 
                            turvallisuusominaisuuksien käytön.
                        </p>
                    </div>
                    <div class="form-check form-switch">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="essentialToggle" 
                            checked 
                            disabled
                            aria-label="Välttämättömät evästeet ovat aina käytössä"
                        >
                    </div>
                </div>
            </div>
            
            <div class="card-diagonal p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1 text-primary">
                            <i class="bi bi-graph-up me-2"></i>
                            Analytiikka evästeet
                        </h6>
                        <p class="mb-0 text-muted small">
                            Nämä evästeet auttavat meitä ymmärtämään, miten käytät sivustoamme. 
                            Keräämme anonyymiä tietoa sivuston käytöstä parantaaksemme 
                            palveluitamme.
                        </p>
                    </div>
                    <div class="form-check form-switch">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="analyticsToggle"
                            aria-label="Salli analytiikka evästeet"
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <div class="d-flex gap-2 justify-content-end">
            <button 
                type="button" 
                class="btn btn-outline-primary" 
                data-cookie-action="close-modal"
            >
                Peruuta
            </button>
            <button 
                type="button" 
                class="btn btn-primary" 
                data-cookie-action="save-preferences"
            >
                <i class="bi bi-save me-1"></i>
                Tallenna asetukset
            </button>
        </div>
        
        <hr class="my-3" style="border-color: rgba(255, 194, 71, 0.2);">
        
        <div class="text-center">
            <p class="mb-0 text-muted small">
                Lisätietoja evästeiden käytöstä löydät 
                <a href="cookie-policy.php" class="text-primary text-decoration-none">
                    evästekäytännöstämme
                </a>
            </p>
        </div>
    </div>
</div>