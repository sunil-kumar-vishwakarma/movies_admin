@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <a href="{{ route('admin.live.index') }}">
                <button class="back-btn" id="open-add-modal">
                    <i class="fas fa-arrow-left"></i>LIVE VIDEOS LIST
                </button>
            </a>
        </div>
        
        <form action="{{route('admin.live.store')}}" method="post" enctype="multipart/form-data">
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
                        <option value="Comedy">Comedy</option>
                        <option value="Sports">Sports</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Ads Video*</label>
                    <select class="video-select" name="ads_video" id="ads_video">
                        <option>Select Ads Video</option>
                        <option value="Shoes">Shoes</option>
                        <option value="News24">News24</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Cream Lemon Dark">Cream Lemon Dark</option>
                        <option value="news">news</option>
                        <option value="Headphones">Headphones</option>
                        <option>
                            Google Ads Tutorial 2025 (Step by Step) How To Use Google Ads
                        </option>
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
                        <option value="Today">Thriller</option>
                        <option value="Month">Fantasy</option>
                        <option value="Year">Adventure</option>
                        <option value="Year">Language</option>
                        <option value="Year">Sci-Fi & Fantasy</option>
                        <option value="Year">News</option>
                        <option value="Year">Action & Adventure</option>
                        <option value="Year">Mystery</option>
                        <option value="Year">Animation</option>
                        <option value="Year">Family</option>
                        <option value="Year">Horror</option>
                        <option value="Year">Science Fiction</option>
                        <option value="Year">Romance</option>
                        <option value="Year">Drama</option>
                        <option value="Year">Action</option>
                        <option value="Year">Serials</option>
                        <option value="Year">Kids</option>
                        <option value="Year">Comedy</option>
                        <option value="Year">Hollywood</option>
                        <option value="Year">Bollywood</option>
                    </select>
                </div>
                <div class="input-group">
                    <label class="input-label">Language*</label>
                    <select class="video-select" name="language" id="language">
                        <option value="">All Language</option>
                        <option value="Language">No Language</option>
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                        <option value="Urdu">Urdu</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Japanese">Japanese</option>
                        <option value="German">German</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Korean">Korean</option>
                        <option value="French">French</option>
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Cast*</label>
                    <input type="text" class="video-input" name="cast" id="cast" placeholder="Add Cast">
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
                            <input type="radio" id="upload-asc" name="is_premium" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_premium" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Title *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_title" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_title" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Download *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_download" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_download" value="desc" checked>
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
                            <input type="radio" id="upload-asc" name="is_rent" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_rent" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Comment *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_comment" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_comment" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Like *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="is_like" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="is_like" value="desc" checked>
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
</script>

@endsection
