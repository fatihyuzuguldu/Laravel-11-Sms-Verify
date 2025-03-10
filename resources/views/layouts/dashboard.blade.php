<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}">

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">


    <title>@yield('title') - Sarkay Yönetim</title>

</head>

<body class="link-sidebar">

<div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->

        <div>

            <div class="brand-logo d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logos/logo.png') }}" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                </a>

            </div>

            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('dashboard') }}" id="get-url" aria-expanded="false">
                            <iconify-icon icon="solar:widget-add-line-duotone" class=""></iconify-icon>
                            <span class="hide-menu">Anasayfa</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../default-sidebar/app-kanban.html"><iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"></iconify-icon>
                            <span class="hide-menu">Hızlı Satış Yap</span>
                        </a>
                    </li>

                    <!-- ---------------------------------- -->
                    <!-- Yönetim -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Yönetim</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('Customer') }}" aria-expanded="false">
                            <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                            <span class="hide-menu">Müşteriler</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('services.index') }}"><iconify-icon icon="solar:letter-line-duotone"></iconify-icon>
                            <span class="hide-menu">Hizmetler</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('products.index') }}"><iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                            <span class="hide-menu">Ürünler</span>
                        </a>
                    </li>


                    <!-- ---------------------------------- -->
                    <!-- Randevular -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Randevu Yönetimi</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../default-sidebar/page-user-profile.html" aria-expanded="false">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                            <span class="hide-menu">Randevu Takvimi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-gallery.html" class="sidebar-link">
                            <iconify-icon icon="solar:gallery-bold-duotone"></iconify-icon>
                            <span class="hide-menu">Online Randevu</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-search-result.html" class="sidebar-link">
                            <iconify-icon icon="solar:card-search-line-duotone"></iconify-icon>
                            <span class="hide-menu">Akıllı Randevu Takip</span>
                        </a>
                    </li>

                    <!-- ---------------------------------- -->
                    <!-- İşletme Yönetimi -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">İşletme Yönetimi</span>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('expenses.index') }}" class="sidebar-link">
                            <iconify-icon icon="solar:accessibility-line-duotone"></iconify-icon>
                            <span class="hide-menu">Kasa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-gallery.html" class="sidebar-link">
                            <iconify-icon icon="solar:gallery-bold-duotone"></iconify-icon>
                            <span class="hide-menu">Personel</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-search-result.html" class="sidebar-link">
                            <iconify-icon icon="solar:card-search-line-duotone"></iconify-icon>
                            <span class="hide-menu">Akıllı Randevu Takip</span>
                        </a>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Diğer</span>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('customer.all') }}"><iconify-icon icon="solar:chat-round-line-line-duotone"></iconify-icon>
                            <span class="hide-menu">Tüm Müşteriler</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('services.categories.index') }}"><iconify-icon icon="solar:chat-round-line-line-duotone"></iconify-icon>
                            <span class="hide-menu">Hizmet Kategori Yönetimi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('products.categories.index') }}"><iconify-icon icon="solar:chat-round-line-line-duotone"></iconify-icon>
                            <span class="hide-menu">Ürün Kategori Yönetimi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('expenses.categories.index') }}"><iconify-icon icon="solar:chat-round-line-line-duotone"></iconify-icon>
                            <span class="hide-menu">Kasa Kategori Yönetimi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../default-sidebar/app-contact.html"><iconify-icon icon="solar:iphone-line-duotone"></iconify-icon>
                            <span class="hide-menu">Contact Table</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../default-sidebar/app-contact2.html"><iconify-icon icon="solar:phone-line-duotone"></iconify-icon>
                            <span class="hide-menu">Contact List</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../default-sidebar/app-invoice.html"><iconify-icon icon="solar:bill-list-line-duotone"></iconify-icon>
                            <span class="hide-menu">Invoice</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-treeview.html" class="sidebar-link">
                            <iconify-icon icon="solar:mask-happly-line-duotone"></iconify-icon>
                            <span class="hide-menu">Personel Yönetimi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-block-ui.html" class="sidebar-link">
                            <iconify-icon icon="solar:quit-full-screen-square-line-duotone"></iconify-icon>
                            <span class="hide-menu">Block-Ui</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/pages-session-timeout.html" class="sidebar-link">
                            <iconify-icon icon="solar:sort-by-time-line-duotone"></iconify-icon>
                            <span class="hide-menu">Session Timeout</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="../default-sidebar/page-pricing.html" class="sidebar-link">
                            <iconify-icon icon="solar:dollar-line-duotone"></iconify-icon>
                            <span class="hide-menu">Pricing</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/page-faq.html" class="sidebar-link">
                            <iconify-icon icon="solar:question-circle-line-duotone"></iconify-icon>
                            <span class="hide-menu">FAQ</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/page-account-settings.html" class="sidebar-link">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                            <span class="hide-menu">Account Setting</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../landingpage/index.html">
                            <iconify-icon icon="solar:passport-line-duotone"></iconify-icon>
                            <span class="hide-menu">Landingpage</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:cardholder-line-duotone"></iconify-icon>
                            <span class="hide-menu">Widgets</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-cards.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-banners.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Banner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-charts.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Charts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-feeds.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Feeds</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-apps.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../default-sidebar/widgets-data.html">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Data</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Ui</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- ui -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-arrow" aria-expanded="false">
                            <iconify-icon icon="solar:waterdrops-line-duotone"></iconify-icon>
                            <span class="hide-menu">Ui Elements</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-accordian.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Accordian</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-badge.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Badge</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-buttons.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-dropdowns.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Dropdowns</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-modals.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Modals</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-tab.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Tab</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-tooltip-popover.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Tooltip & Popover</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-notification.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Notification</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-progressbar.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Progressbar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-pagination.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Pagination</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-typography.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Typography</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-bootstrap-ui.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Bootstrap UI</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-breadcrumb.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-offcanvas.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Offcanvas</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-lists.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Lists</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-grid.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-carousel.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Carousel</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-scrollspy.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Scrollspy</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-spinner.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Spinner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-link.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Link</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-arrow" aria-expanded="false">
                            <iconify-icon icon="solar:star-fall-minimalistic-2-line-duotone"></iconify-icon>
                            <span class="hide-menu">Components</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/component-sweetalert.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/component-nestable.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Nestable</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/component-noui-slider.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Noui slider</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/component-rating.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Rating</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/component-toastr.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Toastr</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-arrow" aria-expanded="false">
                            <iconify-icon icon="solar:bookmark-square-minimalistic-line-duotone"></iconify-icon>
                            <span class="hide-menu">Cards</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-cards.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Basic Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-card-customs.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Custom Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-card-weather.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Weather Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/ui-card-draggable.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Draggable Cards</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Icons</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="../default-sidebar/icon-tabler.html" aria-expanded="false">
                            <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                            <span class="hide-menu">Tabler Icon</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="../default-sidebar/icon-solar.html" aria-expanded="false">
                            <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                            <span class="hide-menu">Solar Icon</span>
                        </a>
                    </li>

                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Forms</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Form elements -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:text-selection-line-duotone"></iconify-icon>
                            <span class="hide-menu">Forms Elements</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-inputs.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Forms Input</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-input-groups.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Input Groups</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-input-grid.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Input Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-checkbox-radio.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Checkbox & Radios</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-bootstrap-switch.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Bootstrap Switch</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-select2.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Select2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Form Addons -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:clapperboard-play-line-duotone"></iconify-icon>
                            <span class="hide-menu">Form Addons</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-paginator.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Paginator</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-img-cropper.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Image Cropper</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-dropzone.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Dropzone</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-mask.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Mask</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-typeahead.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Typehead</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Form Input -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:password-minimalistic-input-line-duotone"></iconify-icon>
                            <span class="hide-menu">Forms Inputs</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-basic.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Basic Form</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-horizontal.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Horizontal</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-actions.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Actions</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-row-separator.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Row Separator</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-bordered.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Bordered</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-detail.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Detail</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-striped-row.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Striped Rows</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-floating-input.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Form Floating Input</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/form-wizard.html" class="sidebar-link">
                            <iconify-icon icon="solar:archive-line-duotone"></iconify-icon>
                            <span class="hide-menu">Form Wizard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/form-repeater.html" class="sidebar-link">
                            <iconify-icon icon="solar:repeat-one-minimalistic-bold-duotone"></iconify-icon>
                            <span class="hide-menu">Form Repeater</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:shield-warning-line-duotone"></iconify-icon>
                            <span class="hide-menu">Validation</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-bootstrap-validation.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Bootstrap Validation</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-custom-validation.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Custom Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:waterdrop-line-duotone"></iconify-icon>
                            <span class="hide-menu">Form Pickers</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-picker-colorpicker.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Colorpicker</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Rangepicker</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-picker-bootstrap-datepicker.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">BT Datepicker</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-picker-material-datepicker.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">MT Datepicker</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <iconify-icon icon="solar:clapperboard-edit-line-duotone"></iconify-icon>
                            <span class="hide-menu">Form Editors</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-editor-quill.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Quill Editor</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../default-sidebar/form-editor-tinymce.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Tinymce Edtor</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Bootstrap Tables</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->

                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-basic.html" class="sidebar-link">
                            <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                            <span class="hide-menu">Basic Table</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-dark-basic.html" class="sidebar-link">
                            <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                            <span class="hide-menu">Dark Table</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-sizing.html" class="sidebar-link">
                            <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                            <span class="hide-menu">Sizing Table</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-layout-coloured.html" class="sidebar-link">
                            <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                            <span class="hide-menu">Coloured Table</span>
                        </a>
                    </li>
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Datatables</span>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-datatable-basic.html" class="sidebar-link">
                            <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                            <span class="hide-menu">Basic</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-datatable-api.html" class="sidebar-link">
                            <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                            <span class="hide-menu">API</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/table-datatable-advanced.html" class="sidebar-link">
                            <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                            <span class="hide-menu">Advanced</span>
                        </a>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Charts</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-arrow" aria-expanded="false">
                            <iconify-icon icon="solar:chart-square-line-duotone"></iconify-icon>
                            <span class="hide-menu">Apex Chart</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-line.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Line Chart</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-area.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Area Chart</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-bar.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Bar Chart</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-pie.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Pie Chart</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-radial.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Radial Chart</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="../default-sidebar/chart-apex-radar.html" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Radar Chart</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Auth</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->

                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-error.html" class="sidebar-link">
                            <iconify-icon icon="solar:bug-minimalistic-line-duotone"></iconify-icon>
                            <span class="hide-menu">Error</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-login.html" class="sidebar-link">
                            <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                            <span class="hide-menu">Side Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-login2.html" class="sidebar-link">
                            <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                            <span class="hide-menu">Boxed Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-register.html" class="sidebar-link">
                            <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                            <span class="hide-menu">Side Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-register2.html" class="sidebar-link">
                            <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                            <span class="hide-menu">Boxed Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-forgot-password.html" class="sidebar-link">
                            <iconify-icon icon="solar:password-outline"></iconify-icon>
                            <span class="hide-menu">Side Forgot Pwd</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-forgot-password2.html" class="sidebar-link">
                            <iconify-icon icon="solar:password-outline"></iconify-icon>
                            <span class="hide-menu">Boxed Forgot Pwd</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-two-steps.html" class="sidebar-link">
                            <iconify-icon icon="solar:siderbar-line-duotone"></iconify-icon>
                            <span class="hide-menu">Side Two Steps</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-two-steps2.html" class="sidebar-link">
                            <iconify-icon icon="solar:siderbar-line-duotone"></iconify-icon>
                            <span class="hide-menu">Boxed Two Steps</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../default-sidebar/authentication-maintenance.html" class="sidebar-link">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                            <span class="hide-menu">Maintenance</span>
                        </a>
                    </li>
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Documentation</span>
                    </li>
                    <li class="sidebar-item">
                        <a href="../docs/index.html" class="sidebar-link">
                            <iconify-icon icon="solar:file-text-line-duotone"></iconify-icon>
                            <span class="hide-menu">Getting Started</span>
                        </a>
                    </li>
                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">Multi level</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                            <iconify-icon icon="solar:align-left-line-duotone"></iconify-icon>
                            <span class="hide-menu">Menu Level</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Level 1</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="icon-small"></span>
                                    <span class="hide-menu">Level 1.1</span>
                                </a>
                                <ul aria-expanded="false" class="collapse two-level">
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <span class="icon-small"></span>
                                            <span class="hide-menu">Level 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                            <span class="icon-small"></span>
                                            <span class="hide-menu">Level 2.1</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse three-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <span class="icon-small"></span>
                                                    <span class="hide-menu">Level 3</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <span class="icon-small"></span>
                                                    <span class="hide-menu">Level 3.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <span class="sidebar-divider"></span>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="mini-icon"></iconify-icon>
                        <span class="hide-menu">More Options</span>
                    </li>
                    <li class="sidebar-item">
                        <div class="sidebar-link">
                            <span class="circle-shape bg-primary rounded-pill"></span>
                            <span class="hide-menu">Applications</span>
                        </div>
                    </li>
                    <li class="sidebar-item">
                        <div class="sidebar-link">
                            <span class="circle-shape bg-secondary rounded-pill"></span>
                            <span class="hide-menu">Form Options</span>
                        </div>
                    </li>
                    <li class="sidebar-item">
                        <div class="sidebar-link">
                            <span class="circle-shape bg-danger rounded-pill"></span>
                            <span class="hide-menu">Table Variations</span>
                        </div>
                    </li>
                    <li class="sidebar-item">
                        <div class="sidebar-link">
                            <span class="circle-shape bg-warning rounded-pill"></span>
                            <span class="hide-menu">Charts Selection</span>
                        </div>
                    </li>
                    <li class="sidebar-item">
                        <div class="sidebar-link">
                            <span class="circle-shape bg-success rounded-pill"></span>
                            <span class="hide-menu">Widgets</span>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">
        <!--  Header Start -->
        <header class="topbar">
            <div class="with-vertical">
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Header -->
                <!-- ---------------------------------- -->
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-icon-hover-bg rounded-circle d-flex">
                            <a class="nav-link  sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                            <div class="hover-dd">
                                <a class="nav-link" id="drop2" href="#" aria-haspopup="true" aria-expanded="false">
                                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                                    <div class="position-relative">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="p-4 pb-3">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../default-sidebar/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Chat Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Invoice App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Contact Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Email App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../default-sidebar/page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">User Profile</h6>
                                                                        <span class="fs-11 d-block text-body-color">learn more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Calendar App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Contact List Table</h6>
                                                                        <span class="fs-11 d-block text-body-color">Add new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Notes Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ asset('assets/images/backgrounds/mega-dd-bg.jpg') }}" alt="mega-dd" class="img-fluid mega-dd-bg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="d-block d-lg-none py-9 py-xl-0">
                        <img src="{{ asset('assets/images/logos/logo.png') }}" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                    </div>
                    <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                        <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                                        <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                    </a>
                                    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)" style="display: none">
                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                    </a>
                                </li>
                                <li class="nav-item d-block d-xl-none">
                                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                </li>

                                <!-- ------------------------------- -->
                                <!-- start notification Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                        <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                            <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                            <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                        </div>
                                        <div class="message-body" data-simplebar>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                        <span class="d-block fs-2">9:30 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Event today</h6>
                                                        <span class="d-block fs-2">9:15 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Settings</h6>
                                                        <span class="d-block fs-2">4:36 PM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                        <span class="d-block fs-2">9:30 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Event today</h6>
                                                        <span class="d-block fs-2">9:15 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Settings</h6>
                                                        <span class="d-block fs-2">4:36 PM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="py-6 px-7 mb-1">
                                            <button class="btn btn-primary w-100">See All Notifications</button>
                                        </div>

                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end notification Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start language Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/images/flag/icon-flag-en.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-en.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">English (UK)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-cn.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-fr.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">français (French)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-sa.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">عربي (Arabic)</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end language Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start profile Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                        <div class="d-flex align-items-center gap-2 lh-base">
                                            <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                                            <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                        <div class="position-relative px-4 pt-3 pb-2">
                                            <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="56" height="56" alt="matdash-img" />
                                                <div>
                                                    <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                                                    </h5>
                                                    <p class="mb-0 text-dark">
                                                        david@wrappixel.com
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="message-body">
                                                <a href="../default-sidebar/page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Profile
                                                </a>
                                                <a href="../default-sidebar/page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Subscription
                                                </a>
                                                <a href="../default-sidebar/app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                </a>
                                                <a href="../default-sidebar/page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                                                    Account Settings
                                                </a>
                                                <a href="{{ route('logout') }}" class="p-2 dropdown-item h6 rounded-1">
                                                    Çıkış Yap
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end profile Dropdown -->
                                <!-- ------------------------------- -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- ---------------------------------- -->
                <!-- End Vertical Layout Header -->
                <!-- ---------------------------------- -->

                <!-- ------------------------------- -->
                <!-- apps Dropdown in Small screen -->
                <!-- ------------------------------- -->
                <!--  Mobilenavbar -->
                <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <nav class="sidebar-nav scroll-sidebar">
                        <div class="offcanvas-header justify-content-between">
                            <a href="../default-sidebar/index.html" class="text-nowrap logo-img">
                                <img src="{{ asset('assets/images/logos/logo.png') }}" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                            <ul id="sidebarnav">
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:slider-vertical-line-duotone" class="fs-7"></iconify-icon>
                      </span>
                                        <span class="hide-menu">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-chat.html" class="d-flex align-items-center">
                                                <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                                                    <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-invoice.html" class="d-flex align-items-center">
                                                <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                                                    <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-contact2.html" class="d-flex align-items-center">
                                                <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                                                    <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-email.html" class="d-flex align-items-center">
                                                <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Email App</h6>
                                                    <span class="fs-11 d-block text-body-color">Get new emails</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/page-user-profile.html" class="d-flex align-items-center">
                                                <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                                                    <span class="fs-11 d-block text-body-color">learn more information</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-calendar.html" class="d-flex align-items-center">
                                                <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                                                    <span class="fs-11 d-block text-body-color">Get dates</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-contact.html" class="d-flex align-items-center">
                                                <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                                                    <span class="fs-11 d-block text-body-color">Add new contact</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../default-sidebar/app-notes.html" class="d-flex align-items-center">
                                                <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                                                    <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                                </div>
                                            </a>
                                        </li>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
            <div class="app-header with-horizontal">
                <nav class="navbar navbar-expand-xl container-fluid p-0">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item d-flex d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item d-none d-xl-flex align-items-center">
                            <a href="../horizontal/index.html" class="text-nowrap nav-link">
                                <img src="{{ asset('assets/images/logos/logo.png') }}" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                            </a>
                        </li>
                        <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                            <div class="hover-dd">
                                <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                                    <div class="position-relative">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="p-4 pb-3">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../default-sidebar/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Chat Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Invoice App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Contact Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Email App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../default-sidebar/page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">User Profile</h6>
                                                                        <span class="fs-11 d-block text-body-color">learn more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Calendar App</h6>
                                                                        <span class="fs-11 d-block text-body-color">Get dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Contact List Table</h6>
                                                                        <span class="fs-11 d-block text-body-color">Add new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="../default-sidebar/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-0">Notes Application</h6>
                                                                        <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ asset('assets/images/backgrounds/mega-dd-bg.jpg') }}" alt="mega-dd" class="img-fluid mega-dd-bg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="d-block d-xl-none">
                        <a href="../default-sidebar/index.html" class="text-nowrap nav-link">
                            <img src="{{ asset('assets/images/logos/logo.png') }}" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                        </a>
                    </div>
                    <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                            <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                        <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                                        <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                    </a>
                                    <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)" style="display: none">
                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                    </a>
                                </li>
                                <li class="nav-item d-block d-xl-none">
                                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                </li>

                                <!-- ------------------------------- -->
                                <!-- start notification Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                        <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                            <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                            <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                        </div>
                                        <div class="message-body" data-simplebar>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                        <span class="d-block fs-2">9:30 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Event today</h6>
                                                        <span class="d-block fs-2">9:15 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Settings</h6>
                                                        <span class="d-block fs-2">4:36 PM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                                                        <span class="d-block fs-2">9:30 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Event today</h6>
                                                        <span class="d-block fs-2">9:15 AM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-75 d-inline-block ">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-1 fw-semibold">Settings</h6>
                                                        <span class="d-block fs-2">4:36 PM</span>
                                                    </div>
                                                    <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="py-6 px-7 mb-1">
                                            <button class="btn btn-primary w-100">See All Notifications</button>
                                        </div>

                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end notification Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start language Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/images/flag/icon-flag-en.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-en.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">English (UK)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-cn.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-fr.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">français (French)</p>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="{{ asset('assets/images/flag/icon-flag-sa.svg') }}" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                                </div>
                                                <p class="mb-0 fs-3">عربي (Arabic)</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end language Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start profile Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                        <div class="d-flex align-items-center gap-2 lh-base">
                                            <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                                            <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                        <div class="position-relative px-4 pt-3 pb-2">
                                            <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="56" height="56" alt="matdash-img" />
                                                <div>
                                                    <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                                                    </h5>
                                                    <p class="mb-0 text-dark">
                                                        david@wrappixel.com
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="message-body">
                                                <a href="../default-sidebar/page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Profile
                                                </a>
                                                <a href="../default-sidebar/page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Subscription
                                                </a>
                                                <a href="../default-sidebar/app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                                                    My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                </a>
                                                <a href="../default-sidebar/page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                                                    Account Settings
                                                </a>
                                                <a href="../default-sidebar/authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
                                                    Sign Out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end profile Dropdown -->
                                <!-- ------------------------------- -->
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </header>
        <!--  Header End -->

        <aside class="left-sidebar with-horizontal">
            <!-- Sidebar scroll-->
            <div>
                <!-- Sidebar navigation-->
                <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                    <ul id="sidebarnav">
                        <!-- ============================= -->
                        <!-- Home -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <!-- =================== -->
                        <!-- Dashboard -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/index.html" class="sidebar-link">
                                        <i class="ti ti-aperture"></i>
                                        <span class="hide-menu">Dashboard 1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/index2.html" class="sidebar-link">
                                        <i class="ti ti-shopping-cart"></i>
                                        <span class="hide-menu">Dashboard 2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/index3.html" class="sidebar-link">
                                        <i class="ti ti-atom"></i>
                                        <span class="hide-menu">Dashboard 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- Apps -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Apps</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-calendar.html" class="sidebar-link">
                                        <i class="ti ti-calendar"></i>
                                        <span class="hide-menu">Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/apps-kanban.html" class="sidebar-link">
                                        <i class="ti ti-layout-kanban"></i>
                                        <span class="hide-menu">Kanban</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-chat.html" class="sidebar-link">
                                        <i class="ti ti-message-dots"></i>
                                        <span class="hide-menu">Chat</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../default-sidebar/app-email.html" aria-expanded="false">
                      <span>
                        <i class="ti ti-mail"></i>
                      </span>
                                        <span class="hide-menu">Email</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-contact.html" class="sidebar-link">
                                        <i class="ti ti-phone"></i>
                                        <span class="hide-menu">Contact Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-contact2.html" class="sidebar-link">
                                        <i class="ti ti-list-details"></i>
                                        <span class="hide-menu">Contact List</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-notes.html" class="sidebar-link">
                                        <i class="ti ti-notes"></i>
                                        <span class="hide-menu">Notes</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/app-invoice.html" class="sidebar-link">
                                        <i class="ti ti-file-text"></i>
                                        <span class="hide-menu">Invoice</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/page-user-profile.html" class="sidebar-link">
                                        <i class="ti ti-user-circle"></i>
                                        <span class="hide-menu">User Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/blog-posts.html" class="sidebar-link">
                                        <i class="ti ti-article"></i>
                                        <span class="hide-menu">Posts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/blog-detail.html" class="sidebar-link">
                                        <i class="ti ti-details"></i>
                                        <span class="hide-menu">Detail</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/eco-shop.html" class="sidebar-link">
                                        <i class="ti ti-shopping-cart"></i>
                                        <span class="hide-menu">Shop</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/eco-shop-detail.html" class="sidebar-link">
                                        <i class="ti ti-basket"></i>
                                        <span class="hide-menu">Shop Detail</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/eco-product-list.html" class="sidebar-link">
                                        <i class="ti ti-list-check"></i>
                                        <span class="hide-menu">List</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/eco-checkout.html" class="sidebar-link">
                                        <i class="ti ti-brand-shopee"></i>
                                        <span class="hide-menu">Checkout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../default-sidebar/eco-add-product.html">
                                        <i class="ti ti-file-plus"></i>
                                        <span class="hide-menu">Add Product</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../default-sidebar/eco-edit-product.html">
                                        <i class="ti ti-file-pencil"></i>
                                        <span class="hide-menu">Edit Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- PAGES -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">PAGES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/page-faq.html" class="sidebar-link">
                                        <i class="ti ti-help"></i>
                                        <span class="hide-menu">FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/page-account-settings.html" class="sidebar-link">
                                        <i class="ti ti-user-circle"></i>
                                        <span class="hide-menu">Account Setting</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/page-pricing.html" class="sidebar-link">
                                        <i class="ti ti-currency-dollar"></i>
                                        <span class="hide-menu">Pricing</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/widgets-cards.html" class="sidebar-link">
                                        <i class="ti ti-cards"></i>
                                        <span class="hide-menu">Card</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/widgets-banners.html" class="sidebar-link">
                                        <i class="ti ti-ad"></i>
                                        <span class="hide-menu">Banner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/widgets-charts.html" class="sidebar-link">
                                        <i class="ti ti-chart-bar"></i>
                                        <span class="hide-menu">Charts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/starter.html" class="sidebar-link">
                                        <i class="ti ti-file"></i>
                                        <span class="hide-menu">Starter</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../landingpage/index.html" class="sidebar-link">
                                        <i class="ti ti-app-window"></i>
                                        <span class="hide-menu">Landing Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- UI -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">UI</span>
                        </li>
                        <!-- =================== -->
                        <!-- UI Elements -->
                        <!-- =================== -->
                        <li class="sidebar-item mega-dropdown">
                            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">UI</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-accordian.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Accordian</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-badge.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Badge</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-buttons.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-dropdowns.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-modals.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-tab.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-tooltip-popover.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Tooltip & Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-notification.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-progressbar.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-pagination.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Pagination</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-typography.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-bootstrap-ui.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Bootstrap UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-breadcrumb.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-offcanvas.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-lists.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Lists</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-grid.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-carousel.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-scrollspy.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-spinner.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/ui-link.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Link</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- Forms -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Forms</span>
                        </li>
                        <!-- =================== -->
                        <!-- Forms -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link two-column has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <!-- form elements -->
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-inputs.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Forms Input</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-input-groups.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Input Groups</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-input-grid.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Input Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-checkbox-radio.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Checkbox & Radios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-bootstrap-switch.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Bootstrap Switch</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-select2.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Select2</span>
                                    </a>
                                </li>
                                <!-- form inputs -->
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-basic.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Basic Form</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-vertical.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Vertical</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-horizontal.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Horizontal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-actions.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Actions</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-row-separator.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Row Separator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-bordered.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Bordered</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-detail.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Detail</span>
                                    </a>
                                </li>
                                <!-- form wizard -->
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-wizard.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Form Wizard</span>
                                    </a>
                                </li>
                                <!-- Quill Editor -->
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-editor-quill.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Quill Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/form-editor-tinymce.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Tinymce Editor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- Tables -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Tables</span>
                        </li>
                        <!-- =================== -->
                        <!-- Bootstrap Table -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-basic.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-dark-basic.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Dark Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-sizing.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Sizing Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-layout-coloured.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Coloured Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-datatable-basic.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Basic Initialisation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-datatable-api.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">API</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/table-datatable-advanced.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Advanced</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- Charts -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Charts</span>
                        </li>
                        <!-- =================== -->
                        <!-- Apex Chart -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:chart-square-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-line.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Line Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-area.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Area Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-bar.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-pie.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Pie Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-radial.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Radial Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../default-sidebar/chart-apex-radar.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Radar Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================= -->
                        <!-- Icons -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Icons</span>
                        </li>

                        <!-- =================== -->
                        <!-- Icon -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:sticker-smile-square-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../default-sidebar/icon-tabler.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                                        <span class="hide-menu">Tabler Icon</span>
                                    </a>
                                </li>
                                <!-- =================== -->
                                <!-- Solar Icon -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link sidebar-link" href="../default-sidebar/icon-solar.html" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                                        <span class="hide-menu">Solar Icon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- multi level -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                  </span>
                                <span class="hide-menu">Multi DD</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../docs/index.html" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Documentation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link has-arrow">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 2</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 2.1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 2.2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 2.3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="body-wrapper">
                <div class="container-fluid">

                    <div class="card card-body py-3 mt-3">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="d-sm-flex align-items-center justify-space-between">
                                    <h4 class="mb-4 mb-sm-0 card-title">@yield('title')</h4>
                                    <nav aria-label="breadcrumb" class="ms-auto">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item d-flex align-items-center">
                                                <a class="text-muted text-decoration-none d-flex">
                                                    <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">
                                                <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">@yield('title')</span>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('dashboard')
                </div>
        </div>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

            <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
                <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                        <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                    </label>

                    <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                        <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout">
                        <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                    </label>

                    <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout">
                        <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                    <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout">
                            <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout">
                        <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                    </label>

                    <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout">
                        <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                    </label>
                </div>

                <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <a href="javascript:void(0)" class="fullsidebar">
                        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                        </label>
                    </a>
                    <div>
                        <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
                            <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
                        <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                    </label>

                    <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
                        <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                    </label>
                </div>
            </div>
        </div>

        <script>
            function handleColorTheme(e) {
                document.documentElement.setAttribute("data-color-theme", e);
            }
        </script>
    </div>


</div>
<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->
<!-- Bootstrap ve diğer kütüphaneler -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Tema ve uygulama dosyaları -->
<script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
<script src="{{ asset('assets/js/theme/theme.js') }}"></script>
<script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
<script src="{{ asset('assets/js/theme/sidebarmenu-default.js') }}"></script>

<!-- Solar ikonları ve ekstra kütüphaneler -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{ asset('assets/js/extra-libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('assets/js/dashboards/dashboard2.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatable-basic.init.js') }}"></script>

</body>

</html>
