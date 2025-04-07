@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Producer..." id="search-input">
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Payment Environment</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>paypal</td>
                    <td>In active</td>
                    <td>Sandbox</td>

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


    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Payment</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-user-name"> Name</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-name">Status</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Status" required>
                </div>
                <div class="form-group">
                    <label for="edit-name">Payment Environment</label>
                    <input type="text" id="edit-name" name="edit_name" placeholder="Enter Payment Environment" required>
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
                <h2>Delete Payment</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
