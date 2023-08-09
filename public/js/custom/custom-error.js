document.addEventListener('DOMContentLoaded', function () {

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const messageInput = document.getElementById('message');
    
    const nameRequiredMessage = document.getElementById('name-required');
    const emailRequiredMessage = document.getElementById('email-required');
    const phoneRequiredMessage = document.getElementById('phone-required');

    const emailErrorMessage = document.getElementById('email-error');
    const phoneErrorMessage = document.getElementById('phone-error');

    function validateRequired(input, errorMessage)
    {
        if(input.value.trim() === '')
        {
            errorMessage.style.display = 'block';
            return false;
        }
        else
        {
            errorMessage.style.display = 'none';
            return true;
        }
    }

    emailInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage)

        const email = emailInput.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(!email.match(emailRegex))
        {
            emailErrorMessage.style.display = 'block';
        }
        else
        {
            emailErrorMessage.style.display = 'none';
        }
    });

    nameInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
    });

    emailInput.addEventListener('input', function () {
        validateRequired(emailInput, emailRequiredMessage);
    });

    phoneInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
        validateRequired(emailInput, emailRequiredMessage);
        validateRequired(phoneInput, phoneRequiredMessage);

        const phone = phoneInput.value.trim();
        const phoneRegex = /^\d{10}$/;
        if(!phone.match(phoneRegex))
        {
            phoneErrorMessage.style.display = 'block';
        }
        else
        {
            phoneErrorMessage.style.display = 'none';
        }
    });

    messageInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
        validateRequired(phoneInput, phoneRequiredMessage);
        validateRequired(emailInput, emailRequiredMessage);
    });

});