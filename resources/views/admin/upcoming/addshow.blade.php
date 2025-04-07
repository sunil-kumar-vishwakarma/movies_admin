@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <a href="{{ route('admin.upcoming.tvshow') }}">
                <button class="back-btn" id="open-add-modal">
                    <i class="fas fa-arrow-left"></i> UPCOMING TV SHOW
                </button>
            </a>
        </div>
        <div class="video-details-container">

            <div class="input-grid4">
                <div class="filter-group">
                    <div class="input-row">
                        <div class="section-form">
                            <label for="Language">Name *</label>
                            <input type="text" id="Language" name="Language" placeholder="Enter Episode Name" required>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <label class="input-label">Season*</label>
                    <select class="video-select">
                        <option>Select Season</option>
                        <option>Season 1</option>
                        <option>Season 2</option>
                        <option>Season 3</option>
                        <option>Season 4</option>
                        <option>Season 5</option>
                    </select>
                </div>
            </div>


        </div>

        <div class="video-details-container">
            <div class="input-grid6">
                <div class="filter-group1">
                    <label class="input-label">Video Upload Type*</label>
                    <select class="video-select" style="margin-top: 10px;">
                        <option>Select Type</option>
                        <option>External URL</option>
                        <option>YouTube</option>
                    </select>
                    <p class="tmdb-note">
                        Note : If you select YouTube, you must enter the ID of the YouTube video, Not a Full URL. For
                        Reference
                        <a class="tmdb-link" href="https://commentpicker.com/youtube-video-id.php" target="_blank">Click
                            Here</a>
                    </p>
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
            <div class="input-grid4">
                <div class="input-group">
                    <label class="input-label">Video Duration*</label>
                    <input type="time" class="video-input">
                </div>

                <div class="input-group">
                    <label class="input-label">Thumbnail Image*</label>
                    <input type="file" class="video-input">
                    <button class="Upload-btn"> Upload Files</button>

                </div>
                <div class="input-textarea">
                    <label for="description" class="input-textarea">Description*</label>
                    <textarea id="description" name="description" cols="10" rows="5"></textarea>
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
