@extends('layouts.base')

@section('conteudo')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 text-center">
                <h1>Mude a sua forma de comprar imóveis </h1>
            </div>
        </div>

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row justify-content-end">

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Years of experience</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= imoveis Section ======= -->
    <section id="imoveis" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Imóveis</h2>
            
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        <li data-filter=".filter-venda">Venda</li>
                        <li data-filter=".filter-locacao">Locação</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">
                @foreach($imoveis as $imovel)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$imovel->operacao}}">
                    <a href="{{route('imoveis.details',['id_imovel'=>$imovel->id])}}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/imoveis') }}/{{$imovel->image}}" class="img-fluid" alt="{{$imovel->cidade}}">
                            <div class="portfolio-info">
                                <h4>{{$imovel->cidade}} - {{$imovel->bairro}}</h4>
                                <p>{{$imovel->operacao}}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/imoveis') }}/{{$imovel->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$imovel->cidade}} - {{$imovel->bairro}}">
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <a href="portfolio-details.html" title="More Details">
                                        <i class="bx bx-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29940.018497992434!2d-50.27232163385913!3d-20.279465280166928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9497f61cb7d933ed%3A0xd182f4e7894f751b!2sFernand%C3%B3polis%2C%20SP%2C%2015600-000!5e0!3m2!1spt-BR!2sbr!4v1622763151428!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
                
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Local:</h4>
                            <p>Fernandopolis</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>matheus.souza93@fatec.sp.gov.br</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6 form-group ">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Remetente" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Menssagem" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection