@extends('admin.layout')

@section('content')
    <div class="banner-container">
        <main class="banner-content">
            <div class="save-button-container">
                {{-- <a href="#" class="save-button">Save</a> --}}
            </div>
            <section class="settings-management">
                <div class="tab">
                    <button class="tablinks" onclick="openCategory(event, 'Home')" id="defaultOpen">Home</button>
                    <button class="tablinks" onclick="openCategory(event, 'Comedy')">Comedy</button>
                    <button class="tablinks" onclick="openCategory(event, 'Horror')">Horror</button>
                    <button class="tablinks" onclick="openCategory(event, 'TV Show')">TV Show</button>
                    <button class="tablinks" onclick="openCategory(event, 'TV Channel')">TV Channel</button>
                    <button class="tablinks" onclick="openCategory(event, 'Sports')">Sports</button>
                    <button class="tablinks" onclick="openCategory(event, 'Upcoming')">Upcoming</button>
                </div>

                <form id="save_banner_home">
                @csrf
                <input type="hidden" name="is_home_screen" id="is_home_screen" value="1">
                <input type="hidden" name="video_type" id="Video_Type">
                
                <div id="Home" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Type</label>
                            <select class="banner-select" name="type_id" id="type_id">
                                <option value="all">Select Type</option>
                                 @foreach($type as $rows)
                                <option value="{{$rows->id}}">{{$rows->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                        
                            <select class="banner-select" name="video_id" id="home_video_id">
                                <option value="all">Select Video</option>
                                @foreach ($video as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Banners</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="banner-list">
                            <tr>
                                <td>Comedy</td>
                                <td>Banner 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Show</td>
                                <td>Banner 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_comedy">
                
                    @csrf
                    <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_comedy">
                    <input type="hidden" name="type_id" id="type_id_comedy">

                <div id="Comedy" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdown">
                        <label class="banner-label">Video</label>
                        <select class="banner-select" id="comedy_video_id" name="video_id">
                            <option value="all">Select Video</option>
                             @foreach ($videoComedy as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                        </select>
                    </div>
                    <h3 class="section-title">Added Comedy</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="comedy-list">
                            <tr>
                                <td>Comedy</td>
                                <td>Comedy 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Comedy</td>
                                <td>Comedy 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_horror">
                    @csrf
                    <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_horror">
                    <input type="hidden" name="type_id" id="type_id_horror">

                <div id="Horror" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="horror_video_id" name="video_id">
                                <option value="all">Select Video</option>
                                 @foreach ($videoHorror as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Horror</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="horror-list">
                            <tr>
                                <td>Horror</td>
                                <td>Horror 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Horror</td>
                                <td>Horror 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_tv_show">
@csrf
                    <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_tvshow">
                    <input type="hidden" name="type_id" id="type_id_tvshow">

                <div id="TV Show" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="tvshow_video_id" name="video_id">
                                <option value="all">Select Video</option>
                                 @foreach ($videoTVShow as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added TV Shows</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tvshow-list">
                            <tr>
                                <td>TV Show</td>
                                <td>TV Show 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Show</td>
                                <td>TV Show 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_tv_channel">
                    @csrf
                    <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_tvchannel">
                    <input type="hidden" name="type_id" id="type_id_tvchannel">

                <div id="TV Channel" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Sub video Type</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Type</option>
                                <option value="all">video</option>
                                <option value="all">show</option>

                            </select>
                        </div>

                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="tvchannel_video_id" name="video_id">
                                <option value="all">Select Video</option>
                                 @foreach ($videoTVChannel as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added TV Channels</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tvchannel-list">
                            <tr>
                                <td>TV Channel</td>
                                <td>TV Channel 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Channel</td>
                                <td>TV Channel 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_sport">
                    @csrf
                   <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_sport">
                    <input type="hidden" name="type_id" id="type_id_sport">

                <div id="Sports" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="sports_video_id" name="video_id">
                                <option value="all">Select Video</option>
                                @foreach ($videoSports as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Sports</h3>
                    <!-- <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="sports-list">
                            <tr>
                                <td>Sports</td>
                                <td>Sports 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sports</td>
                                <td>Sports 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                </form>
                <form id="save_banner_upcoming">
                    @csrf
                    <input type="hidden" name="is_home_screen" id="is_home_screen_comedy" value="2">
                    <input type="hidden" name="video_type" id="video_type_upcoming">
                    <input type="hidden" name="type_id" id="type_id_upcoming">

                <div id="Upcoming" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Sub Video Type</label>
                            <select class="banner-select" name="subvideo_type" id="banner-select">
                                <option value="all">Select Type</option>
                                <option value="1">video</option>
                                <option value="2">show</option>

                            </select>
                        </div>
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="upcoming_video_id" name="video_id">
                                <option value="all">Select Video</option>
                                 @foreach ($videoUpcoming as $key => $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <!-- <h3 class="section-title">Added Upcoming</h3>
                    <table class="list-table" id="after-add-more"> -->
                        <!-- <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="upcoming-list">
                            <tr>
                                <td>Upcoming</td>
                                <td>Upcoming 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Upcoming</td>
                                <td>Upcoming 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody> -->
                    <!-- </table> -->

                    
                </div>
                </form>

                <div class="table-responsive after-add-more">
                    <table class="table table-bordered table-striped" id="bannerTable">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be appended here -->
                        </tbody>
                    </table>
                </div>

            </section>
        </main>
    </div>

    {{-- Delete model --}}
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete Item</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
  
    function openCategory(evt, categoryName) {
    // Hide all tab contents
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove 'active' class from all tabs
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show current tab and add 'active' class
    document.getElementById(categoryName).style.display = "block";
    evt.currentTarget.className += " active";

    // Set hidden input value based on tab
    const videoTypeInput = document.getElementById('Video_Type');
    const video_type_comedyInput = document.getElementById('video_type_comedy');
    const type_id_comedyInput = document.getElementById('type_id_comedy');
    const type_id_upcomingInput = document.getElementById('type_id_upcoming');
    const video_type_upcomingInput = document.getElementById('video_type_upcoming');
    const video_type_sportInput = document.getElementById('video_type_sport');
    const type_id_sportInput = document.getElementById('type_id_sport');

    const video_type_tvchannelInput = document.getElementById('video_type_tvchannel');
    const type_id_tvchannelInput = document.getElementById('type_id_tvchannel');

    const video_type_tvshowInput = document.getElementById('video_type_tvshow');
    const type_id_tvshowInput = document.getElementById('type_id_tvshow');

    const video_type_horrorInput = document.getElementById('video_type_horror');
    const type_id_horrorInput = document.getElementById('type_id_horror');

    // const video_type_sportInput = document.getElementById('video_type_comedy');
    // const type_id_sportInput = document.getElementById('type_id_comedy');

    const categoryMap = {
        'Home': 1,
        'Horror': 2,
        'Comedy': 3,
        'TV Show': 4,
        'TV Channel': 5,
        'Sports': 6,
        'Upcoming': 7
    };
    const videoType = categoryMap[categoryName] || '';
    videoTypeInput.value = videoType;
    video_type_comedyInput.value = videoType;
    type_id_comedyInput.value = videoType;
    type_id_upcomingInput.value = videoType;
    video_type_upcomingInput.value = videoType;
    video_type_sportInput.value = videoType;
    type_id_sportInput.value = videoType;

     video_type_tvchannelInput.value = videoType;
    type_id_tvchannelInput.value = videoType;


     video_type_tvshowInput.value = videoType;
    type_id_tvshowInput.value = videoType;

     video_type_horrorInput.value = videoType;
    type_id_horrorInput.value = videoType;

    // Clear existing list
    $(".after-add-more .row").remove();

    // Optional: adjust UI
    if (videoType == 1) {
        $('.radio-row').show();
    } else {
        $('.radio-row').hide();
    }

    // Labels
    const label_type = '{{__("label.type")}}';
    const label_video = '{{__("label.video")}}';
    const label_delete = '{{__("label.delete")}}';

    // AJAX call to get banner list
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: {
            is_home_screen: videoType == 1 ? 1 : 2,
            type_id: videoType
        },
        url: '{{ route("bannerList") }}',
        success: function (resp) {
            if (resp.result.length > 0) {
                var headRow = '<div class="form-group row mb-0 pb-0">' +
                    '<div class="col-md-2"><label>' + label_type + '</label></div>' +
                    '<div class="col-md-4"><label>' + label_video + '</label></div>' +
                    '</div>';
                $('.after-add-more').append(headRow);
            }

            // Clear existing table rows
$("#bannerTable tbody").empty();

if (resp.result.length > 0) {
    for (var i = 0; i < resp.result.length; i++) {
        var row = '<tr>' +
            '<td>' +
                '<input type="text" class="form-control" name="type" value="' + resp.result[i].type.name + '" readonly />' +
                '<input type="hidden" name="video_type" value="" />' +
            '</td>' +
            '<td>' +
                '<input type="text" class="form-control" name="video" value="' + resp.result[i].video.name + '" readonly />' +
            '</td>' +
            '<td>' +
                '<a onclick="DeleteBanner(' + resp.result[i].id + ')" class="btn btn-danger remove" title="' + label_delete + '">' +
                    '<i class="fa-solid fa-trash-can fa-xl"></i>' +
                '</a>' +
            '</td>' +
        '</tr>';
        $('#bannerTable tbody').append(row);
    }
}

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            toastr.error(errorThrown, textStatus);
        }
    });
}

// Open default tab on page load
document.getElementById("defaultOpen").click();



$(document).ready(function() {
    $('#home_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});



$(document).ready(function() {
    $('#comedy_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

$(document).ready(function() {
    $('#horror_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

$(document).ready(function() {
    $('#tvshow_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

$(document).ready(function() {
    $('#tvchannel_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

$(document).ready(function() {
    $('#sports_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

$(document).ready(function() {
    $('#upcoming_video_id').on('change', function () {
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: '/admin/banner/store/', // Replace with your actual route
            method: 'POST',
            data: formData,
            success: function(response) {
        
                // alert('Video data stored successfully');
            },
            error: function(xhr) {
                // Handle error response
                alert('An error occurred while storing video data');
            }
        });
    });
});

// Banner List
        var Tab = $("ul.tabs li a.active");
        var Is_home_screen = Tab.data("is_home_screen");
        if(Is_home_screen == 1){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {is_home_screen:Is_home_screen},
                url: '{{ route("bannerList") }}',
                success: function(resp) {

                    if(resp.result.length > 0){

                        var label_type = '{{__("label.type")}}';
                        var label_video = '{{__("label.video")}}';
                        var label_delete = '{{__("label.delete")}}';

                        var data ='<div class="form-group row mb-0 pb-0">' +
                                    '<div class="col-md-2">' +
                                        '<label>'+label_type+'</label>' +
                                    '</div>' +
                                    '<div class="col-md-4">' +
                                        '<label>'+label_video+'</label>' +
                                    '</div>' +
                                '</div>';
                        $('.after-add-more').append(data);
                    }

                    for (var i = 0; i < resp.result.length; i++) {
                        var data ='<div class="form-group row">' +
                                    '<div class="col-md-2">' +
                                        '<input type="text" class="form-control" name="type" value="'+ resp.result[i].type.name +'" placeholder="Dropdown" readonly/>' +
                                        '<input type="hidden" class="form-control" name="video_type" value=""/>' +
                                    '</div>' +
                                    '<div class="col-md-4">' +
                                        '<input type="text" class="form-control" name="video" value="'+ resp.result[i].video.name +'" id="video" placeholder="Dropdown" readonly/>' +
                                    '</div>' +
                                    '<div class="col-md-1">' +
                                        '<a onclick="DeleteBanner('+ resp.result[i].id +')" class="btn btn-danger remove" id="remove" title="'+ label_delete +'"><i class="fa-solid fa-trash-can fa-xl"></i></a>' +                                   
                                    '</div>' +
                                '</div>';
                        $('.after-add-more').append(data);
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    toastr.error(errorThrown, textStatus);
                }
            });
        }
        $('.nav-item a').on('click', function() {

            var label_type = '{{__("label.type")}}';
            var label_video = '{{__("label.video")}}';
            var label_delete = '{{__("label.delete")}}';

            var Is_home_screen = $(this).data("is_home_screen");
            $(".after-add-more .row").remove();
            if(Is_home_screen == 2){

                $('.radio-row').hide();
                var type_id = $(this).data("id");

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {type_id:type_id, is_home_screen:Is_home_screen},
                    url: '{{ route("bannerList") }}',
                    success: function(resp) {

                        if(resp.result.length > 0){
                            var data ='<div class="form-group row mb-0 pb-0">' +
                                        '<div class="col-md-2">' +
                                            '<label>'+label_type+'</label>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<label>'+label_video+'</label>' +
                                        '</div>' +
                                    '</div>';
                            $('.after-add-more').append(data);
                        }

                        for (var i = 0; i < resp.result.length; i++) {
                            var data ='<div class="form-group row">' +
                                        '<div class="col-md-2">' +
                                            '<input type="text" class="form-control" name="type" value="'+ resp.result[i].type.name +'" placeholder="Dropdown" readonly/>' +
                                            '<input type="hidden" class="form-control" name="video_type" value=""/>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<input type="text" class="form-control" name="video" value="'+ resp.result[i].video['name'] +'" id="video" placeholder="Dropdown" readonly/>' +
                                        '</div>' +
                                        '<div class="col-md-1 flex-grow-1 px-3">' +
                                            '<a onclick="DeleteBanner('+ resp.result[i].id +')" class="btn btn-danger remove" id="remove" title="'+ label_delete +'"><i class="fa-solid fa-trash-can fa-xl"></i></a>' +                                   
                                        '</div>' +
                                    '</div>';
                            $('.after-add-more').append(data);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        toastr.error(errorThrown, textStatus);
                    }
                });
            } else {
                $('.radio-row').show();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {is_home_screen:Is_home_screen},
                    url: '{{ route("bannerList") }}',
                    success: function(resp) {

                        if(resp.result.length > 0){
                            var data ='<div class="form-group row mb-0 pb-0">' +
                                        '<div class="col-md-2">' +
                                            '<label>'+label_type+'</label>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<label>'+label_video+'</label>' +
                                        '</div>' +
                                    '</div>';
                            $('.after-add-more').append(data);
                        }

                        for (var i = 0; i < resp.result.length; i++) {
                            var data ='<div class="form-group row">' +
                                        '<div class="col-md-2">' +
                                            '<input type="text" class="form-control" name="type" value="'+ resp.result[i].type.name +'" placeholder="Dropdown" readonly/>' +
                                            '<input type="hidden" class="form-control" name="video_type" value=""/>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<input type="text" class="form-control" name="video" value="'+ resp.result[i].video.name +'" id="video" placeholder="Dropdown" readonly/>' +
                                        '</div>' +
                                        '<div class="col-md-1">' +
                                            '<a onclick="DeleteBanner('+ resp.result[i].id +')" class="btn btn-danger remove" id="remove" title="'+ label_delete +'"><i class="fa-solid fa-trash-can fa-xl"></i></a>' +                                   
                                        '</div>' +
                                    '</div>';
                            $('.after-add-more').append(data);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        toastr.error(errorThrown, textStatus);
                    }
                });
            };
        });

    </script>

    


    
@endsection
