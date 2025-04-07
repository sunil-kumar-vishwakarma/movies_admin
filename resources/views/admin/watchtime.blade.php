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
                    <th>Movie Name</th>
                    <th>Producer Name</th>
                    <th>WatchTime</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Movie Title</td>
                    <td>Producer Name</td>
                    <td><i class="fas fa-clock"></i> 2h 15m</td>
                    <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-pencil-alt"></i></button>
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
            <h2>Edit Watch Time</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-movie-name">Movie Name</label>
                    <input type="text" id="edit-movie-name" name="edit_movie_name" placeholder="Enter Movie Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-producer-name">Producer Name</label>
                    <input type="text" id="edit-producer-name" name="edit_producer_name" placeholder="Enter Producer Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-watchtime">Watch Time</label>
                    <input type="text" id="edit-watchtime" name="edit_watchtime" placeholder="Enter Watch Time" required>
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
                <h2>Delete Watch Time</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection
