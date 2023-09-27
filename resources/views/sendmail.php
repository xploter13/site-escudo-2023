<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="keywords"
        content="Fondex - Business and Finance Consulting HTML5 Template, Zippco - Business and Finance Consulting WordPress Theme, Axacus - Business Agency WordPress Theme, Axacus - Business Agency HTML Template, themes & template, html5 template, WordPress theme, unlimited colors available, ui/ux, ui/ux design, best html template, html template, html, woocommerce, shopify, prestashop, eCommerce, JavaScript, best CSS theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, Preyan Technosys Pvt.Ltd, cymol themes, themetech mount, Web 3.0, multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme, services, web design and development, business accountant, advisor, business, company consultancy, creative websites, finance, financial, insurance, legal adviser, business agents, marketing, trader, trading ">
    <meta name="author" content="https://www.themetechmount.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Escudo Mais - Como se associar</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- STYLES -->
    @include('partials.styles')
    <!-- ./STYLES -->

</head>

<body>

    <!-- page start -->
    <div class="page">

        <!-- header start -->
        <header id="masthead" class="header prt-header-style-01">
            <!-- site-header-menu -->
            @include('partials.menu')
            <!-- site-header-menu end-->
        </header><!-- header end -->

        <!-- page-title -->
        <div class="prt-page-title-row">
            <div class="prt-page-title-row-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="prt-page-title-row-heading">
                                <div class="page-title-heading">
                                    <h2 class="title">Como se associar</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span class="action">Como se associar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="bg-page-title-overlay"></div> -->
            </div>
        </div>
        <!-- page-title end -->

        <!-- site-main start -->
        <div class="site-main">

            <!--contact-section-->
            <section class="prt-row contect-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="spacing-2">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">Torne-se um associado hoje mesmo!</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p class="contact-page-text">Nosso atendimento online conta com uma assistente virtual especializada em tirar todas as suas dúvidas.</p>
                                    </div>
                                </div><!-- section title end -->
                                <ul class="prt-adv-socialbox-links">
                                    <li>
                                        <a class="prt-adv-social-link" href="#" target="_blank"><span
                                                class="prt_social_name">Facebook</span></a>
                                    </li>
                                    <li>
                                        <a class="prt-adv-social-link" href="#" target="_blank"><span
                                                class="prt_social_name">Instagram</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="query_form wrap-form clearfix position-relative" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input"><input name="fname" type="text" value=""
                                                    placeholder="Seu nome" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input"><input name="email" type="text" value=""
                                                    placeholder="Seu e-mail" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <select name="" id="">
                                                    <option value="" selected disabled>Escolha o veículo</option>
                                                    <option value="Carro">Carro</option>
                                                    <option value="Moto">Moto</option>
                                                    <option value="Caminhão">Caminhão</option>
                                                </select>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <textarea name="message" rows="3" placeholder="Digite sua mensagem...." required="required"></textarea>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <button
                                            class="submit prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-fill prt-btn-color-skin"
                                            type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </section>
            <!--contact-section end-->
        </div><!-- site-main end-->

        <!-- footer start -->
        @include('partials.footer')
        <!-- footer end -->

        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="icon-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->


    <!-- Javascript -->
    @include('partials.scripts')
    <!-- Javascript end-->

</body>

</html>
