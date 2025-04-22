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
                        
                        <form id="section-add-form" action="{{route('admin.section.index.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" value="{{$homeSection->title}}" placeholder="Enter Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title" value="{{$homeSection->short_title}}"
                                        placeholder="Enter Short Title" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Video Type</label>
                                    <select id="video_type" name="video_type" required>
                                    <option value="">Select Type</option>
                                    <option value="Video" {{ $homeSection->video_type == 'Video' ? 'selected' : '' }}>Video</option>
                                    <option value="TV Show" {{ $homeSection->video_type == 'TV Show' ? 'selected' : '' }}>TV Show</option>
                                    <option value="Category" {{ $homeSection->video_type == 'Category' ? 'selected' : '' }}>Category</option>
                                    <option value="Language" {{ $homeSection->video_type == 'Language' ? 'selected' : '' }}>Language</option>
                                    <option value="Channel List" {{ $homeSection->video_type == 'Channel List' ? 'selected' : '' }}>Channel List</option>
                                    <option value="Upcoming Content" {{ $homeSection->video_type == 'Upcoming Content' ? 'selected' : '' }}>Upcoming Content</option>
                                    <option value="Channel Content" {{ $homeSection->video_type == 'Channel Content' ? 'selected' : '' }}>Channel Content</option>
                                    <option value="Continue Watching" {{ $homeSection->video_type == 'Continue Watching' ? 'selected' : '' }}>Continue Watching</option>
                                    <option value="Kids Content" {{ $homeSection->video_type == 'Kids Content' ? 'selected' : '' }}>Kids Content</option>
                                </select>

                                </div>
                            </div>
                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>
                    </div>

                    <!-- Edit Section -->
                    <!-- <div class="section">
                        <div class="section-header">
                            <h2 class="section-title">Edit Section</h2>
                            <button class="section-status-btn status-show">Show</button>
                        </div>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">Title</label>
                                    <input type="text" id="edit-title" name="edit-title" value readonly>
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
                    </div> -->

                    <!-- Edit Section -->
                    <!-- <div class="section">
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
                    </div> -->

                    <!-- Edit Section -->
                    <!-- <div class="section">
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
                    </div> -->
                </div>

                {{-- 2nd section --}}
                <div id="Comedy" class="section-tabcontent">
                    <div class="section">
                        <h2 class="section-title">Section</h2>
                       
                        <form id="section-add-form" action="{{route('admin.section.index.store_comedy')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$comdySection->title}}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$comdySection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $comdySection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $comdySection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $comdySection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $comdySection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $comdySection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $comdySection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $comdySection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $comdySection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $comdySection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $comdySection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $comdySection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $comdySection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $comdySection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $comdySection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $comdySection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $comdySection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $comdySection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $comdySection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $comdySection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $comdySection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $comdySection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $comdySection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $comdySection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $comdySection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $comdySection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $comdySection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $comdySection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $comdySection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $comdySection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $comdySection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $comdySection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $comdySection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $comdySection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $comdySection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $comdySection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $comdySection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $comdySection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $comdySection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$comdySection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $comdySection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $comdySection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $comdySection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $comdySection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $comdySection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $comdySection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="yes"  {{ $comdySection->premium_video == 'yes' ? 'checked' : '' }}>
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="no"
                                            {{ $comdySection->premium_video == 'no' ? 'checked' : '' }}>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $comdySection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $comdySection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $comdySection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $comdySection->view_all == 'no' ? 'checked' : '' }}>
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
                        <form id="section-add-form" action="{{route('admin.section.index.store_horror')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$horrorSection->title ?? '' }}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$horrorSection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $horrorSection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $horrorSection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $horrorSection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $horrorSection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $horrorSection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $horrorSection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $horrorSection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $horrorSection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $horrorSection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $horrorSection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $horrorSection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $horrorSection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $horrorSection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $horrorSection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $horrorSection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $horrorSection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $horrorSection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $horrorSection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $horrorSection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $horrorSection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $horrorSection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $horrorSection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $horrorSection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $horrorSection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $horrorSection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $horrorSection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $horrorSection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $horrorSection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $horrorSection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $horrorSection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $horrorSection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $horrorSection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $horrorSection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $horrorSection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $horrorSection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $horrorSection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $horrorSection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $horrorSection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$horrorSection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $horrorSection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $horrorSection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $horrorSection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $horrorSection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $horrorSection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $horrorSection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="yes"  {{ $horrorSection->premium_video == 'yes' ? 'checked' : '' }}>
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="no"
                                            {{ $horrorSection->premium_video == 'no' ? 'checked' : '' }}>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $horrorSection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $horrorSection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $horrorSection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $horrorSection->view_all == 'no' ? 'checked' : '' }}>
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
                        <form id="section-add-form" action="{{route('admin.section.index.store_tv_show')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$tvShowSection->title ?? '' }}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$tvShowSection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $tvShowSection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $tvShowSection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $tvShowSection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $tvShowSection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $tvShowSection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $tvShowSection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $tvShowSection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $tvShowSection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $tvShowSection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $tvShowSection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $tvShowSection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $tvShowSection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $tvShowSection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $tvShowSection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $tvShowSection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $tvShowSection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $tvShowSection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $tvShowSection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $tvShowSection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $tvShowSection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $tvShowSection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $tvShowSection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $tvShowSection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $tvShowSection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $tvShowSection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $tvShowSection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $tvShowSection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $tvShowSection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $tvShowSection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $tvShowSection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $tvShowSection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $tvShowSection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $tvShowSection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $tvShowSection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $tvShowSection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $tvShowSection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $tvShowSection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $tvShowSection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$tvShowSection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $tvShowSection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $tvShowSection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $tvShowSection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $tvShowSection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $tvShowSection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $tvShowSection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="yes"  {{ $tvShowSection->premium_video == 'yes' ? 'checked' : '' }}>
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="no"
                                            {{ $tvShowSection->premium_video == 'no' ? 'checked' : '' }}>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $tvShowSection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $tvShowSection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $tvShowSection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $tvShowSection->view_all == 'no' ? 'checked' : '' }}>
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
                        <!-- <form id="section-add-form">
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
                        </form> -->

                        <form id="section-add-form" action="{{route('admin.section.index.store_tv_channel')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$tvChannelSection->title ?? '' }}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$tvChannelSection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label class="banner-label">Sub video Type</label>
                                    <select class="banner-select" id="sub_video_type" name="sub_video_type">
                                        <option value="Select Type">Select Type</option>
                                        <option value="video" {{ $tvChannelSection->sub_video_type == 'video' ? 'selected' : '' }}>video</option>
                                        <option value="show" {{ $tvChannelSection->sub_video_type == 'show' ? 'selected' : '' }}>show</option>

                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $tvChannelSection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $tvChannelSection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $tvChannelSection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $tvChannelSection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $tvChannelSection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $tvChannelSection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $tvChannelSection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $tvChannelSection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $tvChannelSection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $tvChannelSection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $tvChannelSection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $tvChannelSection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $tvChannelSection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $tvChannelSection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $tvChannelSection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $tvChannelSection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $tvChannelSection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $tvChannelSection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $tvChannelSection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $tvChannelSection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $tvChannelSection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $tvChannelSection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $tvChannelSection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $tvChannelSection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $tvChannelSection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $tvChannelSection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $tvChannelSection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $tvChannelSection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $tvChannelSection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $tvChannelSection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $tvChannelSection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>

                                <div class="section-form">
                                    <label for="channel">Channel</label>
                                    <select id="channel" name="channel" required>
                                        <option value="">All Channel</option>
                                        <option value="NBC" {{ $tvChannelSection->channel == 'NBC' ? 'selected' : '' }}>NBC</option>
                                        <option value="CLEAR TV" {{ $tvChannelSection->channel == 'CLEAR TV' ? 'selected' : '' }}>CLEAR TV</option>
                                        <option value="KIDS TV" {{ $tvChannelSection->channel == 'KIDS TV' ? 'selected' : '' }}>KIDS TV</option>
                                        <option value="ZEE TV" {{ $tvChannelSection->channel == 'ZEE TV' ? 'selected' : '' }}>ZEE TV</option>
                                        <option value="100 NEWS" {{ $tvChannelSection->channel == '100 NEWS' ? 'selected' : '' }}>100 NEWS</option>
                                        <option value="SH TV" {{ $tvChannelSection->channel == 'SH TV' ? 'selected' : '' }}>SH TV</option>
                                        <option value="NDTV" {{ $tvChannelSection->channel == 'NDTV' ? 'selected' : '' }}>NDTV</option>
                                        <option value="AAJ TAK" {{ $tvChannelSection->channel == 'AAJ TAK' ? 'selected' : '' }}>AAJ TAK</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $tvChannelSection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $tvChannelSection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $tvChannelSection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $tvChannelSection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $tvChannelSection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $tvChannelSection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $tvChannelSection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$tvChannelSection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $tvChannelSection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $tvChannelSection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $tvChannelSection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $tvChannelSection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $tvChannelSection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $tvChannelSection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $tvChannelSection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $tvChannelSection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $tvChannelSection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $tvChannelSection->view_all == 'no' ? 'checked' : '' }}>
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
                        <form id="section-add-form" action="{{route('admin.section.index.store_sports')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$sportsSection->title}}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$sportsSection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $sportsSection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $sportsSection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $sportsSection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $sportsSection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $sportsSection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $sportsSection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $sportsSection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $sportsSection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $sportsSection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $sportsSection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $sportsSection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $sportsSection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $sportsSection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $sportsSection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $sportsSection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $sportsSection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $sportsSection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $sportsSection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $sportsSection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $sportsSection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $sportsSection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $sportsSection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $sportsSection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $sportsSection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $sportsSection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $sportsSection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $sportsSection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $sportsSection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $sportsSection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $sportsSection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $sportsSection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $sportsSection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $sportsSection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $sportsSection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $sportsSection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $sportsSection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $sportsSection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $sportsSection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$sportsSection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $sportsSection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $sportsSection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $sportsSection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $sportsSection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $sportsSection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $sportsSection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Premium Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="yes"  {{ $sportsSection->premium_video == 'yes' ? 'checked' : '' }}>
                                            <label for="premium-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="premium_video" name="premium_video" value="no"
                                            {{ $sportsSection->premium_video == 'no' ? 'checked' : '' }}>
                                            <label for="premium-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $sportsSection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $sportsSection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $sportsSection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $sportsSection->view_all == 'no' ? 'checked' : '' }}>
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
                        <form id="section-add-form" action="{{route('admin.section.index.store_upcoming')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Title" value="{{$upcomingSection->title ?? '' }}"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Short Title</label>
                                    <input type="text" id="short_title" name="short_title"
                                        placeholder="Enter Short Title" value="{{$upcomingSection->short_title}}" required>
                                </div>
                                <div class="section-form">
                                    <label class="banner-label">Sub video Type</label>
                                    <select class="banner-select" id="sub_video_type" name="sub_video_type">
                                        <option value="Select Type">Select Type</option>
                                        <option value="video" {{ $upcomingSection->sub_video_type == 'video' ? 'selected' : '' }}>video</option>
                                        <option value="show" {{ $upcomingSection->sub_video_type == 'show' ? 'selected' : '' }}>show</option>

                                    </select>
                                </div>

                                <div class="section-form">
                                    <label for="type">Category</label>
                                    <select id="category" name="category" required>
                                        <option value="">All Category</option>
                                        <option value="Thriller" {{ $upcomingSection->category == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                                        <option value="Fantasy" {{ $upcomingSection->category == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                        <option value="Adventure" {{ $upcomingSection->category == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="Language" {{ $upcomingSection->category == 'Language' ? 'selected' : '' }}>Language</option>
                                        <option value="Sci-Fi & Fantasy" {{ $upcomingSection->category == 'Sci-Fi & Fantasy' ? 'selected' : '' }}>Sci-Fi & Fantasy</option>
                                        <option value="News" {{ $upcomingSection->category == 'News' ? 'selected' : '' }}>News</option>
                                        <option value="Action & Adventure" {{ $upcomingSection->category == 'Action & Adventure' ? 'selected' : '' }}>Action & Adventure</option>
                                        <option value="Mystery" {{ $upcomingSection->category == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                                        <option value="Animation" {{ $upcomingSection->category == 'Animation' ? 'selected' : '' }}>Animation</option>
                                        <option value="Family" {{ $upcomingSection->category == 'Family' ? 'selected' : '' }}>Family</option>
                                        <option value="Horror" {{ $upcomingSection->category == 'Horror' ? 'selected' : '' }}>Horror</option>
                                        <option value="Science Fiction" {{ $upcomingSection->category == 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                                        <option value="Romance" {{ $upcomingSection->category == 'Romance' ? 'selected' : '' }}>Romance</option>
                                        <option value="Drama" {{ $upcomingSection->category == 'Drama' ? 'selected' : '' }}>Drama</option>
                                        <option value="Action" {{ $upcomingSection->category == 'Action' ? 'selected' : '' }}>Action</option>
                                        <option value="Serials" {{ $upcomingSection->category == 'Serials' ? 'selected' : '' }}>Serials</option>
                                        <option value="Kids" {{ $upcomingSection->category == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        <option value="Comedy" {{ $upcomingSection->category == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                                        <option value="Hollywood" {{ $upcomingSection->category == 'Hollywood' ? 'selected' : '' }}>Hollywood</option>
                                        <option value="Bollywood" {{ $upcomingSection->category == 'Bollywood' ? 'selected' : '' }}>Bollywood</option>
                                    </select>

                                </div>
                                <div class="section-form">
                                    <label for="type">Language</label>
                                    <select id="language" name="language" required>
                                    <option value="">All Language</option>
                                    <option value="No Language" {{ $upcomingSection->language == 'No Language' ? 'selected' : '' }}>No Language</option>
                                    <option value="Hindi" {{ $upcomingSection->language == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="English" {{ $upcomingSection->language == 'English' ? 'selected' : '' }}>English</option>
                                    <option value="Urdu" {{ $upcomingSection->language == 'Urdu' ? 'selected' : '' }}>Urdu</option>
                                    <option value="Marathi" {{ $upcomingSection->language == 'Marathi' ? 'selected' : '' }}>Marathi</option>
                                    <option value="Gujarati" {{ $upcomingSection->language == 'Gujarati' ? 'selected' : '' }}>Gujarati</option>
                                    <option value="Japanese" {{ $upcomingSection->language == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="German" {{ $upcomingSection->language == 'German' ? 'selected' : '' }}>German</option>
                                    <option value="Punjabi" {{ $upcomingSection->language == 'Punjabi' ? 'selected' : '' }}>Punjabi</option>
                                    <option value="Korean" {{ $upcomingSection->language == 'Korean' ? 'selected' : '' }}>Korean</option>
                                    <option value="French" {{ $upcomingSection->language == 'French' ? 'selected' : '' }}>French</option>
                                </select>

                                </div>

                                

                                <div class="section-form">
                                    <label for="type">Screen Layout</label>
                                    <select id="screen_layout" name="screen_layout" required>
                                        <option value="">Select Screen Layout</option>
                                        <option value="Landscape" {{ $upcomingSection->screen_layout == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                                        <option value="Portrait" {{ $upcomingSection->screen_layout == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                        <option value="Square" {{ $upcomingSection->screen_layout == 'Square' ? 'selected' : '' }}>Square</option>
                                        <option value="Big Landscape" {{ $upcomingSection->screen_layout == 'Big Landscape' ? 'selected' : '' }}>Big Landscape</option>
                                        <option value="Big Portrait" {{ $upcomingSection->screen_layout == 'Big Portrait' ? 'selected' : '' }}>Big Portrait</option>
                                        <option value="Index Landscape" {{ $upcomingSection->screen_layout == 'Index Landscape' ? 'selected' : '' }}>Index Landscape</option>
                                        <option value="Index Portrait" {{ $upcomingSection->screen_layout == 'Index Portrait' ? 'selected' : '' }}>Index Portrait</option>
                                    </select>

                                </div>

                                <div class="section-form">
                                    <label for="Content">No of Content</label>
                                    <input type="number" id="number_of_content" name="number_of_content" value="{{$upcomingSection->number_of_content}}" required>
                                </div>
                            </div>

                            <div class="filter-section">
                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Upload</h4>
                                    <div class="input-row">
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_asc" name="order_by_upload" value="asc"
                                            {{ $upcomingSection->order_by_upload == 'asc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_asc">Asc</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="radio" id="order_by_upload_desc" name="order_by_upload" value="desc"
                                            {{ $upcomingSection->order_by_upload == 'desc' ? 'checked' : '' }}>
                                        <label for="order_by_upload_desc">Desc</label>
                                    </div>
                                </div>

                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by Like</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="asc"
                                            {{ $upcomingSection->order_by_like == 'asc' ? 'checked' : '' }}>
                                            <label for="like-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_like" name="order_by_like" value="desc" {{ $upcomingSection->order_by_like == 'desc' ? 'checked' : '' }}>
                                            <label for="like-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">Order by View</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="asc"
                                            {{ $upcomingSection->order_by_view == 'asc' ? 'checked' : '' }}>
                                            <label for="view-asc">Asc</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="order_by_view" name="order_by_view" value="desc" {{ $upcomingSection->order_by_view == 'desc' ? 'checked' : '' }}>
                                            <label for="view-desc">Desc</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="filter-group">
                                    <h4 class="filter-title">Rent Video</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="yes" {{ $upcomingSection->rent_video == 'yes' ? 'checked' : '' }}>
                                            <label for="rent-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="rent_video" name="rent_video" value="no"
                                            {{ $upcomingSection->rent_video == 'no' ? 'checked' : '' }}>
                                            <label for="rent-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-group">
                                    <h4 class="filter-title">View All</h4>
                                    <div class="input-row">
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="yes"
                                            {{ $upcomingSection->view_all == 'yes' ? 'checked' : '' }}>
                                            <label for="view-all-yes">Yes</label>
                                        </div>
                                        <div class="input-item">
                                            <input type="radio" id="view_all" name="view_all" value="no" {{ $upcomingSection->view_all == 'no' ? 'checked' : '' }}>
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
