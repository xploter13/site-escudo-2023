<div id="site-header-menu" class="site-header-menu">
    <div class="site-header-menu-inner prt-stickable-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--site-navigation -->
                    <div class="site-navigation d-flex align-items-center justify-content-between">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <h1><a class="home-link" href="index-2.html" title="Fondex" rel="home">
                                <img id="logo" width="162" height="50" src="{{ asset('assets/images/logo-escudo.png') }}" class="img-fluid" alt="logo-img">
                            </a></h1>
                        </div><!-- site-branding end -->
                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                            <span class="menubar-box">
                                <span class="menubar-inner"></span>
                            </span>
                        </div>
                        <!-- menu -->
                        <nav class="main-menu menu-mobile" id="menu">
                            <ul class="menu">
                                <li class="mega-menu-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="">
                                    <a href="{{ url('beneficios') }}" class="mega-menu-link">Benefícios</a>
                                    {{-- <ul class="mega-submenu">
                                        <li><a href="#">Assistência</a></li>
                                        <li><a href="#">Proteção</a></li>
                                        <li><a href="#">Clube de Desconto</a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="{{ url('contato') }}">Contato</a>
                                </li>
                                <li class="menu-feature orange">
                                    <a href="#"><span>Como se Associar?</span></a>
                                </li>
                                <li class="menu-feature green">
                                    <a href="https://redeveiculos.com/login?empresa=rdv" target="_blank"><span>Rastreie o seu veículo</span></a>
                                </li>
                            </ul>
                        </nav><!-- menu end -->
                        <div class="header_extra">
                            <!-- header_extra -->
                            <div class="prt-rt-contact">
                                 <!-- header-icons -->
                                 <div class="prt-header-icons">
                                    <span class="prt-header-icon prt-header-cart-link">
                                        <a href="#" title="Área do Associado"><i class="icon-user"></i> <br> Área do Associado</a>
                                    </span>
                                    {{-- <div class="prt-header-icon prt-header-search-link">
                                        <a href="#"><i class="icon-search"></i></a>
                                        <div class="prt-search-overlay">
                                            <form method="get" class="prt-site-searchform" action="#">
                                                <div class="w-search-form-h">
                                                    <div class="w-search-form-row">
                                                        <div class="w-search-input">
                                                            <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                            <button type="submit">
                                                                <i class="icon-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div><!-- header-icons end -->
                                <div class="prt-header-text-area">
                                    <div class="header-info-widget">
                                        <span class="prt-adv-header-support">Atendimento</span>
                                        <h3 class="prt-adv-header-number">
                                            <a href="tel:08007888080">0800 788 8080</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- header_extra end -->
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
