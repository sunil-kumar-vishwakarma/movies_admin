@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="video-details-container">
        <div class="image-card">
            <h3>Login Page Image</h3>
            <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                alt="Image" class="card-image">
            <label for="file-upload" class="upload-icon">
                <i class="fa fa-cloud-upload"></i>
            </label>
            <input type="file" id="file-upload" class="file-input" accept="image/*">
            <p>Size : 2640 x 3960 pixels</p>
        </div>
        </div>

        <div class="video-details-container">
            <h3 class="default-image">By Default Image</h3>
            <div class="input-grid3">
                <div class="image-card">
                    <h3>Profile Image*</h3>
                    <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                        alt="Image" class="card-image">
                    <label for="file-upload" class="upload-icon" id="upload-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </label>
                    <input type="file" id="file-upload" class="file-input" accept="image/*">
                </div>
                <div class="image-card">
                    <h3>Normal Image*</h3>
                    <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                        alt="Image" class="card-image">
                    <label for="file-upload" class="upload-icon" id="upload-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </label>
                    <input type="file" id="file-upload" class="file-input" accept="image/*">
                </div>
                <div class="image-card">
                    <h3>Portrait Image*</h3>
                    <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                        alt="Image" class="card-image">
                    <label for="file-upload" class="upload-icon" id="upload-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </label>
                    <input type="file" id="file-upload" class="file-input" accept="image/*">
                </div>
                <div class="image-card">
                    <h3>Landscape Image*</h3>
                    <img src="https://img.freepik.com/premium-vector/beauty-care-logo-template-with-multiple-gradient-color_302761-381.jpg?semt=ais_hybrid"
                        alt="Image" class="card-image">
                    <label for="file-upload" class="upload-icon" id="upload-icon">
                        <i class="fa fa-cloud-upload"></i>
                    </label>
                    <input type="file" id="file-upload" class="file-input" accept="image/*">
                </div>
            </div>
        </div>


    </div>
@endsection
