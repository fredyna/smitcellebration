  @extends('template.master')

  @section('content')
  <body>
      @include('template.partials._navbarIndex')
    <!--==========================
        Intro Section
    ============================-->
    <section id="intro" class="clearfix">

        <img id="bg-intro" class="float-right" src="{{ asset('front/img/man.png') }}" alt="Man Work">

        <div class="container">
            <div class="intro-info">
            <h2>SMIT Cellebration</h2>
            <p>AN ANUAL EVENT FROM SMIT COMMUNITY</p>
            <a href="#about" class="btn btn-warning scrollto">Explore</a>

            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
            About Us Section
        ============================-->
        <section id="about">
            <div class="container">
            <header class="section-header">
                <h3>About Us</h3>
                <p>SMIT Cellebration is an annual event from SMIT</p>
            </header>

            <div class="row about-container">
                <div class="col-lg-6 content order-lg-1 order-2" style="text-align:justify;">
                <p>
                    SMIT Cellebration adalah ajang bergengsi yang mengangkat tema teknologi terbaru yang diselenggarakan tahunan dari Komunitas SMIT Politeknik Harapan Bersama.
                </p>
                <br/>
                <p >SMIT Cellebration 2019 memiliki tema “Be Succes With Technology". Acara ini memiliki berbagai rangkaian kegiatan, dengan rangkaian kegiatan terdiri dari Seminar Nasional, Workshop, dan Kompetisi bergengsi.</p>
                </div>
                <!-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <img  src="img/intro-img.svg" alt="" class="img-fluid">
                </div> -->
            </div>
            </div>
        </section><!-- #about -->

        <!--==========================
            Event Section
        ============================-->
        <section id="event" class="section-bg">
            <div class="container">

            <header class="section-header">
                <h3>Event Us</h3>
                <p>List of all event in SMIT Cellebration 2019</p>
            </header>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card card-event wow fadeInLeft">
                    <div class="card-body">
                        <img class="mx-auto d-block" style="width:100px; margin:20px;" src="{{ asset('front/img/icon/seminar.png') }}" alt="Image Seminar">
                        <h5 class="card-title">SEMINAR NASIONAL</h5>
                        <p class="card-text">Seminar nasional dengan tema "When Developer Should be Hacker". Pemateri terdiri dari developer dan penestration tester.</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ route('detail.seminar') }}" class="btn btn-success btn-event">Selengkapnya </a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card card-event wow fadeInUp">
                    <div class="card-body">
                        <img class="mx-auto d-block" style="width:100px; margin:20px;" src="{{ asset('front/img/icon/workshop.png') }}" alt="Image Workshop">
                        <h5 class="card-title">WORKSHOP</h5>
                        <p class="card-text">Workshop dengan dua kategori yakni "Mastering Flutter" dan "Cyber Security".</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ route('detail.workshop') }}" class="btn btn-success btn-event">Selengkapnya </a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card card-event wow fadeInRight">
                    <div class="card-body">
                        <img class="mx-auto d-block" style="width:100px; margin:20px;" src="{{ asset('front/img/icon/game.png') }}" alt="Image competition">
                        <h5 class="card-title">E-SPORT COMPETITION</h5>
                        <p class="card-text">Tunjukan kemampuan dan kerja sama tim kamu di "Tournament PUBG Mobile".</p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ route('detail.competition') }}" class="btn btn-success btn-event">Selengkapnya </a>
                    </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- #Event -->

        <!--==========================
            Timeline Section
        ============================-->
        <section id="timeline" class="section-bg">

            <div class="container">
            <header class="section-header">
                <h3>Timeline</h3>
                <p>Schedules of event</p>
            </header>

                <div class="row">
                <div class="timeline-centered">

                <article class="timeline-entry">

                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>1 Mar 19</span> <span>Until 18 Apr 19</span></time>

                    <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                    </div>

                    <div class="timeline-label">
                    <h2><a href="#">Registration Acara</a> <span>seminar, workshop, kompetisi</span></h2>
                    <blockquote>Dapatkan tiket untuk mengikuti seminar nasional, workshop dengan memilih salah satu kelas, dan kompetisi e-sport segera. Cari informasi selengkapnya di web atau kontak masing-masing CP acara. Kuota tiket untuk masing-masing acara terbatas, dan juga jadwal pendaftaran terbatas sampai 18 April 2019</blockquote>
                    </div>
                </div>

                </article>


                <article class="timeline-entry left-aligned">

                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45"><span>19 Apr 19</span> <span>Sore</span></time>

                    <div class="timeline-icon bg-warning">
                    <i class="entypo-suitcase"></i>
                    </div>

                    <div class="timeline-label">
                    <h2><a href="#">Technical Meeting E-Sport</a></h2>
                    <blockquote>Publish peraturan kompetisi dan informasi lainnya.</blockquote>
                    </div>
                </div>

                </article>


                <article class="timeline-entry">

                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-09T13:22"><span>20 Apr 19</span> <span>Siang - Sore</span></time>

                    <div class="timeline-icon bg-success">
                    <i class="entypo-location"></i>
                    </div>

                    <div class="timeline-label">
                        <h2><a href="#">Seminar Nasional</a></h2>
                        <blockquote>Pelaksanaan Seminar Nasional dengan tema "When Developer Should be Hacker".</blockquote>


                    </div>
                </div>

                </article>


                <article class="timeline-entry left-aligned">

                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>20 Apr 19</span> <span>Pagi - Siang</span></time>

                    <div class="timeline-icon bg-warning">
                    <i class="entypo-camera"></i>
                    </div>

                    <div class="timeline-label">
                        <h2><a href="#">Workshop</a></h2>

                        <blockquote>Pelaksanaan workshop dengan dua kelas yakni "Mastering Flutter" dan "Cyber Security".</blockquote>
                    </div>
                </div>

                </article>

                <article class="timeline-entry">

                <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-09T13:22"><span>21 Apr 19</span> <span>Pagi - Selesai</span></time>

                    <div class="timeline-icon bg-success">
                    <i class="entypo-location"></i>
                    </div>

                    <div class="timeline-label">
                        <h2><a href="#">Kompetisi E-Sport</a></h2>
                        <blockquote>Pelaksanaan "Tournament PUBG Mobile"</blockquote>


                    </div>
                </div>

                </article>


                <article class="timeline-entry begin">

                <div class="timeline-entry-inner">

                    <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i>
                    </div>

                </div>

                </article>

            </div>

        </section>
        <!-- #timeline -->

        <!--==========================
            sponsors Section
        ============================-->
        <section id="sponsors" class="section-bg">

            <div class="container">

            <div class="section-header">
                <h3>Sponsorship</h3>
                <p>List of supported us</p>
            </div>

            <div class="row no-gutters sponsors-wrap clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

            </div>

            </div>

        </section>
        <!-- end sponsorship -->


        <!--==========================
            Media Partner Section
        ============================-->
        <section id="sponsors" class="section-bg">

            <div class="container">

            <div class="section-header">
                <h3>Media Partners</h3>
                <p>List of media partners</p>
            </div>

            <div class="row no-gutters sponsors-wrap clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="sponsor-logo">
                    <img src="#" class="img-fluid" alt="">
                </div>
                </div>

            </div>

            </div>

        </section>
        <!-- end media partners -->

        <!--==========================
            Contact Section
        ============================-->
        <section id="contact">
            <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-8">
                <div class="map mb-4 mb-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.322425063614!2d109.10765502306432!3d-6.8712782801381955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik+Harapan+Bersama!5e0!3m2!1sen!2sid!4v1551624572539" width="100%" height="312" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="">
                        <div class="info">
                        <i class="ion-ios-location-outline"></i>
                        <p>Kampus 1 Politeknik Harapan Bersama Tegal</p>
                        </div>
                        <div class="info">
                            <i class="fa fa-facebook"></i>
                            <p>SMIT NEO</p>
                        </div>
                        <div class="info">
                            <i class="fa fa-instagram"></i>
                            <p>@smit_phb</p>
                            </div>
                        <div class="info">
                        <i class="ion-ios-email-outline"></i>
                        <p>smitphb@gmail.com</p>
                        </div>
                        <div class="info">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>082334865021</p>
                        </div>
                </div>


            </div>

            </div>
        </section>

    </main>

  @endsection

