
<?php 
$page_class = 'page-services';
include 'partials/header.php'; 
?>

<section class="section hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="reveal">
                    <h1 class="mb-4">
                        <span class="text-gradient">Palvelumme</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Kattava valikoima data-analytiikka- ja liiketoimintatiedon palveluita, 
                        jotka muuttavat datasi kilpailueduksi ja kasvattavat liiketoimintaasi.
                    </p>
                    <a href="#services-list" class="btn btn-primary">
                        <i class="bi bi-arrow-down me-2"></i>
                        Tutustu palveluihin
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="reveal">
                    <h3 class="text-center mb-4">Valitse palvelu</h3>
                    <div class="services-nav">
                        <div class="row g-3 justify-content-center">
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#bi" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <span>BI</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#visualization" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-pie-chart-fill"></i>
                                    </div>
                                    <span>Visualisointi</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#predictive" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-lightning-charge-fill"></i>
                                    </div>
                                    <span>Ennustava</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#bigdata" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-hdd-stack-fill"></i>
                                    </div>
                                    <span>Big Data</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#etl" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-gear-fill"></i>
                                    </div>
                                    <span>ETL</span>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="#governance" class="service-nav-item">
                                    <div class="service-nav-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <span>Governance</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="services-list">

<section id="bi" class="section section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h2 class="text-primary mb-4">Liiketoimintatiedon hallinta (BI)</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>Data on hajallaan eri järjestelmissä</li>
                        <li>Raportit ovat manuaalisia ja hitaita</li>
                        <li>Ei reaaliaikaista näkyvyyttä liiketoimintaan</li>
                        <li>Päätöksenteko perustuu arvauksiin</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Luomme keskitetyn BI-alustan, joka yhdistää kaikki tietolähteet 
                        ja tarjoaa reaaliaikaisia dashboardeja sekä automatisoituja 
                        raportteja. Muutamme raakadatan ymmärrettäviksi 
                        liiketoimintatiedoiksi.
                    </p>

                    <p class="text-muted mb-4">
                        Asiantuntijamme auttavat sinua hyödyntämään dataa tehokkaasti 
                        ja tekemään tietoon perustuvia päätöksiä. Tarjoamme kattavan 
                        tuen BI-ratkaisun käyttöönotosta jatkuvaan kehittämiseen.
                    </p>

                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>Interaktiiviset dashboardit</li>
                        <li>Automaattiset raportit</li>
                        <li>KPI-seurantajärjestelmä</li>
                        <li>Käyttäjäkoulutus</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">
                        <i class="bi bi-envelope me-2"></i>
                        Ota yhteyttä
                    </a>

                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <img 
                        src="images/business-intelligence.webp" 
                        alt="Liiketoimintatiedon hallinta dashboard esimerkki" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">25%</div>
                                    <small class="text-muted">Myynnin kasvu</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">60%</div>
                                    <small class="text-muted">Raportointi-ajan säästö</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">90%</div>
                                    <small class="text-muted">Tiedon tarkkuus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">40%</div>
                                    <small class="text-muted">Nopeammat päätökset</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-microsoft me-1"></i>Power BI</span>
                            <span class="badge bg-primary"><i class="bi bi-bar-chart me-1"></i>Tableau</span>
                            <span class="badge bg-primary"><i class="bi bi-server me-1"></i>SQL Server</span>
                            <span class="badge bg-primary"><i class="bi bi-database me-1"></i>PostgreSQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-surface">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="reveal">
                    <h3 class="text-primary mb-4">Miksi valita BI-ratkaisumme?</h3>
                    <p class="lead text-muted mb-5">
                        Modernit BI-työkalumme ja asiantuntijatiimimme varmistavat, että saat 
                        kaiken hyödyn irti datastasi
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h5 class="text-primary mb-3">Nopea käyttöönotto</h5>
                    <p class="text-muted mb-0">
                        Kokenut tiimimme varmistaa nopean ja tehokkaan implementoinnin, 
                        jotta pääset hyödyntämään dataa mahdollisimman pian
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="text-primary mb-3">Luotettava kumppani</h5>
                    <p class="text-muted mb-0">
                        Tarjoamme jatkuvan tuen ja kehityksen varmistaaksemme 
                        BI-ratkaisusi pitkäaikaisen menestyksen
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h5 class="text-primary mb-3">Mitattavat tulokset</h5>
                    <p class="text-muted mb-0">
                        Seuraamme ja raportoimme säännöllisesti BI-ratkaisun 
                        tuottamista hyödyistä liiketoiminnallesi
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="visualization" class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-pie-chart-fill"></i>
                    </div>
                    <h2 class="text-primary mb-4">Datan visualisointi</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>Monimutkaiset datasetit ovat vaikeita ymmärtää</li>
                        <li>Esitykset eivät vakuuta sidosryhmiä</li>
                        <li>Trendit ja kuviot jäävät huomaamatta</li>
                        <li>Tiedon välittäminen on tehottonta</li>
                        <li>Datan analysointi vie liikaa aikaa</li>
                        <li>Päätöksenteko perustuu vajavaiseen tietoon</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Luomme visuaalisesti vaikuttavia ja helposti ymmärrettäviä 
                        kaavioita, graafeja ja dashboardeja. Muutamme kompleksiset 
                        numerot selkeiksi tarinoiksi, jotka inspiroivat toimintaan.
                    </p>
                    
                    <p class="text-muted mb-4">
                        Hyödynnämme uusimpia visualisointiteknologioita ja parhaita käytäntöjä
                        luodaksemme intuitiivisia ja informatiivisia näkymiä. Räätälöimme ratkaisut
                        vastaamaan juuri teidän tarpeitanne.
                    </p>
                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>Interaktiiviset visualisoinnit</li>
                        <li>Räätälöidyt raporttimallit</li>
                        <li>Reaaliaikaiset näkymät</li>
                        <li>Mobiiliystävälliset dashboardit</li>
                        <li>Automatisoitu raportointi</li>
                        <li>Tiedon jakamisen työkalut</li>
                    </ul>

                    <a href="contact" class="btn btn-primary">
                        <i class="bi bi-envelope me-2"></i>Ota yhteyttä
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="reveal">
                    <img 
                        src="images/data-visualization.webp" 
                        alt="Datan visualisointi esimerkkejä ja kaavioita" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">75%</div>
                                    <small class="text-muted">Parempi ymmärrys</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">50%</div>
                                    <small class="text-muted">Nopeampi analyysi</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">85%</div>
                                    <small class="text-muted">Käyttäjätyytyväisyys</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">65%</div>
                                    <small class="text-muted">Paremmat päätökset</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-palette me-1"></i>D3.js</span>
                            <span class="badge bg-primary"><i class="bi bi-graph-up me-1"></i>Plotly</span>
                            <span class="badge bg-primary"><i class="bi bi-bar-chart-line me-1"></i>Chart.js</span>
                            <span class="badge bg-primary"><i class="bi bi-diagram-3 me-1"></i>Grafana</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="reveal">
                    <h3 class="text-primary mb-4">Visualisoinnin hyödyt</h3>
                    <p class="lead text-muted mb-5">
                        Tehokas datan visualisointi auttaa tekemään parempia päätöksiä ja 
                        löytämään uusia mahdollisuuksia liiketoiminnassasi
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h5 class="text-primary mb-3">Oivallukset</h5>
                    <p class="text-muted mb-0">
                        Löydä uusia näkökulmia ja trendejä datasta visuaalisten työkalujen avulla
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h5 class="text-primary mb-3">Säästä aikaa</h5>
                    <p class="text-muted mb-0">
                        Automatisoidut visualisoinnit vapauttavat aikaa tärkeämpiin tehtäviin
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5 class="text-primary mb-3">Parempi viestintä</h5>
                    <p class="text-muted mb-0">
                        Selkeät visualisoinnit tekevät viestinnästä tehokkaampaa kaikille sidosryhmille
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="predictive" class="section section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h2 class="text-primary mb-4">Ennustava analytiikka</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>Vaikea ennustaa kysyntää ja trendejä</li>
                        <li>Asiakkaiden käyttäytyminen on arvaamatonta</li>
                        <li>Riskinhallinta perustuu tunteeseen</li>
                        <li>Markkinamuutokset tulevat yllätyksenä</li>
                        <li>Kilpailuedun menettäminen puutteellisen ennakoinnin vuoksi</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Käytämme edistyneitä koneoppimisalgoritmeja ja tilastollisia 
                        malleja ennustamaan tulevia trendejä, asiakkaiden käyttäytymistä 
                        ja liiketoiminnan kehitystä. Annamme teille työkalut 
                        proaktiiviseen päätöksentekoon.
                    </p>

                    <p class="text-muted mb-4">
                        Ratkaisumme hyödyntävät uusimpia tekoälyteknologioita ja 
                        koneoppimismalleja, jotka oppivat jatkuvasti datasta ja 
                        parantavat ennusteiden tarkkuutta ajan myötä.
                    </p>
                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>Ennustemallit ja algoritmit</li>
                        <li>Riskinarviointijärjestelmät</li>
                        <li>Asiakassegmentointimallit</li>
                        <li>Automaattiset hälytykset</li>
                        <li>Reaaliaikaiset analyysityökalut</li>
                        <li>Räätälöidyt raportointiratkaisut</li>
                    </ul>

                    <div class="text-center mt-5">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>Ota yhteyttä
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <img 
                        src="images/predictive-analytics.webp" 
                        alt="Ennustava analytiikka ja koneoppimismallit" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">30%</div>
                                    <small class="text-muted">Kysynnän ennusteiden tarkkuus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">20%</div>
                                    <small class="text-muted">Varastonhallinnan parannus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">45%</div>
                                    <small class="text-muted">Asiakaspysyvyyden kasvu</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">15%</div>
                                    <small class="text-muted">Kustannussäästöt</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-robot me-1"></i>Python</span>
                            <span class="badge bg-primary"><i class="bi bi-cpu me-1"></i>TensorFlow</span>
                            <span class="badge bg-primary"><i class="bi bi-speedometer2 me-1"></i>R</span>
                            <span class="badge bg-primary"><i class="bi bi-cloud me-1"></i>Azure ML</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="reveal">
                    <h3 class="text-primary mb-4">Ennustavan analytiikan edut</h3>
                    <p class="lead text-muted mb-5">
                        Modernit ennustavat analytiikkaratkaisut tuovat merkittäviä 
                        kilpailuetuja ja tehostavat liiketoimintaasi
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h5 class="text-primary mb-3">Kasvu</h5>
                    <p class="text-muted mb-0">
                        Tunnista kasvumahdollisuudet ja optimoi liiketoimintasi kehitys
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="text-primary mb-3">Riskinhallinta</h5>
                    <p class="text-muted mb-0">
                        Ennakoi ja minimoi liiketoiminnan riskit tehokkaasti
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="text-primary mb-3">Asiakasymmärrys</h5>
                    <p class="text-muted mb-0">
                        Syvennä asiakasymmärrystä ja paranna asiakaskokemusta
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-diagonal p-4 h-100 reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <h5 class="text-primary mb-3">Automaatio</h5>
                    <p class="text-muted mb-0">
                        Automatisoi prosesseja ja tehosta toimintaa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bigdata" class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-hdd-stack-fill"></i>
                    </div>
                    <h2 class="text-primary mb-4">Big Data -ratkaisut</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>Massiiviset datamäärät ovat hallitsemattomia</li>
                        <li>Perinteiset järjestelmät eivät pysty käsittelemään dataa</li>
                        <li>Datan laatu ja yhtenäisyys on heikkoa</li>
                        <li>Reaaliaikainen prosessointi on mahdotonta</li>
                        <li>Tietoturva ja yksityisyys ovat vaarassa</li>
                        <li>Datan säilytys ja arkistointi on haastavaa</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Rakennamme skaalautuvia big data -arkkitehtuureja, jotka 
                        käsittelevät tehokkaasti massiivisia datamääriä. Käytämme 
                        moderneja teknologioita, kuten Hadoop, Spark ja pilvipalveluita.
                        Tarjoamme kokonaisvaltaisia ratkaisuja datan keräämisestä 
                        analysointiin ja visualisointiin.
                    </p>
                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>Skaalautuva data-arkkitehtuuri</li>
                        <li>Reaaliaikainen datavirtojen käsittely</li>
                        <li>Data lake -ratkaisut</li>
                        <li>Suorituskyvyn optimointi</li>
                        <li>Tietoturvalliset tallennusratkaisut</li>
                        <li>Automatisoitu datan elinkaarenhallinta</li>
                    </ul>

                    <div class="mt-4">
                        <a href="contact.php" class="btn btn-primary">
                            <i class="bi bi-envelope me-2"></i>Ota yhteyttä
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="reveal">
                    <img 
                        src="images/big-data-architecture.webp" 
                        alt="Big Data arkkitehtuuri ja skaalautuvat järjestelmät" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">80%</div>
                                    <small class="text-muted">Käsittelynopeuden parannus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">100x</div>
                                    <small class="text-muted">Datamäärän käsittelykyky</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">50%</div>
                                    <small class="text-muted">Infrastruktuurikustannusten säästö</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">99%</div>
                                    <small class="text-muted">Järjestelmän käytettävyys</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-hdd-rack me-1"></i>Hadoop</span>
                            <span class="badge bg-primary"><i class="bi bi-lightning me-1"></i>Apache Spark</span>
                            <span class="badge bg-primary"><i class="bi bi-cloud me-1"></i>AWS/Azure</span>
                            <span class="badge bg-primary"><i class="bi bi-server me-1"></i>Kafka</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card-diagonal p-4 reveal">
                    <h4 class="text-primary mb-4">Miksi valita meidän Big Data -ratkaisumme?</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-shield-check text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Luotettavuus</h6>
                                    <p class="text-muted mb-0">Varmat ja testatut ratkaisut, jotka takaavat datan eheyden</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-graph-up text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Skaalautuvuus</h6>
                                    <p class="text-muted mb-0">Järjestelmät kasvavat liiketoimintasi mukana</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-gear-wide-connected text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Integroitavuus</h6>
                                    <p class="text-muted mb-0">Saumaton yhteensopivuus olemassa olevien järjestelmien kanssa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="etl" class="section section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <h2 class="text-primary mb-4">Data Engineering & ETL</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>Data on hajallaan eri järjestelmissä</li>
                        <li>Tiedonsiirrot ovat manuaalisia ja virhealttiita</li>
                        <li>Datan laatu vaihtelee lähteiden välillä</li>
                        <li>Integraatiot ovat monimutkaisia ja hitaita</li>
                        <li>Datan analysointi vie liikaa aikaa</li>
                        <li>Reaaliaikaisen datan hyödyntäminen on haastavaa</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Rakennamme tehokkaita ETL-prosesseja, jotka siirtävät, 
                        puhdistävat ja yhdistävät dataa eri lähteistä. Luomme 
                        automaattisia tiedonsiirtoproduktioita, jotka varmistavat 
                        datan laadun ja yhtenäisyyden.
                    </p>

                    <p class="text-muted mb-4">
                        Modernit ETL-ratkaisumme mahdollistavat reaaliaikaisen 
                        datan käsittelyn ja analysoinnin. Hyödynnämme uusimpia 
                        teknologioita varmistaaksemme tehokkaan ja luotettavan 
                        datankäsittelyn.
                    </p>
                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>ETL-putket ja prosessit</li>
                        <li>Datan laatuseurantajärjestelmät</li>
                        <li>Reaaliaikaiset integraatiot</li>
                        <li>Datan versionhallinta</li>
                        <li>Automatisoitu raportointi</li>
                        <li>Datan validointi ja puhdistus</li>
                    </ul>

                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>Pyydä tarjous
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <img 
                        src="images/etl-pipeline.webp" 
                        alt="ETL putket ja datan prosessointi" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">90%</div>
                                    <small class="text-muted">Datan laadun parannus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">70%</div>
                                    <small class="text-muted">Käsittelyn automatisointi</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">60%</div>
                                    <small class="text-muted">Virheiden vähentyminen</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">24/7</div>
                                    <small class="text-muted">Automaattinen toiminta</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-flow me-1"></i>Airflow</span>
                            <span class="badge bg-primary"><i class="bi bi-database me-1"></i>Talend</span>
                            <span class="badge bg-primary"><i class="bi bi-gear me-1"></i>SSIS</span>
                            <span class="badge bg-primary"><i class="bi bi-diagram-3 me-1"></i>Pentaho</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional ETL Benefits -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card-diagonal p-4 reveal">
                    <h4 class="text-primary mb-4">ETL-ratkaisujen hyödyt</h4>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-lightning text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Tehokkuus</h6>
                                    <p class="text-muted mb-0">Nopeat ja automatisoidut dataprosessit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Tarkkuus</h6>
                                    <p class="text-muted mb-0">Virheetön datan käsittely</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-clock-history text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Säästöt</h6>
                                    <p class="text-muted mb-0">Merkittävät aikasäästöt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-graph-up text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Skaalautuvuus</h6>
                                    <p class="text-muted mb-0">Kasvaa tarpeiden mukana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="governance" class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="reveal">
                    <div class="service-icon mb-3">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h2 class="text-primary mb-4">Data Governance & Compliance</h2>
                    <h5 class="text-muted mb-3">Haasteet:</h5>
                    <ul class="text-muted mb-4">
                        <li>GDPR ja muut säädökset aiheuttavat haasteita</li>
                        <li>Datan omistajuus ja vastuut ovat epäselviä</li>
                        <li>Tietoturvariskit kasvavat jatkuvasti</li>
                        <li>Datan laadulle ei ole selkeitä standardeja</li>
                        <li>Tietosuojakäytännöt vaativat jatkuvaa päivittämistä</li>
                        <li>Kansainväliset säädökset tuovat lisähaasteita</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3">Ratkaisumme:</h5>
                    <p class="text-muted mb-4">
                        Luomme kattavan data governance -strategian, joka varmistaa 
                        säädösten noudattamisen, datan turvallisuuden ja laadun. 
                        Määrittelemme selkeät prosessit ja vastuut datan hallinnalle.
                    </p>

                    <p class="text-muted mb-4">
                        Tarjoamme jatkuvaa tukea ja konsultointia tietosuoja-asioissa,
                        sekä autamme organisaatiotasi pysymään ajan tasalla muuttuvien
                        säädösten kanssa. Kehitämme myös automaattisia työkaluja
                        compliance-seurantaan.
                    </p>
                    
                    <h5 class="text-primary mb-3">Toimitukset:</h5>
                    <ul class="text-muted mb-4">
                        <li>Data governance -strategia</li>
                        <li>Compliance-seurantajärjestelmät</li>
                        <li>Tietoturva-auditoinnit</li>
                        <li>Henkilökunnan koulutus</li>
                        <li>Automaattiset compliance-työkalut</li>
                        <li>Säännölliset tietoturvaraportit</li>
                    </ul>

                    <div class="text-center mt-5">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>Ota yhteyttä
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="reveal">
                    <img 
                        src="images/data-governance.webp" 
                        alt="Data governance ja compliance seuranta" 
                        class="img-fluid rounded mb-4"
                        style="border-radius: 24px 8px 24px 8px !important;"
                    >
                    <div class="card-diagonal p-4">
                        <h5 class="text-primary mb-3">Esimerkkejä KPI:stä:</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">100%</div>
                                    <small class="text-muted">GDPR-vaatimustenmukaisuus</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">95%</div>
                                    <small class="text-muted">Tietoturvaindeksi</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">80%</div>
                                    <small class="text-muted">Riskien vähentyminen</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="stat-number text-primary">0</div>
                                    <small class="text-muted">Tietomurtoja</small>
                                </div>
                            </div>
                        </div>
                        
                        <h6 class="text-primary mb-3">Käyttämämme työkalut:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary"><i class="bi bi-shield me-1"></i>Collibra</span>
                            <span class="badge bg-primary"><i class="bi bi-file-lock me-1"></i>Varonis</span>
                            <span class="badge bg-primary"><i class="bi bi-search me-1"></i>Alation</span>
                            <span class="badge bg-primary"><i class="bi bi-graph-up me-1"></i>Informatica</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Governance Benefits -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card-diagonal p-4 reveal">
                    <h4 class="text-primary mb-4">Data Governance -ratkaisujen edut</h4>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-shield-lock text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Tietoturva</h6>
                                    <p class="text-muted mb-0">Vahva suoja tietomurtoja vastaan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check2-circle text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Compliance</h6>
                                    <p class="text-muted mb-0">Säädöstenmukaisuuden varmistaminen</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-graph-up-arrow text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Tehokkuus</h6>
                                    <p class="text-muted mb-0">Optimoidut dataprosessit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-people text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="text-primary">Luottamus</h6>
                                    <p class="text-muted mb-0">Vahvempi asiakasluottamus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="reveal">
                    <h2 class="mb-4">Mikä palvelu kiinnostaa sinua?</h2>
                    <p class="lead text-muted mb-4">
                        Keskustellaan siitä, miten voimme auttaa yritystäsi 
                        hyödyntämään datan täyttä potentiaalia.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>
                            Pyydä tarjous
                        </a>
                        <a href="testimonials.php" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-star me-2"></i>
                            Asiakastarinoita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/cookie-banner.php'; ?>
<?php include 'partials/footer.php'; ?>