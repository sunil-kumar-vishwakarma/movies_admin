@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Coupon..." id="search-input">
            </div>
            <div class="add-container">
                <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Unique Id</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Amount Type</th>
                    <th>Price</th>
                    <th>Is Use</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>UID001</td>
                    <td>Product Name</td>
                    <td>2023-01-01</td>
                    <td>2023-12-31</td>
                    <td>Fixed</td>
                    <td>$99.99</td>
                    <td>Once</td>
                    <td>
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
            <h2>Add New Entry</h2>
            <form id="add-form">
                <div class="form-scroll-container">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="amount-type">Is Use</label>
                        <select id="amount-type" name="amount_type" required>
                            <option value="Fixed">All</option>
                            <option value="Variable">Once</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start-date">Start Date</label>
                        <input type="date" id="start-date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date</label>
                        <input type="date" id="end-date" name="end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="amount-type">Amount Type</label>
                        <select id="amount-type" name="amount_type" required>
                            <option value="Fixed">Price</option>
                            <option value="Variable">Percentage</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price/Percentage</label>
                        <input type="number" id="price" name="price" placeholder="Enter Price/Percentage" required>
                    </div>

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
                <h2>Delete Entry</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
