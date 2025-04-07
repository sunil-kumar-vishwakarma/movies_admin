@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Cast..." id="search-input">
            </div>
            <div class="add-container">
                <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
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
            <h2>Add New Cast</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="actor">Actor</option>
                        <option value="director">Director</option>
                        <option value="writer">Writer</option>
                        <option value="producer">Producer</option>
                        <option value="actress">Actress</option>
                        <option value="cricketer">Cricketer</option>
                        <option value="dancer">Dancer</option>
                        <option value="journalist">Journalist</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="personal-info">Personal Info</label>
                    <textarea id="personal-info" name="personal_info" rows="4" placeholder="Enter personal information here..."
                        style="width: 100%;"></textarea>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Cast</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-name">Name</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-type">Type</label>
                    <select id="edit-type" name="edit_type" required>
                        <option value="">Select Type</option>
                        <option value="actor">Actor</option>
                        <option value="director">Director</option>
                        <option value="writer">Writer</option>
                        <option value="producer">Producer</option>
                        <option value="actress">Actress</option>
                        <option value="cricketer">Cricketer</option>
                        <option value="dancer">Dancer</option>
                        <option value="journalist">Journalist</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="edit-image">Image</label>
                    <input type="file" id="edit-image" name="edit_image">
                </div>
                <div class="form-group">
                    <label for="edit-personal-info">Personal Info</label>
                    <textarea id="edit-personal-info" name="edit_personal_info" rows="4"
                        placeholder="Enter personal information here..." style="width: 100%;"></textarea>
                </div>
                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete Cast</h2>
                <p>Are you sure you want to delete this cast member?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
