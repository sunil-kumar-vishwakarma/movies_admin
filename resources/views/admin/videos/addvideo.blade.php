@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <a href="{{ route('admin.videos.videos') }}">
                <button class="back-btn" id="open-add-modal">
                    <i class="fas fa-arrow-left"></i> VIDEOS LIST
                </button>
            </a>
        </div>
        
        <form action="{{route('admin.videos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="tmdb-container">
            <h2 class="tmdb-heading">Import From TMDb</h2>

            <div class="input-tmdb">
                <label class="input-label" for="tmdb-id">Enter TMDb ID (e.g. 814215)</label>
                <div class="input-wrapper">
                    <input class="tmdb-input" type="text" id="tmdb-id" placeholder="Enter TMDb ID">
                    <button class="fetch-btn">Fetch</button>
                </div>
            </div>

            <p class="tmdb-note">
                Note: Search by TMDb ID for better result
                <a class="tmdb-link" href="https://www.themoviedb.org/" target="_blank">Click Here</a>
            </p>

            <div class="tmdb-or">OR</div>

            <div class="input-tmdb">
                <label class="input-label" for="movie-name">Movies Name</label>
                <div class="input-wrapper">
                    <input class="tmdb-input" type="text" id="name" name="name" placeholder="Enter Movies Name">
                    <button class="fetch-btn">Fetch</button>
                </div>
            </div>
        </div>
        <div class="video-details-container">
            {{-- <h2 class="video-heading">Add New Video</h2> --}}

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Type*</label>
                    <select class="video-select" name="type" id="type">
                        <option>Select Type</option>
                        @foreach($types as $rows)
                        <option value="{{$rows->id}}">{{$rows->name}}</option>
                        @endforeach
                        <!-- <option value="Sports">Sports</option>
                        <option value="Horror">Horror</option> -->
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Ads Video*</label>
                    <select class="video-select" name="ads_video" id="ads_video">
                        <option>Select Ads Video</option>
                        @foreach($adsVideo as $rows)
                        <option value="{{$rows->id}}">{{$rows->name}}</option>
                        @endforeach
                        <!-- <option value="News24">News24</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Cream Lemon Dark">Cream Lemon Dark</option>
                        <option value="news">news</option>
                        <option value="Headphones">Headphones</option>
                        <option>
                            Google Ads Tutorial 2025 (Step by Step) How To Use Google Ads
                        </option> -->
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Ads Interval Video Duration*</label>
                    <input type="number" name="ads_interval_video_duration" id="ads_interval_video_duration" class="video-input" placeholder="Ads Video Duration">
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Category*</label>
                    <select class="video-select" name="category" id="category">
                        <option value="">All Category</option>
                        @foreach($category as $rows)
                        <option value="{{$rows->id}}">{{$rows->name}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="input-group">
                    <label class="input-label">Language*</label>
                    <select class="video-select" name="language" id="language">
                        <option value="">All Language</option>
                        <option value="Language">No Language</option>
                        @foreach($language as $rows)
                        <option value="{{$rows->id}}">{{$rows->name}}</option>
                        @endforeach
                        <!-- <option value="English">English</option>
                        <option value="Urdu">Urdu</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Japanese">Japanese</option>
                        <option value="German">German</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Korean">Korean</option>
                        <option value="French">French</option> -->
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Cast*</label>
                    <select class="video-select" name="cast" id="cast">
                    @foreach($cast as $rows)
                        <!-- <option value="Language">No Language</option> -->
                        <option value="{{$rows->id}}">{{$rows->name}}</option>
                        @endforeach
                    <!-- <input type="text" class="video-input" name="cast" id="cast" placeholder="Add Cast"> -->
                    </select>
                </div>


            </div>


            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Video Duration*</label>
                    <input type="time" class="video-input" name="video_duration" id="video_duration">
                </div>

                <div class="input-group">
                    <label class="input-label">Release Date*</label>
                    <input type="date" class="video-input" name="release_date" id="release_date">
                </div>
                <div class="input-group">
                    <label class="input-label">Producer*</label>
                    <select class="video-select" name="producer" id="producer">
                        <option>Select Producer</option>
                        <option value="Producer">Producer</option>
                    </select>
                </div>

                <!-- Add more input groups as needed -->

            </div>

        </div>

        <div class="video-details-container">
            <div class="input-grid3">
                <div class="filter-group1">
                    <label class="input-label">Video Upload Type*</label>
                    <select class="video-select" style="margin-top: 10px;" name="video_upload_type" id="video_upload_type">
                        <option value="server video">Server Video</option>
                        <option value="you tube">YouTube</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h4 class="filter-title">Is Premium *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_premium" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_premium" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Title *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_title" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_title" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Download *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_download" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_download" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>


            </div>

            <div class="input-grid3">
                <div class="input-group">
                    <label class="input-label">Upload Video (320 px)*</label>
                    <input type="file" class="video-input" name="upload_video_320_px" id="upload_video_320_px">
                    <div id="progressWrapper" style="width:100%; background:#eee; height:20px; display:none; margin-top:10px;">
                        <div id="progressBar" style="height:100%; width:0%; background:#28a745;"></div>
                    </div>
                    <button class="Upload-btn" onclick="uploadVideo()"> Upload Files</button>
                    <input type="text" id="video_320_url" name="upload_video_320_url">

                                    <!-- <div class="form-group">
                                        <input type="file" id="uploadFile" name="uploadFile" style="position: relative; z-index: 1;" class="form-control">
                                    </div> -->
                                    <input type="hidden" name="video_320" id="mp3_file_name" class="form-control">

                                    <div class="form-group">
                                        <a id="upload" class="btn Upload-btn" style="background-color:#4e45b8;">Upload Files</a>
                                    </div>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (480 px) </label>
                    <input type="file" class="video-input" name="upload_video_480_px" id="upload_video_480_px">
                    <div id="progressWrapper480" style="width:100%; background:#eee; height:20px; display:none; margin-top:10px;">
                        <div id="progressBar480" style="height:100%; width:0%; background:#28a745;"></div>
                    </div>
                    <button class="Upload-btn" onclick="uploadVideo480()"> Upload Files</button>
                    <input type="text" id="video_480_url" name="upload_video_480_url">

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (720 px) </label>
                    <input type="file" class="video-input" name="upload_video_720_px" id="upload_video_720_px">
                    <div id="progressWrapper720" style="width:100%; background:#eee; height:20px; display:none; margin-top:10px;">
                        <div id="progressBar720" style="height:100%; width:0%; background:#28a745;"></div>
                    </div>
                    <button class="Upload-btn" onclick="uploadVideo720()"> Upload Files</button>
                    <input type="text" id="video_720_url" name="upload_video_720_url">

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (1080 px) </label>
                    <input type="file" class="video-input" name="upload_video_1080_px" id="upload_video_1080_px">
                    <div id="progressWrapper1080" style="width:100%; background:#eee; height:20px; display:none; margin-top:10px;">
                        <div id="progressBar1080" style="height:100%; width:0%; background:#28a745;"></div>
                    </div>
                    <button class="Upload-btn" onclick="uploadVideo1080()"> Upload Files</button>
                    <input type="text" id="video_1080_url" name="upload_video_1080_url">

                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="input-grid4">
                <div class="filter-group">
                    <label class="input-label">Trailer Type*</label>
                    <select class="video-select" name="trailer_type" id="trailer_type">
                        <option>Server Video</option>
                        <option>YouTube</option>
                    </select>

                    <p class="tmdb-note">
                        Note : If you select YouTube, you must enter the ID of the YouTube video, Not a Full URL. For
                        Reference
                        <a class="tmdb-link" href="https://commentpicker.com/youtube-video-id.php" target="_blank">Click
                            Here</a>
                    </p>
                </div>
                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input" name="upload_sub_title" id="upload_sub_title">
                    <button class="Upload-btn"> Upload Files</button>
                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="language-grid">
                <div class="filter-group">
                    <label class="input-label">Subtitle Type*</label>
                    <select class="video-select" name="sub_title_type" id="sub_title_type">
                        <option>Server Video</option>
                        <option>External URL</option>
                    </select>
                </div>

                <div class="input-grid5">
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="first_language_name" name="first_language_name" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="second_language_name" name="second_language_name" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="third_language_name" name="third_language_name" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="input-grid5">
                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input" name="first_upload_sub_title" id="first_upload_sub_title">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input" name="second_upload_sub_title" id="second_upload_sub_title">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input" name="third_upload_sub_title" id="third_upload_sub_title">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="input-grid3">
                <div class="filter-group1">
                    <label class="input-label">Video Upload Type*</label>
                    <select class="video-select" style="margin-top: 10px;" name="second_video_upload_type" id="second_video_upload_type">
                        <option>Server Video</option>
                        <option>YouTube</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h4 class="filter-title">Is Rent *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_rent" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_rent" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Comment *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_comment" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_comment" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Like *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_like" value="yes">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_like" value="no" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label class="input-label">Thumbnail Image*</label>
                    <input type="file" class="video-input" name="thumbnail_image" id="thumbnail_image">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
                <div class="input-group">
                    <label class="input-label">Landscape Image*</label>
                    <input type="file" class="video-input" name="landscape_image" id="landscape_image">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

            </div>

            <div class="button-section">
                <button type="submit" class="save-btn">Save</button>
                <button class="delete-btn" >Cancle</button>
            </div>
        </div>

        </form>
    </div>

@section('pagescript')
    <script>
        var d = new Date();
        d.setHours(0,0,0);
        $('#timePicker').datetimepicker({
            useCurrent: false,
            format:'HH:mm:ss',
            defaultDate: d,
            showClose:true,
            showTodayButton: true,
            icons: {
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                today: "fa fa-clock fa-regular",
                close: "fa fa-times",
            }
        })
        
        // var d = new Date();
        // d.setHours(0,0,0);
        // $('#adstimePicker').datetimepicker({
        //     useCurrent: false,
        //     format:'HH:mm:ss',
        //     defaultDate: d,
        //     showClose:true,
        //     showTodayButton: true,
        //     icons: {
        //         up: "fa fa-chevron-up",
        //         down: "fa fa-chevron-down",
        //         today: "fa fa-clock fa-regular",
        //         close: "fa fa-times",
        //     }
        // })

        function save_video() {

           

                var formData = new FormData($("#save_video")[0]);
                $("#dvloader").show();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admin.videos.store") }}',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        $("#dvloader").hide();
                        get_responce_message(resp, 'save_video', '{{ route("admin.videos.videos") }}');
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#dvloader").hide();
                        toastr.error(errorThrown, textStatus);
                    }
                });
           
        }

        $(document).ready(function() {
            $("#category_id").select2({placeholder: "{{__('label.select_category')}}"});
            $("#language_id").select2({placeholder: "{{__('label.select_language')}}"});
            $("#cast_id").select2({placeholder: "{{__('label.select_cast')}}"});

            $(".url_box").hide();
            $('#video_upload_type').change(function() {
                var optionValue = $(this).val();

                if (optionValue == 'server_video') {
                    $(".video_box").show();
                    $(".url_box").hide();
                } else {
                    $(".url_box").show();
                    $(".video_box").hide();
                }

                if (optionValue == 'server_video') {
                    $(".Is_Download").show();
                } else {
                    $(".Is_Download").hide();
                }
            });

            $(".subtitle_url_box").hide();
            $('#subtitle_type').change(function() {
                var optionValue = $(this).val();

                if (optionValue == 'server_video') {
                    $(".subtitle_box").show();
                    $(".subtitle_url_box").hide();
                } else {
                    $(".subtitle_url_box").show();
                    $(".subtitle_box").hide();
                }
            });

            $(".trailer_url_box").hide();
            $('#trailer_type').change(function() {
                var optionValue = $(this).val();

                if (optionValue == 'server_video') {
                    $(".trailer_box").show();
                    $(".trailer_url_box").hide();
                } else {
                    $(".trailer_url_box").show();
                    $(".trailer_box").hide();
                }
            });

            $(".rent_price").hide();
            $('input[type=radio][name=is_rent]').change(function() {
                if (this.value == 1) {
                    $(".rent_price").show();
                }
                else if (this.value == 0) {
                    $(".rent_price").hide();
                }
            });
        });

        
       
    </script>


    <!-- Video uploads  -->

    <!-- <script>
function uploadVideo() {
    let fileInput = document.getElementById('upload_video_320_px');
    let file = fileInput.files[0];

    if (!file) {
        alert("Please select a file first!");
        return;
    }

    let formData = new FormData();
    formData.append('upload_video_320_px', file);

    fetch("{{ route('upload.video.320') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {

            alert('Video uploaded successfully! Saved at: ' + data.path);
        } else {
            alert('Upload failed.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Something went wrong.');
    });
}
</script> -->

<script>
function uploadVideo() {
    const fileInput = document.getElementById('upload_video_320_px');
    const file = fileInput.files[0];
    const progressBar = document.getElementById('progressBar');
    const progressWrapper = document.getElementById('progressWrapper');
    const hiddenField = document.getElementById('video_320_url');

    if (!file) {
        alert("Please select a file!");
        return;
    }

    const formData = new FormData();
    formData.append('upload_video_320_px', file);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('upload.video.320') }}", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");

    progressWrapper.style.display = 'block';
    progressBar.style.width = '0%';

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            let percent = Math.round((e.loaded / e.total) * 100);
            progressBar.style.width = percent + '%';
        }
    };

    xhr.onload = function () {
        let response = JSON.parse(xhr.responseText);

        if (xhr.status === 200 && response.success) {
            // alert('Video uploaded successfully!');
            hiddenField.value = response.url; // Set URL to hidden input
        } else {
            alert('Upload failed!');
        }
    };

    xhr.onerror = function () {
        alert('Error uploading video!');
    };

    xhr.send(formData);
}
</script>


<script>
function uploadVideo480() {
    const fileInput = document.getElementById('upload_video_480_px');
    const file = fileInput.files[0];
    const progressBar = document.getElementById('progressBar480');
    const progressWrapper = document.getElementById('progressWrapper480');
    const hiddenField = document.getElementById('video_480_url');

    if (!file) {
        alert("Please select a file!");
        return;
    }

    const formData = new FormData();
    formData.append('upload_video_480_px', file);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('upload.video.480') }}", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");

    progressWrapper.style.display = 'block';
    progressBar.style.width = '0%';

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            let percent = Math.round((e.loaded / e.total) * 100);
            progressBar.style.width = percent + '%';
        }
    };

    xhr.onload = function () {
        let response = JSON.parse(xhr.responseText);

        if (xhr.status === 200 && response.success) {
            // alert('Video uploaded successfully!');
            hiddenField.value = response.url; // Set URL to hidden input
        } else {
            alert('Upload failed!');
        }
    };

    xhr.onerror = function () {
        alert('Error uploading video!');
    };

    xhr.send(formData);
}
</script>



<script>
function uploadVideo720() {
    const fileInput = document.getElementById('upload_video_720_px');
    const file = fileInput.files[0];
    const progressBar = document.getElementById('progressBar720');
    const progressWrapper = document.getElementById('progressWrapper720');
    const hiddenField = document.getElementById('video_720_url');

    if (!file) {
        alert("Please select a file!");
        return;
    }

    const formData = new FormData();
    formData.append('upload_video_720_px', file);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('upload.video.720') }}", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");

    progressWrapper.style.display = 'block';
    progressBar.style.width = '0%';

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            let percent = Math.round((e.loaded / e.total) * 100);
            progressBar.style.width = percent + '%';
        }
    };

    xhr.onload = function () {
        let response = JSON.parse(xhr.responseText);

        if (xhr.status === 200 && response.success) {
            // alert('Video uploaded successfully!');
            hiddenField.value = response.url; // Set URL to hidden input
        } else {
            alert('Upload failed!');
        }
    };

    xhr.onerror = function () {
        alert('Error uploading video!');
    };

    xhr.send(formData);
}
</script>


<script>
function uploadVideo1080() {
    const fileInput = document.getElementById('upload_video_1080_px');
    const file = fileInput.files[0];
    const progressBar = document.getElementById('progressBar1080');
    const progressWrapper = document.getElementById('progressWrapper1080');
    const hiddenField = document.getElementById('video_1080_url');

    if (!file) {
        alert("Please select a file!");
        return;
    }

    const formData = new FormData();
    formData.append('upload_video_1080_px', file);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('upload.video.1080') }}", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");

    progressWrapper.style.display = 'block';
    progressBar.style.width = '0%';

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            let percent = Math.round((e.loaded / e.total) * 100);
            progressBar.style.width = percent + '%';
        }
    };

    xhr.onload = function () {
        let response = JSON.parse(xhr.responseText);

        if (xhr.status === 200 && response.success) {
            // alert('Video uploaded successfully!');
            hiddenField.value = response.url; // Set URL to hidden input
        } else {
            alert('Upload failed!');
        }
    };

    xhr.onerror = function () {
        alert('Error uploading video!');
    };

    xhr.send(formData);
}


var baseUrl = jQuery('#base_url').val();

/************ chunk video upload (320 px)*******/
var datafile = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile', // you can pass in id...
    container: document.getElementById('container'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist').innerHTML = '';
            document.getElementById('upload').onclick = function () {
                datafile.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile.init();
/***********************************************/

/************ chunk video upload (480 px)*******/
var datafile1 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile1', // you can pass in id...
    container: document.getElementById('container1'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist1').innerHTML = '';
            document.getElementById('upload1').onclick = function () {
                datafile1.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist1').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name1').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name1').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console1').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile1.init();
/***********************************************/

/************ chunk video upload (720 px)*******/
var datafile2 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile2', // you can pass in id...
    container: document.getElementById('container2'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist2').innerHTML = '';
            document.getElementById('upload2').onclick = function () {
                datafile2.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist2').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name2').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name2').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console2').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile2.init();
/***********************************************/

/************ chunk video upload (1080 px)******/
var datafile3 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile3', // you can pass in id...
    container: document.getElementById('container3'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist3').innerHTML = '';
            document.getElementById('upload3').onclick = function () {
                datafile3.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist3').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name3').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name3').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console3').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile3.init();
/***********************************************/

/************ Trailer ************************/
var datafile5 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile5', // you can pass in id...
    container: document.getElementById('container5'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist5').innerHTML = '';
            document.getElementById('upload5').onclick = function () {
                datafile5.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist5').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name5').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name5').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console5').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile5.init();
/***********************************************/

/************ subtitle_1 ************************/
var datafile4 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile4', // you can pass in id...
    container: document.getElementById('container4'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist4').innerHTML = '';
            document.getElementById('upload4').onclick = function () {
                datafile4.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist4').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name4').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name4').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console4').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile4.init();
/***********************************************/

/************ subtitle_2 ************************/
var datafile6 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile6', // you can pass in id...
    container: document.getElementById('container6'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist6').innerHTML = '';
            document.getElementById('upload6').onclick = function () {
                datafile6.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist6').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name6').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name6').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console6').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile6.init();
/***********************************************/

/************ subtitle_3 ************************/
var datafile7 = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4',
    browse_button: 'uploadFile7', // you can pass in id...
    container: document.getElementById('container7'), // ... or DOM Element itself
    chunk_size: '1mb',
    url: baseUrl + '/admin/video/saveChunk',
    max_file_count: 1,
    unique_names: true,
    send_file_name: true,
    multi_selection: false,
    filters: {
        mime_types: [
            { title: "Content files", extensions: "mp4" },
        ],
        prevent_duplicates: true
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    init: {
        PostInit: function () {
            document.getElementById('filelist7').innerHTML = '';
            document.getElementById('upload7').onclick = function () {
                datafile7.start();
                return false;
            };
        },
        FilesAdded: function (up, files) {
            plupload.each(files, function (file) {
                document.getElementById('filelist7').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
            });
        },
        UploadProgress: function (up, file) {
            document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        },
        FileUploaded: function (up, file, info) {
            var response = JSON.parse(info.response);
            if (response.result) {
                jQuery('#mp3_file_name7').val(response.result);
            } else if (file.target_name) {
                jQuery('#mp3_file_name7').val(file.target_name);
            }
        },
        Error: function (up, err) {
            document.getElementById('console7').innerHTML += "\nError #" + err.code + ": " + err.message;
        }
    }
});
datafile7.init();
/***********************************************/
</script>

@endsection
