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
                @foreach($rentprice as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->price}}</td>
                    <td>
                    <button id="open-edit-modal" class="btn btn-sm btn-primary edit-btn" 
                                data-id="{{ $row->id }}" 
                                data-price="{{ $row->price }}"
                                data-android_product_package="{{ $row->android_product_package}}" data-ios_product_package="{{ $row->ios_product_package }}" data-web_price_id="{{ $row->web_price_id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button id="open-delete-modal" class="btn btn-sm btn-danger delete-btn" 
                                data-id="{{ $row->id }}">
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
            <h2>Add New Price</h2>
            <form id="add-form" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="android-package">Android Product Package</label>
                    <input type="text" id="android-package" name="android_product_package" placeholder="Enter Android Product Package" required>
                </div>
                <div class="form-group">
                    <label for="ios-package">iOS Product Package</label>
                    <input type="text" id="ios-package" name="ios_product_package" placeholder="Enter iOS Product Package" required>
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
                    <input type="text" id="edit-price" name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="android-package">Android Product Package</label>
                    <input type="text" id="android_product_package" name="android_product_package" placeholder="Enter Android Product Package" required>
                </div>
                <div class="form-group">
                    <label for="ios-package">iOS Product Package</label>
                    <input type="text" id="ios_product_package" name="ios_product_package" placeholder="Enter iOS Product Package" required>
                </div>
                <div class="form-group">
                    <label for="web-price-id">Web Price Id (For Stripe Only)</label>
                    <input type="text" id="web_price_id" name="web_price_id" placeholder="Enter Web Price Id" required>
                </div>
                <input type="hidden" id="edit-id" name="id" placeholder="Enter Name" required>
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
                <h2>Delete Item</h2>
                <p>Are you sure you want to delete this ?</p>
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
    url: "{{ route('admin.rent-price.store') }}",
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
    // $('#price').val($(this).data('price'));
    $('#edit-price').val($(this).data('price'));
    $('#android_product_package').val($(this).data('android_product_package'));
    $('#ios_product_package').val($(this).data('ios_product_package'));
    $('#web_price_id').val($(this).data('web_price_id'));
    // $('#edit-personal_info').val($(this).data('personal_info'));
    // let imagePath = "{{ asset('/') }}" + $(this).data('image');
    // $('#edit-preview').attr('src', imagePath);
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
    url: '/admin/rent-price/update/' + id,
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
        url: '/admin/rent-price/delete/' + id,
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