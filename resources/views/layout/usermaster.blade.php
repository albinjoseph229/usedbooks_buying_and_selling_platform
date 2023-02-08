<!DOCTYPE html>
<html lang="en-US">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link media="all" href="wp-content/cache/autoptimize/css/autoptimize_d978956e96477633e69416150ecd9253.css"
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
        <div class="container">
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
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2 dropdown ">
                            <a title="Buy Books" href="{{ route('user.buybooks')}}" data-toggle="dropdown"
                                class="dropdown-toggle" data-hover="dropdown" aria-haspopup="true">Buy Books </a>
                        </li>
                        <li id="menu-item-3"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3 dropdown ">
                            <a title="Career" href="{{ route('user.viewcareer')}}" data-toggle="dropdown" class="dropdown-toggle"
                                data-hover="dropdown" aria-haspopup="true">Career</a>

                        </li>

                        <li id="menu-item-4"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4 dropdown ">
                            <a title="Blogs" href="{{ route('user.viewblogs')}}" data-toggle="dropdown" class="dropdown-toggle"
                                data-hover="dropdown" aria-haspopup="true">View Blogs </a>
                        </li>
                        <li id="menu-item-5"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5 dropdown ">
                            <a title="Blogs" href="{{ route('user.postblogs')}}" data-toggle="dropdown" class="dropdown-toggle"
                                data-hover="dropdown" aria-haspopup="true">Post Blogs </a>
                        </li>
                        <li id="menu-item-6"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6"><a
                                title="Contact" href="{{ route('user.usercontactus')}}">Contact</a>
                        </li>
                        <li id="menu-item-7"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7"><a
                                title="Contact" href="{{ route('user.changepassword')}}">Change Password</a>
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

    //  Sell Books Part

<head>
    <style type="text/css">
    .tippy-touch {
        cursor: pointer !important
    }

    .tippy-notransition {
        transition: none !important
    }

    .tippy-popper {
        max-width: 350px;
        -webkit-perspective: 700px;
        perspective: 700px;
        z-index: 9999;
        outline: 0;
        transition-timing-function: cubic-bezier(.165, .84, .44, 1);
        pointer-events: none;
        line-height: 1.4
    }

    .tippy-popper[data-html] {
        max-width: 96%;
        max-width: calc(100% - 20px)
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
        border-radius: 40% 40% 0 0
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow {
        bottom: -8px;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .tippy-popper[x-placement^=top] .tippy-arrow {
        border-top: 7px solid #333;
        border-right: 7px solid transparent;
        border-left: 7px solid transparent;
        bottom: -7px;
        margin: 0 6px;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
        -webkit-transform-origin: 0 90%;
        transform-origin: 0 90%
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(6) translate(-50%, 25%);
        transform: scale(6) translate(-50%, 25%);
        opacity: 1
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(1) translate(-50%, 25%);
        transform: scale(1) translate(-50%, 25%);
        opacity: 0
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective] {
        -webkit-transform-origin: bottom;
        transform-origin: bottom
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(-10px) rotateX(0);
        transform: translateY(-10px) rotateX(0)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0) rotateX(90deg);
        transform: translateY(0) rotateX(90deg)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(-10px) scale(1);
        transform: translateY(-10px) scale(1)
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0) scale(0);
        transform: translateY(0) scale(0)
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
        border-radius: 0 0 30% 30%
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow {
        top: -8px;
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    .tippy-popper[x-placement^=bottom] .tippy-arrow {
        border-bottom: 7px solid #333;
        border-right: 7px solid transparent;
        border-left: 7px solid transparent;
        top: -7px;
        margin: 0 6px;
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
        -webkit-transform-origin: 0 -90%;
        transform-origin: 0 -90%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(6) translate(-50%, -125%);
        transform: scale(6) translate(-50%, -125%);
        opacity: 1
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(1) translate(-50%, -125%);
        transform: scale(1) translate(-50%, -125%);
        opacity: 0
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
        -webkit-transform-origin: top;
        transform-origin: top
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(10px) rotateX(0);
        transform: translateY(10px) rotateX(0)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0) rotateX(-90deg);
        transform: translateY(0) rotateX(-90deg)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateY(10px) scale(1);
        transform: translateY(10px) scale(1)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(0) scale(0);
        transform: translateY(0) scale(0)
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
        border-radius: 50% 0 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow {
        right: -16px;
        -webkit-transform-origin: 33.33333333% 50%;
        transform-origin: 33.33333333% 50%
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .tippy-popper[x-placement^=left] .tippy-arrow {
        border-left: 7px solid #333;
        border-top: 7px solid transparent;
        border-bottom: 7px solid transparent;
        right: -7px;
        margin: 3px 0;
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(6) translate(40%, -50%);
        transform: scale(6) translate(40%, -50%);
        opacity: 1
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(1.5) translate(40%, -50%);
        transform: scale(1.5) translate(40%, -50%);
        opacity: 0
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective] {
        -webkit-transform-origin: right;
        transform-origin: right
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(-10px) rotateY(0);
        transform: translateX(-10px) rotateY(0)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0) rotateY(-90deg);
        transform: translateX(0) rotateY(-90deg)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(-10px) scale(1);
        transform: translateX(-10px) scale(1)
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0) scale(0);
        transform: translateX(0) scale(0)
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
        border-radius: 0 50% 50% 0
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow {
        left: -16px;
        -webkit-transform-origin: 66.66666666% 50%;
        transform-origin: 66.66666666% 50%
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .tippy-popper[x-placement^=right] .tippy-arrow {
        border-right: 7px solid #333;
        border-top: 7px solid transparent;
        border-bottom: 7px solid transparent;
        left: -7px;
        margin: 3px 0;
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
        -webkit-transform-origin: -100% 0;
        transform-origin: -100% 0
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(6) translate(-140%, -50%);
        transform: scale(6) translate(-140%, -50%);
        opacity: 1
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(1.5) translate(-140%, -50%);
        transform: scale(1.5) translate(-140%, -50%);
        opacity: 0
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective] {
        -webkit-transform-origin: left;
        transform-origin: left
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(10px) rotateY(0);
        transform: translateX(10px) rotateY(0)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0) rotateY(90deg);
        transform: translateX(0) rotateY(90deg)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
        opacity: 1;
        -webkit-transform: translateX(10px) scale(1);
        transform: translateX(10px) scale(1)
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(0) scale(0);
        transform: translateX(0) scale(0)
    }

    .tippy-tooltip {
        position: relative;
        color: #fff;
        border-radius: 4px;
        font-size: .9rem;
        padding: .3rem .6rem;
        text-align: center;
        will-change: transform;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-color: #333
    }

    .tippy-tooltip[data-size=small] {
        padding: .2rem .4rem;
        font-size: .75rem
    }

    .tippy-tooltip[data-size=large] {
        padding: .4rem .8rem;
        font-size: 1rem
    }

    .tippy-tooltip[data-animatefill] {
        overflow: hidden;
        background-color: transparent
    }

    .tippy-tooltip[data-animatefill] .tippy-content {
        transition: -webkit-clip-path cubic-bezier(.46, .1, .52, .98);
        transition: clip-path cubic-bezier(.46, .1, .52, .98);
        transition: clip-path cubic-bezier(.46, .1, .52, .98), -webkit-clip-path cubic-bezier(.46, .1, .52, .98)
    }

    .tippy-tooltip[data-interactive],
    .tippy-tooltip[data-interactive] path {
        pointer-events: auto
    }

    .tippy-tooltip[data-inertia][data-state=visible] {
        transition-timing-function: cubic-bezier(.53, 2, .36, .85)
    }

    .tippy-tooltip[data-inertia][data-state=hidden] {
        transition-timing-function: ease
    }

    .tippy-arrow,
    .tippy-roundarrow {
        position: absolute;
        width: 0;
        height: 0
    }

    .tippy-roundarrow {
        width: 24px;
        height: 8px;
        fill: #333;
        pointer-events: none
    }

    .tippy-backdrop {
        position: absolute;
        will-change: transform;
        background-color: #333;
        border-radius: 50%;
        width: 26%;
        left: 50%;
        top: 50%;
        z-index: -1;
        transition: all cubic-bezier(.46, .1, .52, .98);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .tippy-backdrop:after {
        content: "";
        float: left;
        padding-top: 100%
    }

    body:not(.tippy-touch) .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content {
        -webkit-clip-path: ellipse(100% 100% at 50% 50%);
        clip-path: ellipse(100% 100% at 50% 50%)
    }

    body:not(.tippy-touch) .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content {
        -webkit-clip-path: ellipse(5% 50% at 50% 50%);
        clip-path: ellipse(5% 50% at 50% 50%)
    }

    body:not(.tippy-touch) .tippy-popper[x-placement=right] .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content {
        -webkit-clip-path: ellipse(135% 100% at 0 50%);
        clip-path: ellipse(135% 100% at 0 50%)
    }

    body:not(.tippy-touch) .tippy-popper[x-placement=right] .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content {
        -webkit-clip-path: ellipse(40% 100% at 0 50%);
        clip-path: ellipse(40% 100% at 0 50%)
    }

    body:not(.tippy-touch) .tippy-popper[x-placement=left] .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content {
        -webkit-clip-path: ellipse(135% 100% at 100% 50%);
        clip-path: ellipse(135% 100% at 100% 50%)
    }

    body:not(.tippy-touch) .tippy-popper[x-placement=left] .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content {
        -webkit-clip-path: ellipse(40% 100% at 100% 50%);
        clip-path: ellipse(40% 100% at 100% 50%)
    }

    @media (max-width:360px) {
        .tippy-popper {
            max-width: 96%;
            max-width: calc(100% - 20px)
        }
    }
    </style>
    <title> Post An Ad - Quickad Classified</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Quickad Classified">
    <meta name="keywords"
        content="Classified, ads, php script, ads cms, Responisve, Bootstrap, Html5, Css3, Blog, Classified, Ads, Simple, Clean ">
    <meta name="description" content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="fb:app_id" content="1855120994738893">
    <meta property="og:site_name" content="Quickad Classified">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="/post-ad">
    <meta property="og:title" content=" Post An Ad - Quickad Classified">
    <meta property="og:description"
        content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://classified.bylancer.com/storage/logo/thenext-theme_logo.png">

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Post An Ad - Quickad Classified">
    <meta property="twitter:description"
        content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="twitter:domain" content="https://classified.bylancer.com/">
    <meta name="twitter:image:src" content="https://classified.bylancer.com/storage/logo/thenext-theme_logo.png">

    <link rel="shortcut icon" href="https://classified.bylancer.com/storage/logo/favicon.png">

    <script async="">
    var themecolor = '#00bd62';
    var mapcolor = '#8080ff';
    var siteurl = 'https://classified.bylancer.com/';
    var template_name = 'thenext-theme';
    var country_code = "in";
    </script>
    <style>
    :root {
        --theme-color-0_01: rgba(0, 189, 98, 0.01);
        --theme-color-0_02: rgba(0, 189, 98, 0.02);
        --theme-color-0_03: rgba(0, 189, 98, 0.03);
        --theme-color-0_04: rgba(0, 189, 98, 0.04);
        --theme-color-0_05: rgba(0, 189, 98, 0.05);
        --theme-color-0_06: rgba(0, 189, 98, 0.06);
        --theme-color-0_07: rgba(0, 189, 98, 0.07);
        --theme-color-0_08: rgba(0, 189, 98, 0.08);
        --theme-color-0_09: rgba(0, 189, 98, 0.09);
        --theme-color-0_1: rgba(0, 189, 98, 0.1);
        --theme-color-0_11: rgba(0, 189, 98, 0.11);
        --theme-color-0_12: rgba(0, 189, 98, 0.12);
        --theme-color-0_13: rgba(0, 189, 98, 0.13);
        --theme-color-0_14: rgba(0, 189, 98, 0.14);
        --theme-color-0_15: rgba(0, 189, 98, 0.15);
        --theme-color-0_16: rgba(0, 189, 98, 0.16);
        --theme-color-0_17: rgba(0, 189, 98, 0.17);
        --theme-color-0_18: rgba(0, 189, 98, 0.18);
        --theme-color-0_19: rgba(0, 189, 98, 0.19);
        --theme-color-0_2: rgba(0, 189, 98, 0.2);
        --theme-color-0_21: rgba(0, 189, 98, 0.21);
        --theme-color-0_22: rgba(0, 189, 98, 0.22);
        --theme-color-0_23: rgba(0, 189, 98, 0.23);
        --theme-color-0_24: rgba(0, 189, 98, 0.24);
        --theme-color-0_25: rgba(0, 189, 98, 0.25);
        --theme-color-0_26: rgba(0, 189, 98, 0.26);
        --theme-color-0_27: rgba(0, 189, 98, 0.27);
        --theme-color-0_28: rgba(0, 189, 98, 0.28);
        --theme-color-0_29: rgba(0, 189, 98, 0.29);
        --theme-color-0_3: rgba(0, 189, 98, 0.3);
        --theme-color-0_31: rgba(0, 189, 98, 0.31);
        --theme-color-0_32: rgba(0, 189, 98, 0.32);
        --theme-color-0_33: rgba(0, 189, 98, 0.33);
        --theme-color-0_34: rgba(0, 189, 98, 0.34);
        --theme-color-0_35: rgba(0, 189, 98, 0.35);
        --theme-color-0_36: rgba(0, 189, 98, 0.36);
        --theme-color-0_37: rgba(0, 189, 98, 0.37);
        --theme-color-0_38: rgba(0, 189, 98, 0.38);
        --theme-color-0_39: rgba(0, 189, 98, 0.39);
        --theme-color-0_4: rgba(0, 189, 98, 0.4);
        --theme-color-0_41: rgba(0, 189, 98, 0.41);
        --theme-color-0_42: rgba(0, 189, 98, 0.42);
        --theme-color-0_43: rgba(0, 189, 98, 0.43);
        --theme-color-0_44: rgba(0, 189, 98, 0.44);
        --theme-color-0_45: rgba(0, 189, 98, 0.45);
        --theme-color-0_46: rgba(0, 189, 98, 0.46);
        --theme-color-0_47: rgba(0, 189, 98, 0.47);
        --theme-color-0_48: rgba(0, 189, 98, 0.48);
        --theme-color-0_49: rgba(0, 189, 98, 0.49);
        --theme-color-0_5: rgba(0, 189, 98, 0.5);
        --theme-color-0_51: rgba(0, 189, 98, 0.51);
        --theme-color-0_52: rgba(0, 189, 98, 0.52);
        --theme-color-0_53: rgba(0, 189, 98, 0.53);
        --theme-color-0_54: rgba(0, 189, 98, 0.54);
        --theme-color-0_55: rgba(0, 189, 98, 0.55);
        --theme-color-0_56: rgba(0, 189, 98, 0.56);
        --theme-color-0_57: rgba(0, 189, 98, 0.57);
        --theme-color-0_58: rgba(0, 189, 98, 0.58);
        --theme-color-0_59: rgba(0, 189, 98, 0.59);
        --theme-color-0_6: rgba(0, 189, 98, 0.6);
        --theme-color-0_61: rgba(0, 189, 98, 0.61);
        --theme-color-0_62: rgba(0, 189, 98, 0.62);
        --theme-color-0_63: rgba(0, 189, 98, 0.63);
        --theme-color-0_64: rgba(0, 189, 98, 0.64);
        --theme-color-0_65: rgba(0, 189, 98, 0.65);
        --theme-color-0_66: rgba(0, 189, 98, 0.66);
        --theme-color-0_67: rgba(0, 189, 98, 0.67);
        --theme-color-0_68: rgba(0, 189, 98, 0.68);
        --theme-color-0_69: rgba(0, 189, 98, 0.69);
        --theme-color-0_7: rgba(0, 189, 98, 0.7);
        --theme-color-0_71: rgba(0, 189, 98, 0.71);
        --theme-color-0_72: rgba(0, 189, 98, 0.72);
        --theme-color-0_73: rgba(0, 189, 98, 0.73);
        --theme-color-0_74: rgba(0, 189, 98, 0.74);
        --theme-color-0_75: rgba(0, 189, 98, 0.75);
        --theme-color-0_76: rgba(0, 189, 98, 0.76);
        --theme-color-0_77: rgba(0, 189, 98, 0.77);
        --theme-color-0_78: rgba(0, 189, 98, 0.78);
        --theme-color-0_79: rgba(0, 189, 98, 0.79);
        --theme-color-0_8: rgba(0, 189, 98, 0.8);
        --theme-color-0_81: rgba(0, 189, 98, 0.81);
        --theme-color-0_82: rgba(0, 189, 98, 0.82);
        --theme-color-0_83: rgba(0, 189, 98, 0.83);
        --theme-color-0_84: rgba(0, 189, 98, 0.84);
        --theme-color-0_85: rgba(0, 189, 98, 0.85);
        --theme-color-0_86: rgba(0, 189, 98, 0.86);
        --theme-color-0_87: rgba(0, 189, 98, 0.87);
        --theme-color-0_88: rgba(0, 189, 98, 0.88);
        --theme-color-0_89: rgba(0, 189, 98, 0.89);
        --theme-color-0_9: rgba(0, 189, 98, 0.9);
        --theme-color-0_91: rgba(0, 189, 98, 0.91);
        --theme-color-0_92: rgba(0, 189, 98, 0.92);
        --theme-color-0_93: rgba(0, 189, 98, 0.93);
        --theme-color-0_94: rgba(0, 189, 98, 0.94);
        --theme-color-0_95: rgba(0, 189, 98, 0.95);
        --theme-color-0_96: rgba(0, 189, 98, 0.96);
        --theme-color-0_97: rgba(0, 189, 98, 0.97);
        --theme-color-0_98: rgba(0, 189, 98, 0.98);
        --theme-color-0_99: rgba(0, 189, 98, 0.99);
        --theme-color-1: rgba(0, 189, 98, 1);
    }
    </style>
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/css/icons.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/plugins/flags/flags.min.css">
    <link rel="stylesheet"
        href="https://classified.bylancer.com/includes/assets/plugins/styleswitcher/styleswitcher.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/style.css?ver=10.2">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/slick.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/color.css">
    <script src="https://classified.bylancer.com/templates/thenext-theme/js/jquery-3.4.1.min.js"></script>
    <script src="https://classified.bylancer.com/includes/assets/plugins/styleswitcher/jquery.style-switcher.js">
    </script>
    <script async="">
    var ajaxurl = "https://classified.bylancer.com/php/user-ajax.php";
    </script>
    <script async="" type="text/javascript">
    $(document).ready(function() {
        $('.resend').click(function(e) { // Button which will activate our modal
            var the_id = $(this).attr('id'); //get the id
            // show the spinner
            $(this).html("<i class='fa fa-spinner fa-pulse'></i>");
            $.ajax({ //the main ajax request
                type: "POST",
                data: "action=email_verify&id=" + $(this).attr("id"),
                url: ajaxurl,
                success: function(data) {
                    var tpl =
                        '<a class="button ripple-effect gray" href="javascript:void(0);">' +
                        data + '</a>';
                    $("span#resend_count" + the_id).html(tpl);
                    //fadein the vote count
                    $("span#resend_count" + the_id).fadeIn();
                    //remove the spinner
                    $("a.resend_buttons" + the_id).remove();

                }
            });
            return false;
        });
    });
    </script>
    <!-- ===External Code=== -->
    <!-- Default Statcounter code for Classified.bylancer.com
http://classified.bylancer.com/ -->
    <script type="text/javascript">
    var sc_project = 11443039;
    var sc_invisible = 1;
    var sc_security = "426664c6";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async=""></script>
    <noscript>
        <div class="statcounter"><a title="web counter" href="https://statcounter.com/" target="_blank"><img
                    class="statcounter" src="https://c.statcounter.com/11443039/0/426664c6/1/" alt="web counter"
                    referrerPolicy="no-referrer-when-downgrade"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->
    <!-- ===/External Code=== -->
</head>

<body data-role="page" class="ltr" id="page" data-ipapi="ip_api" data-showlocationicon="1">
    <nav class="mmenu-init mm-menu mm-offcanvas" id="mm-0" aria-hidden="true">
        <div class="mm-panels">
            <div class="mm-panel mm-hasnavbar mm-opened" id="mm-1">
                <div class="mm-navbar"><a class="mm-title">Menu</a></div>
                <ul class="mm-listview">
                    <li><a href="https://classified.bylancer.com/listing">Find Ads</a></li>
                    <li><a href="https://classified.bylancer.com/login">Login</a></li>
                    <li><a href="https://classified.bylancer.com/signup">Register</a></li>
                    <li><a href="https://classified.bylancer.com/post-ad" class="button ripple-effect">Post Free Ad</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <!-- Wrapper -->
    

        <!-- orakuploader -->
        <link type="text/css" href="https://classified.bylancer.com/plugins/orakuploader/orakuploader.css"
            rel="stylesheet">
        <script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/jquery.min.js">
        </script>
        <script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/jquery-ui.min.js">
        </script>
        <script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/orakuploader.js">
        </script>
        <!-- orakuploader -->
        <script>
        var watermark_image = 'storage/logo/watermark.png';
        </script>
        <script>
        var lang_edit_cat = "Edit Category";
        var lang_upload_images = "Upload Images";
        var siteurl = 'https://classified.bylancer.com/';
        var template_name = 'thenext-theme';
        var max_image_upload = '3';

        // Language Var
        var LANG_MAIN_IMAGE = "Main Image";
        var LANG_LOGGED_IN_SUCCESS = "Logged in success. Redirecting";
        var LANG_ERROR_TRY_AGAIN = "Error: Please try again.";
        var LANG_HIDDEN = "Hidden";
        var LANG_ERROR = "Error";
        var LANG_CANCEL = "Cancel";
        var LANG_DELETED = "Deleted";
        var LANG_ARE_YOU_SURE = "Are you sure?";
        var LANG_YOU_WANT_DELETE = "You want to delete this Ad";
        var LANG_YES_DELETE = "Yes, delete it";
        var LANG_AD_DELETED = "Ad has been Deleted";
        var LANG_SHOW = "Show";
        var LANG_HIDE = "Hide";
        var LANG_HIDDEN = "Hidden";
        var LANG_ADD_FAV = "Add Favourite";
        var LANG_REMOVE_FAV = "Remove Favourite";
        var LANG_SELECT_CITY = "Select City";
        $(document).ready(function() {
            // -------------------------------------------------------------
            //  Intialize orakuploader
            // -------------------------------------------------------------
            $('#item_screen').orakuploader({
                site_url: siteurl,
                orakuploader_path: 'plugins/orakuploader/',
                orakuploader_main_path: 'storage/products',
                orakuploader_thumbnail_path: 'storage/products/thumb',
                orakuploader_add_image: siteurl + 'plugins/orakuploader/images/add.svg',
                orakuploader_watermark: watermark_image,
                orakuploader_add_label: lang_upload_images,
                orakuploader_use_main: true,
                orakuploader_use_sortable: true,
                orakuploader_use_dragndrop: true,
                orakuploader_use_rotation: true,
                orakuploader_resize_to: 800,
                orakuploader_thumbnail_size: 250,
                orakuploader_maximum_uploads: max_image_upload,
                orakuploader_max_exceeded: max_image_upload,
                orakuploader_hide_on_exceed: true,
                orakuploader_main_changed: function(filename) {
                    $("#mainlabel-images").remove();
                    $("div").find("[filename='" + filename + "']").append(
                        "<div id='mainlabel-images' class='maintext'>Main Image</div>");
                },
                orakuploader_max_exceeded: function() {
                    alert("You exceeded the max. limit of " + max_image_upload + " images.");
                }
            });
        });
        </script>

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
        //  Sell Books Part
        <script>
            var lang_edit_cat = "<i class='icon-feather-check-circle'></i> &nbsp;Edit Category";
            </script>
            <link href="https://classified.bylancer.com/templates/thenext-theme/css/category-modal.css" type="text/css"
                rel="stylesheet">
            <link href="https://classified.bylancer.com/templates/thenext-theme/css/owl.post.carousel.css" type="text/css"
                rel="stylesheet">
            <link href="https://classified.bylancer.com/templates/thenext-theme/css/select2.min.css" rel="stylesheet">
            <script src="https://classified.bylancer.com/templates/thenext-theme/js/select2.min.js"></script>
            <script src="https://classified.bylancer.com/templates/thenext-theme/js/owl.carousel-category.min.js"></script>
    
            <script src="https://classified.bylancer.com/templates/thenext-theme/js/jquery.form.js"></script>
            <script src="https://classified.bylancer.com/templates/thenext-theme/js/ad_post.js"></script>
    
            <!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
            <link media="all" rel="stylesheet" type="text/css"
                href="https://classified.bylancer.com/includes/assets/plugins/simditor/styles/simditor.css">
            <script src="https://classified.bylancer.com/includes/assets/plugins/simditor/scripts/mobilecheck.js"></script>
            <script src="https://classified.bylancer.com/includes/assets/plugins/simditor/scripts/module.js"></script>
            <script src="https://classified.bylancer.com/includes/assets/plugins/simditor/scripts/uploader.js"></script>
            <script src="https://classified.bylancer.com/includes/assets/plugins/simditor/scripts/hotkeys.js"></script>
            <script src="https://classified.bylancer.com/includes/assets/plugins/simditor/scripts/simditor.js"></script>
            <script>
            (function() {
                $(function() {
                    var $preview, editor, mobileToolbar, toolbar, allowedTags;
                    Simditor.locale = 'en-US';
                    toolbar = ['bold', 'italic', 'underline', '|', 'ol', 'ul', 'blockquote', 'table', 'link'];
                    mobileToolbar = ["bold", "italic", "underline", "ul", "ol"];
                    if (mobilecheck()) {
                        toolbar = mobileToolbar;
                    }
                    allowedTags = ['br', 'span', 'a', 'img', 'b', 'strong', 'i', 'strike', 'u', 'font', 'p',
                        'ul', 'ol', 'li', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'hr', 'table'
                    ];
                    editor = new Simditor({
                        textarea: $('.text-editor'),
                        placeholder: '',
                        toolbar: toolbar,
                        pasteImage: false,
                        defaultImage: 'https://classified.bylancer.com/includes/assets/plugins/simditor/images/image.png',
                        upload: false,
                        allowedTags: allowedTags
                    });
                    $preview = $('#preview');
                    if ($preview.length > 0) {
                        return editor.on('valuechanged', function(e) {
                            return $preview.html(editor.getValue());
                        });
                    }
                });
            }).call(this);
            </script>
    
            <script>
            var openstreet_access_token =
                'pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ';
            </script>
            <link rel="stylesheet"
                href="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/css/style.css">
            <!-- Leaflet // Docs: https://leafletjs.com/ -->
            <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet.min.js"></script>
    
            <!-- Leaflet Maps Scripts (locations are stored in leaflet-quick.js) -->
            <script
                src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-markercluster.min.js">
            </script>
            <script
                src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-gesture-handling.min.js">
            </script>
            <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-quick.js"></script>
    
            <!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
            <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-autocomplete.js">
            </script>
            <script
                src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-control-geocoder.js">
            </script>
            <script>
            $('#jobcity').on('change', function() {
                var data = $("#jobcity option:selected").val();
                var custom_data = $("#jobcity").select2('data')[0];
                var latitude = custom_data.latitude;
                var longitude = custom_data.longitude;
                var address = custom_data.text;
                $('#latitude').val(latitude);
                $('#longitude').val(longitude);
                if (document.getElementById("singleListingMap") !== null && singleListingMap) {
                    $("#address-autocomplete").val(address);
                    var newLatLng = new L.LatLng(latitude, longitude);
                    singleListingMapMarker.setLatLng(newLatLng);
                    singleListingMap.flyTo(newLatLng, 10);
                }
            });
            </script>
            <div class="text-center visible-md visible-lg"><a class="quick-bm-banner" data-id="2" id="ubm_5"></a></div>
            <div class="text-center visible-sm"></div>
            <div class="text-center visible-xs"></div>
            <!-- footer -->
            <link href="https://classified.bylancer.com/plugins/banner-admanager/css/ubm.css?ver=2.50" rel="stylesheet">
            <script src="https://classified.bylancer.com/plugins/banner-admanager/js/ubm-jsonp.js?ver=2.50"></script>
    
    
    
            <div id="backtotop" class=""><a href="#"></a></div>
            <div id="mm-blocker" class="mm-slideout"></div>
    </body>
    </footer>