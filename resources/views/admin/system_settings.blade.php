@extends('admin.layout')

@section('content')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <div class="container">
        <h2>System Settings</h2>
        <hr>
        <div class="input-grid5">
             
                
            <details class="smooth-dropdown">
                <script>
                    @if(session('success'))
                        success("{{success}}");
                    @endif

                    @if(session('error'))
                        toastr.error("{{ session('error') }}");
                    @endif
                </script>
                
                <summary>
                    Clear Cache <i class="fas fa-chevron-down dropdown-icon"></i>
                </summary>
                <p>This means that the extra uploaded files, images, and videos in your system will be deleted.</p>
                <!-- <button type="button" onclick="alert('Clearing cache...')">Clear</button> -->
                
                  <button type="button" onclick="clear_cache()" class="btn btn-warning">Clear Cache</button>
                 

            </details>

            <details class="smooth-dropdown">
                <summary>
                    Backup Database <i class="fas fa-chevron-down dropdown-icon"></i>
                </summary>
                <p>Download the SQL file of the current database.</p>
                <!-- <button type="button" onclick="alert('Backing up database...')">Backup</button> -->
                <button type="button" onclick="downloads_sql()" class="btn btn-warning">Backup</button>
                 
                
            </details>

            <details class="smooth-dropdown">
                <summary>
                    Clean Database <i class="fas fa-chevron-down dropdown-icon"></i>
                </summary>
                <p>Delete all data in the database.</p>
                <button type="button"
                    onclick="confirm('Are you sure you want to delete all data in the database?') && alert('Cleaning database...')">Clear</button>
            </details>
        </div>
    </div>
<script>
    function clear_cache() {
    $("#dvloader").show();
    $.ajax({
        type: 'POST',
        url: '{{ route("admin.clear.cache") }}',
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: function(resp) {
            $("#dvloader").hide();
            if (resp.status === 'success') {
                toastr.success(resp.message);
            } else {
                toastr.error(resp.message);
            }
        },
        error: function(xhr) {
            $("#dvloader").hide();
            toastr.error('Something went wrong while clearing cache.');
        }
    });
}
</script>

<script>
    function downloads_sql() {
    $("#dvloader").show();
    $.ajax({
        type: 'get',
        url: '{{ route("system.setting.downloadsqlfile") }}',
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: function(resp) {
            $("#dvloader").hide();
            if (resp.status === 'success') {
                toastr.success(resp.message);
            } else {
                toastr.error(resp.message);
            }
        },
        error: function(xhr) {
            $("#dvloader").hide();
            toastr.error('Something went wrong while clearing cache.');
        }
    });
}
</script>

@endsection
