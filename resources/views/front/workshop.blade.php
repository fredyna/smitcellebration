@extends('template.master')

@section('content')
<body id="detail-program">

    @include('template.partials._navbarDetail')

    <!--==========================
        Intro Section
    ============================-->
    <section id="intro" class="clearfix">

        <img id="bg-intro" class="float-right" src="{{ asset('front/img/icon/workshop.png') }}" alt="Man Work">

        <div class="container">
            <div class="intro-info">
            <h2>Workshop</h2>
            <p>"Mastering Flutter" & "Cyber Security"</p>
            <a href="{{ route('event.workshop') }}" class="btn btn-warning">Registrasi</a>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
            Event Section
        ============================-->
        <section id="detail" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Detail Acara</h3>
                    <p>Rincian Acara Workshop SMIT Cellebration</p>
                </header>

                <div class="program-detail">
                    <h4 class="mb-4">Penjelasan Umum</h4>
                    <p>Salah satu acara SMIT Cellebration di mana peserta akan mendapatkan materi dan ikut mempraktekan secara langsung dengan bimbingan pemateri yang berkompeten di bidangnya. Acara akan diselenggarakan pada Sabtu, 20 April 2019 Pukul 13.00 WIB - Selesai</p>
                    <br><br>

                    <h4 class="mb-4">Narasumber</h4>
                    <div class="row">
                        <div id="narasumber" class="col-sm-6">
                        <img class="rounded-circle mx-auto d-block mb-2" src="{{ asset('front/img/pemateri/rosid.jpeg') }}" alt="Pemateri 1">
                        <h5 class="text-center">Rosid Mustofa</h5>
                        <p class="text-center text-muted">Pemateri "Mastering Flutter"</p>
                        </div>

                        <div id="narasumber" class="col-sm-6">
                        <img class="rounded-circle mx-auto d-block mb-2" src="{{ asset('front/img/pemateri/yahya.jpg') }}" alt="Pemateri 1">
                        <h5 class="text-center">Yahya Al-Fatih</h5>
                        <p class="text-center text-muted">Pemateri "Cyber Security"</p>
                        </div>
                    </div>
                    <br><br>

                    <h4 class="mb-4">HTM & Fasilitas</h4>
                    <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInLeft;">
                        <tbody>
                        <tr>
                            <td style="width:100px;">HTM</td>
                            <td> : Rp 25.000,-</td>
                        </tr>
                        <tr>
                            <td style="width:100px;">Kuota</td>
                                <td> : Terbatas hanya 30 peserta per kelas</td>
                            </tr>
                        <tr>
                            <td style="width:100px;">Fasilitas</td>
                            <td> : Ilmu + Snack + Sertifikat</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>

                    <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">Pembayaran via transfer :<br>
                        No Rekening <b>2-028-18467-3</b> <br>
                        a/n MAFTUCHATI (Bank Jateng)</p>
                    <br>

                    <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInLeft;">Konfirmasi Pembayaran : </p>
                    <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInLeft;">
                        <tbody>
                        <tr>
                            <td style="width:100px;">Subject</td>
                            <td> : BuktiBayar_Workshop_SC#_NamaAnda</td>
                        </tr>
                        <tr>
                            <td style="width:100px;">Catatan</td>
                            <td> : Lampirkan foto/hasil scan bukti transfer</td>
                        </tr>
                        <tr>
                            <td style="width:100px;">WA</td>
                            <td> : 085290072195</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>

                    <h4 class="mb-4">Contact Person</h4>
                    <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.75s; animation-name: fadeInLeft;">
                        <tbody>
                        <tr>
                            <td style="width:100px;">Aisatul</td>
                            <td> : 082334865021 (WA)</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>

            </div>
        </section><!-- #Event -->

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
