@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Videos...">
            </div>
            <div class="sort-container">
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Today">Comedy</option>
                    <option value="Month">Horror</option>
                    <option value="Year">Sports</option>
                </select>
            </div>
            <div class="sort-container">
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Today">Rent Video</option>
                </select>
            </div>
        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="video-card add-video-card">
                        <a href="{{ route('admin.videos.addvideo') }}" class="add-video-btn">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Video</span>
                        </a>

                    </div>

                    <div class="video-card">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                                <div class="video-card-icons">
                                    {{-- <button class="chart-btn"><i class="fas fa-chart-line"></i></button> --}}
                                    <a href="{{ route('admin.videos.edit') }}">
                                        <button class="edit-btn"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">Avengers: Infinity War</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                                <div class="video-card-icons">
                                    {{-- <button class="chart-btn"><i class="fas fa-chart-line"></i></button> --}}
                                    <a href="{{ route('admin.videos.edit') }}">
                                        <button class="edit-btn"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://img.wprost.pl/img/avengers-endgame-recenzja/94/5f/85b10425332b90b0073d9cdb01c0.webp"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">Avengers: Endgame</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>

                    <!-- Repeat the above video-card div for each video -->
                </div>
            </section>
        </main>
    </div>
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete Video</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
