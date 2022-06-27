<?php get_header(); ?>
<div id="advantages" class="border--b-16 border--8-mobile border--white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="h2 h2--bt h2--bt-black">Toote eelised</h2>
                <ul>
                    <li>hooned projekteeritakse ja ehitatakse lähtuvalt kliendi soovidest</li>
                    <li>energiasäästlikud A-energiaklassi hooned</li>
                    <li>madalad püsikulud</li>
                    <li>esinduslik klaasfassaadiga arhitektuur</li>
                    <li>reklaampinnad Tartu mnt ja ringtee suunas</li>
                    <li>võtmed kätte kuni 24 kuuga</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="h2 h2--bt h2--bt-black">Asukoha eelised</h2>
                <ul>
                    <li>A-klassi asukoht ja nähtavus</li>
                    <li>väga hea ligipääsetavus</li>
                    <li>kiire ühendus Eesti põhimaanteede ja Tallinnaga</li>
                    <li>kõrge liiklustihedusega teede sõlmpunkt – ca 40 000 autot päevas</li>
                    <li>kiiresti areneva äriparkide piirkonna keskus</li>
                    <li>koostööpartnerite lähedus</li>
                    <li>paiknemine hästi toimiva infrastruktuuriga Jüri alevikus</li>
                    <li>tuntud ja lihtsalt leitav asukoht</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="position" class="border--b-16 border--8-mobile border--white">
    <div class="background background--gradient-light position-absolute">
    </div>
    <h2 class="h2 h2--bt h2--bt-white">
        Esirea positsioon ja nähtavus Tartu mnt ja Tallinna ringtee serval
    </h2>
</div>
<div id="street-map" class="border--b-16 border--8-mobile border--white">
    <div id="mobile-modal">
        <img src="<?php echo get_theme_file_uri('images/maps/map-est.png') ?>" alt="Ärikeskuse asukoht näidatuna Tallinna ringtee läheduses">
        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#mapModal">
            <span class="icon icon--magnify"></span>
        </button>
        <span class="visually-hidden" id="mapModalLabel">Modal for viewing zoomed image of the map</span>
        <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal" aria-label="Close">
                            <span class="icon icon--close"></span>
                        </button>
                        <div class="modal-image">
                            <img src="images/maps/map-est.png" alt="">
                            <div class="map-pin">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="statistics" class="col-12 col-lg-2 offset-lg-7 order-0 order-lg-0">
                <div class="d-flex flex-column slide slide--bt-p"
                     data-aos="fade-left">
                    <h4 class="h4 h4--bp-black">Ringi tee 11</h4>
                    <p>Hooneid 2</p>
                    <p>Brutopind 14 000 m²</p>
                    <p>Krunt 14 520 m²</p>
                </div>
                <div class="d-flex flex-column slide slide--bt-p" data-aos="fade-left">
                    <h4 class="h4 h4--bp-black">Ringi tee 13</h4>
                    <p>Hooneid 3</p>
                    <p>Brutopind 15 000 m²</p>
                    <p>Krunt 16 238 m²</p>
                </div>
            </div>
            <div id="location-intro" class="col-12 col-lg-3 order-2 order-lg-1" data-aos="fade-left">
                <h2 class="h2 h2--bt h2--bt-black">Lähiümbrus</h2>
                <p>Eesti üks olulisim liiklussõlm ja äripiirkond, mis lähiaastatel üha laieneb.</p>
                <p>
                    Piirkonnas tegutseb üle 2200 ettevõtte, sh Via 3L, DPD, Smarten Logistics, Rimi, Maxima,
                    Bosch, Orkla, Pipelife, Würth, Inchcape Motors, United Motors jpt.</p>
            </div>
            <div id="map-cta" class="col-12 order-1 order-lg-2 d-flex justify-content-center">
                <a href="https://www.google.com/maps/place/Ringi+tee+13,+J%C3%BCri,+75305+Harju+maakond/@59.3520503,24.6077846,10z/data=!4m5!3m4!1s0x4692ea2bfbf39341:0xc72deb154c289834!8m2!3d59.3520476!4d24.8879413"
                   class="cta text--fw-700">Asukoht Google Maps’is</a>
            </div>
        </div>
    </div>
</div>
<div id="street-map-eng" class="border--b-16 border--8-mobile border--white">
    <img src="<?php echo get_theme_file_uri('images/maps/map-large.svg') ?>" alt="Ärikeskuse asukoht näidatuna Tallinna ringtee läheduses">
    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#mapModalEng">
        <span class="icon icon--magnify"></span>
    </button>
    <span class="visually-hidden" id="mapModalEngLabel">Modal for viewing zoomed image of the map</span>
    <div class="modal fade" id="mapModalEng" tabindex="-1" role="dialog" aria-labelledby="mapModalEngLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal" aria-label="Close">
                        <span class="icon icon--close"></span>
                    </button>
                    <div class="modal-image">
                        <img src="<?php echo get_theme_file_uri('images/maps/map-large.svg') ?>" alt="">
                        <div class="map-pin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="details" class="border--b-16 border--8-mobile border--white">
    <div class="container-fluid g-0 h-100">
        <div class="row h-100 g-0">
            <div class="col-12 col-lg-7 h-100">
                <img src="<?php echo get_theme_file_uri('images/3D/ringi-aripark3.jpg') ?>"
                     alt="Picture of a car driving along the road and house in the background">
            </div>
            <div class="col-12 col-lg-5 h-100">
                <div class="slide h-100 slide--transparent slide--padded slide--bt-row" data-aos="fade-left">
                    <h2 class="h2 h2--bt h2--bt-black">Detailiinfo</h2>
                    <div class="row g-0">
                        <div class="col-6">Tüüp</div>
                        <div class="col-6">100% ärimaa</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Brutopind</div>
                        <div class="col-6">29 000m</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Hooneid</div>
                        <div class="col-6">Kuni 5</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Korruseid</div>
                        <div class="col-6">Kuni 5</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Hoonestus<span class="d-inline-block d-sm-none"> - <br></span>kõrgus</div>
                        <div class="col-6">Kuni 20 m</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Kasutus<span class="d-inline-block d-sm-none"> - <br></span>otstarve</div>
                        <div class="col-6">Kaubandus, teenindus, showroom, büroo, ladu, väiketootmine</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Parkimine</div>
                        <div class="col-6">Krundil, tasuta</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Energiamärgis</div>
                        <div class="col-6">A</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Tehnovõrgud</div>
                        <div class="col-6">Vesi ja kanalisatsioon, gaas, elekter, side</div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6">Valmimine</div>
                        <div class="col-6">Kuni 24 kuud</div>
                    </div>
                    <a href="" class="cta text--fw-700"><span class="icon icon--download"></span>&nbsp;PDF-esitlus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="border--b-16 border--8-mobile border--white" id="contact">
    <div class="container-fluid g-0 h-100">
        <div class="row h-100 g-0">
            <div class="col-12 col-lg-7 h-100 d-none d-lg-flex align-items-end p-5">
                <a href="<?php echo get_bloginfo('url') ?>">
                    <img src="<?php echo get_theme_file_uri('images/icons%20and%20logos/logo-white.svg') ?>"
                         alt="Ringi äripargi logo - kaks sõõri alguses ja teksti 'Ringi äripark'"></a>
            </div>
            <div class="col-12 col-lg-5 h-100">
                <div class="slide h-100 slide--transparent-dark slide--padded" data-aos="fade-left">
                    <h2 class="h2 h2--bt h2--bt-white">Võta ühendust</h2>
                    <div class="row g-0 text-white mb-4">
                        <div class="col-12 text-white">
                            Martin Ellervee<br>
                            Stadium Real Estate OÜ<br>
                            martin@baltreal.ee +372 50 58 794
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="/" method="post">
                                <div class="mb-3">
                                    <label for="email-name" class="form-label visually-hidden">Name</label>
                                    <input type="text" name="name" id="email-name" class="form-control"
                                           placeholder="Teie nimi*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email-phone" class="form-label visually-hidden">Telefon</label>
                                    <input type="text" name="name" id="email-phone" class="form-control"
                                           placeholder="Telefon*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email-email" class="form-label visually-hidden">Email</label>
                                    <input type="text" name="name" id="email-email" class="form-control"
                                           placeholder="Email*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email-email" class="form-label visually-hidden">Email</label>
                                    <textarea rows="3" name="name" id="email-messge" class="form-control"
                                              placeholder="Küsimused, soovid, ettepanekud*" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <p class="small text-white">
                                        Kasutame isikuandmeid kliendi päringule vastamiseks. Me ei edasta isikuandmeid
                                        kolmandetele osapooltele ega lisa isikuandmeid reklaami eesmärgiga
                                        andmebaasidesse. Tutvu meie privaatsuspoliitikaga.
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="small text-white">
                                        Ma ei ole robot
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="cta text--fw-700 w-100">
                                        Saada!
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>
