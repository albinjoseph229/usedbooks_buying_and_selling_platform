@extends('layout/usermaster')
@section('content')
<html lang="en" dir="ltr">

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
        <div id="post_ad_email_exist"
            class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-align-top my-mfp-zoom-in mfp-ready" tabindex="-1"
            style="display: none">
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
                                        <br>Enter your password below to link accounts:
                                    </p>
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
                                        <input type="password" class="with-border margin-bottom-0" id="password"
                                            name="password">
                                        <a href="https://classified.bylancer.com/login?fstart=1" target="_blank"
                                            id="fb_forgot_password_btn">
                                            <small>Forgot Password</small>
                                        </a>
                                    </div>
                                    <div>
                                        <input type="hidden" name="email" id="email" value="">
                                        <input type="hidden" name="username" id="username" value="">
                                        <button id="link_account" type="button" value="Submit"
                                            class="button ripple-effect">
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

        <div id="titlebar" class="margin-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Post An Advertise</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('userhome')}}">Home</a></li>
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
                        <div class="payment-confirmation-page dashboard-box margin-top-0 padding-top-0 margin-bottom-50"
                            style="display: none">
                            <div class="headline">
                                <h3>Success</h3>
                            </div>
                            <div class="content with-padding padding-bottom-10">
                                <i class="la la-check-circle"></i>
                                <h1 class="margin-top-30 margin-bottom-30">Success</h1>
                                <p>Your advertise succussfully uploaded. Please wait for approval. Thanks</p>
                            </div>
                        </div>
                        <form class="form-validate" id="post-advertise-form"
                            action="https://classified.bylancer.com/post-ad?action=post_ad" method="post"
                            enctype="multipart/form-data" accept-charset="UTF-8">
                            <div class="dashboard-box margin-top-0">
                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-feather-briefcase"></i> Ads Details</h3>
                                </div>
                                <div class="content with-padding padding-bottom-10">
                                    <div class="row">
                                        <div class="col-xl-12">
                                        
                                            <div class="form-group selected-product" id="change-category-btn"
                                                style="display: none">
                                                <ul class="select-category list-inline">
                                                    <li id="main-category-text"></li>
                                                    <li id="sub-category-text"></li>
                                                    <li class="active"><a href="#categoryModal"
                                                            class="popup-with-zoom-anim"><i
                                                                class="icon-feather-edit"></i> Edit</a></li>
                                                </ul>

                                                <input type="hidden" id="input-maincatid" name="catid" value="">
                                                <input type="hidden" id="input-subcatid" name="subcatid" value="">
                                            </div>
                                            <div class="submit-field">
                                                <h5>Title *</h5>
                                                <input type="text" class="with-border" name="title"
                                                    placeholder="Title for your advertise" required="">
                                            </div>
                                            <div class="submit-field">
                                                <h5>Description *</h5>
                                                <div class="simditor">
                                                    <div class="simditor-wrapper" style="">
                                                        <div class="simditor-toolbar"
                                                            style="top: 0px; width: 867px; left: 110.2px;">
                                                            <ul>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-bold"
                                                                        href="javascript:;"
                                                                        title="Bold ( Ctrl + b )"><span
                                                                            class="simditor-icon simditor-icon-bold"></span></a>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-italic"
                                                                        href="javascript:;"
                                                                        title="Italic ( Ctrl + i )"><span
                                                                            class="simditor-icon simditor-icon-italic"></span></a>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-underline"
                                                                        href="javascript:;"
                                                                        title="Underline ( Ctrl + u )"><span
                                                                            class="simditor-icon simditor-icon-underline"></span></a>
                                                                </li>
                                                                <li><span class="separator"></span></li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-ol"
                                                                        href="javascript:;"
                                                                        title="Ordered List ( ctrl + / )"><span
                                                                            class="simditor-icon simditor-icon-list-ol"></span></a>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-ul"
                                                                        href="javascript:;"
                                                                        title="Unordered List ( Ctrl + . )"><span
                                                                            class="simditor-icon simditor-icon-list-ul"></span></a>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-blockquote"
                                                                        href="javascript:;" title="Block Quote"><span
                                                                            class="simditor-icon simditor-icon-quote-left"></span></a>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-table"
                                                                        href="javascript:;" title="Table"><span
                                                                            class="simditor-icon simditor-icon-table"></span></a>
                                                                    <div class="toolbar-menu toolbar-menu-table">
                                                                        <div class="menu-create-table">
                                                                            <table>
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="menu-edit-table">
                                                                            <ul>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="deleteRow">
                                                                                        <span>Delete Row</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="insertRowAbove">
                                                                                        <span>Insert Row Above ( Ctrl +
                                                                                            Alt + ↑ )</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="insertRowBelow">
                                                                                        <span>Insert Row Below ( Ctrl +
                                                                                            Alt + ↓ )</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li><span class="separator"></span></li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="deleteCol">
                                                                                        <span>Delete Column</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="insertColLeft">
                                                                                        <span>Insert Column Left ( Ctrl
                                                                                            + Alt + ← )</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="insertColRight">
                                                                                        <span>Insert Column Right ( Ctrl
                                                                                            + Alt + → )</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li><span class="separator"></span></li>
                                                                                <li>
                                                                                    <a tabindex="-1" unselectable="on"
                                                                                        class="menu-item"
                                                                                        href="javascript:;"
                                                                                        data-param="deleteTable">
                                                                                        <span>Delete Table</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li><a tabindex="-1" unselectable="on"
                                                                        class="toolbar-item toolbar-item-link"
                                                                        href="javascript:;" title="Insert Link"><span
                                                                            class="simditor-icon simditor-icon-link"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="simditor-placeholder"
                                                            style="display: block; top: 41px;">Tell us more about your
                                                            advertise</div>
                                                        <div class="simditor-body" contenteditable="true">
                                                            <p><br></p>
                                                        </div>
                                                        <textarea cols="30" rows="5" class="with-border text-editor"
                                                            name="content"
                                                            placeholder="Tell us more about your advertise"></textarea>
                                                    </div>
                                                    <div class="simditor-popover link-popover">
                                                        <div class="link-settings">
                                                            <div class="settings-field">
                                                                <label>Text</label>
                                                                <input class="link-text" type="text">
                                                                <a class="btn-unlink" href="javascript:;"
                                                                    title="Remove Link" tabindex="-1">
                                                                    <span
                                                                        class="simditor-icon simditor-icon-unlink"></span>
                                                                </a>
                                                            </div>
                                                            <div class="settings-field">
                                                                <label>Url</label>
                                                                <input class="link-url" type="text">
                                                            </div>
                                                            <div class="settings-field">
                                                                <label>Target</label>
                                                                <select class="link-target">
                                                                    <option value="_blank">Open link in new window
                                                                        (_blank)</option>
                                                                    <option value="_self">Open link in current window
                                                                        (_self)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-field" id="quickad-photo-field">
                                                <div id="item_screen_to_clone" class="clone_item">
                                                    <div class="multibox file" style="cursor: move;">
                                                        <div class="loading"><img
                                                                src="https://classified.bylancer.com/plugins/orakuploader//images/loader.gif"
                                                                alt="loader"></div>
                                                    </div>
                                                </div>
                                                <div id="item_screenDDArea">
                                                    <div id="item_screen" class="ui-sortable"> </div>
                                                    <div class="multibox uploadButton"
                                                        onclick="javascript:orakuploaderLoad('item_screen');"> <img
                                                            src="https://classified.bylancer.com/plugins/orakuploader/images/add.svg">
                                                        <br><span>Upload Images</span> </div> <input type="file"
                                                        class="item_screenInput orakuploaderFileInput" accept="image/*"
                                                        multiple="">
                                                    <div class="clear"> </div>
                                                </div>
                                            </div>
                                            <div id="ResponseCustomFields">


                                            </div>
                                            <div class="submit-field" id="quickad-price-field">
                                                <h5>Price</h5>
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="input-with-icon">
                                                            <input class="with-border" type="text" placeholder="Price"
                                                                name="price">
                                                            <i class="currency">₹</i>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12 margin-top-12">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="negotiable" name="negotiable"
                                                                value="1">
                                                            <label for="negotiable"><span class="checkbox-icon"></span>
                                                                negotiate</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-field">
                                                <h5>Phone Number</h5>
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="input-with-icon-left">
                                                            <i class="flag-img"><img
                                                                    src="https://classified.bylancer.com/includes/assets/plugins/flags/images/in.png"></i>
                                                            <input type="text" class="with-border" name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="checkbox margin-top-12">
                                                            <input type="checkbox" name="hide_phone" id="phone"
                                                                value="1">
                                                            <label for="phone"><span class="checkbox-icon"></span>
                                                                Hide</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-field">
                                                <h5>City *</h5>
                                                <select id="jobcity" class="with-border select2-hidden-accessible"
                                                    name="city" data-size="7" title="Select City"
                                                    data-select2-id="jobcity" tabindex="-1" aria-hidden="true">
                                                    <option value="0" selected="selected" data-select2-id="2">Select
                                                        City</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="1" style="width: 715px;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            title="Select City" tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-jobcity-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-jobcity-container" role="textbox"
                                                                aria-readonly="true" title="Select City">Select
                                                                City</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!-- Location -->

                                            <div class="submit-field">
                                                <h5>Address</h5>
                                                <div class="input-with-icon">
                                                    <div id="autocomplete-container"
                                                        data-autocomplete-tip="type and hit enter">
                                                        <input class="with-border" type="text" placeholder="Address"
                                                            name="location" id="address-autocomplete"
                                                            autocomplete="new-password">
                                                        <div id="leaflet-geocode-cont">
                                                            <ul></ul>
                                                        </div>
                                                    </div><span class="type-and-hit-enter">type and hit enter</span>
                                                    <div class="geo-location" style="display: none;"><i
                                                            class="la la-crosshairs"></i></div>
                                                </div>
                                                <div class="map shadow leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-touch-zoom"
                                                    id="singleListingMap" data-latitude="20.593684"
                                                    data-longitude="78.96288" style="height: 200px"
                                                    data-map-icon="map-marker" tabindex="0"
                                                    data-gesture-handling-touch-content="Use two fingers to move the map"
                                                    data-gesture-handling-scroll-content="Use ctrl + scroll to zoom the map">
                                                    <div class="leaflet-pane leaflet-map-pane"
                                                        style="transform: translate3d(76px, 0px, 0px);">
                                                        <div class="leaflet-pane leaflet-tile-pane">
                                                            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                                <div class="leaflet-tile-container leaflet-zoom-animated"
                                                                    style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                                    <img alt="" role="presentation"
                                                                        src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2946/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ"
                                                                        class="leaflet-tile leaflet-tile-loaded"
                                                                        style="width: 512px; height: 512px; transform: translate3d(141px, -143px, 0px); opacity: 1;"><img
                                                                        alt="" role="presentation"
                                                                        src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2945/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ"
                                                                        class="leaflet-tile leaflet-tile-loaded"
                                                                        style="width: 512px; height: 512px; transform: translate3d(-371px, -143px, 0px); opacity: 1;"><img
                                                                        alt="" role="presentation"
                                                                        src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2947/1808?access_token=pk.eyJ1IjoiZ292aW5kYWdyeWQiLCJhIjoiY2tncTZza3o3MnJxZTJ6dGVsM2FzODFwbiJ9.ut69hvDQpjDIYAj9yL8MZQ"
                                                                        class="leaflet-tile leaflet-tile-loaded"
                                                                        style="width: 512px; height: 512px; transform: translate3d(653px, -143px, 0px); opacity: 1;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="leaflet-pane leaflet-shadow-pane"></div>
                                                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                                                        <div class="leaflet-pane leaflet-marker-pane">
                                                            <div class="leaflet-marker-icon quick-marker-icon leaflet-zoom-animated leaflet-interactive"
                                                                tabindex="0"
                                                                style="margin-left: 0px; margin-top: 0px; width: 12px; height: 12px; transform: translate3d(357px, 100px, 0px); z-index: 100;">
                                                                <div class="marker-container no-marker-icon "></div>
                                                            </div>
                                                        </div>
                                                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                                        <div class="leaflet-pane leaflet-popup-pane"></div>
                                                        <div class="leaflet-proxy leaflet-zoom-animated"
                                                            style="transform: translate3d(1.50857e+06px, 925939px, 0px) scale(4096);">
                                                        </div>
                                                    </div>
                                                    <div class="leaflet-control-container">
                                                        <div class="leaflet-top leaflet-left">
                                                            <div
                                                                class="leaflet-control-zoom leaflet-bar leaflet-control">
                                                                <a class="leaflet-control-zoom-in" href="#"
                                                                    title="Zoom in" role="button"
                                                                    aria-label="Zoom in"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i></a><a
                                                                    class="leaflet-control-zoom-out" href="#"
                                                                    title="Zoom out" role="button"
                                                                    aria-label="Zoom out"><i class="fa fa-minus"
                                                                        aria-hidden="true"></i></a></div>
                                                        </div>
                                                        <div class="leaflet-top leaflet-right"></div>
                                                        <div class="leaflet-bottom leaflet-left"></div>
                                                        <div class="leaflet-bottom leaflet-right">
                                                            <div class="leaflet-control-attribution leaflet-control"><a
                                                                    href="https://leafletjs.com"
                                                                    title="A JS library for interactive maps">Leaflet</a>
                                                                | © <a
                                                                    href="https://www.mapbox.com/about/maps/">Mapbox</a>
                                                                © <a
                                                                    href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                   

                            <input type="hidden" name="submit">
                            <div class="row margin-top-30 margin-bottom-80" style="align-items: center;">
                                <div class="col-6">
                                    <button type="submit" id="submit_job_button" name="Submit"
                                        class="button ripple-effect big"><i class="icon-feather-plus"></i> Post An
                                        Ad</button>
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

                        <div class="text-center visible-md visible-lg"><a class="quick-bm-banner" data-id="3"
                                id="ubm_0"></a>
                            <a class="quick-bm-banner" data-id="3" id="ubm_1"></a>
                            <a class="quick-bm-banner" data-id="3" id="ubm_2"></a>
                            <a class="quick-bm-banner" data-id="3" id="ubm_3"></a>
                            <a class="quick-bm-banner" data-id="3" id="ubm_4"></a>
                        </div>
                        <div class="text-center visible-sm"></div>
                        <div class="text-center visible-xs"></div>
                    </div>

                </div>
            </div>
        </div>
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

</html>
@endsection