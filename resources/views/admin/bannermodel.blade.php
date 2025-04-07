@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Videos...">
            </div>

        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="add-banner-card">
                        <a href="#" class="add-video-btn" id="open-add-modal">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Banner</span>
                        </a>
                    </div>

                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
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
            <h2>Upload Banner</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="video-select">
                        <option>Select Type</option>
                        <option>Home</option>
                        <option>About us</option>
                        <option>Services</option>
                        <option>Portfolio</option>
                        <option>Contact</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="user-name">Upload Link</label>
                    <input type="text" id="name" name="name" placeholder="Enter Upload Link" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Banner</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="video-select">
                        <option>Select Type</option>
                        <option>Home</option>
                        <option>About us</option>
                        <option>Services</option>
                        <option>Portfolio</option>
                        <option>Contact</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="user-name">Upload Link</label>
                    <input type="text" id="name" name="name" placeholder="Enter Upload Link" required>
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
                <h2>Delete Banner</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
