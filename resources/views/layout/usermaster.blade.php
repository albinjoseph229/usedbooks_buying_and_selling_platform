<!DOCTYPE html>
<html lang="en-US">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link media="all"
        href="{{asset('wp-content/cache/autoptimize/css/autoptimize_d978956e96477633e69416150ecd9253.css')}}"
        rel="stylesheet" />
    <title>BookBuddy &#8211; Classified Ads Marketplace</title>
    <meta name='robots' content='max-image-preview:large' />
    <!-- Speed of this site is optimised by WP Performance Score Booster plugin v2.2 - https://dipakgajjar.com/wp-performance-score-booster/ -->
    <link rel='dns-prefetch' href='http://unpkg.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Adifier &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Adifier &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/themes\/adifier\/wp-includes\/js\/wp-emoji-release.min.js"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode,
                e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                        55356, 56826, 55356, 56819
                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                        56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                        56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                    ]);
                case "emoji":
                    return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='adifier-fonts-css'
        href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%7CQuicksand%3A700%2C400%2C500%7CRoboto%3A500%26subset%3Dall&amp;ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='adifier-map-style-css' href='dist/leaflet.css' type='text/css' media='all' />



    <style id='adifier-style-inline-css' type='text/css'>
    body,
    .mapboxgl-popup-content .price {
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        font-size: 14px;
        line-height: 24px;
        font-weight: 400;
        color: #484848;
    }

    .mapboxgl-popup-content .price {
        font-weight: 600;
    }

    input[type="submit"],
    a,
    a:active,
    a:focus {
        color: #666666
    }

    /* FONT 500 */
    .navigation li a,
    .special-nav a,
    .single-advert-title .breadcrumbs {
        font-family: 'Quicksand', sans-serif;
    }

    /* FONT 400 */
    .author-address em,
    .contact-seller em,
    .reveal-phone em,
    .header-search select,
    .header-search input {
        font-family: 'Quicksand', sans-serif;
    }

    .pagination>span,
    .pagination a,
    body .kc_tabs_nav>li>a {
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        color: #333333;
    }

    .header-alike,
    .af-title p,
    .element-qs input,
    body .elementor-widget-tabs .elementor-tab-title,
    body .elementor-widget-tabs .elementor-tab-title a,
    body .elementor-widget-accordion .elementor-accordion .elementor-accordion-title {
        font-family: 'Quicksand', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Quicksand', sans-serif;
        line-height: 1.3;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a,
    h1 a:focus,
    h2 a:focus,
    h3 a:focus,
    h4 a:focus,
    h5 a:focus,
    h6 a:focus {
        color: #333333;
    }

    h1,
    .h1-size {
        font-size: 40px;
    }

    h2,
    .h2-size {
        font-size: 35px;
    }

    h3,
    .h3-size {
        font-size: 30px;
    }

    h4,
    .h4-size {
        font-size: 25px;
    }

    h5,
    .h5-size {
        font-size: 18px;
    }

    h6,
    .h6-size {
        font-size: 16px;
    }

    a:hover,
    .article-title a:hover,
    h1 a:focus:hover,
    h2 a:focus:hover,
    h3 a:focus:hover,
    h4 a:focus:hover,
    h5 a:focus:hover,
    h6 a:focus:hover,
    .styled-radio.active label:before,
    .styled-radio input:checked+label:before,
    .styled-checkbox.active label:before,
    .styled-checkbox input:checked+label:before,
    .owl-video-play-icon:hover:before,
    .adverts-slider .owl-nav>div,
    .account-btn,
    .account-btn:focus,
    .account-btn:active,
    .navigation a:hover,
    .navigation li.current-menu-ancestor>a,
    .navigation li.current_page_ancestor>a,
    .navigation li.current_page_ancestor>a:visited,
    .navigation li.current_page_item>a,
    .navigation li.current_page_item>a:visited,
    .navigation li.current-menu-item>a,
    .navigation li.current-menu-item>a:visited,
    .bid-login,
    .bid-login:active,
    .bid-login:focus,
    .bid-login:hover,
    .error404 .white-block-content i,
    .or-divider h6,
    .cf-loader,
    .layout-view a.active,
    .no-advert-found i,
    .single-advert-actions li a:hover,
    .widget_adifier_advert_locations i,
    body .kc_accordion_header.ui-state-active>a,
    .author-no-listing i,
    .adverts-filter ul li.active a,
    .image-input-wrap a:hover i,
    .mess-loading,
    .con-loading,
    .open-reponse-form,
    .promotion-description-toggle,
    .promotion-description-toggle:focus,
    #purchase .loader,
    .purchase-loader i,
    .video-input-wrap a:hover,
    .another-video:hover,
    .user-rating,
    .rate-user,
    .reset-search:focus:hover,
    .element-categories-tree li a:hover,
    .element-categories-tree .view-more a:hover,
    .advert-item .aficon-heart,
    .random-author-ads .aficon-heart,
    .advert-carde .compare-add.active,
    .compare-add.active,
    .compare-add.active:hover,
    .compare-add.active:active,
    .toggle-conversations,
    .toggle-conversations:hover,
    .toggle-conversations:active,
    .element-categories-table>a:hover h6,
    .user-details-list a,
    .user-details-list a:active,
    .user-details-list a:focus,
    .element-categories-v-list a:hover h5,
    body .elementor-widget-accordion .elementor-active .elementor-accordion-icon,
    body .elementor-widget-accordion .elementor-active .elementor-accordion-title,
    body .elementor-accordion .elementor-tab-title.elementor-active a {
        color: #00a591;
    }

    @media (max-width: 1024px) {

        .small-sidebar-open,
        .special-nav a,
        .special-nav a:focus,
        .special-nav a:active {
            color: #00a591;
        }
    }

    blockquote,
    .owl-carousel .owl-video-play-icon:hover,
    .owl-video-play-icon:hover:before,
    .filter-slider.ui-slider .ui-state-default,
    .filter-slider.ui-slider .ui-widget-content .ui-state-default,
    .filter-slider.ui-slider .ui-state-focus,
    .filter-slider.ui-slider .ui-state-hover,
    .filter-slider.ui-slider .ui-widget-content .ui-state-focus,
    .filter-slider.ui-slider .ui-widget-content .ui-state-hover,
    .promotion:not(.disabled):not(.inactive) .promo-price-item:hover,
    .layout-view a:hover,
    .adverts-filter ul li.active a,
    input:focus,
    textarea:focus,
    select:focus,
    .select2-container--open.select2-container--default .select2-selection--single {
        border-color: #00a591;
    }

    .rtl .conversation-wrap.current,
    .rtl .conversation-wrap:hover {
        border-right-color: #00a591;
    }

    .author-sidebar li.active {
        border-left-color: #00a591;
    }

    .scroll-element .scroll-element_track,
    .scroll-element .scroll-bar,
    .scroll-element:hover .scroll-bar.scroll-element.scroll-draggable .scroll-bar,
    .pagination>span:not(.dots),
    .pagination a.current,
    .af-interactive-slider a {
        background-color: #00a591;
    }

    .af-button,
    input[type="submit"],
    .af-button:focus,
    .af-button:active,
    .filter-slider.ui-slider .ui-slider-range,
    .comment-avatar .icon-user,
    .author-address,
    .single-price,
    .kc-search .af-button,
    .kc-search .af-button:hover,
    .kc-search .af-button:focus,
    .kc-search .af-button:active,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>.ui-tabs-active>a:hover,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>li>a:hover,
    .message-actions a:not(.disabled):hover,
    .profile-advert .action a:nth-child(1):hover i,
    .profile-advert .action a:nth-child(4) i,
    body .elementor-widget-tabs .elementor-tab-title:hover,
    body .elementor-widget-tabs .elementor-tab-title.elementor-active {
        background: #00a591;
    }

    @media (min-width: 1025px) {

        .submit-btn,
        .submit-btn:focus,
        .submit-btn:active {
            background: #00a591;
            color: #ffffff;
        }

        .submit-btn:hover {
            background: #008c77;
            color: #ffffff;
        }
    }

    @media (max-width: 1024px) {

        .submit-btn,
        .submit-btn:focus,
        .submit-btn:active {
            color: #00a591;
        }
    }

    .af-button,
    input[type="submit"],
    .af-button:focus,
    .af-button:active,
    .pagination>span:not(.dots),
    .pagination a.current,
    .comment-avatar .icon-user,
    .single-price,
    .single-price .price,
    .single-price .price span:not(.price-symbol):not(.text-price),
    .kc-search .af-button,
    .kc-search .af-button:hover,
    .kc-search .af-button:focus,
    .kc-search .af-button:active,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>.ui-tabs-active>a:hover,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>li>a:hover,
    .message-actions a:not(.disabled):hover,
    .af-interactive-slider a:hover,
    .status.live,
    body .elementor-widget-tabs .elementor-tab-title:hover,
    body .elementor-widget-tabs .elementor-tab-title.elementor-active {
        color: #ffffff;
    }

    .af-button:hover,
    .af-button.af-secondary:hover,
    input[type="submit"]:hover,
    .pagination a:hover,
    .author-address i,
    .kc-search .af-button:hover,
    .bidding-history:hover,
    .af-interactive-slider a:hover {
        background: #008c77;
    }

    .element-categories-list svg,
    .element-categories-v-list a:hover svg,
    .element-categories-transparent-wrap svg,
    .element-categories-table svg,
    .widget_adifier_advert_categories a:hover svg,
    .header-cats a:hover svg {
        fill: #008c77;
    }

    .af-button:hover,
    .af-button.af-secondary:hover,
    input[type="submit"]:hover,
    .pagination a:hover,
    .author-address i,
    .kc-search .af-button:hover,
    .bidding-history:hover,
    .af-interactive-slider a:hover {
        color: #ffffff;
    }

    .modal-header a:hover,
    .profile-advert-cats a:hover {
        color: #008c77;
    }

    .header-search>a,
    .header-search>a:hover,
    .header-search>a:focus,
    .af-button.af-cta {
        background: #ff5a5f;
        color: #ffffff;
    }

    .header-search>a:hover,
    .af-button.af-cta:hover {
        background: #d54b4f;
        color: #ffffff;
    }

    .logo {
        width: 170px;
    }

    .page-title {
        background-color: #2a2f36;
        background-image: url(wp-content/uploads/2018/02/bg-2-2.png);
    }

    .page-title,
    .page-title h1,
    .page-title a,
    .breadcrumbs {
        color: #ffffff;
    }

    .bottom-advert-meta .price {
        color: #d54b4f;
    }

    .bottom-sidebar-wrap {
        background: #374252;
    }

    .bottom-sidebar-wrap,
    .bottom-sidebar-wrap a,
    .bottom-sidebar-wrap a:hover,
    .bottom-sidebar-wrap a:focus {
        color: #959ba7;
    }

    .bottom-sidebar-wrap .widget .white-block-title h5,
    .bottom-sidebar-wrap a:hover {
        color: #ffffff;
    }

    .price-table-price {
        background: #374252;
        color: #ffffff;
    }

    .price-table-title h5 {
        background: #2e3744;
        color: #ffffff;
    }

    .price-table-element .af-button:focus,
    .price-table-element .af-button:active,
    .price-table-element .af-button {
        background: #374252;
        color: #ffffff;
    }

    .price-table-element .af-button:hover {
        background: #2e3744;
        color: #ffffff;
    }

    .active-price-table .price-table-price {
        background: #00a591;
        color: #ffffff;
    }

    .active-price-table .price-table-title h5 {
        background: #008c77;
        color: #ffffff;
    }

    .active-price-table.price-table-element .af-button:focus,
    .active-price-table.price-table-element .af-button:active,
    .active-price-table.price-table-element .af-button {
        background: #00a591;
        color: #ffffff;
    }

    .active-price-table.price-table-element .af-button:hover {
        background: #008c77;
        color: #ffffff;
    }

    .copyrights {
        background: #2d323e;
    }

    .copyrights div,
    .copyrights a,
    .copyrights a:hover,
    .copyrights a:focus {
        color: #aaaaaa;
    }

    .copyrights a:hover {
        color: #ffffff;
    }

    .subscription-footer {
        background: #ffffff
    }

    .subscription-footer,
    .subscription-footer h4 {
        color: #2d323e
    }

    .subscription-footer .submit-ajax-form,
    .subscription-footer .submit-ajax-form:hover,
    .subscription-footer .submit-ajax-form:active,
    .subscription-footer .submit-ajax-form:visited {
        background: #2d323e;
        color: #ffffff;
    }

    .subscription-footer input {
        border-color: #2d323e;
    }

    /* CTAs */
    .reveal-phone,
    .reveal-phone:focus,
    .reveal-phone:hover {
        color: #ffffff;
        background: #ff5a5f;
    }

    .reveal-phone i {
        background: #d54b4f;
    }

    .contact-seller,
    .contact-seller:focus,
    .contact-seller:hover,
    .bidding-history,
    .bidding-history:focus,
    .phone-code-send-again,
    .phone-code-send-again:focus {
        color: #ffffff;
        background: #4b586b;
    }

    @media (min-width: 431px) {

        .header-3 .account-btn,
        .header-3 .account-btn:focus,
        .header-3 .account-btn:active,
        .header-3 .submit-btn,
        .header-3 .submit-btn:focus,
        .header-3 .submit-btn:active,
        .header-3 .small-sidebar-open,
        .header-3 .small-sidebar-open:focus,
        .header-3 .small-sidebar-open:active {
            color: #ffffff;
        }
    }

    .header-2.sticky-header.header-3:not(.sticky-nav) {
        background: rgba(55, 66, 82, 0.4);
    }

    .header-2.sticky-header {
        background: #374252;
    }

    @media (min-width: 1025px) {
        .header-2 .navigation>li>a {
            color: #ffffff;
        }

        .header-2 .navigation>li.current-menu-ancestor>a,
        .header-2 .navigation>li.current_page_ancestor>a,
        .header-2 .navigation>li.current_page_ancestor>a:visited,
        .header-2 .navigation>li.current_page_item>a,
        .header-2 .navigation>li.current_page_item>a:visited,
        .header-2 .navigation>li.current-menu-item>a,
        .header-2 .navigation>li.current-menu-item>a:visited,
        .header-2 .navigation>li>a:hover {
            color: #ffffff;
        }

        .header-2.sticky-header .account-btn,
        .header-2.sticky-header .account-btn:focus,
        .header-2.sticky-header .account-btn:active {
            color: #ffffff;
        }

        .header-2.sticky-header:not(.header-3) .submit-btn,
        .header-2.sticky-header:not(.header-3) .submit-btn:focus,
        .header-2.sticky-header:not(.header-3) .submit-btn:active {
            color: #ffffff;
            border: 2px solid #ffffff;
        }

        .header-2.sticky-header:not(.header-3) .submit-btn:hover {
            color: #ffffff;
        }
    }

    .header-5 .navigation-wrap,
    body>header.header-5 .special-nav,
    .header-5 {
        background: #374252;
    }

    .header-5 .navigation>li>a {
        color: #ffffff;
    }

    @media (max-width: 1024px) {
        .header-5 .navigation>li a {
            color: #ffffff;
        }
    }

    .header-5 .navigation>li.current-menu-ancestor>a,
    .header-5 .navigation>li.current_page_ancestor>a,
    .header-5 .navigation>li.current_page_ancestor>a:visited,
    .header-5 .navigation>li.current_page_item>a,
    .header-5 .navigation>li.current_page_item>a:visited,
    .header-5 .navigation>li.current-menu-item>a,
    .header-5 .navigation>li.current-menu-item>a:visited,
    .header-5 .navigation>li>a:hover {
        color: #ffffff;
    }

    .header-5.sticky-header .special-nav .show-on-414 a,
    .header-5.sticky-header .special-nav .show-on-414 a:focus,
    .header-5.sticky-header .special-nav .show-on-414 a:active,
    .header-5.sticky-header .account-btn,
    .header-5.sticky-header .account-btn:focus,
    .header-5.sticky-header .account-btn:active,
    .header-5.sticky-header .small-sidebar-open,
    .header-5.sticky-header .small-sidebar-open:focus,
    .header-5.sticky-header .small-sidebar-open:hover,
    .header-5.sticky-header .submit-btn,
    .header-5.sticky-header .submit-btn:focus,
    .header-5.sticky-header .submit-btn:active {
        color: #ffffff;
        background: transparent;
    }

    @media (min-width: 1025px) {

        .header-5.sticky-header:not(.header-3) .submit-btn,
        .header-5.sticky-header:not(.header-3) .submit-btn:focus,
        .header-5.sticky-header:not(.header-3) .submit-btn:active {
            color: #ffffff;
            border: 2px solid #ffffff;
        }
    }
    </style>



    <script type='text/javascript' src='wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>

    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/10.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />
    <link rel="canonical" href="{{ route('/')}}" />
    <link rel='shortlink' href="{{ route('/')}}" />
    <meta name="generator" content="Redux 4.3.20" />
    <script type="text/javascript">
    var kc_script_data = {
        ajax_url: "https:// themes/adifier/wp-admin/admin-ajax.php"
    }
    </script>
    <link rel="icon" href="wp-content/uploads/2018/03/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2018/03/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2018/03/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://wp-content/uploads/2018/03/cropped-favicon-270x270.png" />
    <script type="text/javascript"></script>
    <style type="text/css" id="kc-css-render">
    @media only screen and (min-width:1000px) and (max-width:5000px) {
        body.kc-css-system .kc-css-340710 {
            width: 16.66%;
        }

        body.kc-css-system .kc-css-992324 {
            width: 66.66%;
        }

        body.kc-css-system .kc-css-101869 {
            width: 16.66%;
        }

        body.kc-css-system .kc-css-132113 {
            width: 8.33%;
        }

        body.kc-css-system .kc-css-824662 {
            width: 83.33%;
        }

        body.kc-css-system .kc-css-874828 {
            width: 8.33%;
        }

        body.kc-css-system .kc-css-237606 {
            width: 41.66%;
        }

        body.kc-css-system .kc-css-518758 {
            width: 58.33%;
        }

        body.kc-css-system .kc-css-305756 {
            width: 25%;
        }

        body.kc-css-system .kc-css-255486 {
            width: 25%;
        }

        body.kc-css-system .kc-css-631237 {
            width: 25%;
        }

        body.kc-css-system .kc-css-831121 {
            width: 25%;
        }
    }

    body.kc-css-system .kc-css-975399 {
        background: transparent url(wp-content/uploads/2018/02/bg-blue.jpg) center center/cover no-repeat fixed;
        margin-top: -100px;
        padding-top: 250px;
        padding-bottom: 250px;
    }

    body.kc-css-system .kc-css-824662 {
        background: #f8f8f8;
        margin-top: -90px;
        padding: 23px 20px 23px 20px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        box-shadow: 0 -12px 10px 0 rgba(42, 47, 54, .3);
    }

    body.kc-css-system .kc-css-874828 {
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
    }

    body.kc-css-system .kc-css-195631 {
        margin-top: 100px;
    }

    body.kc-css-system .kc-css-662149 {
        background: transparent url(https://wp-content/uploads/2018/03/hiw-bg.jpg) center center/cover repeat scroll;
        margin-top: 100px;
    }

    body.kc-css-system .kc-css-237606 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    body.kc-css-system .kc-css-518758 {
        background: transparent url(https://themes/adifier/wp-admin/admin-ajax.php?action=kc_get_thumbn&type=filter_url&id=%2Fwp-content%2Fuploads%2F2018%2F03%2Fiii.png) center center/100% no-repeat scroll;
    }

    body.kc-css-system .kc-css-481809 {
        background: #ffffff;
        padding-top: 75px;
        padding-bottom: 90px;
    }

    body.kc-css-system .kc-css-83579 {
        margin-top: 75px;
    }

    @media only screen and (max-width:1024px) {
        body.kc-css-system .kc-css-975399 {
            padding-top: 200px;
            padding-bottom: 250px;
        }
    }

    @media only screen and (max-width:999px) {
        body.kc-css-system .kc-css-975399 {
            background: transparent url(https://wp-content/uploads/2018/02/bg-blue.jpg) center center/cover no-repeat scroll;
        }
    }
    </style>
</head>

<body
    class="home page-template page-template-page-tpl_home page-template-page-tpl_home-php page page-id-10 kingcomposer kc-css-system">

    <header class="header-2 header-3 sticky-header sticky-nav" style="top: 0px;">
        <div class="container" style="width: 90%;">
            <div class="flex-wrap">

                <div class="show-on-414">
                </div>
                <a href="{{ route('/')}}" class="logo">
                    <img src="wp-content/uploads/2018/03/logo-footer.png" alt="logo" width="170" height="50" />
                </a>
                <div class="navigation-wrap">
                    <ul class="navigation list-inline list-unstyled">
                        <li id="menu-item-1"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1 current_page_item menu-item-has-children menu-item-15 dropdown ">
                            <a title="Home" href="{{ route('userhome')}}" data-toggle="dropdown" class="dropdown-toggle"
                                data-hover="dropdown" aria-haspopup="true">Home </a>

                        </li>
                        <li id="menu-item-2"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2 ">
                            <a title="Buy Books" href="{{ route('user.buybooks')}}" data-toggle="dropdown"
                                class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">Buy Books </a>
                        </li>
                        <li id="menu-item-2"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2 ">
                        <a title="Buy Books" href="{{ route('user.dashboard')}}" data-toggle="dropdown"
                            class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">My DashBoard </a>
                    </li>
                        <li id="menu-item-3"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3 ">
                            <a title="Career" href="{{ route('user.viewcareer')}}" data-toggle="dropdown"
                                class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">View Career</a>

                        </li>

                        <li id="menu-item-4"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4">
                            <a title="Blogs" href="{{ route('user.viewblogs')}}" data-toggle="dropdown"
                                class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">View Blogs </a>
                        </li>
                        <li id="menu-item-5"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5">
                            <a title="Blogs" href="{{ route('user.postblogs')}}" data-toggle="dropdown"
                                class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">Post Blogs </a>
                        </li>
                        <li id="menu-item-6"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6"><a
                                title="Contact" href="{{ route('user.usercontactus')}}">Contact Us</a>
                        </li>
                        <li id="menu-item-7"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7"><a
                                title="Contact" href="{{ route('user.changepassword')}}">Change Password</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8">
                            <a href="{{ route('logout')}}" class="nav-link">
                                Logout
                        </li>


                    </ul>
                </div>
                <div class="special-nav flex-wrap">
                    <a href="javascript:void(0);" class="account-btn small-sidebar-open search-trigger show-on-414"
                        data-target=".search-sidebar">
                        <i class="aficon-search"></i>
                        <span class="small-icon">Search</span>
                    </a>

                    <a href="{{ route('user.sellbooks')}}" data-toggle="modal" data-target="#login"
                        class="submit-btn-wrap submit-btn submit-redirect">
                        <i class="fas fa-money-check"></i>
                        <span>Sell Book</span>
                        <span class="small-icon">Sell Book</span>
                    </a> <a href="javascript:void(0);" class="small-sidebar-open navigation-trigger"
                        data-target=".navigation-wrap">
                        <i class="aficon-align-justify"></i>
                        <span class="small-icon">Menu</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <header class="header-1 sticky-header show-on-414">
        <div class="container">
            <div class="flex-wrap">
                <div class="show-on-414">
                    <a href="javascript:void(0);" class="small-sidebar-open navigation-trigger"
                        data-target=".navigation-wrap">
                        <i class="aficon-align-justify"></i>
                        <span class="small-icon">Menu</span>
                    </a>
                </div>
                <a href="{{ route('/')}}" class="logo">

                </a>
                <div class="dark-logo-wrap">
                </div>
                <div class="show-on-414">
                    <a href="#" data-toggle="modal" data-target="#login"
                        class="submit-btn-wrap submit-btn submit-redirect">
                        <i class="fas fa-money-check"></i>
                        <span>Submit Ad</span>
                        <span class="small-icon">Submit Ad</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="clearfix">
        <div class="kc_clfw"></div>
    </main>





    @yield('content')

    <footer>
        <div class="bottom-sidebar-wrap">
            <div class="container height: 200px width: 300px; ">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget white-block clearfix widget_media_image"><img width="170" height="50"
                                src="wp-content/uploads/2018/03/logo-footer.png"
                                class="image wp-image-544  attachment-full size-full" alt="" decoding="async"
                                loading="lazy" style="max-width: 100%; height: auto;" /></div>
                        <div class="widget white-block clearfix widget_text">
                            <div class="textwidget">
                                <p>If you wish to contact us:</p>
                                <ul>
                                    <li><i class="aficon-map-marker-alt-o" style="margin-right: 10px;"></i><span
                                            style="color: #fff;">Project Group6</span></li>
                                    <li><i class="aficon-phone" style="margin-right: 10px;"></i> <span
                                            style="color: #fff;">+123456789</font>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget white-block clearfix widget_nav_menu">
                            <div class="white-block-title">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="menu-widget-menu-container">
                                <ul id="menu-widget-menu" class="menu">
                                    <li id="menu-item-358"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-358">
                                        <a href="how-it-works/index.html">How It Works</a>
                                    </li>
                                    <li id="menu-item-359"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359">
                                        <a href="faq/index.html">FAQ</a>
                                    </li>
                                    <li id="menu-item-360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360">
                                        <a href="news/index.html">News</a>
                                    </li>
                                    <li id="menu-item-361"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361">
                                        <a href="browse-with-map/index.html">Browse With Map</a>
                                    </li>
                                    <li id="menu-item-362"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362">
                                        <a href="browse-ads/index.html">Browse Ads</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="widget white-block clearfix widget_nav_menu">
                            <div class="white-block-title">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="menu-widget-menu-container">
                                <ul id="menu-widget-menu" class="menu">
                                    <li id="menu-item-358"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-358">
                                        <a href="how-it-works/index.html">How It Works</a>
                                    </li>
                                    <li id="menu-item-359"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359">
                                        <a href="faq/index.html">FAQ</a>
                                    </li>
                                    <li id="menu-item-360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360">
                                        <a href="news/index.html">News</a>
                                    </li>
                                    <li id="menu-item-361"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361">
                                        <a href="browse-with-map/index.html">Browse With Map</a>
                                    </li>
                                    <li id="menu-item-362"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362">
                                        <a href="browse-ads/index.html">Browse Ads</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget white-block clearfix widget_search">
                            <form method="get" class="searchform" action="https://themes/adifier/">
                                <div class="adifier-form">
                                    <input type="text" value="" name="s" placeholder="Search for...">
                                    <input type="hidden" value="post" name="post_type">
                                    <a href="javascript:void(0);" class="submit-form"><i class="aficon-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
   
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
  
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
    
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
    $(function() {
      
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <script>
    $(function() {

        $('.deleteme').click(function() {
            $('#dodelete').val($(this).data('value'));
        });
    });
    </script>
    </footer>