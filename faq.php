
<?php 
$page_class = 'page-faq';
include 'partials/header.php'; 
?>

<section class="section hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="reveal">
                    <h1 class="mb-4">
                        <span class="text-gradient">Usein kysytyt kysymykset</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Löydä vastaukset yleisimpiin kysymyksiin data-analytiikasta, 
                        palveluistamme ja yhteistyöstä. Jos et löydä vastausta 
                        kysymykseesi, ota rohkeasti yhteyttä.
                    </p>
                    <a href="#faq-content" class="btn btn-primary">
                        <i class="bi bi-arrow-down me-2"></i>
                        Selaa kysymyksiä
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq-content" class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                
                <div class="reveal mb-5">
                    <h3 class="text-primary mb-4">
                        <i class="bi bi-gear me-2"></i>
                        Palvelut ja prosessit
                    </h3>
                    <div class="accordion" id="servicesAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#services1" 
                                    aria-expanded="false" 
                                    aria-controls="services1"
                                >
                                    Millaisia data-analytiikkapalveluita tarjoatte?
                                </button>
                            </h4>
                            <div id="services1" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tarjoamme kattavan valikoiman data-analytiikkapalveluita, mukaan lukien:
                                    </p>
                                    <ul>
                                        <li><strong>Liiketoimintatiedon hallinta (BI):</strong> Dashboardit, raportit ja KPI-seurantajärjestelmät</li>
                                        <li><strong>Datan visualisointi:</strong> Interaktiiviset kaaviot ja graafit</li>
                                        <li><strong>Ennustava analytiikka:</strong> Koneoppimismallit ja ennusteet</li>
                                        <li><strong>Big Data -ratkaisut:</strong> Massiivisten datamäärien käsittely</li>
                                        <li><strong>Data Engineering & ETL:</strong> Tiedonsiirtoprosessit ja integraatiot</li>
                                        <li><strong>Data Governance:</strong> Tietoturva ja säädösten noudattaminen</li>
                                    </ul>
                                    <p>
                                        Jokainen projekti räätälöidään asiakkaan erityistarpeisiin.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#services2" 
                                    aria-expanded="false" 
                                    aria-controls="services2"
                                >
                                    Kuinka pitkä on tyypillinen projektin kesto?
                                </button>
                            </h4>
                            <div id="services2" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Projektin kesto riippuu laajuudesta ja monimutkaisuudesta:
                                    </p>
                                    <ul>
                                        <li><strong>Pienet projektit (dashboardit, raportit):</strong> 2-6 viikkoa</li>
                                        <li><strong>Keskisuuret projektit (BI-ratkaisut):</strong> 2-4 kuukautta</li>
                                        <li><strong>Suuret projektit (big data, ML-mallit):</strong> 4-12 kuukautta</li>
                                        <li><strong>Jatkuvat palvelut:</strong> Pitkäaikaiset kumppanuudet</li>
                                    </ul>
                                    <p>
                                        Jaamme isommat projektit pienempiin vaiheisiin, jotta näette tuloksia jo matkan varrella.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#services3" 
                                    aria-expanded="false" 
                                    aria-controls="services3"
                                >
                                    Voitteko auttaa myös pienissä projekteissa?
                                </button>
                            </h4>
                            <div id="services3" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Kyllä, autamme mielellämme myös pienemmissä projekteissa! Ymmärrämme, että jokaisella yrityksellä on omat tarpeensa ja budjettinsa.
                                    </p>
                                    <p>
                                        Pieniä projekteja voivat olla esimerkiksi:
                                    </p>
                                    <ul>
                                        <li>Yksittäisten dashboardien luominen</li>
                                        <li>Olemassa olevan datan analysointi</li>
                                        <li>Raporttien automatisointi</li>
                                        <li>Datan laadun parantaminen</li>
                                        <li>Konsultointi ja strategian suunnittelu</li>
                                    </ul>
                                    <p>
                                        Pienempikin projekti voi tuoda merkittävää lisäarvoa liiketoimintaanne.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#services4" 
                                    aria-expanded="false" 
                                    aria-controls="services4"
                                >
                                    Miten projekti käynnistyy ja mitä ensimmäiseksi tapahtuu?
                                </button>
                            </h4>
                            <div id="services4" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                <div class="accordion-body">
                                    <p>Projektin aloitus etenee selkeissä vaiheissa:</p>
                                    <ul>
                                        <li><strong>Kickoff:</strong> Tavoitteiden, sidosryhmien ja aikataulun läpikäynti</li>
                                        <li><strong>Nykytilan kartoitus:</strong> Datalähteet, integraatiot, käyttöoikeudet</li>
                                        <li><strong>Suunnitelma:</strong> Työvaiheet, prioriteetit ja mittarit (KPI:t)</li>
                                        <li><strong>Nopea edistyminen:</strong> Ensimmäiset näkyvät tulokset 2–4 viikon sisällä</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal mb-5">
                    <h3 class="text-primary mb-4">
                        <i class="bi bi-cpu me-2"></i>
                        Teknologia ja työkalut
                    </h3>
                    <div class="accordion" id="technologyAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#tech1" 
                                    aria-expanded="false" 
                                    aria-controls="tech1"
                                >
                                    Mitä teknologioita ja työkaluja käytätte?
                                </button>
                            </h4>
                            <div id="tech1" class="accordion-collapse collapse" data-bs-parent="#technologyAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Käytämme alan johtavia teknologioita ja työkaluja, mukaan lukien:
                                    </p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <strong>BI ja visualisointi:</strong>
                                            <ul>
                                                <li>Microsoft Power BI</li>
                                                <li>Tableau</li>
                                                <li>QlikSense</li>
                                                <li>D3.js, Chart.js</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Ohjelmointi:</strong>
                                            <ul>
                                                <li>Python (Pandas, NumPy, Scikit-learn)</li>
                                                <li>R</li>
                                                <li>SQL (PostgreSQL, SQL Server)</li>
                                                <li>JavaScript</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Big Data ja pilvipalvelut:</strong>
                                            <ul>
                                                <li>Apache Spark, Hadoop</li>
                                                <li>Microsoft Azure</li>
                                                <li>Amazon AWS</li>
                                                <li>Google Cloud Platform</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Koneoppiminen:</strong>
                                            <ul>
                                                <li>TensorFlow, PyTorch</li>
                                                <li>Azure Machine Learning</li>
                                                <li>Scikit-learn</li>
                                                <li>MLflow</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#tech2" 
                                    aria-expanded="false" 
                                    aria-controls="tech2"
                                >
                                    Voitteko työskennellä olemassa olevien järjestelmiemme kanssa?
                                </button>
                            </h4>
                            <div id="tech2" class="accordion-collapse collapse" data-bs-parent="#technologyAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Kyllä, voimme integroitua useimpiin olemassa oleviin järjestelmiin. Meillä on kokemusta seuraavista:
                                    </p>
                                    <ul>
                                        <li><strong>ERP-järjestelmät:</strong> SAP, Microsoft Dynamics, Oracle</li>
                                        <li><strong>CRM-järjestelmät:</strong> Salesforce, HubSpot, Microsoft CRM</li>
                                        <li><strong>Tietokannat:</strong> SQL Server, Oracle, MySQL, PostgreSQL</li>
                                        <li><strong>Pilvipalvelut:</strong> Azure, AWS, Google Cloud</li>
                                        <li><strong>API:t ja web-palvelut:</strong> REST, SOAP, GraphQL</li>
                                        <li><strong>Tiedostot:</strong> Excel, CSV, JSON, XML</li>
                                    </ul>
                                    <p>
                                        Jos käytössänne on jokin muu järjestelmä, selvitämme integraatiomahdollisuudet tapauskohtaisesti.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#tech3" 
                                    aria-expanded="false" 
                                    aria-controls="tech3"
                                >
                                    Miten varmistatte tietoturvan?
                                </button>
                            </h4>
                            <div id="tech3" class="accordion-collapse collapse" data-bs-parent="#technologyAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tietoturva on meille ensiarvoisen tärkeää. Noudatamme korkeitä turvallisuusstandardeja:
                                    </p>
                                    <ul>
                                        <li><strong>Sertifikaatit:</strong> ISO 27001 -tietoturvahallintajärjestelmä</li>
                                        <li><strong>GDPR:</strong> Täysi EU:n tietosuoja-asetuksen mukaisuus</li>
                                        <li><strong>Salaus:</strong> Kaikki data salataan siirroissa ja tallennuksessa</li>
                                        <li><strong>Pääsynhallinta:</strong> Tiukat käyttöoikeudet ja autentikointi</li>
                                        <li><strong>Auditointi:</strong> Säännölliset turvallisuusauditoinnit</li>
                                        <li><strong>Henkilöstö:</strong> Kaikki tiimimme jäsenet on koulutettu tietoturvaan</li>
                                    </ul>
                                    <p>
                                        Asiakkaiden data pysyy aina heidän omistuksessaan ja hallinnassaan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#tech4" 
                                    aria-expanded="false" 
                                    aria-controls="tech4"
                                >
                                    Tarjoatteko Proof of Concept (POC) -vaiheen?
                                </button>
                            </h4>
                            <div id="tech4" class="accordion-collapse collapse" data-bs-parent="#technologyAccordion">
                                <div class="accordion-body">
                                    <p>Kyllä. POC-vaiheella varmistamme ratkaisun toimivuuden pienemmässä laajuudessa ennen täydellistä toteutusta. POC sisältää:</p>
                                    <ul>
                                        <li>Selkeä tavoite ja mittarit onnistumiselle</li>
                                        <li>Rajoitettu datamäärä ja rajattu toiminnallisuus</li>
                                        <li>Nopea toteutus (2–4 viikkoa)</li>
                                        <li>Johtopäätökset ja suositus jatkotoimista</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal mb-5">
                    <h3 class="text-primary mb-4">
                        <i class="bi bi-currency-euro me-2"></i>
                        Hinnoittelu ja sopimukset
                    </h3>
                    <div class="accordion" id="pricingAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#pricing1" 
                                    aria-expanded="false" 
                                    aria-controls="pricing1"
                                >
                                    Miten hinnoittelunne toimii?
                                </button>
                            </h4>
                            <div id="pricing1" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Hinnoittelumme perustuu projektin laajuuteen, monimutkaisuuteen ja aikatauluun. Tarjoamme useita hinnoittelumalleja:
                                    </p>
                                    <ul>
                                        <li><strong>Kiinteähintaiset projektit:</strong> Selkeästi määritellyille projekteille</li>
                                        <li><strong>Tuntiperusteiset projektit:</strong> Joustaville ja kehittyville tarpeille</li>
                                        <li><strong>Kuukausimaksut:</strong> Jatkuville palveluille ja tuelle</li>
                                        <li><strong>Hybridimallit:</strong> Yhdistelmä kiinteää ja tuntiperusteista hinnoittelua</li>
                                    </ul>
                                    <p>
                                        Ensimmäinen konsultaatio on aina ilmainen. Tarjoamme aina läpinäkyvän ja kilpailukykyisen hinnoittelun ilman piilokustannuksia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#pricing2" 
                                    aria-expanded="false" 
                                    aria-controls="pricing2"
                                >
                                    Tarjoatteko maksutonta konsultaatiota?
                                </button>
                            </h4>
                            <div id="pricing2" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Kyllä! Tarjoamme ensimmäisen konsultaation aina veloituksetta. Tämän tapaamisen aikana:
                                    </p>
                                    <ul>
                                        <li>Kartoitamme nykyisen datainfrastruktuurinne</li>
                                        <li>Tunnistamme kehittämiskohteet ja mahdollisuudet</li>
                                        <li>Suunnittelemme ratkaisuvaihtoehtoja</li>
                                        <li>Arvioimme projektin laajuutta ja aikataulua</li>
                                        <li>Keskustelemme hinnoittelusta ja seuraavista askeleista</li>
                                    </ul>
                                    <p>
                                        Tämän tapaamisen jälkeen teillä on selkeä kuva siitä, miten voimme auttaa ja mitä se maksaisi.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#pricing3" 
                                    aria-expanded="false" 
                                    aria-controls="pricing3"
                                >
                                    Onko tarjouksenne sitova? Entä irtisanomisaika?
                                </button>
                            </h4>
                            <div id="pricing3" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                <div class="accordion-body">
                                    <p>Tarjouksemme on sitova sovitun ajan. Joustamme sopimusmalleissa:</p>
                                    <ul>
                                        <li><strong>Kiinteä projekti:</strong> Selkeä hinta ja toimitussisältö</li>
                                        <li><strong>Tuntiperusteinen:</strong> Irtisanominen mahdollinen lyhyellä varoitusajalla</li>
                                        <li><strong>Kuukausimalli:</strong> 1 kuukauden irtisanomisaika ellei toisin sovita</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal mb-5">
                    <h3 class="text-primary mb-4">
                        <i class="bi bi-life-preserver me-2"></i>
                        Tuki ja koulutus
                    </h3>
                    <div class="accordion" id="supportAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#support1" 
                                    aria-expanded="false" 
                                    aria-controls="support1"
                                >
                                    Millaista tukea tarjoatte projektin jälkeen?
                                </button>
                            </h4>
                            <div id="support1" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tarjoamme kattavan tuen myös projektin päättymisen jälkeen:
                                    </p>
                                    <ul>
                                        <li><strong>Tekninen tuki:</strong> Ongelmatilanteissa ja kysymyksissä</li>
                                        <li><strong>Ylläpito:</strong> Järjestelmien päivitykset ja optimointi</li>
                                        <li><strong>Jatkokehitys:</strong> Uudet ominaisuudet ja laajennukset</li>
                                        <li><strong>Seuranta:</strong> Suorituskyvyn ja ROI:n mittaaminen</li>
                                        <li><strong>24/7 tuki:</strong> Kriittisille järjestelmille (erikseen sovittavissa)</li>
                                    </ul>
                                    <p>
                                        Voimme sopia tuen laajuudesta projektikohtaisesti tarpeidenne mukaan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#support2" 
                                    aria-expanded="false" 
                                    aria-controls="support2"
                                >
                                    Koulutatteko tiimimme käyttämään uusia työkaluja?
                                </button>
                            </h4>
                            <div id="support2" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Kyllä, koulutus on tärkeä osa jokaista projektia. Tarjoamme:
                                    </p>
                                    <ul>
                                        <li><strong>Käyttäjäkoulutusta:</strong> Dashboardien ja työkalujen käyttöön</li>
                                        <li><strong>Teknistä koulutusta:</strong> Järjestelmien hallintaan ja ylläpitoon</li>
                                        <li><strong>Best practices -koulutusta:</strong> Data-analytiikan parhaisiin käytäntöihin</li>
                                        <li><strong>Dokumentaatiota:</strong> Yksityiskohtaiset käyttöohjeet</li>
                                        <li><strong>Jatkokoulutusta:</strong> Uusista ominaisuuksista ja päivityksistä</li>
                                    </ul>
                                    <p>
                                        Koulutus räätälöidään tiimienne taustaan ja tarpeisiin. Tavoitteena on, että tiimillänne on kaikki tarvittavat taidot itsenäiseen työhön.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#support3" 
                                    aria-expanded="false" 
                                    aria-controls="support3"
                                >
                                    Tarjoatteko jatkuvaa analytiikkatiimin tukea (Managed Analytics)?
                                </button>
                            </h4>
                            <div id="support3" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    <p>Kyllä. Voimme toimia jatkuvana kumppanina osana tiimiänne:</p>
                                    <ul>
                                        <li>BI-ympäristöjen ylläpito ja kehitys</li>
                                        <li>Raportoinnin ja dataputkien valvonta</li>
                                        <li>Ad hoc -analyysit ja jatkokehityspyynnöt</li>
                                        <li>Säännölliset katselmukset ja roadmap</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal mb-5">
                    <h3 class="text-primary mb-4">
                        <i class="bi bi-people me-2"></i>
                        Yhteistyö ja sarvaus
                    </h3>
                    <div class="accordion" id="collaborationAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#collaboration1" 
                                    aria-expanded="false" 
                                    aria-controls="collaboration1"
                                >
                                    Miten voimme yhteistyötä?
                                </button>
                            </h4>
                            <div id="collaboration1" class="accordion-collapse collapse" data-bs-parent="#collaborationAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Yhteistyö on meidän ensiarvoisen tärkeä asia. Tarjoamme monipuolisia yhteistyövaihtoehtoja:
                                    </p>
                                    <ul>
                                        <li><strong>Kumppanuudet:</strong> Pitkäaikaiset kumppanuudet ja jatkuva yhteistyö</li>
                                        <li><strong>Tukipalvelut:</strong> Täysin hallinnoitu tuki ja ylläpito</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                    </ul>
                                    <p>
                                        Yhteistyö on meidän ensiarvoisen tärkeä asia. Tarjoamme monipuolisia yhteistyövaihtoehtoja:
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header">
                                <button 
                                    class="accordion-button collapsed" 
                                    type="button" 
                                    data-bs-target="#collaboration2" 
                                    aria-expanded="false" 
                                    aria-controls="collaboration2"
                                >
                                    Miten voimme yhteistyötä?
                                </button>
                            </h4>
                            <div id="collaboration2" class="accordion-collapse collapse" data-bs-parent="#collaborationAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Yhteistyö on meidän ensiarvoisen tärkeä asia. Tarjoamme monipuolisia yhteistyövaihtoehtoja:
                                    </p>
                                    <ul>
                                        <li><strong>Kumppanuudet:</strong> Pitkäaikaiset kumppanuudet ja jatkuva yhteistyö</li>
                                        <li><strong>Tukipalvelut:</strong> Täysin hallinnoitu tuki ja ylläpito</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                        <li><strong>Tieto- ja analyytikkojen koulutus:</strong> Jatkuva koulutus ja parhaat käytännöt</li>
                                    </ul>
                                    <p>
                                        Yhteistyö on meidän ensiarvoisen tärkeä asia. Tarjoamme monipuolisia yhteistyövaihtoehtoja:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        <div class="reveal mb-5">
            <h3 class="text-primary mb-4">
                <i class="bi bi-chat-dots me-2"></i>
                Yhteistyö ja projektinhallinta
            </h3>
            <div class="accordion" id="collaborationAccordion">
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button 
                            class="accordion-button collapsed" 
                            type="button" 
                            data-bs-target="#collab1" 
                            aria-expanded="false" 
                            aria-controls="collab1"
                        >
                            Kuinka usein viestimme projektin aikana?
                        </button>
                    </h4>
                    <div id="collab1" class="accordion-collapse collapse" data-bs-parent="#collaborationAccordion">
                        <div class="accordion-body">
                            <p>Viestimme läpinäkyvästi ja säännöllisesti:</p>
                            <ul>
                                <li>Viikoittaiset sprinttikatselmukset ja tilannepäivitykset</li>
                                <li>Kanavat: Teams/Slack ja sähköposti</li>
                                <li>Projektitaulu: Jira/Asana/DevOps sovitusti</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button 
                            class="accordion-button collapsed" 
                            type="button" 
                            data-bs-target="#collab2" 
                            aria-expanded="false" 
                            aria-controls="collab2"
                        >
                            Kuka omistaa datan ja ratkaisut?
                        </button>
                    </h4>
                    <div id="collab2" class="accordion-collapse collapse" data-bs-parent="#collaborationAccordion">
                        <div class="accordion-body">
                            <p>Asiakas omistaa aina oman datansa ja valmiit ratkaisut. Noudatamme sovittuja lisenssi- ja IPR-ehtoja.</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h4 class="accordion-header">
                        <button 
                            class="accordion-button collapsed" 
                            type="button" 
                            data-bs-target="#collab3" 
                            aria-expanded="false" 
                            aria-controls="collab3"
                        >
                            Miten mittaamme onnistumista?
                        </button>
                    </h4>
                    <div id="collab3" class="accordion-collapse collapse" data-bs-parent="#collaborationAccordion">
                        <div class="accordion-body">
                            <p>Määritämme yhdessä KPI:t ja tavoitteet alussa ja seuraamme niitä säännöllisesti (esim. käyttöaste, ROI, läpimenoaika, virhemäärä).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="reveal">
                    <h2 class="mb-4">Eikö vastausta löytynyt?</h2>
                    <p class="lead text-muted mb-4">
                        Otamme mielellämme vastaan kysymyksiä ja kerromme 
                        lisää palveluistamme. Ensimmäinen konsultaatio on ilmainen!
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                            <i class="bi bi-chat-dots me-2"></i>
                            Kysy lisää
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/cookie-banner.php'; ?>
<?php include 'partials/footer.php'; ?>