@extends('admin.layout')

@section('content')
    <div class="container">
        <h2>System Settings</h2>
        <hr>
        <div class="input-grid5">
            <details class="smooth-dropdown">
                <summary>
                    Clear Cache <i class="fas fa-chevron-down dropdown-icon"></i>
                </summary>
                <p>This means that the extra uploaded files, images, and videos in your system will be deleted.</p>
                <button type="button" onclick="alert('Clearing cache...')">Clear</button>
            </details>

            <details class="smooth-dropdown">
                <summary>
                    Backup Database <i class="fas fa-chevron-down dropdown-icon"></i>
                </summary>
                <p>Download the SQL file of the current database.</p>
                <button type="button" onclick="alert('Backing up database...')">Backup</button>
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
@endsection
