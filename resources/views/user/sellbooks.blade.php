@extends('layout/usermaster')
@section('content')
<html lang="en" dir="ltr"><head><style type="text/css">.tippy-touch{cursor:pointer!important}.tippy-notransition{transition:none!important}.tippy-popper{max-width:350px;-webkit-perspective:700px;perspective:700px;z-index:9999;outline:0;transition-timing-function:cubic-bezier(.165,.84,.44,1);pointer-events:none;line-height:1.4}.tippy-popper[data-html]{max-width:96%;max-width:calc(100% - 20px)}.tippy-popper[x-placement^=top] .tippy-backdrop{border-radius:40% 40% 0 0}.tippy-popper[x-placement^=top] .tippy-roundarrow{bottom:-8px;-webkit-transform-origin:50% 0;transform-origin:50% 0}.tippy-popper[x-placement^=top] .tippy-roundarrow svg{position:absolute;left:0;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.tippy-popper[x-placement^=top] .tippy-arrow{border-top:7px solid #333;border-right:7px solid transparent;border-left:7px solid transparent;bottom:-7px;margin:0 6px;-webkit-transform-origin:50% 0;transform-origin:50% 0}.tippy-popper[x-placement^=top] .tippy-backdrop{-webkit-transform-origin:0 90%;transform-origin:0 90%}.tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible]{-webkit-transform:scale(6) translate(-50%,25%);transform:scale(6) translate(-50%,25%);opacity:1}.tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden]{-webkit-transform:scale(1) translate(-50%,25%);transform:scale(1) translate(-50%,25%);opacity:0}.tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible]{opacity:1;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden]{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px)}.tippy-popper[x-placement^=top] [data-animation=perspective]{-webkit-transform-origin:bottom;transform-origin:bottom}.tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible]{opacity:1;-webkit-transform:translateY(-10px) rotateX(0);transform:translateY(-10px) rotateX(0)}.tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden]{opacity:0;-webkit-transform:translateY(0) rotateX(90deg);transform:translateY(0) rotateX(90deg)}.tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible]{opacity:1;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden]{opacity:0;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible]{opacity:1;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden]{opacity:0;-webkit-transform:translateY(0);transform:translateY(0)}.tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible]{opacity:1;-webkit-transform:translateY(-10px) scale(1);transform:translateY(-10px) scale(1)}.tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden]{opacity:0;-webkit-transform:translateY(0) scale(0);transform:translateY(0) scale(0)}.tippy-popper[x-placement^=bottom] .tippy-backdrop{border-radius:0 0 30% 30%}.tippy-popper[x-placement^=bottom] .tippy-roundarrow{top:-8px;-webkit-transform-origin:50% 100%;transform-origin:50% 100%}.tippy-popper[x-placement^=bottom] .tippy-roundarrow svg{position:absolute;left:0;-webkit-transform:rotate(0);transform:rotate(0)}.tippy-popper[x-placement^=bottom] .tippy-arrow{border-bottom:7px solid #333;border-right:7px solid transparent;border-left:7px solid transparent;top:-7px;margin:0 6px;-webkit-transform-origin:50% 100%;transform-origin:50% 100%}.tippy-popper[x-placement^=bottom] .tippy-backdrop{-webkit-transform-origin:0 -90%;transform-origin:0 -90%}.tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible]{-webkit-transform:scale(6) translate(-50%,-125%);transform:scale(6) translate(-50%,-125%);opacity:1}.tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden]{-webkit-transform:scale(1) translate(-50%,-125%);transform:scale(1) translate(-50%,-125%);opacity:0}.tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible]{opacity:1;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden]{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px)}.tippy-popper[x-placement^=bottom] [data-animation=perspective]{-webkit-transform-origin:top;transform-origin:top}.tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible]{opacity:1;-webkit-transform:translateY(10px) rotateX(0);transform:translateY(10px) rotateX(0)}.tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden]{opacity:0;-webkit-transform:translateY(0) rotateX(-90deg);transform:translateY(0) rotateX(-90deg)}.tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible]{opacity:1;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden]{opacity:0;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible]{opacity:1;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden]{opacity:0;-webkit-transform:translateY(0);transform:translateY(0)}.tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible]{opacity:1;-webkit-transform:translateY(10px) scale(1);transform:translateY(10px) scale(1)}.tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden]{opacity:0;-webkit-transform:translateY(0) scale(0);transform:translateY(0) scale(0)}.tippy-popper[x-placement^=left] .tippy-backdrop{border-radius:50% 0 0 50%}.tippy-popper[x-placement^=left] .tippy-roundarrow{right:-16px;-webkit-transform-origin:33.33333333% 50%;transform-origin:33.33333333% 50%}.tippy-popper[x-placement^=left] .tippy-roundarrow svg{position:absolute;left:0;-webkit-transform:rotate(90deg);transform:rotate(90deg)}.tippy-popper[x-placement^=left] .tippy-arrow{border-left:7px solid #333;border-top:7px solid transparent;border-bottom:7px solid transparent;right:-7px;margin:3px 0;-webkit-transform-origin:0 50%;transform-origin:0 50%}.tippy-popper[x-placement^=left] .tippy-backdrop{-webkit-transform-origin:100% 0;transform-origin:100% 0}.tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible]{-webkit-transform:scale(6) translate(40%,-50%);transform:scale(6) translate(40%,-50%);opacity:1}.tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden]{-webkit-transform:scale(1.5) translate(40%,-50%);transform:scale(1.5) translate(40%,-50%);opacity:0}.tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible]{opacity:1;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden]{opacity:0;-webkit-transform:translateX(-20px);transform:translateX(-20px)}.tippy-popper[x-placement^=left] [data-animation=perspective]{-webkit-transform-origin:right;transform-origin:right}.tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible]{opacity:1;-webkit-transform:translateX(-10px) rotateY(0);transform:translateX(-10px) rotateY(0)}.tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden]{opacity:0;-webkit-transform:translateX(0) rotateY(-90deg);transform:translateX(0) rotateY(-90deg)}.tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible]{opacity:1;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden]{opacity:0;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible]{opacity:1;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden]{opacity:0;-webkit-transform:translateX(0);transform:translateX(0)}.tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible]{opacity:1;-webkit-transform:translateX(-10px) scale(1);transform:translateX(-10px) scale(1)}.tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden]{opacity:0;-webkit-transform:translateX(0) scale(0);transform:translateX(0) scale(0)}.tippy-popper[x-placement^=right] .tippy-backdrop{border-radius:0 50% 50% 0}.tippy-popper[x-placement^=right] .tippy-roundarrow{left:-16px;-webkit-transform-origin:66.66666666% 50%;transform-origin:66.66666666% 50%}.tippy-popper[x-placement^=right] .tippy-roundarrow svg{position:absolute;left:0;-webkit-transform:rotate(-90deg);transform:rotate(-90deg)}.tippy-popper[x-placement^=right] .tippy-arrow{border-right:7px solid #333;border-top:7px solid transparent;border-bottom:7px solid transparent;left:-7px;margin:3px 0;-webkit-transform-origin:100% 50%;transform-origin:100% 50%}.tippy-popper[x-placement^=right] .tippy-backdrop{-webkit-transform-origin:-100% 0;transform-origin:-100% 0}.tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible]{-webkit-transform:scale(6) translate(-140%,-50%);transform:scale(6) translate(-140%,-50%);opacity:1}.tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden]{-webkit-transform:scale(1.5) translate(-140%,-50%);transform:scale(1.5) translate(-140%,-50%);opacity:0}.tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible]{opacity:1;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden]{opacity:0;-webkit-transform:translateX(20px);transform:translateX(20px)}.tippy-popper[x-placement^=right] [data-animation=perspective]{-webkit-transform-origin:left;transform-origin:left}.tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible]{opacity:1;-webkit-transform:translateX(10px) rotateY(0);transform:translateX(10px) rotateY(0)}.tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden]{opacity:0;-webkit-transform:translateX(0) rotateY(90deg);transform:translateX(0) rotateY(90deg)}.tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible]{opacity:1;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden]{opacity:0;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible]{opacity:1;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden]{opacity:0;-webkit-transform:translateX(0);transform:translateX(0)}.tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible]{opacity:1;-webkit-transform:translateX(10px) scale(1);transform:translateX(10px) scale(1)}.tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden]{opacity:0;-webkit-transform:translateX(0) scale(0);transform:translateX(0) scale(0)}.tippy-tooltip{position:relative;color:#fff;border-radius:4px;font-size:.9rem;padding:.3rem .6rem;text-align:center;will-change:transform;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background-color:#333}.tippy-tooltip[data-size=small]{padding:.2rem .4rem;font-size:.75rem}.tippy-tooltip[data-size=large]{padding:.4rem .8rem;font-size:1rem}.tippy-tooltip[data-animatefill]{overflow:hidden;background-color:transparent}.tippy-tooltip[data-animatefill] .tippy-content{transition:-webkit-clip-path cubic-bezier(.46,.1,.52,.98);transition:clip-path cubic-bezier(.46,.1,.52,.98);transition:clip-path cubic-bezier(.46,.1,.52,.98),-webkit-clip-path cubic-bezier(.46,.1,.52,.98)}.tippy-tooltip[data-interactive],.tippy-tooltip[data-interactive] path{pointer-events:auto}.tippy-tooltip[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.53,2,.36,.85)}.tippy-tooltip[data-inertia][data-state=hidden]{transition-timing-function:ease}.tippy-arrow,.tippy-roundarrow{position:absolute;width:0;height:0}.tippy-roundarrow{width:24px;height:8px;fill:#333;pointer-events:none}.tippy-backdrop{position:absolute;will-change:transform;background-color:#333;border-radius:50%;width:26%;left:50%;top:50%;z-index:-1;transition:all cubic-bezier(.46,.1,.52,.98);-webkit-backface-visibility:hidden;backface-visibility:hidden}.tippy-backdrop:after{content:"";float:left;padding-top:100%}body:not(.tippy-touch) .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content{-webkit-clip-path:ellipse(100% 100% at 50% 50%);clip-path:ellipse(100% 100% at 50% 50%)}body:not(.tippy-touch) .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content{-webkit-clip-path:ellipse(5% 50% at 50% 50%);clip-path:ellipse(5% 50% at 50% 50%)}body:not(.tippy-touch) .tippy-popper[x-placement=right] .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content{-webkit-clip-path:ellipse(135% 100% at 0 50%);clip-path:ellipse(135% 100% at 0 50%)}body:not(.tippy-touch) .tippy-popper[x-placement=right] .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content{-webkit-clip-path:ellipse(40% 100% at 0 50%);clip-path:ellipse(40% 100% at 0 50%)}body:not(.tippy-touch) .tippy-popper[x-placement=left] .tippy-tooltip[data-animatefill][data-state=visible] .tippy-content{-webkit-clip-path:ellipse(135% 100% at 100% 50%);clip-path:ellipse(135% 100% at 100% 50%)}body:not(.tippy-touch) .tippy-popper[x-placement=left] .tippy-tooltip[data-animatefill][data-state=hidden] .tippy-content{-webkit-clip-path:ellipse(40% 100% at 100% 50%);clip-path:ellipse(40% 100% at 100% 50%)}@media (max-width:360px){.tippy-popper{max-width:96%;max-width:calc(100% - 20px)}}</style>
    <title> Post An Ad - Quickad Classified</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Quickad Classified">
    <meta name="keywords" content="Classified, ads, php script, ads cms, Responisve, Bootstrap, Html5, Css3, Blog, Classified, Ads, Simple, Clean ">
    <meta name="description" content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="fb:app_id" content="1855120994738893">
    <meta property="og:site_name" content="Quickad Classified">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="/post-ad">
    <meta property="og:title" content=" Post An Ad - Quickad Classified">
    <meta property="og:description" content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="og:type" content="website">
            <meta property="og:image" content="https://classified.bylancer.com/storage/logo/thenext-theme_logo.png">
    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Post An Ad - Quickad Classified">
    <meta property="twitter:description" content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
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
        :root{--theme-color-0_01: rgba(0,189,98,0.01);--theme-color-0_02: rgba(0,189,98,0.02);--theme-color-0_03: rgba(0,189,98,0.03);--theme-color-0_04: rgba(0,189,98,0.04);--theme-color-0_05: rgba(0,189,98,0.05);--theme-color-0_06: rgba(0,189,98,0.06);--theme-color-0_07: rgba(0,189,98,0.07);--theme-color-0_08: rgba(0,189,98,0.08);--theme-color-0_09: rgba(0,189,98,0.09);--theme-color-0_1: rgba(0,189,98,0.1);--theme-color-0_11: rgba(0,189,98,0.11);--theme-color-0_12: rgba(0,189,98,0.12);--theme-color-0_13: rgba(0,189,98,0.13);--theme-color-0_14: rgba(0,189,98,0.14);--theme-color-0_15: rgba(0,189,98,0.15);--theme-color-0_16: rgba(0,189,98,0.16);--theme-color-0_17: rgba(0,189,98,0.17);--theme-color-0_18: rgba(0,189,98,0.18);--theme-color-0_19: rgba(0,189,98,0.19);--theme-color-0_2: rgba(0,189,98,0.2);--theme-color-0_21: rgba(0,189,98,0.21);--theme-color-0_22: rgba(0,189,98,0.22);--theme-color-0_23: rgba(0,189,98,0.23);--theme-color-0_24: rgba(0,189,98,0.24);--theme-color-0_25: rgba(0,189,98,0.25);--theme-color-0_26: rgba(0,189,98,0.26);--theme-color-0_27: rgba(0,189,98,0.27);--theme-color-0_28: rgba(0,189,98,0.28);--theme-color-0_29: rgba(0,189,98,0.29);--theme-color-0_3: rgba(0,189,98,0.3);--theme-color-0_31: rgba(0,189,98,0.31);--theme-color-0_32: rgba(0,189,98,0.32);--theme-color-0_33: rgba(0,189,98,0.33);--theme-color-0_34: rgba(0,189,98,0.34);--theme-color-0_35: rgba(0,189,98,0.35);--theme-color-0_36: rgba(0,189,98,0.36);--theme-color-0_37: rgba(0,189,98,0.37);--theme-color-0_38: rgba(0,189,98,0.38);--theme-color-0_39: rgba(0,189,98,0.39);--theme-color-0_4: rgba(0,189,98,0.4);--theme-color-0_41: rgba(0,189,98,0.41);--theme-color-0_42: rgba(0,189,98,0.42);--theme-color-0_43: rgba(0,189,98,0.43);--theme-color-0_44: rgba(0,189,98,0.44);--theme-color-0_45: rgba(0,189,98,0.45);--theme-color-0_46: rgba(0,189,98,0.46);--theme-color-0_47: rgba(0,189,98,0.47);--theme-color-0_48: rgba(0,189,98,0.48);--theme-color-0_49: rgba(0,189,98,0.49);--theme-color-0_5: rgba(0,189,98,0.5);--theme-color-0_51: rgba(0,189,98,0.51);--theme-color-0_52: rgba(0,189,98,0.52);--theme-color-0_53: rgba(0,189,98,0.53);--theme-color-0_54: rgba(0,189,98,0.54);--theme-color-0_55: rgba(0,189,98,0.55);--theme-color-0_56: rgba(0,189,98,0.56);--theme-color-0_57: rgba(0,189,98,0.57);--theme-color-0_58: rgba(0,189,98,0.58);--theme-color-0_59: rgba(0,189,98,0.59);--theme-color-0_6: rgba(0,189,98,0.6);--theme-color-0_61: rgba(0,189,98,0.61);--theme-color-0_62: rgba(0,189,98,0.62);--theme-color-0_63: rgba(0,189,98,0.63);--theme-color-0_64: rgba(0,189,98,0.64);--theme-color-0_65: rgba(0,189,98,0.65);--theme-color-0_66: rgba(0,189,98,0.66);--theme-color-0_67: rgba(0,189,98,0.67);--theme-color-0_68: rgba(0,189,98,0.68);--theme-color-0_69: rgba(0,189,98,0.69);--theme-color-0_7: rgba(0,189,98,0.7);--theme-color-0_71: rgba(0,189,98,0.71);--theme-color-0_72: rgba(0,189,98,0.72);--theme-color-0_73: rgba(0,189,98,0.73);--theme-color-0_74: rgba(0,189,98,0.74);--theme-color-0_75: rgba(0,189,98,0.75);--theme-color-0_76: rgba(0,189,98,0.76);--theme-color-0_77: rgba(0,189,98,0.77);--theme-color-0_78: rgba(0,189,98,0.78);--theme-color-0_79: rgba(0,189,98,0.79);--theme-color-0_8: rgba(0,189,98,0.8);--theme-color-0_81: rgba(0,189,98,0.81);--theme-color-0_82: rgba(0,189,98,0.82);--theme-color-0_83: rgba(0,189,98,0.83);--theme-color-0_84: rgba(0,189,98,0.84);--theme-color-0_85: rgba(0,189,98,0.85);--theme-color-0_86: rgba(0,189,98,0.86);--theme-color-0_87: rgba(0,189,98,0.87);--theme-color-0_88: rgba(0,189,98,0.88);--theme-color-0_89: rgba(0,189,98,0.89);--theme-color-0_9: rgba(0,189,98,0.9);--theme-color-0_91: rgba(0,189,98,0.91);--theme-color-0_92: rgba(0,189,98,0.92);--theme-color-0_93: rgba(0,189,98,0.93);--theme-color-0_94: rgba(0,189,98,0.94);--theme-color-0_95: rgba(0,189,98,0.95);--theme-color-0_96: rgba(0,189,98,0.96);--theme-color-0_97: rgba(0,189,98,0.97);--theme-color-0_98: rgba(0,189,98,0.98);--theme-color-0_99: rgba(0,189,98,0.99);--theme-color-1: rgba(0,189,98,1);}
    </style>
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/css/icons.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/plugins/flags/flags.min.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/plugins/styleswitcher/styleswitcher.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/style.css?ver=10.2">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/slick.css">
    <link rel="stylesheet" href="https://classified.bylancer.com/templates/thenext-theme/css/color.css">
    <script src="https://classified.bylancer.com/templates/thenext-theme/js/jquery-3.4.1.min.js"></script>
    <script src="https://classified.bylancer.com/includes/assets/plugins/styleswitcher/jquery.style-switcher.js"></script>
        <script async="">var ajaxurl = "https://classified.bylancer.com/php/user-ajax.php";</script>
    <script async="" type="text/javascript">
        $(document).ready(function() {
            $('.resend').click(function(e) { 						// Button which will activate our modal
                var the_id = $(this).attr('id');						//get the id
                // show the spinner
                $(this).html("<i class='fa fa-spinner fa-pulse'></i>");
                $.ajax({											//the main ajax request
                    type: "POST",
                    data: "action=email_verify&id="+$(this).attr("id"),
                    url: ajaxurl,
                    success: function(data)
                    {
                        var tpl = '<a class="button ripple-effect gray" href="javascript:void(0);">'+data+'</a>';
                        $("span#resend_count"+the_id).html(tpl);
                        //fadein the vote count
                        $("span#resend_count"+the_id).fadeIn();
                        //remove the spinner
                        $("a.resend_buttons"+the_id).remove();

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
var sc_project=11443039; 
var sc_invisible=1; 
var sc_security="426664c6"; 
</script>
<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async=""></script>
<noscript><div class="statcounter"><a title="web counter"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/11443039/0/426664c6/1/"
alt="web counter"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
    <!-- ===/External Code=== -->
</head>
<body data-role="page" class="ltr" id="page" data-ipapi="ip_api" data-showlocationicon="1"><nav class="mmenu-init mm-menu mm-offcanvas" id="mm-0" aria-hidden="true"><div class="mm-panels"><div class="mm-panel mm-hasnavbar mm-opened" id="mm-1"><div class="mm-navbar"><a class="mm-title">Menu</a></div><ul class="mm-listview">
                            <li><a href="https://classified.bylancer.com/listing">Find Ads</a></li>
                                                        <li><a href="https://classified.bylancer.com/login">Login</a></li>
                            <li><a href="https://classified.bylancer.com/signup">Register</a></li>
                            <li><a href="https://classified.bylancer.com/post-ad" class="button ripple-effect">Post Free Ad</a></li>
                                                    </ul></div></div>
                        
                    </nav>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!--Country-Cities-changes-Model-->
<a class="popup-with-zoom-anim hidden" href="#citiesModal" id="change-city">city</a>
<div class="zoom-anim-dialog mfp-hide popup-dialog big-dialog" id="citiesModal">
    <div class="popup-tab-content padding-0">
        <div class="quick-states" id="country-popup" data-country-id="IN" style="display: block;">
            <div id="regionSearchBox" class="title clr">
                <div class="clr">
                    <div class="locationrequest smallBox br5 col-sm-4">
                        <div class="rel input-container">
                            <div class="input-with-icon">
                                <input id="inputStateCity" class="with-border" type="text" placeholder="Type your city name">
                                <i class="la la-map-marker"></i>
                            </div>
                            <div id="searchDisplay" style="display: none;"></div>
                            <div class="suggest bottom abs small br3 error hidden"><span class="target abs icon"></span>

                                <p></p>
                            </div>
                        </div>
                        <div id="lastUsedCities" class="last-used binded" style="display: none;">Last visited
                            <ul id="last-locations-ul">
                            </ul>
                        </div>
                    </div>
                                        <span style="line-height: 30px;">
                        <span class="flag flag-in"></span> <a href="#countryModal" class="popup-with-zoom-anim">Change Country</a>
                    </span>
                                    </div>
            </div>
            <div class="popular-cities clr">
                <p>Popular cities</p>

                <div class="list row">

                    <ul class="col-lg-12 col-md-12 popularcity">
                        
                        <li><a class="selectme" data-id="1275339" data-name="Mumbai" data-type="city"><span>Mumbai</span></a></li>
                        
                        <li><a class="selectme" data-id="1273294" data-name="Delhi" data-type="city"><span>Delhi</span></a></li>
                        
                        <li><a class="selectme" data-id="1277333" data-name="Bengaluru" data-type="city"><span>Bengaluru</span></a></li>
                        
                        <li><a class="selectme" data-id="1275004" data-name="Kolkata" data-type="city"><span>Kolkata</span></a></li>
                        
                        <li><a class="selectme" data-id="1264527" data-name="Chennai" data-type="city"><span>Chennai</span></a></li>
                        
                        <li><a class="selectme" data-id="1279233" data-name="Ahmedabad" data-type="city"><span>Ahmedabad</span></a></li>
                        
                        <li><a class="selectme" data-id="1269843" data-name="Hyderabad" data-type="city"><span>Hyderabad</span></a></li>
                        
                        <li><a class="selectme" data-id="1259229" data-name="Pune" data-type="city"><span>Pune</span></a></li>
                        
                        <li><a class="selectme" data-id="1255364" data-name="Surat" data-type="city"><span>Surat</span></a></li>
                        
                        <li><a class="selectme" data-id="1267995" data-name="Kanpur" data-type="city"><span>Kanpur</span></a></li>
                        
                        <li><a class="selectme" data-id="1269515" data-name="Jaipur" data-type="city"><span>Jaipur</span></a></li>
                        
                        <li><a class="selectme" data-id="6619347" data-name="Navi Mumbai" data-type="city"><span>Navi Mumbai</span></a></li>
                        
                        <li><a class="selectme" data-id="1264733" data-name="Lucknow" data-type="city"><span>Lucknow</span></a></li>
                        
                        <li><a class="selectme" data-id="1262180" data-name="Nagpur" data-type="city"><span>Nagpur</span></a></li>
                        
                        <li><a class="selectme" data-id="1269743" data-name="Indore" data-type="city"><span>Indore</span></a></li>
                        
                        <li><a class="selectme" data-id="1260086" data-name="Patna" data-type="city"><span>Patna</span></a></li>
                        
                        <li><a class="selectme" data-id="1275841" data-name="Bhopal" data-type="city"><span>Bhopal</span></a></li>
                        
                        <li><a class="selectme" data-id="1264728" data-name="Ludhiana" data-type="city"><span>Ludhiana</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="viewport">
                <div class="full" id="getCities">
                    <div class="col-sm-12 col-md-12 loader" style="display: none"></div>
                    <div id="results" class="animate-bottom">
                        <ul class="column cities">
                            
                            <li class="selected"><a class="selectme" data-id="IN" data-name="All India" data-type="country"><strong>All India</strong></a></li><li class=""><a id="regionIN.01" class="statedata" data-id="IN.01" data-name="Andaman and Nicobar"><span>Andaman and Nicobar <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.02" class="statedata" data-id="IN.02" data-name="Andhra Pradesh"><span>Andhra Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.30" class="statedata" data-id="IN.30" data-name="Arunachal Pradesh"><span>Arunachal Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.03" class="statedata" data-id="IN.03" data-name="Assam"><span>Assam <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.34" class="statedata" data-id="IN.34" data-name="Bihar"><span>Bihar <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.05" class="statedata" data-id="IN.05" data-name="Chandigarh"><span>Chandigarh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.37" class="statedata" data-id="IN.37" data-name="Chhattisgarh"><span>Chhattisgarh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.06" class="statedata" data-id="IN.06" data-name="Dadra and Nagar Haveli"><span>Dadra and Nagar Haveli <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.32" class="statedata" data-id="IN.32" data-name="Daman and Diu"><span>Daman and Diu <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.33" class="statedata" data-id="IN.33" data-name="Goa"><span>Goa <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.09" class="statedata" data-id="IN.09" data-name="Gujarat"><span>Gujarat <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.10" class="statedata" data-id="IN.10" data-name="Haryana"><span>Haryana <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.11" class="statedata" data-id="IN.11" data-name="Himachal Pradesh"><span>Himachal Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.12" class="statedata" data-id="IN.12" data-name="Jammu and Kashmir"><span>Jammu and Kashmir <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.38" class="statedata" data-id="IN.38" data-name="Jharkhand"><span>Jharkhand <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.19" class="statedata" data-id="IN.19" data-name="Karnataka"><span>Karnataka <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.13" class="statedata" data-id="IN.13" data-name="Kerala"><span>Kerala <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.14" class="statedata" data-id="IN.14" data-name="Laccadives"><span>Laccadives <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.35" class="statedata" data-id="IN.35" data-name="Madhya Pradesh"><span>Madhya Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.16" class="statedata" data-id="IN.16" data-name="Maharashtra"><span>Maharashtra <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.17" class="statedata" data-id="IN.17" data-name="Manipur"><span>Manipur <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.18" class="statedata" data-id="IN.18" data-name="Meghalaya"><span>Meghalaya <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.31" class="statedata" data-id="IN.31" data-name="Mizoram"><span>Mizoram <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.20" class="statedata" data-id="IN.20" data-name="Nagaland"><span>Nagaland <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.07" class="statedata" data-id="IN.07" data-name="NCT"><span>NCT <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.21" class="statedata" data-id="IN.21" data-name="Odisha"><span>Odisha <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.22" class="statedata" data-id="IN.22" data-name="Puducherry"><span>Puducherry <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.23" class="statedata" data-id="IN.23" data-name="Punjab"><span>Punjab <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.24" class="statedata" data-id="IN.24" data-name="Rajasthan"><span>Rajasthan <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.29" class="statedata" data-id="IN.29" data-name="Sikkim"><span>Sikkim <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.25" class="statedata" data-id="IN.25" data-name="Tamil Nadu"><span>Tamil Nadu <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.40" class="statedata" data-id="IN.40" data-name="Telangana"><span>Telangana <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.26" class="statedata" data-id="IN.26" data-name="Tripura"><span>Tripura <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.36" class="statedata" data-id="IN.36" data-name="Uttar Pradesh"><span>Uttar Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.39" class="statedata" data-id="IN.39" data-name="Uttarakhand"><span>Uttarakhand <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.28" class="statedata" data-id="IN.28" data-name="West Bengal"><span>West Bengal <i class="fa fa-angle-right"></i></span></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="table full subregionslinks hidden" id="subregionslinks"></div>
            </div>
        </div>
    </div>
</div>
<!--Country-Cities-changes-Model-->

<!-- Wrapper -->
<div id="wrapper" class="mm-page mm-slideout">

    <div class="clearfix"></div>
        <!-- Country Picker -->
    <div class="zoom-anim-dialog mfp-hide dialog-with-tabs popup-dialog big-dialog" id="countryModal">
        <ul class="popup-tabs-nav" style="pointer-events: none;">
            <li class="active"><a href="#country"><i class="icon-feather-map-pin"></i> Select your country</a></li>
        </ul>
        <div class="popup-tabs-container">
            <div class="popup-tab-content" id="country" style="display: inline-block;">

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-with-icon margin-bottom-30">
                            <input class="with-border" type="text" placeholder="Search..." id="country-modal-search">
                            <i class="icon-feather-search"></i>
                        </div>
                    </div>
                    <ul id="countries" class="column col-md-12 col-sm-12 cities">
                        
                            <li data-name="Afghanistan"><span class="flag flag-af"></span> <a href="https://classified.bylancer.com/home/en/af" data-id="3" data-name="Afghanistan"> Afghanistan</a></li>
                        
                            <li data-name="Åland Islands"><span class="flag flag-ax"></span> <a href="https://classified.bylancer.com/home/sv/ax" data-id="16" data-name="Åland Islands"> Åland Islands</a></li>
                        
                            <li data-name="Albania"><span class="flag flag-al"></span> <a href="https://classified.bylancer.com/home/en/al" data-id="6" data-name="Albania"> Albania</a></li>
                        
                            <li data-name="Algeria"><span class="flag flag-dz"></span> <a href="https://classified.bylancer.com/home/ar/dz" data-id="64" data-name="Algeria"> Algeria</a></li>
                        
                            <li data-name="American Samoa"><span class="flag flag-as"></span> <a href="https://classified.bylancer.com/home/en/as" data-id="12" data-name="American Samoa"> American Samoa</a></li>
                        
                            <li data-name="Andorra"><span class="flag flag-ad"></span> <a href="https://classified.bylancer.com/home/en/ad" data-id="1" data-name="Andorra"> Andorra</a></li>
                        
                            <li data-name="Angola"><span class="flag flag-ao"></span> <a href="https://classified.bylancer.com/home/en/ao" data-id="9" data-name="Angola"> Angola</a></li>
                        
                            <li data-name="Anguilla"><span class="flag flag-ai"></span> <a href="https://classified.bylancer.com/home/en/ai" data-id="5" data-name="Anguilla"> Anguilla</a></li>
                        
                            <li data-name="Antarctica"><span class="flag flag-aq"></span> <a href="https://classified.bylancer.com/home/en/aq" data-id="10" data-name="Antarctica"> Antarctica</a></li>
                        
                            <li data-name="Antigua and Barbuda"><span class="flag flag-ag"></span> <a href="https://classified.bylancer.com/home/en/ag" data-id="4" data-name="Antigua and Barbuda"> Antigua and Barbuda</a></li>
                        
                            <li data-name="Argentina"><span class="flag flag-ar"></span> <a href="https://classified.bylancer.com/home/es/ar" data-id="11" data-name="Argentina"> Argentina</a></li>
                        
                            <li data-name="Armenia"><span class="flag flag-am"></span> <a href="https://classified.bylancer.com/home/en/am" data-id="7" data-name="Armenia"> Armenia</a></li>
                        
                            <li data-name="Aruba"><span class="flag flag-aw"></span> <a href="https://classified.bylancer.com/home/es/aw" data-id="15" data-name="Aruba"> Aruba</a></li>
                        
                            <li data-name="Australia"><span class="flag flag-au"></span> <a href="https://classified.bylancer.com/home/en/au" data-id="14" data-name="Australia"> Australia</a></li>
                        
                            <li data-name="Austria"><span class="flag flag-at"></span> <a href="https://classified.bylancer.com/home/en/at" data-id="13" data-name="Austria"> Austria</a></li>
                        
                            <li data-name="Azerbaijan"><span class="flag flag-az"></span> <a href="https://classified.bylancer.com/home/ru/az" data-id="17" data-name="Azerbaijan"> Azerbaijan</a></li>
                        
                            <li data-name="Bahamas"><span class="flag flag-bs"></span> <a href="https://classified.bylancer.com/home/en/bs" data-id="33" data-name="Bahamas"> Bahamas</a></li>
                        
                            <li data-name="Bahrain"><span class="flag flag-bh"></span> <a href="https://classified.bylancer.com/home/ar/bh" data-id="24" data-name="Bahrain"> Bahrain</a></li>
                        
                            <li data-name="Bangladesh"><span class="flag flag-bd"></span> <a href="https://classified.bylancer.com/home/bn/bd" data-id="20" data-name="Bangladesh"> Bangladesh</a></li>
                        
                            <li data-name="Barbados"><span class="flag flag-bb"></span> <a href="https://classified.bylancer.com/home/en/bb" data-id="19" data-name="Barbados"> Barbados</a></li>
                        
                            <li data-name="Belarus"><span class="flag flag-by"></span> <a href="https://classified.bylancer.com/home/ru/by" data-id="37" data-name="Belarus"> Belarus</a></li>
                        
                            <li data-name="Belgium"><span class="flag flag-be"></span> <a href="https://classified.bylancer.com/home/fr/be" data-id="21" data-name="Belgium"> Belgium</a></li>
                        
                            <li data-name="Belize"><span class="flag flag-bz"></span> <a href="https://classified.bylancer.com/home/en/bz" data-id="38" data-name="Belize"> Belize</a></li>
                        
                            <li data-name="Benin"><span class="flag flag-bj"></span> <a href="https://classified.bylancer.com/home/fr/bj" data-id="26" data-name="Benin"> Benin</a></li>
                        
                            <li data-name="Bermuda"><span class="flag flag-bm"></span> <a href="https://classified.bylancer.com/home/en/bm" data-id="28" data-name="Bermuda"> Bermuda</a></li>
                        
                            <li data-name="Bhutan"><span class="flag flag-bt"></span> <a href="https://classified.bylancer.com/home/en/bt" data-id="34" data-name="Bhutan"> Bhutan</a></li>
                        
                            <li data-name="Bolivia"><span class="flag flag-bo"></span> <a href="https://classified.bylancer.com/home/es/bo" data-id="30" data-name="Bolivia"> Bolivia</a></li>
                        
                            <li data-name="Bonaire, Sint Eustatius, and Saba"><span class="flag flag-bq"></span> <a href="https://classified.bylancer.com/home/en/bq" data-id="31" data-name="Bonaire, Sint Eustatius, and Saba"> Bonaire, Sint Eustatius, and Saba</a></li>
                        
                            <li data-name="Bosnia and Herzegovina"><span class="flag flag-ba"></span> <a href="https://classified.bylancer.com/home/en/ba" data-id="18" data-name="Bosnia and Herzegovina"> Bosnia and Herzegovina</a></li>
                        
                            <li data-name="Botswana"><span class="flag flag-bw"></span> <a href="https://classified.bylancer.com/home/en/bw" data-id="36" data-name="Botswana"> Botswana</a></li>
                        
                            <li data-name="Bouvet Island"><span class="flag flag-bv"></span> <a href="https://classified.bylancer.com/home/en/bv" data-id="35" data-name="Bouvet Island"> Bouvet Island</a></li>
                        
                            <li data-name="Brazil"><span class="flag flag-br"></span> <a href="https://classified.bylancer.com/home/es/br" data-id="32" data-name="Brazil"> Brazil</a></li>
                        
                            <li data-name="British Indian Ocean Territory"><span class="flag flag-io"></span> <a href="https://classified.bylancer.com/home/en/io" data-id="107" data-name="British Indian Ocean Territory"> British Indian Ocean Territory</a></li>
                        
                            <li data-name="British Virgin Islands"><span class="flag flag-vg"></span> <a href="https://classified.bylancer.com/home/en/vg" data-id="241" data-name="British Virgin Islands"> British Virgin Islands</a></li>
                        
                            <li data-name="Brunei"><span class="flag flag-bn"></span> <a href="https://classified.bylancer.com/home/en/bn" data-id="29" data-name="Brunei"> Brunei</a></li>
                        
                            <li data-name="Bulgaria"><span class="flag flag-bg"></span> <a href="https://classified.bylancer.com/home/bg/bg" data-id="23" data-name="Bulgaria"> Bulgaria</a></li>
                        
                            <li data-name="Burkina Faso"><span class="flag flag-bf"></span> <a href="https://classified.bylancer.com/home/fr/bf" data-id="22" data-name="Burkina Faso"> Burkina Faso</a></li>
                        
                            <li data-name="Burundi"><span class="flag flag-bi"></span> <a href="https://classified.bylancer.com/home/fr/bi" data-id="25" data-name="Burundi"> Burundi</a></li>
                        
                            <li data-name="Cambodia"><span class="flag flag-kh"></span> <a href="https://classified.bylancer.com/home/fr/kh" data-id="118" data-name="Cambodia"> Cambodia</a></li>
                        
                            <li data-name="Cameroon"><span class="flag flag-cm"></span> <a href="https://classified.bylancer.com/home/fr/cm" data-id="48" data-name="Cameroon"> Cameroon</a></li>
                        
                            <li data-name="Canada"><span class="flag flag-ca"></span> <a href="https://classified.bylancer.com/home/en/ca" data-id="39" data-name="Canada"> Canada</a></li>
                        
                            <li data-name="Cape Verde"><span class="flag flag-cv"></span> <a href="https://classified.bylancer.com/home/en/cv" data-id="54" data-name="Cape Verde"> Cape Verde</a></li>
                        
                            <li data-name="Cayman Islands"><span class="flag flag-ky"></span> <a href="https://classified.bylancer.com/home/en/ky" data-id="125" data-name="Cayman Islands"> Cayman Islands</a></li>
                        
                            <li data-name="Central African Republic"><span class="flag flag-cf"></span> <a href="https://classified.bylancer.com/home/fr/cf" data-id="42" data-name="Central African Republic"> Central African Republic</a></li>
                        
                            <li data-name="Chad"><span class="flag flag-td"></span> <a href="https://classified.bylancer.com/home/fr/td" data-id="216" data-name="Chad"> Chad</a></li>
                        
                            <li data-name="Chile"><span class="flag flag-cl"></span> <a href="https://classified.bylancer.com/home/es/cl" data-id="47" data-name="Chile"> Chile</a></li>
                        
                            <li data-name="China"><span class="flag flag-cn"></span> <a href="https://classified.bylancer.com/home/zh/cn" data-id="49" data-name="China"> China</a></li>
                        
                            <li data-name="Christmas Island"><span class="flag flag-cx"></span> <a href="https://classified.bylancer.com/home/en/cx" data-id="56" data-name="Christmas Island"> Christmas Island</a></li>
                        
                            <li data-name="Cocos [Keeling] Islands"><span class="flag flag-cc"></span> <a href="https://classified.bylancer.com/home/en/cc" data-id="40" data-name="Cocos [Keeling] Islands"> Cocos [Keeling] Islands</a></li>
                        
                            <li data-name="Colombia"><span class="flag flag-co"></span> <a href="https://classified.bylancer.com/home/es/co" data-id="50" data-name="Colombia"> Colombia</a></li>
                        
                            <li data-name="Comoros"><span class="flag flag-km"></span> <a href="https://classified.bylancer.com/home/ar/km" data-id="120" data-name="Comoros"> Comoros</a></li>
                        
                            <li data-name="Cook Islands"><span class="flag flag-ck"></span> <a href="https://classified.bylancer.com/home/en/ck" data-id="46" data-name="Cook Islands"> Cook Islands</a></li>
                        
                            <li data-name="Costa Rica"><span class="flag flag-cr"></span> <a href="https://classified.bylancer.com/home/es/cr" data-id="51" data-name="Costa Rica"> Costa Rica</a></li>
                        
                            <li data-name="Croatia"><span class="flag flag-hr"></span> <a href="https://classified.bylancer.com/home/en/hr" data-id="99" data-name="Croatia"> Croatia</a></li>
                        
                            <li data-name="Cuba"><span class="flag flag-cu"></span> <a href="https://classified.bylancer.com/home/es/cu" data-id="53" data-name="Cuba"> Cuba</a></li>
                        
                            <li data-name="Curaçao"><span class="flag flag-cw"></span> <a href="https://classified.bylancer.com/home/en/cw" data-id="55" data-name="Curaçao"> Curaçao</a></li>
                        
                            <li data-name="Cyprus"><span class="flag flag-cy"></span> <a href="https://classified.bylancer.com/home/tr/cy" data-id="57" data-name="Cyprus"> Cyprus</a></li>
                        
                            <li data-name="Czech Republic"><span class="flag flag-cz"></span> <a href="https://classified.bylancer.com/home/en/cz" data-id="58" data-name="Czech Republic"> Czech Republic</a></li>
                        
                            <li data-name="Congo - Kinshasa"><span class="flag flag-cd"></span> <a href="https://classified.bylancer.com/home/fr/cd" data-id="41" data-name="Congo - Kinshasa"> Congo - Kinshasa</a></li>
                        
                            <li data-name="Denmark"><span class="flag flag-dk"></span> <a href="https://classified.bylancer.com/home/en/dk" data-id="61" data-name="Denmark"> Denmark</a></li>
                        
                            <li data-name="Djibouti"><span class="flag flag-dj"></span> <a href="https://classified.bylancer.com/home/fr/dj" data-id="60" data-name="Djibouti"> Djibouti</a></li>
                        
                            <li data-name="Dominica"><span class="flag flag-dm"></span> <a href="https://classified.bylancer.com/home/en/dm" data-id="62" data-name="Dominica"> Dominica</a></li>
                        
                            <li data-name="Dominican Republic"><span class="flag flag-do"></span> <a href="https://classified.bylancer.com/home/es/do" data-id="63" data-name="Dominican Republic"> Dominican Republic</a></li>
                        
                            <li data-name="Timor-Leste"><span class="flag flag-tl"></span> <a href="https://classified.bylancer.com/home/en/tl" data-id="222" data-name="Timor-Leste"> Timor-Leste</a></li>
                        
                            <li data-name="Ecuador"><span class="flag flag-ec"></span> <a href="https://classified.bylancer.com/home/es/ec" data-id="65" data-name="Ecuador"> Ecuador</a></li>
                        
                            <li data-name="Egypt"><span class="flag flag-eg"></span> <a href="https://classified.bylancer.com/home/ar/eg" data-id="67" data-name="Egypt"> Egypt</a></li>
                        
                            <li data-name="El Salvador"><span class="flag flag-sv"></span> <a href="https://classified.bylancer.com/home/es/sv" data-id="211" data-name="El Salvador"> El Salvador</a></li>
                        
                            <li data-name="Equatorial Guinea"><span class="flag flag-gq"></span> <a href="https://classified.bylancer.com/home/es/gq" data-id="89" data-name="Equatorial Guinea"> Equatorial Guinea</a></li>
                        
                            <li data-name="Eritrea"><span class="flag flag-er"></span> <a href="https://classified.bylancer.com/home/ar/er" data-id="69" data-name="Eritrea"> Eritrea</a></li>
                        
                            <li data-name="Estonia"><span class="flag flag-ee"></span> <a href="https://classified.bylancer.com/home/ru/ee" data-id="66" data-name="Estonia"> Estonia</a></li>
                        
                            <li data-name="Ethiopia"><span class="flag flag-et"></span> <a href="https://classified.bylancer.com/home/en/et" data-id="71" data-name="Ethiopia"> Ethiopia</a></li>
                        
                            <li data-name="Falkland Islands"><span class="flag flag-fk"></span> <a href="https://classified.bylancer.com/home/en/fk" data-id="74" data-name="Falkland Islands"> Falkland Islands</a></li>
                        
                            <li data-name="Faroe Islands"><span class="flag flag-fo"></span> <a href="https://classified.bylancer.com/home/en/fo" data-id="76" data-name="Faroe Islands"> Faroe Islands</a></li>
                        
                            <li data-name="Fiji"><span class="flag flag-fj"></span> <a href="https://classified.bylancer.com/home/en/fj" data-id="73" data-name="Fiji"> Fiji</a></li>
                        
                            <li data-name="Finland"><span class="flag flag-fi"></span> <a href="https://classified.bylancer.com/home/sv/fi" data-id="72" data-name="Finland"> Finland</a></li>
                        
                            <li data-name="France"><span class="flag flag-fr"></span> <a href="https://classified.bylancer.com/home/fr/fr" data-id="77" data-name="France"> France</a></li>
                        
                            <li data-name="French Guiana"><span class="flag flag-gf"></span> <a href="https://classified.bylancer.com/home/fr/gf" data-id="81" data-name="French Guiana"> French Guiana</a></li>
                        
                            <li data-name="French Polynesia"><span class="flag flag-pf"></span> <a href="https://classified.bylancer.com/home/fr/pf" data-id="176" data-name="French Polynesia"> French Polynesia</a></li>
                        
                            <li data-name="French Southern Territories"><span class="flag flag-tf"></span> <a href="https://classified.bylancer.com/home/fr/tf" data-id="217" data-name="French Southern Territories"> French Southern Territories</a></li>
                        
                            <li data-name="Gabon"><span class="flag flag-ga"></span> <a href="https://classified.bylancer.com/home/fr/ga" data-id="78" data-name="Gabon"> Gabon</a></li>
                        
                            <li data-name="Gambia"><span class="flag flag-gm"></span> <a href="https://classified.bylancer.com/home/en/gm" data-id="86" data-name="Gambia"> Gambia</a></li>
                        
                            <li data-name="Georgia"><span class="flag flag-ge"></span> <a href="https://classified.bylancer.com/home/ru/ge" data-id="80" data-name="Georgia"> Georgia</a></li>
                        
                            <li data-name="Germany"><span class="flag flag-de"></span> <a href="https://classified.bylancer.com/home/en/de" data-id="59" data-name="Germany"> Germany</a></li>
                        
                            <li data-name="Ghana"><span class="flag flag-gh"></span> <a href="https://classified.bylancer.com/home/en/gh" data-id="83" data-name="Ghana"> Ghana</a></li>
                        
                            <li data-name="Gibraltar"><span class="flag flag-gi"></span> <a href="https://classified.bylancer.com/home/en/gi" data-id="84" data-name="Gibraltar"> Gibraltar</a></li>
                        
                            <li data-name="Greece"><span class="flag flag-gr"></span> <a href="https://classified.bylancer.com/home/en/gr" data-id="90" data-name="Greece"> Greece</a></li>
                        
                            <li data-name="Greenland"><span class="flag flag-gl"></span> <a href="https://classified.bylancer.com/home/en/gl" data-id="85" data-name="Greenland"> Greenland</a></li>
                        
                            <li data-name="Grenada"><span class="flag flag-gd"></span> <a href="https://classified.bylancer.com/home/en/gd" data-id="79" data-name="Grenada"> Grenada</a></li>
                        
                            <li data-name="Guadeloupe"><span class="flag flag-gp"></span> <a href="https://classified.bylancer.com/home/fr/gp" data-id="88" data-name="Guadeloupe"> Guadeloupe</a></li>
                        
                            <li data-name="Guam"><span class="flag flag-gu"></span> <a href="https://classified.bylancer.com/home/en/gu" data-id="93" data-name="Guam"> Guam</a></li>
                        
                            <li data-name="Guatemala"><span class="flag flag-gt"></span> <a href="https://classified.bylancer.com/home/es/gt" data-id="92" data-name="Guatemala"> Guatemala</a></li>
                        
                            <li data-name="Guernsey"><span class="flag flag-gg"></span> <a href="https://classified.bylancer.com/home/en/gg" data-id="82" data-name="Guernsey"> Guernsey</a></li>
                        
                            <li data-name="Guinea"><span class="flag flag-gn"></span> <a href="https://classified.bylancer.com/home/fr/gn" data-id="87" data-name="Guinea"> Guinea</a></li>
                        
                            <li data-name="Guinea-Bissau"><span class="flag flag-gw"></span> <a href="https://classified.bylancer.com/home/en/gw" data-id="94" data-name="Guinea-Bissau"> Guinea-Bissau</a></li>
                        
                            <li data-name="Guyana"><span class="flag flag-gy"></span> <a href="https://classified.bylancer.com/home/en/gy" data-id="95" data-name="Guyana"> Guyana</a></li>
                        
                            <li data-name="Haiti"><span class="flag flag-ht"></span> <a href="https://classified.bylancer.com/home/fr/ht" data-id="100" data-name="Haiti"> Haiti</a></li>
                        
                            <li data-name="Heard Island and McDonald Islands"><span class="flag flag-hm"></span> <a href="https://classified.bylancer.com/home/en/hm" data-id="97" data-name="Heard Island and McDonald Islands"> Heard Island and McDonald Islands</a></li>
                        
                            <li data-name="Honduras"><span class="flag flag-hn"></span> <a href="https://classified.bylancer.com/home/es/hn" data-id="98" data-name="Honduras"> Honduras</a></li>
                        
                            <li data-name="Hong Kong SAR China"><span class="flag flag-hk"></span> <a href="https://classified.bylancer.com/home/zh/hk" data-id="96" data-name="Hong Kong SAR China"> Hong Kong SAR China</a></li>
                        
                            <li data-name="Hungary"><span class="flag flag-hu"></span> <a href="https://classified.bylancer.com/home/en/hu" data-id="101" data-name="Hungary"> Hungary</a></li>
                        
                            <li data-name="Iceland"><span class="flag flag-is"></span> <a href="https://classified.bylancer.com/home/en/is" data-id="110" data-name="Iceland"> Iceland</a></li>
                        
                            <li data-name="India"><span class="flag flag-in"></span> <a href="https://classified.bylancer.com/home/hi/in" data-id="106" data-name="India"> India</a></li>
                        
                            <li data-name="Indonesia"><span class="flag flag-id"></span> <a href="https://classified.bylancer.com/home/en/id" data-id="102" data-name="Indonesia"> Indonesia</a></li>
                        
                            <li data-name="Iran"><span class="flag flag-ir"></span> <a href="https://classified.bylancer.com/home/en/ir" data-id="109" data-name="Iran"> Iran</a></li>
                        
                            <li data-name="Iraq"><span class="flag flag-iq"></span> <a href="https://classified.bylancer.com/home/ar/iq" data-id="108" data-name="Iraq"> Iraq</a></li>
                        
                            <li data-name="Ireland"><span class="flag flag-ie"></span> <a href="https://classified.bylancer.com/home/en/ie" data-id="103" data-name="Ireland"> Ireland</a></li>
                        
                            <li data-name="Isle of Man"><span class="flag flag-im"></span> <a href="https://classified.bylancer.com/home/en/im" data-id="105" data-name="Isle of Man"> Isle of Man</a></li>
                        
                            <li data-name="Israel"><span class="flag flag-il"></span> <a href="https://classified.bylancer.com/home/he/il" data-id="104" data-name="Israel"> Israel</a></li>
                        
                            <li data-name="Italy"><span class="flag flag-it"></span> <a href="https://classified.bylancer.com/home/it/it" data-id="111" data-name="Italy"> Italy</a></li>
                        
                            <li data-name="Côte d’Ivoire"><span class="flag flag-ci"></span> <a href="https://classified.bylancer.com/home/fr/ci" data-id="45" data-name="Côte d’Ivoire"> Côte d’Ivoire</a></li>
                        
                            <li data-name="Jamaica"><span class="flag flag-jm"></span> <a href="https://classified.bylancer.com/home/en/jm" data-id="113" data-name="Jamaica"> Jamaica</a></li>
                        
                            <li data-name="Japan"><span class="flag flag-jp"></span> <a href="https://classified.bylancer.com/home/ja/jp" data-id="115" data-name="Japan"> Japan</a></li>
                        
                            <li data-name="Jersey"><span class="flag flag-je"></span> <a href="https://classified.bylancer.com/home/en/je" data-id="112" data-name="Jersey"> Jersey</a></li>
                        
                            <li data-name="Jordan"><span class="flag flag-jo"></span> <a href="https://classified.bylancer.com/home/ar/jo" data-id="114" data-name="Jordan"> Jordan</a></li>
                        
                            <li data-name="Kazakhstan"><span class="flag flag-kz"></span> <a href="https://classified.bylancer.com/home/ru/kz" data-id="126" data-name="Kazakhstan"> Kazakhstan</a></li>
                        
                            <li data-name="Kenya"><span class="flag flag-ke"></span> <a href="https://classified.bylancer.com/home/en/ke" data-id="116" data-name="Kenya"> Kenya</a></li>
                        
                            <li data-name="Kiribati"><span class="flag flag-ki"></span> <a href="https://classified.bylancer.com/home/en/ki" data-id="119" data-name="Kiribati"> Kiribati</a></li>
                        
                            <li data-name="Kosovo"><span class="flag flag-xk"></span> <a href="https://classified.bylancer.com/home/en/xk" data-id="247" data-name="Kosovo"> Kosovo</a></li>
                        
                            <li data-name="Kuwait"><span class="flag flag-kw"></span> <a href="https://classified.bylancer.com/home/ar/kw" data-id="124" data-name="Kuwait"> Kuwait</a></li>
                        
                            <li data-name="Kyrgyzstan"><span class="flag flag-kg"></span> <a href="https://classified.bylancer.com/home/ru/kg" data-id="117" data-name="Kyrgyzstan"> Kyrgyzstan</a></li>
                        
                            <li data-name="Laos"><span class="flag flag-la"></span> <a href="https://classified.bylancer.com/home/fr/la" data-id="127" data-name="Laos"> Laos</a></li>
                        
                            <li data-name="Latvia"><span class="flag flag-lv"></span> <a href="https://classified.bylancer.com/home/ru/lv" data-id="136" data-name="Latvia"> Latvia</a></li>
                        
                            <li data-name="Lebanon"><span class="flag flag-lb"></span> <a href="https://classified.bylancer.com/home/ar/lb" data-id="128" data-name="Lebanon"> Lebanon</a></li>
                        
                            <li data-name="Lesotho"><span class="flag flag-ls"></span> <a href="https://classified.bylancer.com/home/en/ls" data-id="133" data-name="Lesotho"> Lesotho</a></li>
                        
                            <li data-name="Liberia"><span class="flag flag-lr"></span> <a href="https://classified.bylancer.com/home/en/lr" data-id="132" data-name="Liberia"> Liberia</a></li>
                        
                            <li data-name="Libya"><span class="flag flag-ly"></span> <a href="https://classified.bylancer.com/home/ar/ly" data-id="137" data-name="Libya"> Libya</a></li>
                        
                            <li data-name="Liechtenstein"><span class="flag flag-li"></span> <a href="https://classified.bylancer.com/home/en/li" data-id="130" data-name="Liechtenstein"> Liechtenstein</a></li>
                        
                            <li data-name="Lithuania"><span class="flag flag-lt"></span> <a href="https://classified.bylancer.com/home/ru/lt" data-id="134" data-name="Lithuania"> Lithuania</a></li>
                        
                            <li data-name="Luxembourg"><span class="flag flag-lu"></span> <a href="https://classified.bylancer.com/home/fr/lu" data-id="135" data-name="Luxembourg"> Luxembourg</a></li>
                        
                            <li data-name="Macau SAR China"><span class="flag flag-mo"></span> <a href="https://classified.bylancer.com/home/zh/mo" data-id="149" data-name="Macau SAR China"> Macau SAR China</a></li>
                        
                            <li data-name="Macedonia"><span class="flag flag-mk"></span> <a href="https://classified.bylancer.com/home/tr/mk" data-id="145" data-name="Macedonia"> Macedonia</a></li>
                        
                            <li data-name="Madagascar"><span class="flag flag-mg"></span> <a href="https://classified.bylancer.com/home/fr/mg" data-id="143" data-name="Madagascar"> Madagascar</a></li>
                        
                            <li data-name="Malawi"><span class="flag flag-mw"></span> <a href="https://classified.bylancer.com/home/en/mw" data-id="157" data-name="Malawi"> Malawi</a></li>
                        
                            <li data-name="Malaysia"><span class="flag flag-my"></span> <a href="https://classified.bylancer.com/home/en/my" data-id="159" data-name="Malaysia"> Malaysia</a></li>
                        
                            <li data-name="Maldives"><span class="flag flag-mv"></span> <a href="https://classified.bylancer.com/home/en/mv" data-id="156" data-name="Maldives"> Maldives</a></li>
                        
                            <li data-name="Mali"><span class="flag flag-ml"></span> <a href="https://classified.bylancer.com/home/fr/ml" data-id="146" data-name="Mali"> Mali</a></li>
                        
                            <li data-name="Malta"><span class="flag flag-mt"></span> <a href="https://classified.bylancer.com/home/en/mt" data-id="154" data-name="Malta"> Malta</a></li>
                        
                            <li data-name="Marshall Islands"><span class="flag flag-mh"></span> <a href="https://classified.bylancer.com/home/en/mh" data-id="144" data-name="Marshall Islands"> Marshall Islands</a></li>
                        
                            <li data-name="Martinique"><span class="flag flag-mq"></span> <a href="https://classified.bylancer.com/home/fr/mq" data-id="151" data-name="Martinique"> Martinique</a></li>
                        
                            <li data-name="Mauritania"><span class="flag flag-mr"></span> <a href="https://classified.bylancer.com/home/ar/mr" data-id="152" data-name="Mauritania"> Mauritania</a></li>
                        
                            <li data-name="Mauritius"><span class="flag flag-mu"></span> <a href="https://classified.bylancer.com/home/en/mu" data-id="155" data-name="Mauritius"> Mauritius</a></li>
                        
                            <li data-name="Mayotte"><span class="flag flag-yt"></span> <a href="https://classified.bylancer.com/home/fr/yt" data-id="249" data-name="Mayotte"> Mayotte</a></li>
                        
                            <li data-name="Mexico"><span class="flag flag-mx"></span> <a href="https://classified.bylancer.com/home/es/mx" data-id="158" data-name="Mexico"> Mexico</a></li>
                        
                            <li data-name="Micronesia"><span class="flag flag-fm"></span> <a href="https://classified.bylancer.com/home/en/fm" data-id="75" data-name="Micronesia"> Micronesia</a></li>
                        
                            <li data-name="Moldova"><span class="flag flag-md"></span> <a href="https://classified.bylancer.com/home/ro/md" data-id="140" data-name="Moldova"> Moldova</a></li>
                        
                            <li data-name="Monaco"><span class="flag flag-mc"></span> <a href="https://classified.bylancer.com/home/fr/mc" data-id="139" data-name="Monaco"> Monaco</a></li>
                        
                            <li data-name="Mongolia"><span class="flag flag-mn"></span> <a href="https://classified.bylancer.com/home/ru/mn" data-id="148" data-name="Mongolia"> Mongolia</a></li>
                        
                            <li data-name="Montenegro"><span class="flag flag-me"></span> <a href="https://classified.bylancer.com/home/ro/me" data-id="141" data-name="Montenegro"> Montenegro</a></li>
                        
                            <li data-name="Montserrat"><span class="flag flag-ms"></span> <a href="https://classified.bylancer.com/home/en/ms" data-id="153" data-name="Montserrat"> Montserrat</a></li>
                        
                            <li data-name="Morocco"><span class="flag flag-ma"></span> <a href="https://classified.bylancer.com/home/ar/ma" data-id="138" data-name="Morocco"> Morocco</a></li>
                        
                            <li data-name="Mozambique"><span class="flag flag-mz"></span> <a href="https://classified.bylancer.com/home/en/mz" data-id="160" data-name="Mozambique"> Mozambique</a></li>
                        
                            <li data-name="Myanmar [Burma]"><span class="flag flag-mm"></span> <a href="https://classified.bylancer.com/home/en/mm" data-id="147" data-name="Myanmar [Burma]"> Myanmar [Burma]</a></li>
                        
                            <li data-name="Namibia"><span class="flag flag-na"></span> <a href="https://classified.bylancer.com/home/en/na" data-id="161" data-name="Namibia"> Namibia</a></li>
                        
                            <li data-name="Nauru"><span class="flag flag-nr"></span> <a href="https://classified.bylancer.com/home/en/nr" data-id="170" data-name="Nauru"> Nauru</a></li>
                        
                            <li data-name="Nepal"><span class="flag flag-np"></span> <a href="https://classified.bylancer.com/home/en/np" data-id="169" data-name="Nepal"> Nepal</a></li>
                        
                            <li data-name="Netherlands"><span class="flag flag-nl"></span> <a href="https://classified.bylancer.com/home/en/nl" data-id="167" data-name="Netherlands"> Netherlands</a></li>
                        
                            <li data-name="Netherlands Antilles"><span class="flag flag-an"></span> <a href="https://classified.bylancer.com/home/en/an" data-id="8" data-name="Netherlands Antilles"> Netherlands Antilles</a></li>
                        
                            <li data-name="New Caledonia"><span class="flag flag-nc"></span> <a href="https://classified.bylancer.com/home/fr/nc" data-id="162" data-name="New Caledonia"> New Caledonia</a></li>
                        
                            <li data-name="New Zealand"><span class="flag flag-nz"></span> <a href="https://classified.bylancer.com/home/en/nz" data-id="172" data-name="New Zealand"> New Zealand</a></li>
                        
                            <li data-name="Nicaragua"><span class="flag flag-ni"></span> <a href="https://classified.bylancer.com/home/es/ni" data-id="166" data-name="Nicaragua"> Nicaragua</a></li>
                        
                            <li data-name="Niger"><span class="flag flag-ne"></span> <a href="https://classified.bylancer.com/home/fr/ne" data-id="163" data-name="Niger"> Niger</a></li>
                        
                            <li data-name="Nigeria"><span class="flag flag-ng"></span> <a href="https://classified.bylancer.com/home/en/ng" data-id="165" data-name="Nigeria"> Nigeria</a></li>
                        
                            <li data-name="Niue"><span class="flag flag-nu"></span> <a href="https://classified.bylancer.com/home/en/nu" data-id="171" data-name="Niue"> Niue</a></li>
                        
                            <li data-name="Norfolk Island"><span class="flag flag-nf"></span> <a href="https://classified.bylancer.com/home/en/nf" data-id="164" data-name="Norfolk Island"> Norfolk Island</a></li>
                        
                            <li data-name="North Korea"><span class="flag flag-kp"></span> <a href="https://classified.bylancer.com/home/en/kp" data-id="122" data-name="North Korea"> North Korea</a></li>
                        
                            <li data-name="Northern Mariana Islands"><span class="flag flag-mp"></span> <a href="https://classified.bylancer.com/home/zh/mp" data-id="150" data-name="Northern Mariana Islands"> Northern Mariana Islands</a></li>
                        
                            <li data-name="Norway"><span class="flag flag-no"></span> <a href="https://classified.bylancer.com/home/en/no" data-id="168" data-name="Norway"> Norway</a></li>
                        
                            <li data-name="Oman"><span class="flag flag-om"></span> <a href="https://classified.bylancer.com/home/ar/om" data-id="173" data-name="Oman"> Oman</a></li>
                        
                            <li data-name="Pakistan"><span class="flag flag-pk"></span> <a href="https://classified.bylancer.com/home/ur/pk" data-id="179" data-name="Pakistan"> Pakistan</a></li>
                        
                            <li data-name="Palau"><span class="flag flag-pw"></span> <a href="https://classified.bylancer.com/home/en/pw" data-id="186" data-name="Palau"> Palau</a></li>
                        
                            <li data-name="Palestinian Territories"><span class="flag flag-ps"></span> <a href="https://classified.bylancer.com/home/ar/ps" data-id="184" data-name="Palestinian Territories"> Palestinian Territories</a></li>
                        
                            <li data-name="Panama"><span class="flag flag-pa"></span> <a href="https://classified.bylancer.com/home/es/pa" data-id="174" data-name="Panama"> Panama</a></li>
                        
                            <li data-name="Papua New Guinea"><span class="flag flag-pg"></span> <a href="https://classified.bylancer.com/home/en/pg" data-id="177" data-name="Papua New Guinea"> Papua New Guinea</a></li>
                        
                            <li data-name="Paraguay"><span class="flag flag-py"></span> <a href="https://classified.bylancer.com/home/es/py" data-id="187" data-name="Paraguay"> Paraguay</a></li>
                        
                            <li data-name="Peru"><span class="flag flag-pe"></span> <a href="https://classified.bylancer.com/home/es/pe" data-id="175" data-name="Peru"> Peru</a></li>
                        
                            <li data-name="Philippines"><span class="flag flag-ph"></span> <a href="https://classified.bylancer.com/home/en/ph" data-id="178" data-name="Philippines"> Philippines</a></li>
                        
                            <li data-name="Pitcairn Islands"><span class="flag flag-pn"></span> <a href="https://classified.bylancer.com/home/en/pn" data-id="182" data-name="Pitcairn Islands"> Pitcairn Islands</a></li>
                        
                            <li data-name="Poland"><span class="flag flag-pl"></span> <a href="https://classified.bylancer.com/home/pl/pl" data-id="180" data-name="Poland"> Poland</a></li>
                        
                            <li data-name="Portugal"><span class="flag flag-pt"></span> <a href="https://classified.bylancer.com/home/en/pt" data-id="185" data-name="Portugal"> Portugal</a></li>
                        
                            <li data-name="Puerto Rico"><span class="flag flag-pr"></span> <a href="https://classified.bylancer.com/home/en/pr" data-id="183" data-name="Puerto Rico"> Puerto Rico</a></li>
                        
                            <li data-name="Qatar"><span class="flag flag-qa"></span> <a href="https://classified.bylancer.com/home/ar/qa" data-id="188" data-name="Qatar"> Qatar</a></li>
                        
                            <li data-name="Congo - Brazzaville"><span class="flag flag-cg"></span> <a href="https://classified.bylancer.com/home/fr/cg" data-id="43" data-name="Congo - Brazzaville"> Congo - Brazzaville</a></li>
                        
                            <li data-name="Réunion"><span class="flag flag-re"></span> <a href="https://classified.bylancer.com/home/fr/re" data-id="189" data-name="Réunion"> Réunion</a></li>
                        
                            <li data-name="Romania"><span class="flag flag-ro"></span> <a href="https://classified.bylancer.com/home/ro/ro" data-id="190" data-name="Romania"> Romania</a></li>
                        
                            <li data-name="Russia"><span class="flag flag-ru"></span> <a href="https://classified.bylancer.com/home/ru/ru" data-id="192" data-name="Russia"> Russia</a></li>
                        
                            <li data-name="Rwanda"><span class="flag flag-rw"></span> <a href="https://classified.bylancer.com/home/en/rw" data-id="193" data-name="Rwanda"> Rwanda</a></li>
                        
                            <li data-name="Saint Barthélemy"><span class="flag flag-bl"></span> <a href="https://classified.bylancer.com/home/fr/bl" data-id="27" data-name="Saint Barthélemy"> Saint Barthélemy</a></li>
                        
                            <li data-name="Saint Helena"><span class="flag flag-sh"></span> <a href="https://classified.bylancer.com/home/en/sh" data-id="200" data-name="Saint Helena"> Saint Helena</a></li>
                        
                            <li data-name="Saint Kitts and Nevis"><span class="flag flag-kn"></span> <a href="https://classified.bylancer.com/home/en/kn" data-id="121" data-name="Saint Kitts and Nevis"> Saint Kitts and Nevis</a></li>
                        
                            <li data-name="Saint Lucia"><span class="flag flag-lc"></span> <a href="https://classified.bylancer.com/home/en/lc" data-id="129" data-name="Saint Lucia"> Saint Lucia</a></li>
                        
                            <li data-name="Saint Martin"><span class="flag flag-mf"></span> <a href="https://classified.bylancer.com/home/fr/mf" data-id="142" data-name="Saint Martin"> Saint Martin</a></li>
                        
                            <li data-name="Saint Pierre and Miquelon"><span class="flag flag-pm"></span> <a href="https://classified.bylancer.com/home/fr/pm" data-id="181" data-name="Saint Pierre and Miquelon"> Saint Pierre and Miquelon</a></li>
                        
                            <li data-name="Saint Vincent and the Grenadines"><span class="flag flag-vc"></span> <a href="https://classified.bylancer.com/home/en/vc" data-id="239" data-name="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines</a></li>
                        
                            <li data-name="Samoa"><span class="flag flag-ws"></span> <a href="https://classified.bylancer.com/home/en/ws" data-id="246" data-name="Samoa"> Samoa</a></li>
                        
                            <li data-name="San Marino"><span class="flag flag-sm"></span> <a href="https://classified.bylancer.com/home/it/sm" data-id="205" data-name="San Marino"> San Marino</a></li>
                        
                            <li data-name="São Tomé and Príncipe"><span class="flag flag-st"></span> <a href="https://classified.bylancer.com/home/en/st" data-id="210" data-name="São Tomé and Príncipe"> São Tomé and Príncipe</a></li>
                        
                            <li data-name="Saudi Arabia"><span class="flag flag-sa"></span> <a href="https://classified.bylancer.com/home/ar/sa" data-id="194" data-name="Saudi Arabia"> Saudi Arabia</a></li>
                        
                            <li data-name="Senegal"><span class="flag flag-sn"></span> <a href="https://classified.bylancer.com/home/fr/sn" data-id="206" data-name="Senegal"> Senegal</a></li>
                        
                            <li data-name="Serbia"><span class="flag flag-rs"></span> <a href="https://classified.bylancer.com/home/ro/rs" data-id="191" data-name="Serbia"> Serbia</a></li>
                        
                            <li data-name="Serbia and Montenegro"><span class="flag flag-cs"></span> <a href="https://classified.bylancer.com/home/en/cs" data-id="52" data-name="Serbia and Montenegro"> Serbia and Montenegro</a></li>
                        
                            <li data-name="Seychelles"><span class="flag flag-sc"></span> <a href="https://classified.bylancer.com/home/en/sc" data-id="196" data-name="Seychelles"> Seychelles</a></li>
                        
                            <li data-name="Sierra Leone"><span class="flag flag-sl"></span> <a href="https://classified.bylancer.com/home/en/sl" data-id="204" data-name="Sierra Leone"> Sierra Leone</a></li>
                        
                            <li data-name="Singapore"><span class="flag flag-sg"></span> <a href="https://classified.bylancer.com/home/en/sg" data-id="199" data-name="Singapore"> Singapore</a></li>
                        
                            <li data-name="Sint Maarten"><span class="flag flag-sx"></span> <a href="https://classified.bylancer.com/home/en/sx" data-id="212" data-name="Sint Maarten"> Sint Maarten</a></li>
                        
                            <li data-name="Slovakia"><span class="flag flag-sk"></span> <a href="https://classified.bylancer.com/home/en/sk" data-id="203" data-name="Slovakia"> Slovakia</a></li>
                        
                            <li data-name="Slovenia"><span class="flag flag-si"></span> <a href="https://classified.bylancer.com/home/en/si" data-id="201" data-name="Slovenia"> Slovenia</a></li>
                        
                            <li data-name="Solomon Islands"><span class="flag flag-sb"></span> <a href="https://classified.bylancer.com/home/en/sb" data-id="195" data-name="Solomon Islands"> Solomon Islands</a></li>
                        
                            <li data-name="South Africa"><span class="flag flag-za"></span> <a href="https://classified.bylancer.com/home/en/za" data-id="250" data-name="South Africa"> South Africa</a></li>
                        
                            <li data-name="South Georgia and the South Sandwich Islands"><span class="flag flag-gs"></span> <a href="https://classified.bylancer.com/home/en/gs" data-id="91" data-name="South Georgia and the South Sandwich Islands"> South Georgia and the South Sandwich Islands</a></li>
                        
                            <li data-name="South Korea"><span class="flag flag-kr"></span> <a href="https://classified.bylancer.com/home/en/kr" data-id="123" data-name="South Korea"> South Korea</a></li>
                        
                            <li data-name="South Sudan"><span class="flag flag-ss"></span> <a href="https://classified.bylancer.com/home/en/ss" data-id="209" data-name="South Sudan"> South Sudan</a></li>
                        
                            <li data-name="Spain"><span class="flag flag-es"></span> <a href="https://classified.bylancer.com/home/es/es" data-id="70" data-name="Spain"> Spain</a></li>
                        
                            <li data-name="Sri Lanka"><span class="flag flag-lk"></span> <a href="https://classified.bylancer.com/home/en/lk" data-id="131" data-name="Sri Lanka"> Sri Lanka</a></li>
                        
                            <li data-name="Sudan"><span class="flag flag-sd"></span> <a href="https://classified.bylancer.com/home/ar/sd" data-id="197" data-name="Sudan"> Sudan</a></li>
                        
                            <li data-name="Suriname"><span class="flag flag-sr"></span> <a href="https://classified.bylancer.com/home/en/sr" data-id="208" data-name="Suriname"> Suriname</a></li>
                        
                            <li data-name="Svalbard and Jan Mayen"><span class="flag flag-sj"></span> <a href="https://classified.bylancer.com/home/ru/sj" data-id="202" data-name="Svalbard and Jan Mayen"> Svalbard and Jan Mayen</a></li>
                        
                            <li data-name="Swaziland"><span class="flag flag-sz"></span> <a href="https://classified.bylancer.com/home/en/sz" data-id="214" data-name="Swaziland"> Swaziland</a></li>
                        
                            <li data-name="Sweden"><span class="flag flag-se"></span> <a href="https://classified.bylancer.com/home/sv/se" data-id="198" data-name="Sweden"> Sweden</a></li>
                        
                            <li data-name="Switzerland"><span class="flag flag-ch"></span> <a href="https://classified.bylancer.com/home/fr/ch" data-id="44" data-name="Switzerland"> Switzerland</a></li>
                        
                            <li data-name="Taiwan"><span class="flag flag-tw"></span> <a href="https://classified.bylancer.com/home/zh/tw" data-id="229" data-name="Taiwan"> Taiwan</a></li>
                        
                            <li data-name="Tajikistan"><span class="flag flag-tj"></span> <a href="https://classified.bylancer.com/home/ru/tj" data-id="220" data-name="Tajikistan"> Tajikistan</a></li>
                        
                            <li data-name="Tanzania"><span class="flag flag-tz"></span> <a href="https://classified.bylancer.com/home/en/tz" data-id="230" data-name="Tanzania"> Tanzania</a></li>
                        
                            <li data-name="Thailand"><span class="flag flag-th"></span> <a href="https://classified.bylancer.com/home/th/th" data-id="219" data-name="Thailand"> Thailand</a></li>
                        
                            <li data-name="Togo"><span class="flag flag-tg"></span> <a href="https://classified.bylancer.com/home/fr/tg" data-id="218" data-name="Togo"> Togo</a></li>
                        
                            <li data-name="Tokelau"><span class="flag flag-tk"></span> <a href="https://classified.bylancer.com/home/en/tk" data-id="221" data-name="Tokelau"> Tokelau</a></li>
                        
                            <li data-name="Tonga"><span class="flag flag-to"></span> <a href="https://classified.bylancer.com/home/en/to" data-id="225" data-name="Tonga"> Tonga</a></li>
                        
                            <li data-name="Trinidad and Tobago"><span class="flag flag-tt"></span> <a href="https://classified.bylancer.com/home/en/tt" data-id="227" data-name="Trinidad and Tobago"> Trinidad and Tobago</a></li>
                        
                            <li data-name="Tunisia"><span class="flag flag-tn"></span> <a href="https://classified.bylancer.com/home/ar/tn" data-id="224" data-name="Tunisia"> Tunisia</a></li>
                        
                            <li data-name="Turkey"><span class="flag flag-tr"></span> <a href="https://classified.bylancer.com/home/tr/tr" data-id="226" data-name="Turkey"> Turkey</a></li>
                        
                            <li data-name="Turkmenistan"><span class="flag flag-tm"></span> <a href="https://classified.bylancer.com/home/ru/tm" data-id="223" data-name="Turkmenistan"> Turkmenistan</a></li>
                        
                            <li data-name="Turks and Caicos Islands"><span class="flag flag-tc"></span> <a href="https://classified.bylancer.com/home/en/tc" data-id="215" data-name="Turks and Caicos Islands"> Turks and Caicos Islands</a></li>
                        
                            <li data-name="Tuvalu"><span class="flag flag-tv"></span> <a href="https://classified.bylancer.com/home/en/tv" data-id="228" data-name="Tuvalu"> Tuvalu</a></li>
                        
                            <li data-name="U.S. Virgin Islands"><span class="flag flag-vi"></span> <a href="https://classified.bylancer.com/home/en/vi" data-id="242" data-name="U.S. Virgin Islands"> U.S. Virgin Islands</a></li>
                        
                            <li data-name="Uganda"><span class="flag flag-ug"></span> <a href="https://classified.bylancer.com/home/en/ug" data-id="232" data-name="Uganda"> Uganda</a></li>
                        
                            <li data-name="Ukraine"><span class="flag flag-ua"></span> <a href="https://classified.bylancer.com/home/ru/ua" data-id="231" data-name="Ukraine"> Ukraine</a></li>
                        
                            <li data-name="United Arab Emirates"><span class="flag flag-ae"></span> <a href="https://classified.bylancer.com/home/ar/ae" data-id="2" data-name="United Arab Emirates"> United Arab Emirates</a></li>
                        
                            <li data-name="United Kingdom"><span class="flag flag-uk"></span> <a href="https://classified.bylancer.com/home/en/uk" data-id="233" data-name="United Kingdom"> United Kingdom</a></li>
                        
                            <li data-name="United States"><span class="flag flag-us"></span> <a href="https://classified.bylancer.com/home/en/us" data-id="235" data-name="United States"> United States</a></li>
                        
                            <li data-name="U.S. Minor Outlying Islands"><span class="flag flag-um"></span> <a href="https://classified.bylancer.com/home/en/um" data-id="234" data-name="U.S. Minor Outlying Islands"> U.S. Minor Outlying Islands</a></li>
                        
                            <li data-name="Uruguay"><span class="flag flag-uy"></span> <a href="https://classified.bylancer.com/home/es/uy" data-id="236" data-name="Uruguay"> Uruguay</a></li>
                        
                            <li data-name="Uzbekistan"><span class="flag flag-uz"></span> <a href="https://classified.bylancer.com/home/ru/uz" data-id="237" data-name="Uzbekistan"> Uzbekistan</a></li>
                        
                            <li data-name="Vanuatu"><span class="flag flag-vu"></span> <a href="https://classified.bylancer.com/home/en/vu" data-id="244" data-name="Vanuatu"> Vanuatu</a></li>
                        
                            <li data-name="Vatican City"><span class="flag flag-va"></span> <a href="https://classified.bylancer.com/home/it/va" data-id="238" data-name="Vatican City"> Vatican City</a></li>
                        
                            <li data-name="Venezuela"><span class="flag flag-ve"></span> <a href="https://classified.bylancer.com/home/es/ve" data-id="240" data-name="Venezuela"> Venezuela</a></li>
                        
                            <li data-name="Vietnam"><span class="flag flag-vn"></span> <a href="https://classified.bylancer.com/home/vi/vn" data-id="243" data-name="Vietnam"> Vietnam</a></li>
                        
                            <li data-name="Wallis and Futuna"><span class="flag flag-wf"></span> <a href="https://classified.bylancer.com/home/fr/wf" data-id="245" data-name="Wallis and Futuna"> Wallis and Futuna</a></li>
                        
                            <li data-name="Western Sahara"><span class="flag flag-eh"></span> <a href="https://classified.bylancer.com/home/ar/eh" data-id="68" data-name="Western Sahara"> Western Sahara</a></li>
                        
                            <li data-name="Yemen"><span class="flag flag-ye"></span> <a href="https://classified.bylancer.com/home/ar/ye" data-id="248" data-name="Yemen"> Yemen</a></li>
                        
                            <li data-name="Zambia"><span class="flag flag-zm"></span> <a href="https://classified.bylancer.com/home/en/zm" data-id="251" data-name="Zambia"> Zambia</a></li>
                        
                            <li data-name="Zimbabwe"><span class="flag flag-zw"></span> <a href="https://classified.bylancer.com/home/en/zw" data-id="252" data-name="Zimbabwe"> Zimbabwe</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
 

<!-- orakuploader -->
<link type="text/css" href="https://classified.bylancer.com/plugins/orakuploader/orakuploader.css" rel="stylesheet">
<script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/jquery.min.js"></script>
<script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://classified.bylancer.com/plugins/orakuploader/orakuploader.js"></script>
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
    $(document).ready(function(){
        // -------------------------------------------------------------
        //  Intialize orakuploader
        // -------------------------------------------------------------
        $('#item_screen').orakuploader({
            site_url :  siteurl,
            orakuploader_path : 'plugins/orakuploader/',
            orakuploader_main_path : 'storage/products',
            orakuploader_thumbnail_path : 'storage/products/thumb',
            orakuploader_add_image : siteurl+'plugins/orakuploader/images/add.svg',
            orakuploader_watermark : watermark_image,
            orakuploader_add_label : lang_upload_images,
            orakuploader_use_main : true,
            orakuploader_use_sortable : true,
            orakuploader_use_dragndrop : true,
            orakuploader_use_rotation: true,
            orakuploader_resize_to : 800,
            orakuploader_thumbnail_size  : 250,
            orakuploader_maximum_uploads : max_image_upload,
            orakuploader_max_exceeded : max_image_upload,
            orakuploader_hide_on_exceed : true,
            orakuploader_main_changed    : function (filename) {
                $("#mainlabel-images").remove();
                $("div").find("[filename='" + filename + "']").append("<div id='mainlabel-images' class='maintext'>Main Image</div>");
            },
            orakuploader_max_exceeded : function() {
                alert("You exceeded the max. limit of "+max_image_upload+" images.");
            }
        });
    });
</script>
<div id="post_ad_email_exist" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-align-top my-mfp-zoom-in mfp-ready" tabindex="-1" style="display: none">
    <div class="mfp-container mfp-inline-holder">
        <div class="mfp-content">
            <div class="zoom-anim-dialog dialog-with-tabs popup-dialog">
                <ul class="popup-tabs-nav" style="pointer-events: none;">
                    <li class="active"><a href="#exist_acc">Link to existing accounts</a></li>
                </ul>
                <div class="popup-tabs-container">
                    <div class="popup-tab-content" id="exist_acc" style="display: inline-block;">
                        <form accept-charset="utf-8" id="email_exists_login">
                            <p id="email_exists_success" style="display: none;">
                                <span class="status-available">Account Linked Successful. Redirecting...</span>
                            </p>
                            <p><span id="quickad_email_already_linked"></span>
                                <br>Enter your password below to link accounts:</p>
                            <p id="email_exists_error" style="display: none;"></p>
                            <div class="form-group">
                                <span>Username:</span>
                                <strong id="quickad_username_display"></strong>
                            </div>
                            <div class="form-group">
                                <span>Email:</span>
                                <strong id="quickad_email_display"></strong>
                            </div>
                            <div>
                                <span>Password:</span>
                                <input type="password" class="with-border margin-bottom-0" id="password" name="password">
                                <a href="https://classified.bylancer.com/login?fstart=1" target="_blank" id="fb_forgot_password_btn">
                                    <small>Forgot Password</small>
                                </a>
                            </div>
                            <div>
                                <input type="hidden" name="email" id="email" value="">
                                <input type="hidden" name="username" id="username" value="">
                                <button id="link_account" type="button" value="Submit" class="button ripple-effect">
                                    Link Accounts
                                </button>
                            </div>
                        </form>
                        <div id="email_exists_user">
                            <p>{LANG_EMAIL_LINKED_USER}</p>
                            <button type="button" class="button ripple-effect" id="change-email">
                                {LANG_CHANGE_EMAIL}
                            </button>
                        </div>
                    </div>
                </div>
                <button type="button" class="mfp-close"></button>
            </div>
        </div>
    </div>
    <div class="mfp-bg my-mfp-zoom-in mfp-ready"></div>
</div>


<!-- Select Category Modal -->
<div class="zoom-anim-dialog popup-dialog big-dialog mfp-hide" id="categoryModal">
    <div class="popup-tab-content padding-0 tg-thememodal tg-categorymodal">
        <div class="tg-thememodaldialog">
            <div class="tg-thememodalcontent">
                <div class="tg-title">
                    <strong>Select Category</strong>
                </div>
                <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel select-category post-option owl-loaded owl-drag owl-hidden">
                    
                        
                    
                        
                    
                        
                    
                        
                    
                        
                    
                        
                    
                        
                    
                        
                    

                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1500px;"><div class="owl-item active" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="1" data-ajax-action="getsubcatbyidList" data-cat-name="Cars &amp; Bikes">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/traffic-jam.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Cars &amp; Bikes</a></h3>
                            </div>
                        </div></div><div class="owl-item active" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="2" data-ajax-action="getsubcatbyidList" data-cat-name="Mobiles &amp; Tablets">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/two-smartphones.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Mobiles &amp; Tablets</a></h3>
                            </div>
                        </div></div><div class="owl-item active" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="3" data-ajax-action="getsubcatbyidList" data-cat-name="Electronics &amp; Appliances">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/tv.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Electronics &amp; Appliances</a></h3>
                            </div>
                        </div></div><div class="owl-item active" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="4" data-ajax-action="getsubcatbyidList" data-cat-name="Real Estate">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/real-estate.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Real Estate</a></h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="5" data-ajax-action="getsubcatbyidList" data-cat-name="Home &amp; Lifestyle">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/home-page.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Home &amp; Lifestyle</a></h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="6" data-ajax-action="getsubcatbyidList" data-cat-name="Jobs">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/find-matching-job.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Jobs</a></h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="7" data-ajax-action="getsubcatbyidList" data-cat-name="Services">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/services.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Services</a></h3>
                            </div>
                        </div></div><div class="owl-item" style="width: 187.5px;"><div class="tg-category " data-ajax-catid="8" data-ajax-action="getsubcatbyidList" data-cat-name="Entertainment">
                            <div class="tg-categoryholder">
                                <div class="margin-bottom-10">
                                                                                                            <img src="https://img.icons8.com/dusk/64/000000/dancing.png">
                                                                    </div>
                                <h3><a href="javascript:void()">Entertainment</a></h3>
                            </div>
                        </div></div></div></div><div class="tg-slidernav"><div class="tg-prev disabled"><span class="icon-chevron-left"></span></div><div class="tg-next"><span class="icon-chevron-right"></span></div></div><div class="tg-sliderdots disabled"></div></div>
                <ul class="tg-subcategories" style="display: none">
                    <li>
                        <div class="tg-title">
                            <strong>Select a subcategory</strong><div id="sub-category-loader" style="visibility:hidden"></div>
                        </div>
                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul id="sub_category">

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Select Category Modal -->

<div id="titlebar" class="margin-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Post An Advertise</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="https://classified.bylancer.com/">Home</a></li>
                        <li>Post An Advertise</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section gray">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div id="post_error"></div>
                <div class="payment-confirmation-page dashboard-box margin-top-0 padding-top-0 margin-bottom-50" style="display: none">
                    <div class="headline">
                        <h3>Success</h3>
                    </div>
                    <div class="content with-padding padding-bottom-10">
                        <i class="la la-check-circle"></i>
                        <h1 class="margin-top-30 margin-bottom-30">Success</h1>
                        <p>Your advertise succussfully uploaded. Please wait for approval. Thanks</p>
                    </div>
                </div>
                <form class="form-validate" id="post-advertise-form" action="https://classified.bylancer.com/post-ad?action=post_ad" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                    <div class="dashboard-box margin-top-0">
                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-briefcase"></i> Ads Details</h3>
                        </div>
                        <div class="content with-padding padding-bottom-10">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group text-center">
                                        <a href="#categoryModal" id="choose-category" class="button popup-with-zoom-anim"><i class="icon-feather-check-circle"></i> &nbsp;Choose Category</a>
                                    </div>
                                    <div class="form-group selected-product" id="change-category-btn" style="display: none">
                                        <ul class="select-category list-inline">
                                            <li id="main-category-text"></li>
                                            <li id="sub-category-text"></li>
                                            <li class="active"><a href="#categoryModal" class="popup-with-zoom-anim"><i class="icon-feather-edit"></i> Edit</a></li>
                                        </ul>

                                        <input type="hidden" id="input-maincatid" name="catid" value="">
                                        <input type="hidden" id="input-subcatid" name="subcatid" value="">
                                    </div>
                                    <div class="submit-field">
                                        <h5>Title *</h5>
                                        <input type="text" class="with-border" name="title" placeholder="Title for your advertise" required="">
                                    </div>
                                    <div class="submit-field">
                                        <h5>Description *</h5>
                                        <div class="simditor">
  <div class="simditor-wrapper" style=""><div class="simditor-toolbar" style="top: 0px; width: 867px; left: 110.2px;"><ul><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-bold" href="javascript:;" title="Bold ( Ctrl + b )"><span class="simditor-icon simditor-icon-bold"></span></a></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-italic" href="javascript:;" title="Italic ( Ctrl + i )"><span class="simditor-icon simditor-icon-italic"></span></a></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-underline" href="javascript:;" title="Underline ( Ctrl + u )"><span class="simditor-icon simditor-icon-underline"></span></a></li><li><span class="separator"></span></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-ol" href="javascript:;" title="Ordered List ( ctrl + / )"><span class="simditor-icon simditor-icon-list-ol"></span></a></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-ul" href="javascript:;" title="Unordered List ( Ctrl + . )"><span class="simditor-icon simditor-icon-list-ul"></span></a></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-blockquote" href="javascript:;" title="Block Quote"><span class="simditor-icon simditor-icon-quote-left"></span></a></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-table" href="javascript:;" title="Table"><span class="simditor-icon simditor-icon-table"></span></a><div class="toolbar-menu toolbar-menu-table"><div class="menu-create-table">
<table><thead><tr><th></th><th></th><th></th><th></th><th></th><th></th></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div>
<div class="menu-edit-table">
  <ul>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="deleteRow">
        <span>Delete Row</span>
      </a>
    </li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="insertRowAbove">
        <span>Insert Row Above ( Ctrl + Alt + ↑ )</span>
      </a>
    </li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="insertRowBelow">
        <span>Insert Row Below ( Ctrl + Alt + ↓ )</span>
      </a>
    </li>
    <li><span class="separator"></span></li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="deleteCol">
        <span>Delete Column</span>
      </a>
    </li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="insertColLeft">
        <span>Insert Column Left ( Ctrl + Alt + ← )</span>
      </a>
    </li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="insertColRight">
        <span>Insert Column Right ( Ctrl + Alt + → )</span>
      </a>
    </li>
    <li><span class="separator"></span></li>
    <li>
      <a tabindex="-1" unselectable="on" class="menu-item" href="javascript:;" data-param="deleteTable">
        <span>Delete Table</span>
      </a>
    </li>
  </ul>
</div></div></li><li><a tabindex="-1" unselectable="on" class="toolbar-item toolbar-item-link" href="javascript:;" title="Insert Link"><span class="simditor-icon simditor-icon-link"></span></a></li></ul></div>
    <div class="simditor-placeholder" style="display: block; top: 41px;">Tell us more about your advertise</div>
    <div class="simditor-body" contenteditable="true"><p><br></p></div>
  <textarea cols="30" rows="5" class="with-border text-editor" name="content" placeholder="Tell us more about your advertise"></textarea></div>
<div class="simditor-popover link-popover"><div class="link-settings">
  <div class="settings-field">
    <label>Text</label>
    <input class="link-text" type="text">
    <a class="btn-unlink" href="javascript:;" title="Remove Link" tabindex="-1">
      <span class="simditor-icon simditor-icon-unlink"></span>
    </a>
  </div>
  <div class="settings-field">
    <label>Url</label>
    <input class="link-url" type="text">
  </div>
  <div class="settings-field">
    <label>Target</label>
    <select class="link-target">
      <option value="_blank">Open link in new window (_blank)</option>
      <option value="_self">Open link in current window (_self)</option>
    </select>
  </div>
</div></div></div>
                                    </div>
                                    <div class="submit-field" id="quickad-photo-field">
                                        <div id="item_screen_to_clone" class="clone_item"><div class="multibox file" style="cursor: move;"><div class="loading"><img src="https://classified.bylancer.com/plugins/orakuploader//images/loader.gif" alt="loader"></div></div></div>		<div id="item_screenDDArea">			<div id="item_screen" class="ui-sortable">			</div>			<div class="multibox uploadButton" onclick="javascript:orakuploaderLoad('item_screen');">			<img src="https://classified.bylancer.com/plugins/orakuploader/images/add.svg">			<br><span>Upload Images</span>			</div>			<input type="file" class="item_screenInput orakuploaderFileInput" accept="image/*" multiple="">			<div class="clear"> </div>		</div>
                                    </div>
                                    <div id="ResponseCustomFields">

                                    
                                    </div>
                                    <div class="submit-field" id="quickad-price-field">
                                        <h5>Price</h5>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-12">
                                                <div class="input-with-icon">
                                                    <input class="with-border" type="text" placeholder="Price" name="price">
                                                    <i class="currency">₹</i>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12 margin-top-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="negotiable" name="negotiable" value="1">
                                                    <label for="negotiable"><span class="checkbox-icon"></span> negotiate</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-field">
                                        <h5>Phone Number</h5>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-12">
                                                <div class="input-with-icon-left">
                                                    <i class="flag-img"><img src="https://classified.bylancer.com/includes/assets/plugins/flags/images/in.png"></i>
                                                    <input type="text" class="with-border" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="checkbox margin-top-12">
                                                    <input type="checkbox" name="hide_phone" id="phone" value="1">
                                                    <label for="phone"><span class="checkbox-icon"></span> Hide</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-field">
                                        <h5>City *</h5>
                                        <select id="jobcity" class="with-border select2-hidden-accessible" name="city" data-size="7" title="Select City" data-select2-id="jobcity" tabindex="-1" aria-hidden="true">
                                            <option value="0" selected="selected" data-select2-id="2">Select City</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 715px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" title="Select City" tabindex="0" aria-disabled="false" aria-labelledby="select2-jobcity-container"><span class="select2-selection__rendered" id="select2-jobcity-container" role="textbox" aria-readonly="true" title="Select City">Select City</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!-- Location -->

                                                                        <div class="submit-field">
                                        <h5>Address</h5>
                                        <div class="input-with-icon">
                                            <div id="autocomplete-container" data-autocomplete-tip="type and hit enter">
                                                <input class="with-border" type="text" placeholder="Address" name="location" id="address-autocomplete" autocomplete="new-password"><div id="leaflet-geocode-cont"><ul></ul></div>
                                            </div><span class="type-and-hit-enter">type and hit enter</span>
                                            <div class="geo-location" style="display: none;"><i class="la la-crosshairs"></i></div>
                                        </div>
                                        <div class="map shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-touch-zoom" id="singleListingMap" data-latitude="20.593684" data-longitude="78.96288" style="height: 200px" data-map-icon="map-marker" tabindex="0" data-gesture-handling-touch-content="Use two fingers to move the map" data-gesture-handling-scroll-content="Use ctrl + scroll to zoom the map"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(76px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2946/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(141px, -143px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2945/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-371px, -143px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2947/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(653px, -143px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><div class="leaflet-marker-icon quick-marker-icon leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: 0px; margin-top: 0px; width: 12px; height: 12px; transform: translate3d(357px, 100px, 0px); z-index: 100;"><div class="marker-container no-marker-icon "></div></div></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.50857e+06px, 925939px, 0px) scale(4096);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in"><i class="fa fa-plus" aria-hidden="true"></i></a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out"><i class="fa fa-minus" aria-hidden="true"></i></a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> |  ©  <a href="https://www.mapbox.com/about/maps/">Mapbox</a> ©  <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                                        <small>Drag the map marker to exact address</small>
                                        <input type="hidden" id="latitude" name="latitude" value="20.593684">
                                        <input type="hidden" id="longitude" name="longitude" value="78.96288">
                                    </div>
                                                                                                            <div class="submit-field form-group">
                                        <h5>Tags</h5>
                                        <input class="with-border" type="text" name="tags">
                                        <small>Enter the tags separated by commas.</small>
                                    </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                                        <div class="dashboard-box">
                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-user"></i> User Details</h3>
                        </div>
                        <div class="content with-padding padding-bottom-10">
                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                    <div class="submit-field">
                                        <h5>Full Name *</h5>
                                        <div class="input-with-icon-left">
                                            <i class="la la-user"></i>
                                            <input type="text" class="with-border" name="seller_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <div class="submit-field">
                                        <h5>Email *</h5>
                                        <div class="input-with-icon-left">
                                            <i class="la la-envelope"></i>
                                            <input type="email" class="with-border" name="seller_email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                        <div class="dashboard-box">
                        <div class="headline">
                            <h3><i class="icon-feather-zap"></i> Make your Ad Premium <small>(Optional)</small></h3>
                        </div>
                        <div class="content with-padding">
                            <div class="payment">

                                <div class="payment-tab payment-tab-active">
                                    <div class="payment-tab-trigger">
                                        <input checked="" id="free" name="make_premium" type="radio" value="0">
                                        <label for="free">Free Ad</label>
                                    </div>
                                    <div class="payment-tab-content">
                                        <p>Your ad will go live after check by reviewer.</p>
                                    </div>
                                </div>

                                <div class="payment-tab">
                                    <div class="payment-tab-trigger">
                                        <input type="radio" name="make_premium" id="make_premium" value="1">
                                        <label for="make_premium">Premium <span class="badge green pull-right">RECOMMENDED</span></label>
                                    </div>

                                    <div class="payment-tab-content">
                                        <p>You can optionally select some upgrades to get the best results.</p>
                                        <div class="row premium-plans">
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="featured" name="featured" value="1" onchange="fillPrice(this,10);">
                                                    <label for="featured"><span class="checkbox-icon"></span> <span class="badge blue">Featured</span></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 premium-plans-text">
                                                Featured ads attract higher-quality viewer and are displayed prominently in the Featured ads section home page.
                                            </div>
                                            <div class="col-lg-3 premium-plans-price">
                                                $10 for 7 days
                                            </div>
                                        </div>
                                        <div class="row premium-plans">
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="urgent" name="urgent" value="1" onchange="fillPrice(this,10);">
                                                    <label for="urgent"><span class="checkbox-icon"></span> <span class="badge yellow">Urgent</span></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 premium-plans-text">
                                                Make your ad stand out and let viewer know that your advertise is time sensitive.
                                            </div>
                                            <div class="col-lg-3 premium-plans-price">
                                                $10 for 7 days
                                            </div>
                                        </div>
                                        <div class="row premium-plans">
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="highlight" name="highlight" value="1" onchange="fillPrice(this,10);">
                                                    <label for="highlight"><span class="checkbox-icon"></span> <span class="badge red">Highlight</span></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 premium-plans-text">
                                                Make your ad highlighted with border in listing search result page. Easy to focus.
                                            </div>
                                            <div class="col-lg-3 premium-plans-price">
                                                $10 for 7 days
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                                        <input type="hidden" name="submit">
                    <div class="row margin-top-30 margin-bottom-80" style="align-items: center;">
                        <div class="col-6">
                            <button type="submit" id="submit_job_button" name="Submit" class="button ripple-effect big"><i class="icon-feather-plus"></i> Post An Ad</button>
                        </div>
                        <div class="col-6">
                            <div id="ad_total_cost_container" class="text-right" style="display: none">
                                <strong>
                                    Total:
                                    <span class="currency-sign">$</span>
                                    <span id="totalPrice">0</span>
                                    <span class="currency-code">USD</span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 hide-under-992px">
                <div class="dashboard-box margin-top-0">
                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-feather-alert-circle"></i> Tips!</h3>
                    </div>
                    <div class="content with-padding padding-bottom-10">
                        <ul class="list-2">
                            <li>Enter a brief description of the advertise.</li>
                            <li>Add your product photo.</li>
                            <li>Choose the correct category and sub-category of the ad.</li>
                            <li>Check again before submit the ad.</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center visible-md visible-lg"><a class="quick-bm-banner" data-id="3" id="ubm_0"></a>
<a class="quick-bm-banner" data-id="3" id="ubm_1"></a>
<a class="quick-bm-banner" data-id="3" id="ubm_2"></a>
<a class="quick-bm-banner" data-id="3" id="ubm_3"></a>
<a class="quick-bm-banner" data-id="3" id="ubm_4"></a></div>
            <div class="text-center visible-sm"></div>
            <div class="text-center visible-xs"></div>
            </div>

        </div>
    </div>
</div>
<script>
    var lang_edit_cat = "<i class='icon-feather-check-circle'></i> &nbsp;Edit Category";
</script>
<link href="https://classified.bylancer.com/templates/thenext-theme/css/category-modal.css" type="text/css" rel="stylesheet">
<link href="https://classified.bylancer.com/templates/thenext-theme/css/owl.post.carousel.css" type="text/css" rel="stylesheet">
<link href="https://classified.bylancer.com/templates/thenext-theme/css/select2.min.css" rel="stylesheet">
<script src="https://classified.bylancer.com/templates/thenext-theme/js/select2.min.js"></script>
<script src="https://classified.bylancer.com/templates/thenext-theme/js/owl.carousel-category.min.js"></script>

<script src="https://classified.bylancer.com/templates/thenext-theme/js/jquery.form.js"></script>
<script src="https://classified.bylancer.com/templates/thenext-theme/js/ad_post.js"></script>

<!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
<link media="all" rel="stylesheet" type="text/css" href="https://classified.bylancer.com/includes/assets/plugins/simditor/styles/simditor.css">
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
            toolbar = ['bold','italic','underline','|','ol','ul','blockquote','table','link'];
            mobileToolbar = ["bold", "italic", "underline", "ul", "ol"];
            if (mobilecheck()) {
                toolbar = mobileToolbar;
            }
            allowedTags = ['br','span','a','img','b','strong','i','strike','u','font','p','ul','ol','li','blockquote','pre','h1','h2','h3','h4','hr','table'];
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
        var openstreet_access_token = 'pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ';
    </script>
    <link rel="stylesheet" href="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/css/style.css">
    <!-- Leaflet // Docs: https://leafletjs.com/ -->
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet.min.js"></script>

    <!-- Leaflet Maps Scripts (locations are stored in leaflet-quick.js) -->
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-markercluster.min.js"></script>
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-gesture-handling.min.js"></script>
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-quick.js"></script>

    <!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-autocomplete.js"></script>
    <script src="https://classified.bylancer.com/includes/assets/plugins/map/openstreet/leaflet-control-geocoder.js"></script>
    <script>
        $('#jobcity').on('change', function() {
            var data = $("#jobcity option:selected").val();
            var custom_data= $("#jobcity").select2('data')[0];
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


 
 <div id="backtotop" class=""><a href="#"></a></div><div id="mm-blocker" class="mm-slideout"></div></body></html>
 @endsection