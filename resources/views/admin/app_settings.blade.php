@extends('admin.layout')

@section('content')
    <div class="banner-container">
        <main class="banner-content">
            <div class="save-button-container">
                {{-- <a href="#" class="save-button">Save</a> --}}
            </div>
            <section class="settings-management">
                <div class="tab">
                    <button class="tablinks" onclick="openCategory(event, 'Home')" id="defaultOpen">App Settings</button>
                    <button class="tablinks" onclick="openCategory(event, 'Comedy')">Configrations</button>
                    <button class="tablinks" onclick="openCategory(event, 'Horror')">SMTP</button>
                    <button class="tablinks" onclick="openCategory(event, 'TV Show')"> Social Settings</button>
                    {{-- <button class="tablinks" onclick="openCategory(event, 'Horror1')">OnBoarding Screen</button> --}}
                </div>




                {{-- 1st section --}}
                <div id="Home" class="section-tabcontent">
                    <!-- Add Banner Section -->
                    <div class="section">
                        <h2 class="config-title">App Settings</h2>
                        <form id="section-add-form">
                            <div class="input-grid5">
                                <div class="input-group">
                                    <label class="input-label">App Name*</label>
                                    <input type="text" class="video-input" placeholder="Enter App Name">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Host Email*</label>
                                    <input type="text" class="video-input" placeholder="Enter Host Email">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">App Version*</label>
                                    <input type="text" class="video-input" placeholder="Enter App Version">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Author*</label>
                                    <input type="text" class="video-input" placeholder="Enter Author Name">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Email *</label>
                                    <input type="text" class="video-input" placeholder="Enter Email">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Contact *</label>
                                    <input type="number" class="video-input" placeholder="Enter Contact">
                                </div>

                                <div class="input-textarea">
                                    <label for="description" class="input-textarea">Website*</label>
                                    <textarea id="description" name="description" cols="10" rows="5" placeholder="Enter Website Link..."></textarea>
                                </div>
                                <div class="input-textarea">
                                    <label for="description" class="input-textarea">Description*</label>
                                    <textarea id="description" name="description" cols="10" rows="5" placeholder="Description..."></textarea>
                                </div>

                                <div class="input-group">
                                    <label class="input-label">App Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 10px;">
                                    <button class="Upload-btn"> Upload Files</button>
                                </div>

                                {{-- <div class="image-card">
                                    <h3>App Icon*</h3>
                                    <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                                        alt="Image" class="card-image">
                                    <label for="file-upload" class="upload-icon" id="upload-icon">
                                        <i class="fa fa-cloud-upload"></i>
                                    </label>
                                    <input type="file" id="file-upload" class="file-input" accept="image/*">
                                </div> --}}





                            </div>
                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="section">
                        <h2 class="config-title">API Configrations</h2>
                        <form id="add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="edit-title">API Path</label>
                                    <div class="input-wrapper1">
                                        <input type="text" id="edit-title" name="edit-title"
                                            placeholder="Enter API Path">
                                        <i class="fa-solid fa-copy copy-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="config-wrapper">
                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">TMDb API Key</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-option">
                                    <h4 class="config-label">TMDb Active*</h4>
                                    <div class="config-radio-group">
                                        <div class="config-radio">
                                            <input type="radio" id="tmdb-yes" name="tmdb-status" value="yes">
                                            <label for="tmdb-yes">Yes</label>
                                        </div>
                                        <div class="config-radio">
                                            <input type="radio" id="tmdb-no" name="tmdb-status" value="no"
                                                checked>
                                            <label for="tmdb-no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-field">
                                    <label class="config-label">TMDb API Key*</label>
                                    <input type="text" class="config-input" placeholder="Enter TMDb API Key">
                                </div>
                            </div>
                            <p class="config-note">
                                Note: Search by TMDb ID for better result
                                <a class="config-link" href="https://www.themoviedb.org/" target="_blank">Click Here</a>
                            </p>
                            <div class="config-actions">
                                <button type="submit" class="config-btn">Save</button>
                            </div>
                        </div>

                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">Currency Settings</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-field">
                                    <label class="config-label">Currency Name*</label>
                                    <input type="text" class="config-input" placeholder="Enter Currency Name">
                                </div>
                                <div class="config-field">
                                    <label class="config-label">Currency Code*</label>
                                    <input type="text" class="config-input" placeholder="Enter Currency Code">
                                </div>
                            </div>
                            <div class="config-actions">
                                <button type="submit" class="config-btn">Save</button>
                            </div>
                        </div>

                        <div class="config-box">
                            <div class="config-header">
                                <h2 class="config-title">Vapid Key</h2>
                            </div>
                            <div class="config-grid">
                                <div class="config-field">
                                    <input type="text" class="config-input" placeholder="Enter Vapid Key">
                                </div>
                            </div>
                            <div class="config-actions">
                                <button type="submit" class="config-btn">Save</button>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- 2nd section --}}
                <div id="Comedy" class="section-tabcontent">
                    <div class="config-container">
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Auto Play Trailer Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status-1" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status-1" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Active TV Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Parent Control Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Watchlist Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Download Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Continue Watching Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">OnBoarding Screen Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Coupon Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Rent Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="config-card">
                            <div class="config-header">
                                <h2 class="config-title1">Subscription Status *</h2>
                            </div>
                            <div class="config-group">
                                <div class="config-toggle">
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="yes" checked>
                                        <span class="radio-circle"></span> Yes
                                    </label>
                                    <label class="config-toggle-btn">
                                        <input type="radio" name="tmdb-status" value="no">
                                        <span class="radio-circle"></span> No
                                    </label>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="button-section">
                        <button type="submit" class="save-btn">Save</button>
                    </div>
                </div>


                {{-- 3rd section --}}
                <div id="Horror" class="section-tabcontent">
                    <div class="section">
                        <h2 class="config-title">Email Setting [SMTP]</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">
                                <div class="section-form">
                                    <label for="type">Is SMTP Active*</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select Status</option>
                                        <option value="Today">Yes</option>
                                        <option value="Today">No</option>

                                    </select>
                                </div>
                                <div class="section-form">
                                    <label for="title">Host *</label>
                                    <input type="text" id="title" name="title" placeholder="Enter Host"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Port *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter Port"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Protocol *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Protocol" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">User Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter User Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Password *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter Password" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">From Name *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter Name"
                                        required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">From Email *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter Email"
                                        required>
                                </div>


                            </div>

                            <p class="config-note">
                                Search for better result
                                <a class="config-link" href="https://support.google.com/mail/answer/185833?hl=en"
                                    target="_blank">Click Here</a>
                            </p>

                            <div class="button-section">
                                <button type="submit" class="save-btn">Save</button>
                            </div>
                        </form>

                    </div>
                </div>


                {{-- 4th section --}}
                <div id="TV Show" class="section-tabcontent">
                    <div class="section">
                        <h2 class="config-title">Social Links</h2>
                        <form id="section-add-form">
                            <div class="section-form-row">

                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter URL Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter URL"
                                        required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 5px;">
                                </div>


                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter URL Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter URL"
                                        required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 5px;">
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter URL Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter URL"
                                        required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 5px;">
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter URL Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter URL"
                                        required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 5px;">
                                </div>
                                <div class="section-form">
                                    <label for="short-title">Name *</label>
                                    <input type="text" id="short-title" name="short-title"
                                        placeholder="Enter URL Name" required>
                                </div>
                                <div class="section-form">
                                    <label for="short-title">URL *</label>
                                    <input type="text" id="short-title" name="short-title" placeholder="Enter URL"
                                        required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label"> Icon*</label>
                                    <input type="file" class="video-input" style="margin-top: 5px;">
                                </div>



                        </form>
                    </div>
                    <div class="button-section">
                        <button type="submit" class="save-btn">Save</button>
                    </div>
                </div>


                {{-- 5th section --}}
                {{-- <div id="Horror1" class="section-tabcontent">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td> <img class="icon-logo"
                                        src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                                        alt="Logo"></td>
                                <td>Producer</td>
                                <td>Actor</td>
                                <td>
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

            </section>
        </main>
    </div>



    <script src="{{ asset('js\sectionpage.js') }}" defer></script>
@endsection
