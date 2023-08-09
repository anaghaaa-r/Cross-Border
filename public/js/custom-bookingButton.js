// reCaptcha
var bookingButtonCaptchaVerified = false;
var onloadCallback = function () {
    grecaptcha.render('button_captcha_element', {
        'sitekey': '6Le8xnAnAAAAANAd99BauKyWtUillULGjrxX5asd',
        'callback': function (response) {
            bookingButtonCaptchaVerified = true;
        }
    });
};


// book now button preloader and alert

document.addEventListener('DOMContentLoaded', function () {
    const bookingForm = document.getElementById('bookingButtonForm');
    const popup = document.getElementById('signUp-popup');
    const overlay = document.getElementById('body-overlay');

    bookingForm.addEventListener('submit', function (event) {
        const form = event.target;
        event.preventDefault();
        if (bookingButtonCaptchaVerified) {
            const preloader = document.getElementById('preloader');
            const recaptchaResponse = grecaptcha.getResponse();
            console.log("buttonCap: ", recaptchaResponse)

            if (!recaptchaResponse) {
                alert("Please verify that you are not a robot.");
                return;
            }


            preloader.style.display = 'block';
            popup.style.display = 'none';
            overlay.style.display = 'none';

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

                    if (data.status == true) {
                        alert(data.message);
                        location.reload();
                        grecaptcha.reset();
                    }
                    else {
                        alert(data.message);
                        location.reload();
                        grecaptcha.reset();
                    }
                })
                .catch((error) => {
                    preloader.style.display = 'none';
                    alert("An error occured. Please try again later.");
                    console.log("Error: ", error);
                    location.reload();
                    grecaptcha.reset();
                })
        }

    })

})