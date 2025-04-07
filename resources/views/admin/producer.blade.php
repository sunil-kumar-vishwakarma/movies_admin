@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Producer..." id="search-input">
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
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
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
                    <td>Producer</td>
                    <td>producer@gmail.com</td>
                    <td>123456789</td>

                    <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Producer</td>
                    <td>Producer</td>
                    <td>producer@gmail.com</td>
                    <td>123456789</td>

                    <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Producer</td>
                    <td>Producer</td>
                    <td>producer@gmail.com</td>
                    <td>123456789</td>

                    <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td> <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo"></td>
                    <td>Producer</td>
                    <td>Producer</td>
                    <td>producer@gmail.com</td>
                    <td>123456789</td>

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
            <h2>Add New Producer</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image"  required>
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

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit User</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-image">Image</label>
                    <input type="file" id="edit-image" name="edit_image">
                </div>
                <div class="form-group">
                    <label for="edit-user-name">User Name</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-name">Full Name</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-email">Email</label>
                    <input type="email" id="edit-email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="edit-mobile">Mobile</label>
                    <input type="number" id="mobile" name="mobile" placeholder="Enter Mobile" required>
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
                <h2>Delete Producer</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
