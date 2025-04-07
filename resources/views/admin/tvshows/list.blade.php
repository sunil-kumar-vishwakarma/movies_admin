@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <a href="{{ route('admin.tvshows.index') }}">
                <button class="back-btn" id="open-add-modal">
                    <i class="fas fa-arrow-left"></i> TV SHOWS
                </button>
            </a>
        </div>
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Videos...">
            </div>
            <div class="sort-container">
                <select class="sort-select" id="sort-select">
                    <option value="all">All Season</option>
                    <option value="Today">Season 1</option>
                    <option value="Today">Season 2</option>
                    <option value="Today">Season 3</option>
                    <option value="Today">Season 4</option>
                    <option value="Today">Season 5</option>
                </select>
            </div>
        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="video-card add-video-card">
                        <a href="{{ route('admin.tvshows.addepisode') }}" class="add-video-btn">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Episode</span>
                        </a>

                    </div>

                    <div class="video-card">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                                <div class="video-card-icons">
                                    {{-- <button class="chart-btn"><i class="fas fa-chart-line"></i></button> --}}
                                    <a href="{{ route('admin.tvshows.editepisode') }}">
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
                            <div class="season-title">Season 1</div>

                        </div>
                        <!-- Like & View Buttons -->
                        <div class="btn-container">
                            <button class="icon-btn like-btn">
                                <i class="fas fa-thumbs-up"></i> <span class="count">10</span>
                            </button>
                            <button class="icon-btn view-btn">
                                <i class="fas fa-eye"></i> <span class="count">100</span>
                            </button>
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
                <h2>Delete Episode</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
