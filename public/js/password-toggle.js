document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.toggle-password');
    const input = document.querySelector('#password');

    if(toggle && input) {
        toggle.addEventListener('click', function () {
            if (input.type === 'password') {
                input.type = 'text';
                toggle.querySelector('i').classList.remove('bi-eye-slash');
                toggle.querySelector('i').classList.add('bi-eye');
            } else {
                input.type = 'password';
                toggle.querySelector('i').classList.remove('bi-eye');
                toggle.querySelector('i').classList.add('bi-eye-slash');
            }
        });
    }
});
