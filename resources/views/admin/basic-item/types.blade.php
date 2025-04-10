@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button>
        </div>
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Type..." id="search-input">
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="video">Video</option>
                    <option value="show">Show</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="channel">Channel</option>
                    <option value="kids">Kids</option>
                </select>
            </div>
        </div>
        <table id="video-types-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $key=>$row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>  @if($row->images)
                  
                        <img src="{{ asset('/' . $row->images) }}" width="60" alt="Image">
                    @else
                        N/A
                    @endif</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->name}}</td>
                    
                    <td><button class="status-btn status-show">{{ $row->status ? 'Active' : 'Inactive' }}</button></td>
                    <td>
                        <button id="open-edit-modal" class="btn btn-sm btn-primary edit-btn" 
                                data-id="{{ $row->id }}" 
                                data-name="{{ $row->name }}"
                                data-status="{{ $row->status }}"
                                data-image="{{ $row->images }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button id="open-delete-modal" class="btn btn-sm btn-danger delete-btn" 
                                data-id="{{ $row->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>

                     <!-- <td>
                        <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                    </td> -->

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
            <h2>Add New Type</h2>
            
            <form id="add-form" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="images" name="images" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Type</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-image">Image</label>
                    <input type="file" id="edit-image" name="images">

                    <img id="edit-preview" src=" " style="max-width:100px; margin-top:10px;">

                </div>
                <div class="form-group">
                    <label for="edit-user-name">Name</label>
                    <input type="text" id="edit-name" name="name" placeholder="Enter Name" required>
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
                <h2>Delete Type</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="submit" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
<!-- <div class="modal" id="deleteModal">
    <div class="modal-content">
        <span class="close" id="close-delete-modal">&times;</span>
        <form id="delete-form">
            <input type="hidden" id="delete-id" name="id">
            <div class="delete-content">
                <h2>Delete Type</h2>
                <p>Are you sure you want to delete this?</p>
                <div class="button-group">
                    <button type="submit" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </form>
    </div>
</div> -->




    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
    $(document).ready(function () {
        $('#video-types-table').DataTable();
    });
</script>

<script>
$('#add-form').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: "{{ route('admin.basic-item.add') }}",
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
        $('#edit-status').val($(this).data('status'));
        let imagePath = "{{ asset('/') }}" + $(this).data('image');
        $('#edit-preview').attr('src', imagePath);
        $('#editModal').modal('show');
    });

    // Submit Edit Form
    // $('#edit-form').submit(function (e) {
    //     e.preventDefault();
    //     let formData = new FormData(this);
    //     let id = $('#edit-id').val();

    //     $.ajax({
    //         url: "{{ url('admin/types/update') }}/" + id, // dynamic URL with ID
    //         type: 'POST',
    //         data: formData,
    //         contentType: false,
    //         processData: false,
    //         headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //         success: function (res) {
    //             $('#editModal').modal('hide');
    //             location.reload();
    //         },
    //         error: function (err) {
    //             alert('Update failed');
    //         }
    //     });
    // });

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
        url: '/admin/types/update/' + id,
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



    // // Open Delete Modal
    // $('.delete-btn').click(function () {
    //     $('#delete-id').val($(this).data('id'));
    //     $('#deleteModal').modal('show');
    // });

    // // Submit Delete
    // $('#delete-form').submit(function (e) {
    //     e.preventDefault();
    //     let id = $('#delete-id').val();
    //     $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    //     $.ajax({
    //         url: '/admin/types/delete/' + id,
    //         type: 'DELETE',
            
    //         success: function (res) {
    //             $('#deleteModal').modal('hide');
    //             location.reload();
    //         },
    //         error: function (err) {
    //             alert('Delete failed');
    //         }
    //     });
    // });


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
        url: '/admin/types/delete/' + id,
        type: 'DELETE',
        // contentType: false,
        // processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            if (res.success) {
                $('#delete-form')[0].reset(); // index [0], not [2]
                location.reload();

                // Close modal (if using Bootstrap)
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
