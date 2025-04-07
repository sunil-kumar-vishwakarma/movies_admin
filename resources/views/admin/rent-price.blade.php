@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Rent Price..." id="search-input">
            </div>
            <div class="add-container">
                <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>9</td>
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
            <h2>Add New Price</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="android-package">Android Product Package</label>
                    <input type="text" id="android-package" name="android_package" placeholder="Enter Android Product Package" required>
                </div>
                <div class="form-group">
                    <label for="ios-package">iOS Product Package</label>
                    <input type="text" id="ios-package" name="ios_package" placeholder="Enter iOS Product Package" required>
                </div>
                <div class="form-group">
                    <label for="web-price-id">Web Price Id (For Stripe Only)</label>
                    <input type="text" id="web-price-id" name="web_price_id" placeholder="Enter Web Price Id" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Price</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="android-package">Android Product Package</label>
                    <input type="text" id="android-package" name="android_package" placeholder="Enter Android Product Package" required>
                </div>
                <div class="form-group">
                    <label for="ios-package">iOS Product Package</label>
                    <input type="text" id="ios-package" name="ios_package" placeholder="Enter iOS Product Package" required>
                </div>
                <div class="form-group">
                    <label for="web-price-id">Web Price Id (For Stripe Only)</label>
                    <input type="text" id="web-price-id" name="web_price_id" placeholder="Enter Web Price Id" required>
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
                <h2>Delete Item</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
