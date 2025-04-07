@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Ad Video..." id="search-input">
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                    <option value="Sports">Sports</option>
                </select>
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Video</option>
                    <option value="Rent">Rent Video</option>

                </select>
            </div>
        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="video-card add-video-card">
                        <a href="#" id="open-add-modal" class="add-video-btn">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Ad Video</span>
                        </a>

                    </div>

                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>


                    <!-- Repeat the above video-card div for each video -->
                </div>
            </section>
        </main>
    </div>


    <!-- Add Modal -->
    <div class="modal" id="add-modal">
        <div class="modal-content">
            <span class="close" id="close-add-modal">&times;</span>
            <h2>Upload Video</h2>
            <form id="add-form">

                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="sort-select" id="sort-select">
                        <option value="all">All Type</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Horror">Horror</option>
                        <option value="Sports">Sports</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Upload Video</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Category</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Language</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="image">Landscape Image</label>
                    <input type="file" id="image" name="image" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Video</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="sort-select" id="sort-select">
                        <option value="all">All Type</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Horror">Horror</option>
                        <option value="Sports">Sports</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Upload Video</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Category</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Language</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="image">Landscape Image</label>
                    <input type="file" id="image" name="image" required>
                </div>

                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>
    </div>

    {{-- delete model --}}
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
