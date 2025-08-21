
<?php 
$page_class = 'page-legal page-cookies';
include 'partials/header.php'; 
?>

<!-- Cookie Policy Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="reveal">
                    <h1 class="mb-4">Evästekäytäntö</h1>
                    <p class="text-muted mb-4">
                        <i class="bi bi-calendar me-2"></i>
                        <strong>Päivitetty: 20.08.2025</strong>
                    </p>
                    
                    <div class="card-diagonal p-5">
                        <h2 class="text-primary mb-4">1. Mikä on eväste?</h2>
                        <p class="mb-4">
                            Evästeet (cookies) ovat pieniä tekstitiedostoja, jotka 
                            verkkosivustot tallentavat käyttäjän laitteelle (tietokone, 
                            tabletti, matkapuhelin) vierailun aikana. Evästeet mahdollistavat 
                            verkkosivuston muistamaan käyttäjän tekemiä valintoja ja 
                            parantamaan käyttökokemusta.
                        </p>
                        
                        <h2 class="text-primary mb-4">2. Miksi käytämme evästeitä?</h2>
                        <p class="mb-4">
                            Clearnexa Analytics Co. käyttää evästeitä seuraaviin tarkoituksiin:
                        </p>
                        <ul class="mb-4">
                            <li><strong>Toiminnallisuus:</strong> Varmistamaan sivuston asianmukainen toiminta</li>
                            <li><strong>Käyttökokemus:</strong> Muistamaan käyttäjän asetukset ja mieltymykset</li>
                            <li><strong>Turvallisuus:</strong> Suojaamaan sivustoa ja käyttäjiä haitalliselta toiminnalta</li>
                            <li><strong>Analytiikka:</strong> Ymmärtämään sivuston käyttöä ja parantamaan palvelua</li>
                            <li><strong>Markkinointi:</strong> Näyttämään relevanttia sisältöä käyttäjien kiinnostusten mukaan</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">3. Evästeiden luokittelu</h2>
                        
                        <h3 class="text-primary mb-3">3.1 Välttämättömät evästeet</h3>
                        <div class="bg-primary bg-opacity-10 p-4 rounded mb-4" style="border-radius: 16px 4px 16px 4px !important;">
                            <h5 class="text-primary mb-3">
                                <i class="bi bi-shield-check me-2"></i>
                                Aina käytössä
                            </h5>
                            <p class="mb-3">
                                Nämä evästeet ovat välttämättömiä verkkosivuston 
                                perustoimintojen mahdollistamiseksi. Ilman näitä 
                                evästeitä sivusto ei toimi kunnolla.
                            </p>
                            <strong class="text-primary">Käyttötarkoitukset:</strong>
                            <ul class="mt-2 mb-3">
                                <li>Käyttäjän istunnon ylläpitäminen</li>
                                <li>Turva</li>
                                <li>Lomakkeiden toiminta</li>
                                <li>Evästeasetuksien muistaminen</li>
                                <li>Teknisen toiminnallisuuden varmistaminen</li>
                            </ul>
                            <strong class="text-primary">Säilytysaika:</strong> Istunnon ajan tai 6 kuukautta
                        </div>
                        
                        <h3 class="text-primary mb-3">3.2 Analytiikka evästeet</h3>
                        <div class="bg-secondary bg-opacity-10 p-4 rounded mb-4" style="border-radius: 16px 4px 16px 4px !important;">
                            <h5 class="text-primary mb-3">
                                <i class="bi bi-graph-up me-2"></i>
                                Valinnainen
                            </h5>
                            <p class="mb-3">
                                Nämä evästeet auttavat meitä ymmärtämään, miten 
                                käyttäjät vierailevat sivustollamme. Keräämme 
                                anonyymiä tietoa sivuston käytöstä.
                            </p>
                            <strong class="text-primary">Käyttötarkoitukset:</strong>
                            <ul class="mt-2 mb-3">
                                <li>Sivustoliikenteen mittaaminen</li>
                                <li>Suosituimpien sivujen tunnistaminen</li>
                                <li>Käyttäjäpolkujen analysointi</li>
                                <li>Sivuston suorituskyvyn seuranta</li>
                                <li>Sisällön optimointi</li>
                            </ul>
                            <strong class="text-primary">Säilytysaika:</strong> 26 kuukautta<br>
                            <strong class="text-primary">Kolmannen osapuolen palvelut:</strong> Google Analytics (anonyymisoitu)
                        </div>
                        
                        <h2 class="text-primary mb-4">4. Käyttämämme evästeet</h2>
                        
                        <div class="table-responsive mb-4">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Evästeen nimi</th>
                                        <th>Tyyppi</th>
                                        <th>Tarkoitus</th>
                                        <th>Säilytysaika</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>cnx_cookie_pref</code></td>
                                        <td>Välttämätön</td>
                                        <td>Muistaa käyttäjän evästeasetukset</td>
                                        <td>6 kuukautta</td>
                                    </tr>
                                    <tr>
                                        <td><code>cnx_session</code></td>
                                        <td>Välttämätön</td>
                                        <td>Istunnon ylläpitäminen</td>
                                        <td>Istunnon ajan</td>
                                    </tr>
                                    <tr>
                                        <td><code>cnx_csrf_token</code></td>
                                        <td>Välttämätön</td>
                                        <td>Tietoturvamerkki lomakkeissa</td>
                                        <td>Istunnon ajan</td>
                                    </tr>
                                    <tr>
                                        <td><code>_ga</code></td>
                                        <td>Analytiikka</td>
                                        <td>Google Analytics - käyttäjän tunnistaminen</td>
                                        <td>2 vuotta</td>
                                    </tr>
                                    <tr>
                                        <td><code>_ga_*</code></td>
                                        <td>Analytiikka</td>
                                        <td>Google Analytics 4 - istunnon tiedot</td>
                                        <td>2 vuotta</td>
                                    </tr>
                                    <tr>
                                        <td><code>_gid</code></td>
                                        <td>Analytiikka</td>
                                        <td>Google Analytics - käyttäjän tunnistaminen</td>
                                        <td>24 tuntia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <h2 class="text-primary mb-4">5. Kolmannen osapuolen evästeet</h2>
                        
                        <h3 class="text-primary mb-3">5.1 Google Analytics</h3>
                        <p class="mb-3">
                            Käytämme Google Analytics -palvelua verkkosivustomme 
                            käytön analysoimiseksi. Google Analytics käyttää 
                            evästeitä kerätäkseen anonyymiä tietoa siitä, 
                            miten käyttäjät vierailevat sivustollamme.
                        </p>
                        <ul class="mb-4">
                            <li><strong>Tarkoitus:</strong> Sivustoliikenteen analysointi</li>
                            <li><strong>IP-anonymisointi:</strong> Käytössä</li>
                            <li><strong>Tietojen jakaminen:</strong> Anonyymisoitua dataa</li>
                            <li><strong>Lisätietoja:</strong> 
                                <a href="https://policies.google.com/privacy" 
                                   class="text-primary" 
                                   target="_blank" 
                                   rel="noopener noreferrer">
                                    Google Privacy Policy
                                </a>
                            </li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">6. Evästeiden hallinta</h2>
                        
                        <h3 class="text-primary mb-3">6.1 Evästeasetukset sivustollamme</h3>
                        <p class="mb-3">
                            Voitte hallita evästeasetuksianne sivustomme 
                            evästebannerin kautta tai klikkaamalla alla olevaa painiketta:
                        </p>
                      
                        <h3 class="text-primary mb-3">6.2 Selaimen evästeasetukset</h3>
                        <p class="mb-3">
                            Useimmat selaimet sallivat evästeiden hallinnan asetuksissa. 
                            Voitte:
                        </p>
                        <ul class="mb-4">
                            <li>Estää kaikkien evästeiden tallentamisen</li>
                            <li>Poistaa tallennettuja evästeitä</li>
                            <li>Sallia evästeet vain tietyiltä sivustoilta</li>
                            <li>Saada ilmoituksen ennen evästeen tallentamista</li>
                        </ul>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="card-diagonal p-3">
                                    <h6 class="text-primary mb-2">
                                        <i class="bi bi-browser-chrome me-2"></i>
                                        Google Chrome
                                    </h6>
                                    <p class="small text-muted mb-0">
                                        Asetukset → Yksityisyys ja turvallisuus → Evästeet
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-diagonal p-3">
                                    <h6 class="text-primary mb-2">
                                        <i class="bi bi-browser-firefox me-2"></i>
                                        Mozilla Firefox
                                    </h6>
                                    <p class="small text-muted mb-0">
                                        Asetukset → Yksityisyys ja turvallisuus → Evästeet
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-diagonal p-3">
                                    <h6 class="text-primary mb-2">
                                        <i class="bi bi-browser-safari me-2"></i>
                                        Safari
                                    </h6>
                                    <p class="small text-muted mb-0">
                                        Asetukset → Yksityisyys → Evästeet
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-diagonal p-3">
                                    <h6 class="text-primary mb-2">
                                        <i class="bi bi-microsoft me-2"></i>
                                        Microsoft Edge
                                    </h6>
                                    <p class="small text-muted mb-0">
                                        Asetukset → Yksityisyys → Evästeet
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning" role="alert" style="border-radius: 16px 4px 16px 4px !important;">
                            <h6 class="alert-heading text-warning">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                Huomio
                            </h6>
                            <p class="mb-0">
                                Evästeiden estäminen saattaa vaikuttaa sivuston toimivuuteen. 
                                Jotkin ominaisuudet eivät välttämättä toimi oikein ilman evästeitä.
                            </p>
                        </div>
                        
                        <h2 class="text-primary mb-4">7. Evästeiden vaikutukset</h2>
                        
                        <h3 class="text-primary mb-3">7.1 Jos hyväksytte evästeet</h3>
                        <ul class="mb-4">
                            <li>Sivusto muistaa asetuksenne ja mieltymyksenne</li>
                            <li>Saamme arvokasta tietoa sivuston kehittämiseksi</li>
                            <li>Voitte nauttia paremmasta käyttökokemuksesta</li>
                            <li>Lomakkeet toimivat sujuvammin</li>
                            <li>Näette relevanttia sisältöä</li>
                        </ul>
                        
                        <h3 class="text-primary mb-3">7.2 Jos kieltäydytte evästeistä</h3>
                        <ul class="mb-4">
                            <li>Perustoiminnot toimivat edelleen</li>
                            <li>Asetuksia ei muisteta vierailujen välillä</li>
                            <li>Emme voi analysoida sivuston käyttöä</li>
                            <li>Jotkin ominaisuudet saattavat olla rajoitettuja</li>
                            <li>Käyttökokemus ei ole yhtä henkilökohtainen</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">8. Mobiililaitteet ja sovellukset</h2>
                        <p class="mb-4">
                            Mobiililaitteissa evästeiden sijaan saatetaan käyttää 
                            vastaavia teknologioita, kuten:
                        </p>
                        <ul class="mb-4">
                            <li><strong>Local Storage:</strong> Paikallinen tallennustila</li>
                            <li><strong>Session Storage:</strong> Istuntokohtainen tallennustila</li>
                            <li><strong>Device Fingerprinting:</strong> Laitteen tunnistaminen</li>
                            <li><strong>Mobile Analytics:</strong> Mobiilianalytiikka</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">9. Tietoturva ja yksityisyys</h2>
                        <p class="mb-4">
                            Kaikki evästeiden kautta kerätty tieto käsitellään 
                            <a href="privacy-policy.php" class="text-primary">tietosuojaselosteemme</a> 
                            mukaisesti. Tärkeimmät periaatteet:
                        </p>
                        <ul class="mb-4">
                            <li>Keräämme vain välttämättömän tiedon</li>
                            <li>Henkilötiedot anonymisoidaan mahdollisuuksien mukaan</li>
                            <li>Tietoja ei jaeta ulkopuolisille ilman suostumusta</li>
                            <li>Käytämme turvallisia tiedonsiirtomenetelmiä</li>
                            <li>Noudatamme GDPR:n vaatimuksia</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">10. Lainsäädäntö</h2>
                        <p class="mb-4">
                            Evästeiden käyttö on säänneltyä EU:n lainsäädännössä:
                        </p>
                        <ul class="mb-4">
                            <li><strong>GDPR:</strong> EU:n yleinen tietosuoja-asetus</li>
                            <li><strong>ePrivacy-direktiivi:</strong> Sähköisen viestinnän tietosuoja</li>
                            <li><strong>Suomen tietosuojalaki:</strong> Kansallinen lainsäädäntö</li>
                            <li><strong>Laki sähköisen viestinnän palveluista:</strong> Evästesääntely</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">11. Evästekäytännön päivitykset</h2>
                        <p class="mb-4">
                            Pidätämme oikeuden päivittää tätä evästekäytäntöä 
                            milloin tahansa. Merkittävistä muutoksista ilmoitamme:
                        </p>
                        <ul class="mb-4">
                            <li>Verkkosivustomme ilmoituksella</li>
                            <li>Sähköpostitse rekisteröityneille käyttäjille</li>
                            <li>Päivittämällä "Päivitetty"-merkintää</li>
                            <li>Evästebannerin kautta</li>
                        </ul>
                        
                        <h2 class="text-primary mb-4">12. Yhteystiedot</h2>
                        <p class="mb-0">
                            Jos teillä on kysymyksiä evästeiden käytöstä tai 
                            tästä käytännöstä, voitte ottaa yhteyttä:
                        </p>
                        <div class="bg-primary bg-opacity-10 p-4 rounded mt-3" style="border-radius: 16px 4px 16px 4px !important;">
                            <p class="mb-2">
                                <strong>Clearnexa Analytics Co.</strong><br>
                                <i class="bi bi-envelope me-2"></i>
                                Sähköposti: admin@clearnexa.com<br>
                                <i class="bi bi-tag me-2"></i>
                                Aihe: "Evästekysymys"
                            </p>
                            <p class="mb-0 small text-muted">
                                Vastaamme evästekysymyksiin 5 arkipäivän sisällä.
                            </p>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                           
                            <a href="index.php" class="btn btn-outline-primary">
                                <i class="bi bi-house me-2"></i>
                                Takaisin etusivulle
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