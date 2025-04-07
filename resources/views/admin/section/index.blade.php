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

                {{-- 1st section --}}
                <div id="Home" class="section-tabcontent">
                    <!-- Add Banner Section -->
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Video Type</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="Today">Video</option>
                                        <option value="Month">TV Show</option>
                                        <option value="Year">Category</option>
                                        <option value="Year">Language</option>
                                        <option value="Year">Channel List</option>
                                        <option value="Year">Upcoming Content</option>
                                        <option value="Year">Channel Content</option>
                                        <option value="Year">Continue Watching</option>
                                        <option value="Year">Kids Content</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>
                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- 2nd section --}}
                <div id="Comedy" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc"
                                                checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like" value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view" value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium-yes" name="premium-video" value="yes">
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium-no" name="premium-video" value="no"
                                                checked>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>

                {{-- 3rd section --}}
                <div id="Horror" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc"
                                                checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like" value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view" value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium-yes" name="premium-video" value="yes">
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium-no" name="premium-video" value="no"
                                                checked>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>


                {{-- 4th section --}}
                <div id="TV Show" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc"
                                                checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like" value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view" value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium-yes" name="premium-video" value="yes">
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium-no" name="premium-video" value="no"
                                                checked>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>


                {{-- 5th section --}}
                <div id="TV Channel" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label class="banner-label">Sub video Type</label>
                                    <select class="banner-select" id="banner-select">
                                        <option value="all">Select Type</option>
                                        <option value="all">video</option>
                                        <option value="all">show</option>

                                    </select>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="channel">Channel</label>
                                    <select id="channel" name="channel" required>
                                        <option value="">All Channel</option>
                                        <option value="channel">NBC</option>
                                        <option value="channel">CLEAR TV</option>
                                        <option value="channel">KIDS TV</option>
                                        <option value="channel">ZEE TV</option>
                                        <option value="channel">100 NEWS</option>
                                        <option value="channel">SH TV</option>
                                        <option value="channel">NDTV</option>
                                        <option value="channel">AAJ TAK</option>

                                    </select>
                                </div>
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload" value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload" value="desc"
                                                checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like" value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view" value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>


                {{-- 6th section --}}
                <div id="Sports" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload"
                                                value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload"
                                                value="desc" checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like"
                                                value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view"
                                                value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium-yes" name="premium-video"
                                                value="yes">
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium-no" name="premium-video"
                                                value="no" checked>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i
                                        class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>


                {{-- 7th section --}}
                <div id="Upcoming" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label class="banner-label">Sub video Type</label>
                                    <select class="banner-select" id="banner-select">
                                        <option value="all">Select Type</option>
                                        <option value="all">video</option>
                                        <option value="all">show</option>

                                    </select>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="type" name="type" required>
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
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Today">Landscape</option>
                                        <option value="Month">Portrait</option>
                                        <option value="Month">Square</option>
                                        <option value="Month">Big Landscape</option>
                                        <option value="Month">Big Portrait</option>
                                        <option value="Month">Index Landscape</option>
                                        <option value="Month">Index Portrait</option>
                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="Content" name="Content" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="upload-asc" name="order-by-upload"
                                                value="asc">
                                            <label for="upload-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="upload-desc" name="order-by-upload"
                                                value="desc" checked>
                                            <label for="upload-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="like-asc" name="order-by-like" value="asc"
                                                checked>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="like-desc" name="order-by-like"
                                                value="desc">
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-asc" name="order-by-view" value="asc"
                                                checked>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-desc" name="order-by-view"
                                                value="desc">
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent-yes" name="rent-video" value="yes">
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent-no" name="rent-video" value="no"
                                                checked>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view-all-yes" name="view-all" value="yes"
                                                checked>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view-all-no" name="view-all" value="no">
                                            <label for="view-all-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>

                    <!-- Edit Section -->
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title">Short Title</label>
                                    <input type="text" id="edit-short-title" name="edit-short-title" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="edit-short-title-2">Short Title</label>
                                    <input type="text" id="edit-short-title-2" name="edit-short-title-2" readonly>
                                </div>
                                <div class="section-form">
                                    <label for="screen-layout">Screen Layout</label>
                                    <input type="text" id="screen-layout" name="screen-layout" readonly>
                                </div>
                            </div>
                            <div class="button-section">
                                <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn" id="open-delete-modal"><i
                                        class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>

                </div>

            </section>
        </main>
    </div>
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
    <script src="{{ asset('js\sectionpage.js') }}" defer></script>
@endsection
