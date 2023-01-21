@extends('layout/master')
@section('content')
<div class="container" style="margin-top: 35px;">

    <div class="contact-map location-map leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag"
        id="osmMap" tabindex="0" style="position: relative;">
        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
            <div class="leaflet-pane leaflet-tile-pane">
                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                    <div class="leaflet-tile-container leaflet-zoom-animated"
                        style="z-index: 17; transform: translate3d(148px, 60px, 0px) scale(0.5);"></div>
                    <div class="leaflet-tile-container leaflet-zoom-animated"
                        style="z-index: 18; transform: translate3d(98px, 39px, 0px) scale(1);"><img alt=""
                            role="presentation" src="https://a.tile.openstreetmap.org/15/18190/11753.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(308px, 6px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/18189/11753.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(52px, 6px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/18191/11753.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(564px, 6px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/18190/11752.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(308px, -250px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/18189/11752.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(52px, -250px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/18191/11752.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(564px, -250px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/15/18188/11752.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-204px, -250px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/18192/11752.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(820px, -250px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/15/18188/11753.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-204px, 6px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/15/18192/11753.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(820px, 6px, 0px); opacity: 1;">
                    </div>
                </div>
            </div>
            <div class="leaflet-pane leaflet-shadow-pane"></div>
            <div class="leaflet-pane leaflet-overlay-pane"></div>
            <div class="leaflet-pane leaflet-marker-pane"><img
                    src="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/02/marker.png"
                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0"
                    style="margin-left: -27.5px; margin-top: -27.5px; width: 55px; height: 55px; transform: translate3d(259px, 85px, 0px); z-index: 85;"><img
                    src="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/02/marker.png"
                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="" tabindex="0"
                    style="margin-left: -27.5px; margin-top: -27.5px; width: 55px; height: 55px; transform: translate3d(320px, 110px, 0px); z-index: 110;">
            </div>
            <div class="leaflet-pane leaflet-tooltip-pane"></div>
            <div class="leaflet-pane leaflet-popup-pane"></div>
            <div class="leaflet-proxy leaflet-zoom-animated"
                style="transform: translate3d(4.6568e+06px, 3.00887e+06px, 0px) scale(16384);"></div>
        </div>
        <div class="leaflet-control-container">
            <div class="leaflet-top leaflet-left">
                <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in"
                        href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a
                        class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button"
                        aria-label="Zoom out">−</a></div>
            </div>
            <div class="leaflet-top leaflet-right"></div>
            <div class="leaflet-bottom leaflet-left"></div>
            <div class="leaflet-bottom leaflet-right">
                <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com"
                        title="A JS library for interactive maps">Leaflet</a> | © <a
                        href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors</div>
            </div>
        </div>
    </div>

    <div class="white-block">
        <div class="white-block-title">
            <h5>Send Us A Message</h5>
        </div>
        <div class="white-block-content">
            <form class="ajax-form"><input type="hidden" value="1" name="aff-cpt">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="email">Your Email *</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="subject">Message Subject *</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                </div>
                <label for="message">Your Message *</label>
                <textarea rows="10" cols="100" id="message" name="message" class="form-control"></textarea>


                <input type="hidden" name="action" value="send_contact">

                <div class="ajax-form-result"></div>

                <p class="form-submit">
                    <a href="javascript:;" class="submit-ajax-form af-button">Send Message </a>
                </p>
                <input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f"><input type="hidden"
                    name="_wp_http_referer" value="/themes/adifier/contact/">
            </form>
        </div>
    </div>

</div>
@endsection