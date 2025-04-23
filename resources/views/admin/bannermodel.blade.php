@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="search-sort">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search Videos...">
            </div>

        </div>

        <main class="main-content">
            <section class="videos-list">
                <div class="videos-container">
                    <div class="add-banner-card">
                        <a href="#" class="add-video-btn" id="open-add-modal">
                            <span class="add-icon"><i class="fas fa-plus"></i></span>
                            <span class="add-text">Add New Banner</span>
                        </a>
                    </div>
                    @foreach($bannerModel as $rows)
                    <div class="video-card " id="banner-card">
                        <div class="video-image">
                            <div class="video-card-overlay">
                                <div class="video-card-icons">
                                    <button class="edit-btn" id="open-edit-modal" data-id="{{ $rows->id }}" 
                                data-image="{{ $rows->image}}" data-type="{{ $rows->type}}" data-upload_link="{{ $rows->upload_link}}"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" id="open-delete-modal" data-id="{{ $rows->id }}"><i class="fas fa-trash"></i></button>
                                </div>

                               

                            </div>
                            @if($rows->image)
                  
                                <img src="{{ asset('/' . $rows->image) }}" class="video-thumbnail">
                            @else
                            <img src="https://i0.wp.com/highschool.latimes.com/wp-content/uploads/2018/06/share-1.jpg?fit=1200%2C630&ssl=1"
                                alt="Thumbnail" class="video-thumbnail">
                            @endif

                            
                        </div>
                        <div class="video-info">
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
                        </div>
                    </div>
                    <div class="video-card " id="banner-card">
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
                            <button class="toggle-banner-btn">Show</button>
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
            <h2>Upload Banner</h2>
            <form id="add-form" enctype="multipart/form-data">
            @csrf
            
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="video-select" name="type" id="type">
                        <option>Select Type</option>
                        @foreach($categories as $rows)
                        <option value="{{$rows->name}}">{{$rows->name}}</option>

                        @endforeach
                        <!-- <option value="About us">About us</option>
                        <option value="Services">Services</option>
                        <option value="Portfolio">Portfolio</option>
                        <option value="Contact">Contact</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="user-name">Upload Link</label>
                    <input type="text" id="upload_link" name="upload_link" placeholder="Enter Upload Link" required>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit Banner</h2>
            <form id="edit-form">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" required>
                    <input type="hidden" id="edit-id" name="id" placeholder="Enter Name" required>                    <img id="edit-preview" src=" " style="max-width:100px; margin-top:10px;">
                </div>
                <div class="form-group">
                    <label class="input-label">Type</label>
                    <select class="video-select" name="type" id="type">
                        <option>Select Type</option>
                        @foreach($categories as $rows)
                        <option value="{{$rows->name}}">{{$rows->name}}</option>

                        @endforeach
                        <!-- <option value="About us">About us</option>
                        <option value="Services">Services</option>
                        <option value="Portfolio">Portfolio</option>
                        <option value="Contact">Contact</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="user-name">Upload Link</label>
                    <input type="text" id="upload_link" name="upload_link" placeholder="Enter Upload Link" required>
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
                <h2>Delete Banner</h2>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
$('#add-form').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: "{{ route('admin.bannermodel.store') }}",
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
        let type = $(this).data('type');
        $('#type').val(type);
        $('#upload_link').val($(this).data('upload_link'));
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
        url: '/admin/bannermodel/update/' + id,
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
        url: '/admin/cast/delete/' + id,
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
