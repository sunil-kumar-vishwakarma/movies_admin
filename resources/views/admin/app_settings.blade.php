@extends('admin.layout')

@section('content')
    <div class="banner-container">
        <main class="banner-content">
            <div class="save-button-container">
                {{-- <a href="#" class="save-button">Save</a> --}}
            </div>
            <section class="settings-management">
                <div class="tab">
                    <button class="tablinks" onclick="openCategory(event, 'Home')" id="defaultOpen">App Settings</button>
                    <button class="tablinks" onclick="openCategory(event, 'Comedy')">Configrations</button>
                    <button class="tablinks" onclick="openCategory(event, 'Horror')">SMTP</button>
                    <button class="tablinks" onclick="openCategory(event, 'TV Show')"> Social Settings</button>
                    {{-- <button class="tablinks" onclick="openCategory(event, 'Horror1')">OnBoarding Screen</button> --}}
                </div>




                {{-- 1st section --}}
                <div id="Home" class="section-tabcontent">
                    <!-- Add Banner Section -->
                    <div class="section">
                        <h2 class="config-title">App Settings</h2>
                            <!-- <form id="app_settings" enctype="multipart/form-data"> -->
                                <form id="app_settings" enctype="multipart/form-data">
                                @csrf
                                <div class="input-grid5">
                                <div class="input-group">
                                    <label class="input-label">App Name*</label>
                                    <input type="text" name="app_name" value="@if($result && isset($result['app_name'])){{$result['app_name']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_app_name')}}">
                                    
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Host Email*</label>
                                    <input type="email" name="host_email" value="@if($result && isset($result['host_email'])){{$result['host_email']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_host_email')}}">
                                           
                                </div>
                                <div class="input-group">
                                    <label class="input-label">App Version*</label>
                                   
                                    <input type="text" name="app_version" value="@if($result && isset($result['app_version'])){{$result['app_version']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_app_version')}}">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Author*</label>
                                    <input type="text" id="author" name="author" value="@if($result && isset($result['author'])){{$result['author']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_author')}}">

                                </div>
                                <div class="input-group">
                                    <label class="input-label">Email *</label>
                                    <input type="email" name="email"  value="@if($result && isset($result['email'])){{$result['email']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_email')}}">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Contact *</label>
                                    <input type="text" name="contact" value="@if($result && isset($result['contact'])){{$result['contact']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_contact')}}">
                                </div>

                                <div class="input-textarea">
                                    <label for="description" class="input-textarea">Website*</label>
                                    <input type="text" name="website" value="@if($result && isset($result['website'])){{$result['website']}}@endif" class="form-control video-input" placeholder="{{__('label.enter_your_website')}}">
                                </div>
                                <div class="input-textarea">
                                    <label for="description" class="input-textarea">Description*</label>
                                    <textarea name="app_desripation" rows="1" class="form-control video-input" placeholder="Hello...">@if($result && isset($result['app_desripation'])){{$result['app_desripation']}}@endif</textarea>
                                </div>

                                <div class="input-group">
                                    <label class="input-label">App Icon*</label>
                                            <div class="avatar-upload ml-5">
                                                <div class="avatar-edit">
                                                    <input type='file' name="app_logo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload" title="{{__('label.select_file')}}"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <img src="{{$result['app_logo']}}" alt="upload_img.png" id="imagePreview">
                                                </div>
                                            </div>
                                            <input type="hidden" name="old_app_logo" value="{{$result['app_logo']}}">
                                </div>
                           
                            </div>
                           <button type="submit" class="config-btn">Save</button>
                            <!-- <div class="border-top pt-3 text-right"> -->
                                    <!-- <button type="submit" class="btn btn-default mw-120" onclick="app_setting()">save</button> -->
                                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                <!-- </div> -->
                        </form>

                    </div>

                    <div class="section">
                        <h2 class="config-title">API Configrations</h2>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">API Path</label>
                                    <div class="input-wrapper1">
                                        <input type="text" readonly value="{{url('/')}}/api/" name="api_path" class="form-control video-input" id="api_path">
                                        <i class="fa-solid fa-copy copy-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="config-wrapper">
                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">TMDb API Key</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-option">
                                    <h4 class="config-label">TMDb Active*</h4>
                                    <div class="config-radio-group">
                                        <div class="config-radio">
                                            <input type="radio" name="tmdb_status" id="tmdb_status_yes" class="custom-control-input video-input" value="1" {{$result['tmdb_status'] == 1 ? 'checked' : ''}}>
                                            <label for="tmdb-yes">Yes</label>
                                        </div>
                                        <div class="config-radio">
                                            <input type="radio" name="tmdb_status" id="tmdb_status_no" class="custom-control-input video-input" value="0" {{$result['tmdb_status'] == 0 ? 'checked' : ''}}>
                                            <label for="tmdb-no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-field">
                                    <label class="config-label">TMDb API Key*</label>
                                    <input type="password" name="tmdb_api_key" class="form-control video-input" value="{{$result['tmdb_api_key']}}" placeholder="{{__('label.enter_tmdb_api_key')}}">
                                </div>
                            </div>
                            <!-- <p class="config-note">
                                Note: Search by TMDb ID for better result
                                <a class="config-link" href="https://www.themoviedb.org/" target="_blank">Click Here</a>
                            </p> -->
                            <label class="mt-1 text-gray">{{__('label.tmdb_notes')}} <a href="https://developer.themoviedb.org/docs/getting-started" target="_blank" class="btn-link">{{__('label.click_here')}}</a></label>
                                            <div class="border-top pt-3 text-right">
                                                <button type="button" class="btn btn-default mw-120" onclick="save_tmdb_api_key()">{{__('label.save')}}</button>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>
                        </div>

                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">Currency Settings</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-field">
                                    <label class="config-label">Currency Name*</label>
                                    <input type="text" name="currency" class="form-control video-input" value="{{$result['currency']}}" placeholder="{{__('label.enter_currency_name')}}">
                                </div>
                                <div class="config-field">
                                    <label class="config-label">Currency Code*</label>
                                    <input type="text" name="currency_code" class="form-control video-input" value="{{$result['currency_code']}}" placeholder="{{__('label.enter_currency_code')}}">
                                </div>
                            </div>
                            <!-- <div class="config-actions">
                                <button type="submit" class="config-btn">Save</button>
                            </div> -->
                            <div class="border-top pt-3 text-right">
                                <button type="button" class="btn btn-default mw-120" onclick="save_currency()">{{__('label.save')}}</button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>

                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">Vapid Key</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-field">
                                     <input type="text" name="vapid_key" class="form-control video-input" value="{{$result['vapid_key']}}" placeholder="Enter Vapid Key">
                                </div>
                            </div>
                            <div class="config-actions">

                                <!-- <button type="submit" class="config-btn">Save</button> -->
                                <button type="button" class="btn btn-default mw-120" onclick="save_vapid_key()">Save</button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </div>
                </div>


                {{-- 2nd section --}}
                <div id="Comedy" class="section-tabcontent">
                    <div class="config-container">
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Auto Play Trailer Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        
                                        <input type="radio" name="auto_play_trailer" id="auto_play_trailer_yes" class="custom-control-input" value="1" {{$result['auto_play_trailer'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="auto_play_trailer" id="auto_play_trailer_no" class="custom-control-input" value="0" {{$result['auto_play_trailer'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Active TV Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="active_tv_status" id="active_tv_status_yes" class="custom-control-input" value="1" {{$result['active_tv_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="active_tv_status" id="active_tv_status_no" class="custom-control-input" value="0" {{$result['active_tv_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Parent Control Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="parent_control_status" id="parent_control_status_yes" class="custom-control-input" value="1" {{$result['parent_control_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="parent_control_status" id="parent_control_status_no" class="custom-control-input" value="0" {{$result['parent_control_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Watchlist Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="watchlist_status" id="watchlist_status_yes" class="custom-control-input" value="1" {{$result['watchlist_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="watchlist_status" id="watchlist_status_no" class="custom-control-input" value="0" {{$result['watchlist_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Download Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="download_status" id="download_status_yes" class="custom-control-input" value="1" {{$result['download_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="download_status" id="download_status_no" class="custom-control-input" value="0" {{$result['download_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Continue Watching Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                    <input type="radio" name="continue_watching_status" id="continue_watching_status_yes" class="custom-control-input" value="1" {{$result['continue_watching_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="continue_watching_status" id="continue_watching_status_no" class="custom-control-input" value="0" {{$result['continue_watching_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">OnBoarding Screen Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="on_boarding_screen_status" id="on_boarding_screen_status_yes" class="custom-control-input" value="1" {{$result['on_boarding_screen_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="on_boarding_screen_status" id="on_boarding_screen_status_no" class="custom-control-input" value="0" {{$result['on_boarding_screen_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Coupon Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="coupon_status" id="coupon_status_yes" class="custom-control-input" value="1" {{$result['coupon_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="coupon_status" id="coupon_status_no" class="custom-control-input" value="0" {{$result['coupon_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Rent Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="rent_status" id="rent_status_yes" class="custom-control-input" value="1" {{$result['rent_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="rent_status" id="rent_status_no" class="custom-control-input" value="0" {{$result['rent_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Subscription Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                                        <input type="radio" name="subscription_status" id="subscription_status_yes" class="custom-control-input" value="1" {{$result['subscription_status'] == 1 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                                        <input type="radio" name="subscription_status" id="subscription_status_no" class="custom-control-input" value="0" {{$result['subscription_status'] == 0 ? 'checked' : ''}}>
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="button-section">
                        <button type="submit" class="save-btn">Save</button>
                    </div>
                </div>


                {{-- 3rd section --}}
                <div id="Horror" class="section-tabcontent">
                    <div class="section">
                        <h2 class="config-title">Email Setting [SMTP]</h2>
                        <!-- <form id="section-add-form"> -->
                            <form id="smtp_setting">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="@if($smtp){{$smtp->id}}@endif">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="type">Is SMTP Active*</label>
                                    <select name="status" class="form-control">
                                            <option value="">{{__('label.select_status')}}</option>
                                            <option value="0" @if($smtp){{ $smtp->status == 0  ? 'selected' : ''}}@endif>{{__('label.no')}}</option>
                                            <option value="1" @if($smtp){{ $smtp->status == 1  ? 'selected' : ''}}@endif>{{__('label.yes')}}</option>
                                        </select>
                                </div>
                                <div class="section-form">
                                    <label for="title">Host *</label>
                                    <input type="text" name="host" class="form-control video-input" value="@if($smtp){{$smtp->host}}@endif" placeholder="{{__('label.enter_host')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">Port *</label>
                                    <input type="text" name="port" class="form-control video-input" value="@if($smtp){{$smtp->port}}@endif" placeholder="{{__('label.enter_port')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">Protocol *</label>
                                    <input type="text" name="protocol" class="form-control video-input" value="@if($smtp){{$smtp->protocol}}@endif" placeholder="{{__('label.enter_protocol')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">User Name *</label>
                                    <input type="text" name="user" class="form-control video-input" value="@if($smtp){{$smtp->user}}@endif" placeholder="{{__('label.enter_user_name')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">Password *</label>
                                    <input type="password" name="pass" class="form-control video-input" value="@if($smtp){{$smtp->pass}}@endif" placeholder="{{__('label.enter_password')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">From Name *</label>
                                    <input type="text" name="from_name" class="form-control video-input" value="@if($smtp){{$smtp->from_name}}@endif" placeholder="{{__('label.enter_from_name')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">From Email *</label>
                                    <input type="text" name="from_email" class="form-control video-input" value="@if($smtp){{$smtp->from_email}}@endif" placeholder="{{__('label.enter_from_email')}}">

                                </div>


                            </div>

                            <p class="config-note">
                                Search for better result
                                <a class="config-link" href="https://support.google.com/mail/answer/185833?hl=en"
                                    target="_blank">Click Here</a>
                            </p>

                            <!-- <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div> -->
                            <div class="border-top pt-3 text-right button-section">
                                    <button type="button" class="btn btn-default mw-120 save-btn" onclick="smtp_setting()">Save</button>
                                </div>
                        </form>

                    </div>
                </div>


                {{-- 4th section --}}
                <div id="TV Show" class="section-tabcontent">
                    <div class="section">
                        <h2 class="config-title">Social Links</h2>
                        <!-- <form id="section-add-form"> -->
                            <form id="social_link" enctype="multipart/form-data">
                            <div class="section-form-row">

                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" name="name[]" class="form-control video-input" placeholder="{{__('label.enter_url_name')}}">

                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="url" name="url[]" class="form-control video-input" placeholder="{{__('label.enter_url')}}">

                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <!-- <input type="file" class="video-input" style="margin-top: 5px;"> -->
                                     <input type="file" name="image[]" class="form-control import-file social_img video-input" id="social_img" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="old_image[]" value="">
                                </div>
                                <div class="form-group col-md-1">
                                        <div class="custom-file">
                                            <img src="{{asset('assets/imgs/upload_img.png')}}" style="height: 90px; width: 90px;" class="img-thumbnail" id="link_img_social_img">
                                        </div>
                                    </div>
                                    <div class="col-md-1 mt-2">
                                        <div class="flex-grow-1 px-5 d-inline-flex">
                                            <div class="change mr-3 mt-4" id="add_btn" title="{{__('label.add_more')}}">
                                                <a class="btn btn-success add-more text-white" onclick="add_more_link()">+</a>
                                            </div>
                                        </div>
                                    </div>



                                @for ($i=0; $i < count($social_link); $i++)
                                    <div class="social_part">
                                        <div class="row col-lg-12">
                                            <div class="form-group col-md-3">
                                                <label>{{__('label.name')}}<span class="text-danger">*</span></label>
                                                <input type="text" name="name[]" value="{{ $social_link[$i]['name'] }}" class="form-control" placeholder="{{__('label.enter_url_name')}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>{{__('label.url')}}<span class="text-danger">*</span></label>
                                                <input type="url" name="url[]" value="{{ $social_link[$i]['url'] }}" class="form-control" placeholder="{{__('label.enter_url')}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>{{__('label.icon')}}<span class="text-danger">*</span></label>
                                                <input type="file" name="image[]" class="form-control import-file social_img" id="social_img_{{$i}}" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="old_image[]" value="{{ basename($social_link[$i]['image']) }}">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <div class="custom-file">
                                                    <img src="{{$social_link[$i]['image']}}" style="height: 90px; width: 90px;" class="img-thumbnail" id="link_img_social_img_{{$i}}">
                                                </div>
                                            </div>
                                            <div class="col-md-1 mt-2">
                                                <div class="flex-grow-1 px-5 d-inline-flex">
                                                    <div class="change mr-3 mt-4" id="add_btn" title="{{__('label.remove')}}">
                                                        <a class="btn btn-danger text-white remove_link">-</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor               
                                
                                <div class="after-add-more"></div>

                                <div class="border-top pt-3 text-right button-section">
                                    <button type="button" class="btn btn-default mw-120 save-btn" onclick="social_link()">Save</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>


                        </form>
                    </div>
                    <!-- <div class="button-section">
                        <button type="submit" class="save-btn">Save</button>
                    </div> -->
                </div>


                {{-- 5th section --}}
                {{-- <div id="Horror1" class="section-tabcontent">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td> <img class="icon-logo"
                                        src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                                        alt="Logo"></td>
                                <td>Producer</td>
                                <td>Actor</td>
                                <td>
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

            </section>
        </main>
    </div>

    @endsection

    <script src="{{ asset('js\sectionpage.js') }}" defer></script>
    <script>
    $('#app_settings').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);
alert(formData);
    $.ajax({
        url: "{{ route('admin.setting.app') }}",
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            $('#response-message').html('<p style="color:green;">Video Type created successfully!</p>');

            // Reset form
            $('#add-form')[0].reset();
            location.reload();
            // Close modal
            $('#add-modal').closeModal();
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let errorHtml = '<ul>';
                $.each(errors, function(key, value) {
                    errorHtml += '<li>' + value[0] + '</li>';
                });
                errorHtml += '</ul>';
                $('#response-message').html('<div style="color:red;">' + errorHtml + '</div>');
            } else {
                $('#response-message').html('<p style="color:red;">Something went wrong!</p>');
            }
        }
    });
});
    </script>

    @section('pagescript')
    <script>

        // Sidebar Scroll Down
        sidebar_down($(document).height());

        // API Key
        function Function_Api_path() {
            /* Get the text field */
            var copyText = document.getElementById("api_path");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            document.execCommand('copy');

            /* Alert the copied text */
            alert("Copied the API Path: " + copyText.value);
        }

        $(document).ready(function() {
            var tmdb_status = "<?php echo $result['tmdb_status']; ?>";
            if(tmdb_status == 1){
                $(".tmdb_api_key").show();
            } else {
                $(".tmdb_api_key").hide();
            }
            $('input[type=radio][name=tmdb_status]').change(function() {
                if (this.value == 1) {
                    $(".tmdb_api_key").show();
                }
                else if (this.value == 0) {
                    $(".tmdb_api_key").hide();
                }
            });

            var multiple_device_sync = "<?php echo $result['multiple_device_sync']; ?>";
            if(multiple_device_sync == 1){
                $(".no_of_device_sync").show();
            } else {
                $(".no_of_device_sync").hide();
            }
            $('input[type=radio][name=multiple_device_sync]').change(function() {
                if (this.value == 1) {
                    $(".no_of_device_sync").show();
                }
                else if (this.value == 0) {
                    $(".no_of_device_sync").hide();
                }
            });
        });

        // App Setting
        // function app_setting() {

            

        //         $("#dvloader").show();
        //         var formData = new FormData($("#app_settings")[0]);
        //         $.ajax({
        //             type: 'POST',
        //             url: '{{ route("admin.setting.app") }}',
        //             data: formData,
        //             cache: false,
        //             contentType: false,
        //             processData: false,
        //             success: function(resp) {
        //                 $("#dvloader").hide();
        //                 get_responce_message(resp, 'app_setting', '{{ route("admin.app_settings") }}');
        //             },
        //             error: function(XMLHttpRequest, textStatus, errorThrown) {
        //                 $("#dvloader").hide();
        //                 toastr.error(errorThrown, textStatus);
        //             }
        //         });
            
        // }

    
        // TMDb API Key
        function save_tmdb_api_key() {

           

                $("#dvloader").show();
                var formData = new FormData($("#save_tmdb_api_key")[0]);
                $.ajax({
                    type: 'POST',
                    url: '{{ route("setting.tmdbkey") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "swing");
                        get_responce_message(resp);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
           
        }

        // Currency Setting
        function save_currency() {

            

                var formData = new FormData($("#save_currency")[0]);
                $("#dvloader").show();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("setting.currency") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        $("html, body").animate({scrollTop: 0}, "swing");
                        get_responce_message(resp);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }

        // Basic Configrations
        function save_basic_configrations() {

            

                $("#dvloader").show();
                var formData = new FormData($("#save_basic_configrations")[0]);
                $.ajax({
                    type: 'POST',
                    url: '{{ route("setting.basicconfigrations") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "swing");
                        get_responce_message(resp);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }

        // SMTP
        function smtp_setting() {

            

                $("#dvloader").show();
                var formData = new FormData($("#smtp_setting")[0]);
                $.ajax({
                    type: 'POST',
                    url: '{{ route("smtp.save") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        $("html, body").animate({scrollTop: 0}, "swing");
                        get_responce_message(resp);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }

        // Multipal Img Show 
        $(document).on('change', '.social_img', function(){
            readURL(this, this.id);
        });
        $(document).on('change', '.on_boarding_img', function(){
            readURL(this, this.id);
        });
        function readURL(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                 
                reader.onload = function (e) {
                    $('#link_img_'+id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Social Link Add-Remove Link Part
        var i = -1;
        function add_more_link(){

            var data = '<div class="social_part">';
                data += '<div class="row col-md-12">';
                data += '<div class="form-group col-md-3">';
                data += '<label>{{__("label.name")}}<span class="text-danger">*</span></label>';
                data += '<input type="text" name="name[]" class="form-control" placeholder="{{__("label.enter_url_name")}}">';
                data += '</div>';
                data += '<div class="form-group col-md-4">';
                data += '<label>{{__("label.url")}}<span class="text-danger">*</span></label>';
                data += '<input type="url" name="url[]" class="form-control" placeholder="{{__("label.enter_url")}}">';
                data += '</div>';
                data += '<div class="form-group col-lg-3">';
                data += '<label>{{__("label.icon")}}<span class="text-danger">*</span></label>';
                data += '<input type="file" name="image[]" class="form-control import-file social_img" id="social_img_'+i+'" accept=".png, .jpg, .jpeg">';
                data += '<input type="hidden" name="old_image[]" value="">';
                data += '</div>';
                data += '<div class="form-group col-md-1">';
                data += '<div class="custom-file">';
                data += '<img src="{{asset("assets/imgs/upload_img.png")}}" style="height: 90px; width: 90px;" class="img-thumbnail" id="link_img_social_img_'+i+'">';
                data += '</div>';
                data += '</div>';
                data += '<div class="col-md-1 mt-2">';
                data += '<div class="flex-grow-1 px-5 d-inline-flex">';
                data += '<div class="change mr-3 mt-4" id="add_btn" title="{{__("label.remove")}}">';
                data += '<a class="btn btn-danger add-more text-white remove_link">-</a>';
                data += '</div>';
                data += '</div>';
                data += '</div>';
                data += '</div>';
                data += '</div>';

            $('.after-add-more').append(data);
            i--;
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        }
        $("body").on("click", ".remove_link", function(e) {
            $(this).parents('.social_part').remove();
        });
        // Social Link Save
        function social_link() {

           

                $("#dvloader").show();
                var formData = new FormData($("#social_link")[0]);
                $.ajax({
                    type: 'POST',
                    url: '{{ route("settingSocialLink") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        get_responce_message(resp, 'app_setting', '{{ route("admin.app_settings") }}');
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }

        // OnBoarding Screen Add-Remove Link Part
        var i = -1;
        function add_more_screen(){

            var data = '<div class="onboarding_part">';
                data += '<div class="row col-md-12">';
                data += '<div class="form-group col-md-6">';
                data += '<label>{{__("label.title")}}<span class="text-danger">*</span></label>';
                data += '<input type="text" name="title[]" class="form-control" placeholder="{{__("label.enter_title")}}">';
                data += '</div>';
                data += '<div class="form-group col-lg-3">';
                data += '<label>{{__("label.image")}}<span class="text-danger">*</span></label>';
                data += '<input type="file" name="image[]" class="form-control import-file on_boarding_img" id="on_boarding_img_'+i+'" accept=".png, .jpg, .jpeg">';
                data += '<input type="hidden" name="old_image[]" value="">';
                data += '</div>';
                data += '<div class="form-group col-md-1">';
                data += '<div class="custom-file">';
                data += '<img src="{{asset("assets/imgs/upload_img.png")}}" style="height: 90px; width: 90px;" class="img-thumbnail" id="link_img_on_boarding_img_'+i+'">';
                data += '</div>';
                data += '</div>';
                data += '<div class="col-md-1 mt-2">';
                data += '<div class="flex-grow-1 px-5 d-inline-flex">';
                data += '<div class="change mr-3 mt-4" id="add_btn" title="{{__("label.remove")}}">';
                data += '<a class="btn btn-danger add-more text-white remove_on_boarding">-</a>';
                data += '</div>';
                data += '</div>';
                data += '</div>';
                data += '</div>';
                data += '</div>';

            $('.after-add-more-on-boarding').append(data);
            i--;
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        }
        $("body").on("click", ".remove_on_boarding", function(e) {
            $(this).parents('.onboarding_part').remove();
        });
        // OnBoarding Screen Save
        function onboarding() {

            

                $("#dvloader").show();
                var formData = new FormData($("#onboarding_form")[0]);
                $.ajax({
                    type: 'POST',
                    url: '{{ route("settingOnBoardingScreen") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        get_responce_message(resp, 'onboarding_form', '{{ route("admin.app_settings") }}');
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }

        // Vapid Key
        function save_vapid_key() {
           

                var formData = new FormData($("#save_vapid_key")[0]);
                $("#dvloader").show();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("setting.vapidkey") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        $("html, body").animate({scrollTop: 0}, "swing");
                        get_responce_message(resp);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
            
        }
    </script>
@endsection

