document.addEventListener('DOMContentLoaded', function() {
    if(window.flash.success) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: window.flash.success,
            confirmButtonColor: '#45270D',
        });
    }

    if(window.flash.errors.length > 0) {
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            html: window.flash.errors.join('<br>'),
            confirmButtonColor: '#45270D',
        });
    }
});
