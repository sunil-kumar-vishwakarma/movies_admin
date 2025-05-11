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
                @foreach($params as $rows)
                <tr>
                    <td>{{$rows->id}}</td>
                    <td>{{$rows->name}}</td>
                    <td>${{$rows->price}}</td>
                    <td>{{$rows->duration}}</td>
                    <td>
                        <button id="open-edit-modal" class="btn btn-sm btn-primary edit-btn" 
                                data-id="{{ $rows->id }}" 
                                data-name="{{ $rows->name }}"
                                data-price="{{ $rows->price}}" data-duration="{{ $rows->duration}}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button id="open-delete-modal" class="btn btn-sm btn-danger delete-btn" 
                                data-id="{{ $rows->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                        <!-- <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button> -->
                    </td>
                </tr>
                @endforeach
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
            <form id="add-form" enctype="multipart/form-data">
            @csrf
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
                    <input type="date" id="duration" name="duration" placeholder="HHH:mm:ss" required>
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
                    <input type="text" id="edit-name" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-price">Price</label>
                    <input type="number" id="edit-price" name="price" step="0.01" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="edit-duration">Duration</label>
                    <input type="text" id="edit-duration" name="duration" placeholder="HHH:mm:ss" required>
                    <input type="hidden" id="edit-id" name="id" placeholder="Enter Name" required>
           
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
                 <form id="delete-form">
            <input type="hidden" id="delete-id" name="id">
                <h2>Delete Package</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="submit" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
$('#add-form').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: "{{ route('admin.subscription.package.store') }}",
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
        $('#edit-price').val($(this).data('price'));
        $('#edit-duration').val($(this).data('duration'));

       
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
        url: '/admin/subscription/package/update/' + id,
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

// Submit Delete
$('#delete-form').submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    let id = $('#delete-id').val();
console.log(id);
    $.ajax({
        url: '/admin/subscription/package/destroy/' + id,
        type: 'DELETE',
       
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            if (res.success) {
                $('#delete-form')[0].reset();
                location.reload();
                $('#delete-modal').modal('hide');
            } else {
                alert('Delete failed');
            }
        },
        error: function (err) {
            console.error(err);
            alert('Error deleting item');
        }
    });
});



});
</script>

@endsection
