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

                <div id="Home" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Type</label>
                            <select class="banner-select" id="banner-type-select">
                                <option value="all">Select Type</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Horror">Horror</option>
                                <option value="TV Show">TV Show</option>
                                <option value="TV Channel">TV Channel</option>
                                <option value="Sports">Sports</option>
                                <option value="Upcoming">Upcoming</option>
                            </select>
                        </div>
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-video-select">
                                <option value="all">Select Video</option>
                                <option value="video1">Video 1</option>
                                <option value="video2">Video 2</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Banners</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="banner-list">
                            <tr>
                                <td>Comedy</td>
                                <td>Banner 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Show</td>
                                <td>Banner 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="Comedy" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdown">
                        <label class="banner-label">Video</label>
                        <select class="banner-select" id="banner-select">
                            <option value="all">Select Video</option>
                            <option value="all">1....</option>

                        </select>
                    </div>
                    <h3 class="section-title">Added Comedy</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="comedy-list">
                            <tr>
                                <td>Comedy</td>
                                <td>Comedy 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Comedy</td>
                                <td>Comedy 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="Horror" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Video</option>
                                <option value="all">1....</option>

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Horror</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="horror-list">
                            <tr>
                                <td>Horror</td>
                                <td>Horror 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Horror</td>
                                <td>Horror 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="TV Show" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Video</option>
                                <option value="all">1....</option>

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added TV Shows</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tvshow-list">
                            <tr>
                                <td>TV Show</td>
                                <td>TV Show 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Show</td>
                                <td>TV Show 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="TV Channel" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Sub video Type</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Type</option>
                                <option value="all">video</option>
                                <option value="all">show</option>

                            </select>
                        </div>

                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Video</option>
                                <option value="all">1....</option>

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added TV Channels</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tvchannel-list">
                            <tr>
                                <td>TV Channel</td>
                                <td>TV Channel 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>TV Channel</td>
                                <td>TV Channel 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="Sports" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Video</option>
                                <option value="all">1....</option>

                            </select>
                        </div>
                    </div>
                    <h3 class="section-title">Added Sports</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="sports-list">
                            <tr>
                                <td>Sports</td>
                                <td>Sports 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sports</td>
                                <td>Sports 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="Upcoming" class="tabcontent">
                    <h2 class="section-title">Add Banner</h2>
                    <div class="banner-dropdowns">
                        <div class="banner-dropdown">
                            <label class="banner-label">Sub Video Type</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Type</option>
                                <option value="all">video</option>
                                <option value="all">show</option>

                            </select>
                        </div>
                        <div class="banner-dropdown">
                            <label class="banner-label">Video</label>
                            <select class="banner-select" id="banner-select">
                                <option value="all">Select Video</option>
                                <option value="all">1....</option>

                            </select>
                        </div>
                    </div>

                    <h3 class="section-title">Added Upcoming</h3>
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="upcoming-list">
                            <tr>
                                <td>Upcoming</td>
                                <td>Upcoming 1</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Upcoming</td>
                                <td>Upcoming 2</td>
                                <td>
                                    <button class="delete-btn" id="open-delete-modal"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    {{-- Delete model --}}
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

    <script>
        function openCategory(evt, categoryName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(categoryName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection
