@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Coupons..." id="search-input">
            </div>
            <!-- Other sort containers -->
        </div>
        <div class="table-container">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Coupon Code</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Video</th>
                        <th>Price</th>
                        <th>Transaction Id</th>
                        <th>Transaction Date</th>
                        <th>Expiry Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows -->
                    <tr>
                        <td>1</td>
                        <td>COUPON001</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>1234567890</td>
                        <td>Video123</td>
                        <td>$19.99</td>
                        <td>TXN123456</td>
                        <td>2023-04-01</td>
                        <td>2023-12-31</td>
                        <td>
                            <button class="status-btn status-show">Active</button>
                        </td>
                        <td>
                            <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
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

    <!-- Delete Modal -->
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete Transaction</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
