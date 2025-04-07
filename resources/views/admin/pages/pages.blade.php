@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Pages..." id="search-input">
            </div>
        </div>
        <div class="section">
            <h3>Page Layout Setting</h3><br>
            <form id="section-add-form">
                <div class="section-form-row">
                    <div class="section-form">
                        <label for="title">Background Color*</label>
                        <div class="input-with-color">
                            <input type="text" id="title" name="title" required>
                            <input type="color" id="title-color-picker">
                        </div>
                    </div>
                    <div class="section-form">
                        <label for="short-title">Title Color*</label>
                        <div class="input-with-color">
                            <input type="text" id="short-title" name="short-title" required>
                            <input type="color" id="short-title-color-picker">
                        </div>
                    </div>
                </div>

                <div class="button-section">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>About Us</td>
                    <td>About Us</td>
                    <td>
                        <a href="{{ route('admin.pages.edit') }}">
                            <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href="#">
                            <button class="pages-view"><i class="fas fa-eye"></i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Privacy Policy</td>
                    <td>Privacy Policy</td>
                    <td>
                        <a href="{{ route('admin.pages.edit') }}">
                            <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href="#">
                            <button class="pages-view"><i class="fas fa-eye"></i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Refund Policy</td>
                    <td>Refund Policy</td>
                    <td>
                        <a href="{{ route('admin.pages.edit') }}">
                            <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href="#">
                            <button class="pages-view"><i class="fas fa-eye"></i></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Terms & Conditions</td>
                    <td>Terms & Conditions</td>
                    <td>
                        <a href="{{ route('admin.pages.edit') }}">
                            <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href="#">
                            <button class="pages-view"><i class="fas fa-eye"></i></button>
                        </a>
                    </td>
                </tr>


            </tbody>
        </table>
        <div class="pagination">
            <div class="pagination-control">
                <button class="prev"><i class="fas fa-chevron-left"></i></button>
                <span class="page-info">1</span>
                <button class="next"><i class="fas fa-chevron-right"></i></button>
            </div>

            <div class="entries-per-page">
                <label for="entries-select">Show</label>
                <select id="entries-select">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
                <label for="entries-select">entries</label>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal" id="add-modal">
        <div class="modal-content">
            <span class="close" id="close-add-modal">&times;</span>
            <h2>Add New Page</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="user-name">User Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number" id="mobile" name="mobile" placeholder="Enter Mobile" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete Page</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
    <style>
      .input-with-color {
    position: relative;
    display: flex;
    align-items: center;
}

.input-with-color input[type="text"] {
    width: 100%;
    padding: 8px 40px 8px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.input-with-color input[type="color"] {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 0;
}

    </style>
@endsection
