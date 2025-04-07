function openModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'block';
        setTimeout(() => modal.classList.add('show'), 10);
    }
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('show');
        setTimeout(() => modal.style.display = 'none', 200);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Handle opening modals dynamically
    document.querySelectorAll('[id^="open-"]').forEach(openBtn => {
        openBtn.addEventListener('click', function () {
            var modalId = openBtn.id.replace('open-', '');
            openModal(modalId);
        });
    });

    // Handle closing modals dynamically
    document.querySelectorAll('[id^="close-"]').forEach(closeBtn => {
        closeBtn.addEventListener('click', function () {
            var modal = closeBtn.closest('.modal');
            if (modal) closeModal(modal.id);
        });
    });

    // Handle closing delete modal when clicking "No"
    document.querySelectorAll('.delete-cancel').forEach(cancelBtn => {
        cancelBtn.addEventListener('click', function () {
            closeModal('delete-modal');
        });
    });

    // Optional: Close modal when clicking outside
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) closeModal(modal.id);
        });
    });
});
