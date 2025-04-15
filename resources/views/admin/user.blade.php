@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <!-- <button class="add-btn" id="open-add-modal"><i class="fas fa-plus"></i> Add</button> -->
        </div>
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Users..." id="search-input">
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Today">Today</option>
                    <option value="Month">Month</option>
                    <option value="Year">Year</option>
                </select>
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Today">OTP</option>
                    <option value="Month">Google</option>
                    <option value="Year">Apple</option>
                    <option value="Year">Normal</option>
                </select>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Register Date</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $key=>$rows)
                <tr>
                    <td>{{$rows->id}}</td>
                    <td> @if($rows->image)
                  
                  <img src="{{ asset('/' . $rows->image) }}" width="60" alt="Image">
              @else
              <img class="icon-logo"
                            src="https://static.vecteezy.com/system/resources/thumbnails/018/930/460/small/instagram-logo-instagram-icon-transparent-free-png.png"
                            alt="Logo">
              @endif</td>
                    <td>{{$rows->user_name}}</td>
                    <td>{{$rows->email}}</td>
                    <td>{{$rows->phone}}</td>
                    <td>{{$rows->register_date}}</td>
                    <td>{{$rows->type}}</td>
                    <td>
                    <button id="open-edit-modal" class="btn btn-sm btn-primary edit-btn" 
                                data-id="{{ $rows->id }}" 
                                data-user_name="{{ $rows->user_name }}" data-full_name="{{ $rows->full_name}}" data-email="{{ $rows->email}}" data-phone="{{ $rows->phone}}"
                                data-image="{{ $rows->image}}" data-register_date="{{ $rows->register_date}}" data-type="{{ $rows->type}}">
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
            <h2>Add New User</h2>
            <form id="add-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number" id="mobile" name="mobile" placeholder="Enter Mobile" required>
                </div>
                <div class="form-group">
                    <label for="date">Register Date</label>
                    <input type="date" id="date" name="date" placeholder="Enter Register Date" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="Today">OTP</option>
                        <option value="Month">Google</option>
                        <option value="Year">Apple</option>
                        <option value="Year">Normal</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit User</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="edit-image">Image</label>
                    <input type="file" id="edit-image" name="image">
                    <img id="edit-preview" src=" " style="max-width:100px; margin-top:10px;">
                    <input type="hidden" id="edit-id" name="id" placeholder="Enter Name" required>
           

                </div>
                <div class="form-group">
                    <label for="edit-name">Full Name</label>
                    <input type="text" id="edit_full_name" name="full_name" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="edit-email">Email</label>
                    <input type="email" id="edit_email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="edit-mobile">Mobile</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Mobile" required>
                </div>
                <div class="form-group">
                    <label for="edit-date">Register Date</label>
                    <input type="date" id="date" name="register_date" placeholder="Enter Register Date" required>
                </div>
                <div class="form-group">
                    <label for="edit-type">Type</label>
                    <select id="edit-type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="OTP">OTP</option>
                        <option value="Google">Google</option>
                        <option value="Apple">Apple</option>
                        <option value="Normal">Normal</option>
                    </select>
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
                <h2>Delete User</h2>
                <input type="hidden" id="delete-id" name="id">
                <p>Are you sure you want to delete this ?</p>
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
$(document).ready(function () {

    // Open Edit Modal
    $('.edit-btn').click(function () {
        let id = $(this).data('id');
        $('#edit-id').val(id);
        $('#edit_user_name').val($(this).data('user_name'));
        $('#edit_full_name').val($(this).data('full_name'));
        $('#edit_email').val($(this).data('email'));
        $('#phone').val($(this).data('phone'));

        // $('#date').val($(this).data('register_date'));
        const date = $(this).data('register_date'); // Should be in YYYY-MM-DD
    $('#date').val(date);

//     const rawDate = $(this).data('register_date'); // "13-04-2025"
// const parts = rawDate.split('-'); // ["13", "04", "2025"]
// const formattedDate = `${parts[2]}-${parts[1]}-${parts[0]}`; // "2025-04-13"
// $('#date').val(formattedDate);

        $('#edit-type').val($(this).data('type'));
        // $('#phone').text($(this).data('phone'));
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
        url: '/admin/user/update/' + id,
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
        url: '/admin/user/destroy/' + id,
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
