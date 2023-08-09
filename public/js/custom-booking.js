
// reCaptcha
var onloadCallback = function () {
    grecaptcha.render('booknow_captcha_element', {
        'sitekey': '6Le8xnAnAAAAANAd99BauKyWtUillULGjrxX5asd'
    });
};


// book now preloader and alert

document.addEventListener('DOMContentLoaded', function () {
    const bookingForm = document.getElementById('bookingForm');

    bookingForm.addEventListener('submit', function (event) {
        const form = event.target;
        if (form.id === "bookingForm") 
        {
            event.preventDefault();
            const preloader = document.getElementById('preloader');
            const recaptchaResponse = grecaptcha.getResponse();

            if (!recaptchaResponse) {
                alert("Please verify that you are not a robot.");
                return;
            }

            preloader.style.display = 'block';

            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                }
            })

                .then((response) => response.json())
                .then((data) => {
                    preloader.style.display = 'none';
                    
                    if (data.status == true) 
                    {
                        alert(data.message);
                        form.reset();
                        grecaptcha.reset();
                    }
                    else
                    {
                        alert(data.message);
                        grecaptcha.reset();
                    }
                })
                .catch((error) => {
                    preloader.style.display = 'none';
                    alert("An error occured. Please try again later.");
                    console.log("Error: ", error)
                    grecaptcha.reset();
                })
        }
    })

})