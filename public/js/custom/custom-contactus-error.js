document.addEventListener('DOMContentLoaded', function () {

    const nameInput = document.getElementById('contactus-name');
    const phoneInput = document.getElementById('contactus-phone');
    const emailInput = document.getElementById('contactus-email');
    const messageInput = document.getElementById('contactus-message');

    
    const nameRequiredMessage = document.getElementById('contactus-name-required');
    const phoneRequiredMessage = document.getElementById('contactus-phone-required');
    const emailRequiredMessage = document.getElementById('contactus-email-required');

    const phoneErrorMessage = document.getElementById('contactus-phone-error');
    const emailErrorMessage = document.getElementById('contactus-email-error');

    function validateRequired(input, errorMessage) 
    {
        if (input.value.trim() === '') {
            errorMessage.style.display = 'block';
            return false;
        } 
        else 
        {
            errorMessage.style.display = 'none';
            return true;
        }
    }

    phoneInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
        
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

    nameInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
    });

    phoneInput.addEventListener('input', function () {
        validateRequired(phoneInput, phoneRequiredMessage);
    });

    emailInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
        validateRequired(phoneInput, phoneRequiredMessage);
        validateRequired(emailInput, emailRequiredMessage);

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
    })

    messageInput.addEventListener('input', function () {
        validateRequired(nameInput, nameRequiredMessage);
        validateRequired(phoneInput, phoneRequiredMessage);
        validateRequired(emailInput, emailRequiredMessage);
    })

});