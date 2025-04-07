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
                    <input class="tmdb-input" type="text" id="movie-name" placeholder="Enter Movies Name">
                    <button class="fetch-btn">Fetch</button>
                </div>
            </div>
        </div>
        <div class="video-details-container">
            {{-- <h2 class="video-heading">Add New Video</h2> --}}

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Type*</label>
                    <select class="video-select">
                        <option>Select Type</option>
                        <option>Comedy</option>
                        <option>Sports</option>
                        <option>Horror</option>
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Ads Video*</label>
                    <select class="video-select">
                        <option>Select Ads Video</option>
                        <option>Shoes</option>
                        <option>News24</option>
                        <option>Marketing</option>
                        <option>Cream Lemon Dark</option>
                        <option>news</option>
                        <option>Headphones</option>
                        <option>
                            Google Ads Tutorial 2025 (Step by Step) How To Use Google Ads
                        </option>
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Ads Interval Video Duration*</label>
                    <input type="number" class="video-input" placeholder="Ads Video Duration">
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Category*</label>
                    <select class="video-select">
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
                    <select class="video-select">
                        <option value="">All Language</option>
                        <option value="Language">No Language</option>
                        <option value="Language">Hindi</option>
                        <option value="Language">English</option>
                        <option value="Language">Urdu</option>
                        <option value="Language">Marathi</option>
                        <option value="Language">Gujarati</option>
                        <option value="Language">Japanese</option>
                        <option value="Language">German</option>
                        <option value="Language">Punjabi</option>
                        <option value="Language">Korean</option>
                        <option value="Language">French</option>
                    </select>
                </div>

                <div class="input-group">
                    <label class="input-label">Cast*</label>
                    <input type="text" class="video-input" placeholder="Add Cast">
                </div>


            </div>


            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Video Duration*</label>
                    <input type="time" class="video-input">
                </div>

                <div class="input-group">
                    <label class="input-label">Release Date*</label>
                    <input type="date" class="video-input">
                </div>
                <div class="input-group">
                    <label class="input-label">Producer*</label>
                    <select class="video-select">
                        <option>Select Producer</option>
                        <option>Producer</option>
                    </select>
                </div>

                <!-- Add more input groups as needed -->

            </div>

        </div>

        <div class="video-details-container">
            <div class="input-grid3">
                <div class="filter-group1">
                    <label class="input-label">Video Upload Type*</label>
                    <select class="video-select" style="margin-top: 10px;">
                        <option>Server Video</option>
                        <option>YouTube</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h4 class="filter-title">Is Premium *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Title *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Download *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>


            </div>

            <div class="input-grid3">
                <div class="input-group">
                    <label class="input-label">Upload Video (320 px)*</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (480 px) </label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (720 px) </label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload Video (1080 px) </label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="input-grid4">
                <div class="filter-group">
                    <label class="input-label">Trailer Type*</label>
                    <select class="video-select">
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
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>
                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="language-grid">
                <div class="filter-group">
                    <label class="input-label">Subtitle Type*</label>
                    <select class="video-select">
                        <option>Server Video</option>
                        <option>External URL</option>
                    </select>
                </div>

                <div class="input-grid5">
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="Language" name="Language" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="Language" name="Language" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="input-row">
                            <div class="section-form">
                                <label for="Language">Language Name *</label>
                                <input type="text" id="Language" name="Language" placeholder="Enter Language Name"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="input-grid5">
                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

                <div class="input-group">
                    <label class="input-label">Upload SubTitle *</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
            </div>
        </div>

        <div class="video-details-container">
            <div class="input-grid3">
                <div class="filter-group1">
                    <label class="input-label">Video Upload Type*</label>
                    <select class="video-select" style="margin-top: 10px;">
                        <option>Server Video</option>
                        <option>YouTube</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h4 class="filter-title">Is Rent *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Comment *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <h4 class="filter-title">Is Like *</h4>
                    <div class="input-row1">
                        <div class="input-item">
                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                            <label for="upload-asc">Yes</label>
                        </div>
                        <div class="input-item">
                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc" checked>
                            <label for="upload-desc">No</label>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label class="input-label">Thumbnail Image*</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
                <div class="input-group">
                    <label class="input-label">Landscape Image*</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>

            </div>

            <div class="button-section">
                <button type="submit" class="save-btn">Save</button>
                <button class="delete-btn" >Cancle</button>
            </div>
        </div>
    </div>
@endsection
