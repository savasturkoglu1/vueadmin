<template>
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="/panel">
                            <img class="brand-logo" alt="modern admin logo" src="/images/pirat.png">
                            <h3 class="brand-text">Pirat Hotel</h3>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-home"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Hızlı Menu</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i>Araç Kiralama</h6>
                                    <ul class="drilldown-menu">
                                        <li class="menu-list">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>


                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i>Transfer</h6>
                                    <ul class="drilldown-menu">
                                        <li class="menu-list">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i>Araçlar</a>
                                                </li>


                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i>Turlar</h6>
                                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">

                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i>En Son Rezervasyon</h6>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Müşteri ara...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">
                  <span class="user-name text-bold-700">--Kullanıcı--</span>
                </span>
                                <span class="avatar avatar-online">
                  <img src="/dash/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ft-mail"></i>Kullanıcı</a>

                                <a class="dropdown-item" href="#"><i class="ft-user"></i>Profil</a>

                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i>Çıkış</a>
                            </div>
                        </li>

                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">!</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Bildirimler</span>
                                    </h6>
                                    <span class="notification-tag badge badge-default badge-danger float-right m-0">5 Yeni</span>
                                </li>
                                <li class="scrollable-container media-list w-100">

                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Rezervasyon Alındı</h6>
                                                <p class="notification-text font-small-3 text-muted">Yeni Transfer Rezervasyonu</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">tarih</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>


                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Tüm Bildirimler</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Mesajlar</span>
                                    </h6>
                                    <span class="notification-tag badge badge-default badge-warning float-right m-0">4 Mesaj</span>
                                </li>
                                <li class="scrollable-container media-list w-100">

                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">
                                 <img src="/dash/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">test</h6>
                                                <p class="notification-text font-small-3 text-muted">test.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">tarih</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Tüm Mesajlar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>