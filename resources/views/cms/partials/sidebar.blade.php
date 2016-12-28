
<!-- Aside Start-->
<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
         <a href="/cms" class="logo-expanded">
                    
                    <span class="nav-label">CMS  HMV Actis </span>
                </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">

            <li class="has-submenu "><a href="#"><i class="ion-document"></i> <span
                            class="nav-label">Pagina beheer</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("cms/pages") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/pages/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                    <li><strong><a href="#">Secties</a></strong></li>
                    <li><a href="{{ URL::to("cms/pageSections") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/pageSections/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>

                </ul>
            </li>
            <li class="has-submenu "><a href="#"><i class="fa fa-group"></i> <span class="nav-label">Besturen</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/boards") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/boards/create") }}"><i class="ion-plus"></i>Toevoegen</a></li>
                    <li><a href="{{ URL::to("cms/boardMembers") }}"><i class="ion-person-stalker"></i> Bestuursleden</a></li>
                    <li><a href="{{ URL::to("cms/boardMembers/create") }}"><i class="ion-person-add"></i> Leden toevoegen</a></li>

                </ul>
            </li>
            <li class="has-submenu "><a href="#"><i class="ion-happy"></i> <span class="nav-label">Commissies</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/committees") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/committees/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                    <li><a href="{{ URL::to("cms/committeeMembers") }}"><i class="ion-person-stalker"></i> Leden </a></li>
                    <li><a href="{{ URL::to("cms/committeeMembers/create") }}"><i class="ion-person-add"></i> Toevoegen lid</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-calendar"></i> <span
                            class="nav-label">Activiteiten</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/events") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/events/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                </ul>
            </li>

            
            <li class="has-submenu "><a href="#"><i class="ion-earth"></i> <span class="nav-label">Nieuws</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/news") }}"> <i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/news/create") }}"> <i class="ion-plus"></i> Toevoegen</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-network"></i> <span class="nav-label">Partners</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/sponsors") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/sponsors/create")}}"> <i class="ion-plus"></i> Toevoegen</a></li>
                    <li>
                    <a href="#"> <strong
                                class="nav-label">Kortingen</strong></a></li>
                    <li><a href="{{ URL::to("cms/sponsorDiscounts") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("cms/sponsorDiscounts/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-briefcase"></i> <span class="nav-label">Vacatures</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/vacancies") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/vacancies/create") }}"><i class="ion-plus"></i> Toevoegen</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">Leden</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to("cms/user") }}"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="{{ URL::to("cms/user/create") }}"><i class="ion-person-add"></i> Toevoegen</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-cash"></i> <span class="nav-label">Betalingen</span></a>
                <ul class="list-styled">
                    <li><a href="#overzicht"><i class="ion-grid"></i> Overzicht </a></li>
                    <li><a href="#toevoegen"><i class="ion-person-add"></i> Toevoegen</a></li>
                </ul>
            </li>

            <li class="has-submenu "><a href="#"><i class="ion-person"></i> <span class="nav-label">Ingelogd als: {{ Auth::user()->name }}</span></a>
                <ul class="list-styled">
                    <li><a href="{{ URL::to('logout') }}"><i class="ion-power"></i> Uitloggen </a></li>
                </ul>
            </li>

        </ul>
    </nav>

</aside>
<!-- Aside Ends-->