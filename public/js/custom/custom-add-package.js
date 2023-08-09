
// book now preloader and alert

document.addEventListener('DOMContentLoaded', function () {
    const addPackageForm = document.getElementById('packageForm');

    addPackageForm.addEventListener('submit', function (event) {
        const form = event.target;
        if (form.id === "packageForm") 
        {
            event.preventDefault();
            const preloader = document.getElementById('preloader');

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
                        location.reload();
                    }
                    else
                    {
                        alert(data.message);
                    }
                })
                .catch((error) => {
                    preloader.style.display = 'none';
                    alert("An error occured. Please try again later.");
                    console.log("Error: ", error);
                })
        }
    })

})