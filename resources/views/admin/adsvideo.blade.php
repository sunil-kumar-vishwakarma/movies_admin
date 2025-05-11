@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Ad Video..." id="search-input">
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Type</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                    <option value="Sports">Sports</option>
                </select>
            </div>
            <div class="sort-container">
                {{-- <label class="sort-label">Sort By:</label> --}}
                <select class="sort-select" id="sort-select">
                    <option value="all">All Video</option>
                    <option value="Rent">Rent Video</option>

                </select>
            </div>
        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="video-card add-video-card">
                        <a href="#" id="open-add-modal" class="add-video-btn">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Ad Video</span>
                        </a>

                    </div>
                    @foreach($AdsVideo as $rows)
                    <div class="video-card">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                <button class="edit-btn" id="open-edit-modal" data-id="{{ $rows->id }}"  data-adsname="{{ $rows->name }}" 
                                data-type="{{ $rows->type }}"
                                data-upload_video="{{ $rows->upload_video}}" data-category="{{ $rows->category }}" data-language="{{ $rows->language }}" data-thumbnail_image="{{ $rows->thumbnail_image }}" data-landscape_image="{{ $rows->landscape_image }}"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal" data-id="{{ $rows->id }}"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <!-- <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail"> -->
                                @if($rows->thumbnail_image)

                        <img src="{{ asset('/' . $rows->thumbnail_image) }}" class="video-thumbnail">
                    @else
                    <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                    alt="Thumbnail" class="video-thumbnail">
                    @endif

                        </div>
                        <div class="video-info">
                            <div class="video-title">{{$rows->name}}</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card ">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                        </div>
                        <div class="video-info">
                            <div class="video-title">News 24</div>
                            <button class="toggle-show-btn">Show</button>
                        </div>
                    </div> -->


                    <!-- Repeat the above video-card div for each video -->
                </div>
            </section>
        </main>
    </div>


    <!-- Add Modal -->
    <div class="modal" id="add-modal">
        <div class="modal-content">
            <span class="close" id="close-add-modal">&times;</span>
            <h2>Upload Video</h2>
            <form id="add-form" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="image">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="sort-select" id="sort-select" name="type">
                        <option value="all">All Type</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Horror">Horror</option>
                        <option value="Sports">Sports</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Upload Video</label>
                    <input type="file" id="upload_video" name="upload_video" required>
                </div>
                <div class="form-group">
                    <label for="user-name">Category</label>
                    <select class="sort-select" id="category" name="category">
                        <option value="all">All Type</option>
                        @foreach($category as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" id="category" name="category" required> -->
                </div>
                <div class="form-group">
                    <label for="user-name">Language</label>
                    <select class="sort-select" id="language" name="language">
                        <option value="all">All Type</option>
                        @foreach($language as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    <!-- <input type="text" id="language" name="language" required> -->
                </div>
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" id="thumbnail_image" name="thumbnail_image" required>
                </div>
                <div class="form-group">
                    <label for="image">Landscape Image</label>
                    <input type="file" id="landscape_image" name="landscape_image" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Video</h2>
            <form id="edit-form">
                <div class="form-group">
                <input type="text" class="form-control" id="adsname" name="name" required>
            </div>
            <input type="hidden" id="edit-id" name="id" placeholder="Enter Name" required>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="sort-select" id="type" name="type">
                        <option value="all">All Type</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Horror">Horror</option>
                        <option value="Sports">Sports</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Upload Video</label>
                    <input type="file" id="upload_video" name="upload_video">
                </div>
                <div class="form-group">
                    <label for="user-name">Category</label>
                    <select class="sort-select" id="category" name="category">
                        <option value="all">All Type</option>
                        @foreach($category as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" id="category" name="category" required> -->
                </div>
                <div class="form-group">
                    <label for="user-name">Language</label>
                    <select class="sort-select" id="language" name="language">
                        <option value="all">All Type</option>
                        @foreach($language as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    <!-- <input type="text" id="language" name="language" required> -->
                </div>
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" id="thumbnail_image" name="thumbnail_image">
                    <img id="edit-preview-thumbnail" src=" " style="max-width:70px; max-height:70px; margin-top:10px;">

                </div>
                <div class="form-group">
                    <label for="image">Landscape Image</label>
                    <input type="file" id="landscape_image" name="landscape_image">
                    <img id="edit-preview" src=" " style="max-width:70px; max-height:70px; margin-top:10px;">

                </div>

                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>
    </div>

    {{-- delete model --}}
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
            <form id="delete-form">
            <input type="hidden" id="delete-id" name="id">
                <h2>Delete Video</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
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
    url: "{{ route('admin.adsvideo.store') }}",
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
    let adsname = $(this).data('adsname');
    let type = $(this).data('type');
    let category = $(this).data('category');
    let language = $(this).data('language');
    let thumbnail_image = $(this).data('thumbnail_image');
    let landscape_image = $(this).data('landscape_image');

    $('#edit-id').val(id);
    $('#adsname').val(adsname);
    $('#type').val(type);
    $('#category').val(category);
    $('#language').val(language);

    // Set preview images
    let thumbnailPath = "{{ asset('/') }}" + thumbnail_image;
    $('#edit-preview-thumbnail').attr('src', thumbnailPath);

    let landscapePath = "{{ asset('/') }}" + landscape_image;
    $('#edit-preview').attr('src', landscapePath);

    // Open the modal
    $('#edit-modal').fadeIn();
});


// Submit Edit Form
$('#edit-form').submit(function (e) {
e.preventDefault();

let formData = new FormData(this);
let id = $('#edit-id').val();
console.log(formData);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    url: '/admin/adsvideo/update/' + id,
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
        url: '/admin/adsvideo/delete/' + id,
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