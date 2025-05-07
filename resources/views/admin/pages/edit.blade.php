@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="add-button mb-3">
            <a href="{{ route('admin.pages.pages') }}">
                <button class="back-btn" id="open-add-modal">
                    <i class="fas fa-arrow-left"></i> PAGES LIST
                </button>
            </a>
        </div>
        <form action="{{route('admin.pages.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" id="id" name="id" placeholder="Enter Title" required value="{{$params->id}}">
        <div class="video-details-container">
            <div class="input-grid4">
                <div class="filter-group">
                    <div class="input-row">
                        <div class="section-form">
                            <label for="Title">Title*</label>
                            <input type="text" id="title" name="title" placeholder="Enter Title" required value="{{$params->title}}">
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <div class="input-row">
                        <div class="section-form">
                            <label for="Title">Sub Title*</label>
                            <input type="text" id="subtitle" name="subtitle" placeholder="Enter Sub Title" value="{{$params->subtitle}}" required>
                        </div>
                    </div>
                </div>
                <div class="filter-group">
                    <div class="input-group">
                        <label class="input-label">Icon *</label>
                        <input type="file" class="video-input" name="icon" id="icon">
                        <img src="{{ asset('/' . $params->icon) }}" width="60" alt="Image">
                        <button class="Upload-btn"> Upload Icon</button>

                    </div>
                </div>
            </div>
            <div class="input-grid2">
                <div class="input-textarea">
                    <label for="description" class="input-textarea">Description*</label>
                    <textarea id="description" name="description" cols="10" rows="5">{{$params->description}}</textarea>
                </div>
            </div>
        </div>

        <div class="button-section">
            <button type="submit" class="save-btn">Update</button>
            <button class="delete-btn">Cancle</button>
        </div>

        </form>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: 300 // Yeh option directly nahi hota CKEditor me, isliye CSS lagayenge
            })
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
