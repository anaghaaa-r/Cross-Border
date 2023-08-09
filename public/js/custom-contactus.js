
// reCaptcha
var contactUsCaptchaVerified = false;
var onloadCallback = function () {
    grecaptcha.render('contactus_captcha_element', {
        'sitekey': '6Le8xnAnAAAAANAd99BauKyWtUillULGjrxX5asd',
        'callback': function (response) {
            contactUsCaptchaVerified = true;
        }
    });
};


// contact us loading and alert

document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const form = event.target;
    if (contactUsCaptchaVerified) {
        const preloader = document.getElementById('preloader');
        const recaptchaResponse = grecaptcha.getResponse();
        console.log("Cap: ", recaptchaResponse)

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
                if (data.status == true) {
                    alert(data.message);
                    form.reset();
                    grecaptcha.reset();
                }
                else {
                    alert(data.message);
                    console.log("Error: ", data.error);
                    grecaptcha.reset();
                }
            })
            .catch((error) => {
                preloader.style.display = 'none';
                alert("An error occured. Please try again later.");
                console.log("Error: ", error);
                grecaptcha.reset();
            })
    }
})