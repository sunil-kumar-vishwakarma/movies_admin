@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="video-details-container">
            <h2>AdMob Android Settings</h2>
            <hr>
            <div class="input-grid">
                <div class="filter-group">
                    <h4 class="filter-title">Banner Ad</h4>
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
                    <h4 class="filter-title">Interstital Ad</h4>
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
                    <h4 class="filter-title">Reward Ad</h4>
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

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Banner Ad ID</label>
                    <input type="text" class="video-input" placeholder="Enter Id">

                </div>

                <div class="input-group">
                    <label class="input-label">Interstital Ad ID</label>
                    <input type="text" class="video-input" placeholder="Enter Id">

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad ID </label>
                    <input type="text" class="video-input" placeholder="Enter Id">
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Interstital Ad Click</label>
                    <input type="text" class="video-input" placeholder="Enter Click">

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad Click</label>
                    <input type="text" class="video-input" placeholder="Enter Click">
                </div>
            </div>
            <hr>
            <div class="button-section">
                <button type="submit" class="save-btn">Save</button>
            </div>
        </div>
        <div class="video-details-container">
            <h2>AdMob iOS Settings</h2>
            <hr>
            <div class="input-grid">
                <div class="filter-group">
                    <h4 class="filter-title">Banner Ad</h4>
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
                    <h4 class="filter-title">Interstital Ad</h4>
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
                    <h4 class="filter-title">Reward Ad</h4>
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

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Banner Ad ID</label>
                    <input type="text" class="video-input" placeholder="Enter Id">

                </div>

                <div class="input-group">
                    <label class="input-label">Interstital Ad ID</label>
                    <input type="text" class="video-input" placeholder="Enter Id">

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad ID </label>
                    <input type="text" class="video-input" placeholder="Enter Id">
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label class="input-label">Interstital Ad Click</label>
                    <input type="text" class="video-input" placeholder="Enter Click">

                </div>

                <div class="input-group">
                    <label class="input-label">Reward Ad Click</label>
                    <input type="text" class="video-input" placeholder="Enter Click">
                </div>
            </div>
            <hr>
            <div class="button-section">
                <button type="submit" class="save-btn">Save</button>
            </div>
        </div>
    </div>
@endsection
