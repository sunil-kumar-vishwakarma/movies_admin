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
            @foreach($coupon as $key=>$row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>UID{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->start_date}}</td>
                    <td>{{$row->end_date}}</td>
                    <td>{{$row->amount_type}}</td>
                    <td>${{$row->price}}</td>
                    <td>{{$row->is_use}}</td>
                    <td>
                        <button class="delete-btn" id="open-delete-modal" data-id="{{ $row->id }}"><i class="fas fa-trash"></i></button>
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

    <!-- Add Modal -->
    <div class="modal" id="add-modal">
        <div class="modal-content">
            <span class="close" id="close-add-modal">&times;</span>
            <h2>Add New Entry</h2>
            <form id="add-form" enctype="multipart/form-data">
            @csrf
            
                <div class="form-scroll-container">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="amount-type">Is Use</label>
                        <select id="amount-type" name="is_use" required>
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
            <form id="delete-form">
            <input type="hidden" id="delete-id" name="id">
                <h2>Delete Entry</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="submit" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
$('#add-form').on('submit', function(e) {
e.preventDefault();

let formData = new FormData(this);

$.ajax({
    url: "{{ route('admin.coupon.add') }}",
    method: "POST",
    data: formData,
    contentType: false,
    processData: false,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(response) {
        $('#response-message').html('<p style="color:green;">Video Type created successfully!</p>');

        // Reset form
        $('#add-form')[0].reset();
        location.reload();
        // Close modal
        $('#add-modal').closeModal();
    },
    error: function(xhr) {
        if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            let errorHtml = '<ul>';
            $.each(errors, function(key, value) {
                errorHtml += '<li>' + value[0] + '</li>';
            });
            errorHtml += '</ul>';
            $('#response-message').html('<div style="color:red;">' + errorHtml + '</div>');
        } else {
            $('#response-message').html('<p style="color:red;">Something went wrong!</p>');
        }
    }
});
});
</script>


<script>
$(document).ready(function () {

// Open Edit Modal
$('.edit-btn').click(function () {
    let id = $(this).data('id');
    $('#edit-id').val(id);
    $('#edit-name').val($(this).data('name'));
    $('#edit-type').val($(this).data('type'));
    $('#edit-personal_info').val($(this).data('personal_info'));
    let imagePath = "{{ asset('/') }}" + $(this).data('image');
    $('#edit-preview').attr('src', imagePath);
    $('#editModal').modal('show');
});


// Submit Edit Form
$('#edit-form').submit(function (e) {
e.preventDefault();

let formData = new FormData(this);
let id = $('#edit-id').val();
// console.log(formData);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    url: '/admin/cast/update/' + id,
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function (res) {
        // $('#editModal').modal('hide');
        // location.reload();
        $('#edit-form')[0].reset();
        location.reload();
        // Close modal
        $('#editModal').closeModal();

    },
    error: function (err) {
        console.error(err);
        alert('Update failed');
    }
});
});


// Open Delete Modal
$('.delete-btn').click(function () {
$('#delete-id').val($(this).data('id')); // set hidden ID
$('#delete-modal').modal('show'); // show modal
});

// Cancel button
$('.delete-cancel, #close-delete-modal').click(function () {
$('#delete-modal').modal('hide');
});

$('#delete-form').submit(function (e) {
    e.preventDefault();

    let id = $('#delete-id').val(); // Ensure this field exists
    console.log('Deleting ID:', id);

    $.ajax({
        url: '/admin/coupon/delete/' + id,
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            if (res.success) {
                $('#delete-form')[0].reset();
                location.reload();
                $('#delete-modal').modal('hide');
                // $('#delete-form')[0].reset();
                // $('#delete-modal').modal('hide');
                location.reload();
            } else {
                alert(res.message || 'Delete failed');
            }
        },
        error: function (err) {
            console.error(err);
            alert('Error deleting coupon.');
        }
    });
});




});
</script>

@endsection