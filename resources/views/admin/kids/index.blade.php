@extends('admin.layout')

@section('content')
<div class="container">
    <div class="add-button mb-3">
        <a href="{{ route('admin.kids.add') }}">
            <button class="add-btn"><i class="fas fa-plus"></i> Add</button>

        </a>
    </div>

    <div class="search-sort">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search TV Shows..." id="search-input">
        </div>

        <div class="sort-container">
            <select class="sort-select">
                <option value="all">All Type</option>
                <option value="tvshow">TV Show</option>
            </select>
        </div>

        <div class="sort-container">
            <select class="sort-select">
                <option value="all">All TV Show</option>
                <option value="rent">Rent TV Show</option>
            </select>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Full Name</th>
                <th>Type</th>
                <th>Episodes</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($kids as $rows)
                <tr>
                    <td>{{$rows->id}}</td>
                    <td>

                    @if($rows->thumbnail_image)
                    
                    <img src="{{ asset('/' . $rows->thumbnail_image) }}" width="60" alt="Image">
                @else
                <img class="icon-logo"
                                src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                                alt="Logo">
                @endif

                         </td>
                    <td>{{$rows->producer}}</td>
                    <td>{{$rows->type}}</td>
                    <td>
                        <a href="{{ route('admin.kids.list') }}" class="episode-btn">Episode List
                        </a>
                    </td>
                    <td>
                        <button class="status-btn status-show">Show</button>
                    </td>
                    <td>
                        <a href="{{ route('admin.kids.edit') }}">
                            <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        </a>

                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach

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

<!-- Delete Modal -->
<div class="modal" id="delete-modal">
    <div class="modal-content">
        <span class="close" id="close-delete-modal">&times;</span>
        <div class="delete-content">
            <h2>Delete TV Show</h2>
            <p>Are you sure you want to delete this?</p>
            <div class="button-group">
                <button type="button" class="submit-btn delete-confirm">Confirm</button>
                <button type="button" class="no-btn delete-cancel">No</button>
            </div>
        </div>
    </div>
</div>
@endsection
