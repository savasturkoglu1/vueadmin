<template>
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">

                    <router-link :to="{name: 'anasayfa'}"><i class="la la-home"></i><span class="menu-title" >Panel</span></router-link>

                </li>

                <li class=" nav-item"><a  class="dda"><i class="icon-globe"></i><span class="menu-title" data-i18n="nav.page_layouts.main">SEO</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" >Menu1</a>
                        </li>


                    </ul>
                </li> <li> <router-link :to="{name: 'sayfalar'}"><i class="la la-cog"></i><span class="menu-title" >Sayfalar</span></router-link>
            </li>
                <li class=" nav-item">
                    <a   class="dda"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Sayfa & İçerik</span></a>
                    <ul class="menu-content">
                        <li><router-link :to="{name: 'sayfaekle'}"><span class="menu-title" >Sayfa Ekle</span></router-link>
                        </li>
                        <li> <router-link :to="{name: 'sayfalar'}"><span class="menu-title" >Sayfalar</span></router-link>
                        </li>
                        <li><a class="menu-item sp-item" data-url="/panel/icerik/create" >İcerik Ekle</a>
                        </li>
                        <li><a class="menu-item sp-item" data-url="/panel/icerik" >İcerikler</a>
                        </li>

                        <li><a class="menu-item sp-item" data-url="/panel/statikicerikler" >Statik İcerikler</a>
                        </li>


                    </ul>
                </li>
                <li class=" nav-item"><a  class="dda"><i class="ft-mail"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Mesajlar</span></a>
                    <ul class="menu-content">
                        <li><router-link :to="{name: 'mesajlar'}">Mesajlar</router-link>
                        </li>


                    </ul>
                </li>
                <li class=" nav-item"><a class="dda" ><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Blog</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="/panel/blog" >Yazılar</a>
                        </li>
                        <li><a class="menu-item" href="/panel/blog/create" >Yazı Ekle</a>
                        </li>


                    </ul>
                </li>
                <li class=" nav-item"><a  class="dda"><i class="ft-settings"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Ayarlar</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="/panel/iletisim" >İletisim</a>
                        </li>


                    </ul>
                </li>




            </ul>
        </div>
    </div>
</template>
