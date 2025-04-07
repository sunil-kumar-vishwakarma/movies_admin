@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Package..." id="search-input">
            </div>
            <div class="add-container">
                <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Package Name</td>
                    <td>$19.99</td>
                    <td>01:23:45</td>
                    <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
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
            <h2>Add New Package</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" step="0.01" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" id="duration" name="duration" placeholder="HHH:mm:ss" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Package</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-name">Name</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-price">Price</label>
                    <input type="number" id="edit-price" name="edit_price" step="0.01" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="edit-duration">Duration</label>
                    <input type="text" id="edit-duration" name="edit_duration" placeholder="HHH:mm:ss" required>
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
                <h2>Delete Package</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
