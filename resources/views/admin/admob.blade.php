@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="video-details-container">
            <h2>AdMob Android Settings</h2>
            <hr>
            <form id="admob_android">
                        @csrf

            <div class="input-grid">
                <div class="filter-group">
                    <h4 class="filter-title">Banner Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                        <input type="radio" id="banner_ad" name="banner_ad" class="custom-control-input" {{ ($result['banner_ad']=='1')? "checked" : "" }} value="1">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="banner_ad1" name="banner_ad" class="custom-control-input" {{ ($result['banner_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Interstital Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                        <input type="radio" id="interstital_ad" name="interstital_ad" class="custom-control-input" {{ ($result['interstital_ad']=='1')? "checked" : "" }} value="1">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="interstital_ad1" name="interstital_ad" class="custom-control-input" {{ ($result['interstital_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Reward Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                                            <input type="radio" id="reward_ad" name="reward_ad" class="custom-control-input" {{ ($result['reward_ad']=='1')? "checked" : "" }} value="1">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                                            <input type="radio" id="reward_ad1" name="reward_ad" class="custom-control-input" {{ ($result['reward_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Banner Ad ID</label>
                <input type="text" name="banner_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['banner_adid']}}">

                   
                </div>

                <div class="input-group">
                    <label class="input-label">Interstital Ad ID</label>
                <input type="text" name="interstital_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['interstital_adid']}}">

                    
                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad ID </label>
                    <input type="text" name="reward_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['reward_adid']}}">

                    
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Interstital Ad Click</label>
                    <input type="text" name="interstital_adclick" class="form-control video-input" placeholder="{{__('label.enter_click')}}" value="{{$result['interstital_adclick']}}">

                    
                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad Click</label>
                <input type="text" name="reward_adclick" class="form-control video-input" placeholder="{{__('label.enter_click')}}" value="{{$result['reward_adclick']}}">

                    
                </div>
            </div>
            <hr>
            <div class="button-section">
                <button type="submit" class="save-btn" onclick="admob_android()">Save</button>
            </div>
        </form>
        </div>
        <div class="video-details-container">
            <h2>AdMob iOS Settings</h2>
            <hr>
            <form id="admob_ios">
                        @csrf
            <div class="input-grid">
                <div class="filter-group">
                    <h4 class="filter-title">Banner Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                        <input type="radio" id="ios_banner_ad" name="ios_banner_ad" class="custom-control-input" {{ ($result['ios_banner_ad']=='1')? "checked" : "" }} value="1">

                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                                            <input type="radio" id="ios_banner_ad1" name="ios_banner_ad" class="custom-control-input" {{ ($result['ios_banner_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Interstital Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                                            <input type="radio" id="ios_interstital_ad" name="ios_interstital_ad" class="custom-control-input" {{ ($result['ios_interstital_ad']=='1')? "checked" : "" }} value="1">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                                            <input type="radio" id="ios_interstital_ad1" name="ios_interstital_ad" class="custom-control-input" {{ ($result['ios_interstital_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Reward Ad</h4>
                    <div class="input-row1">
                        <div class="input-item">
                                            <input type="radio" id="ios_reward_ad" name="ios_reward_ad" class="custom-control-input" {{ ($result['ios_reward_ad']=='1')? "checked" : "" }} value="1">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                                            <input type="radio" id="ios_reward_ad1" name="ios_reward_ad" class="custom-control-input" {{ ($result['ios_reward_ad']=='0')? "checked" : "" }} value="0">
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Banner Ad ID</label>
                        <input type="text" name="ios_banner_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['ios_banner_adid']}}">

                    

                </div>

                <div class="input-group">
                    <label class="input-label">Interstital Ad ID</label>
                    <input type="text" name="ios_interstital_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['ios_interstital_adid']}}">

                  

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad ID </label>
                        <input type="text" name="ios_reward_adid" class="form-control video-input" placeholder="{{__('label.enter_id')}}" value="{{$result['ios_reward_adid']}}">

                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Interstital Ad Click</label>
                        <input type="text" name="ios_interstital_adclick" class="form-control video-input" placeholder="{{__('label.enter_click')}}" value="{{$result['ios_interstital_adclick']}}">

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad Click</label>
                        <input type="text" name="ios_reward_adclick" class="form-control video-input" placeholder="{{__('label.enter_click')}}" value="{{$result['ios_reward_adclick']}}">

                   
                </div>
            </div>
            <hr>
            <div class="button-section">
                <button type="submit" class="save-btn" onclick="admob_ios()">Save</button>
            </div>
        </div>
    </form>
    </div>
@endsection

@section('pagescript')
    <script>

        // Sidebar Scroll Down
        sidebar_down($(document).height());

        function admob_android() {

            

                var formData = new FormData($("#admob_android")[0]);
                $("#dvloader").show();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admob.android") }}',
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

        function admob_ios() {

           

                var formData = new FormData($("#admob_ios")[0]);
                $("#dvloader").show();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admob.ios") }}',
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
