@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

<link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<style>

form.sign-up-form {
    opacity: 1!important;
    z-index: 1;
}
</style>

    <div class="profile">
      <div id="updatePopup" class="profile-popup"><i class="fas fa-check-circle"></i>
        Profile updated successfully!</div>
        <form action="{{ route('user.profile.update', $userdata->id) }}" class="sign-up-forms" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div class="profile-card">
            <div class="profile-pic">
                <div><img id="profileImage" src="/image/avtar.png" alt="Profile Picture"></div>
                <div><input type="file" id="fileInput" name="image" accept="image/*">
                <!-- <button onclick="document.getElementById('fileInput').click()" class="select-btn">Select Image</button></div> -->
            </div>
            <div class="profile-info">
                <label>Full Name</label>
                <input type="text" value="{{$userdata->full_name}}">
                <label>Email</label>
                <input type="email" value="{{$userdata->email}}">
                <label>Mobile Number</label>
                <input type="tel" value="{{$userdata->phone}}">
                <button type="submit" class="update-btn">Update Profile</button>
            </div>
        </div>
      </form>
    </div>
    
    
    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profileImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

    </script>
