@extends('layout/usermaster')
@section('content')

     
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
                                            <!-- Location -->

                                        
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
@endsection