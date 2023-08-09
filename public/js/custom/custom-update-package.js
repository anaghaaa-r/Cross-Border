
// updating a package and preloader and alert


document.addEventListener('DOMContentLoaded', function () {
    const updateForm = document.getElementById('updateForm');
    

    updateForm.addEventListener('submit', function (event) {
        console.log("works");
        event.preventDefault();
        const form = event.target;
        if(form.id === "updateForm")
        {
            const preloader = document.getElementById('preloader');
            const updateModal = document.getElementById('updateModal');

            preloader.style.display = 'block';
            updateModal.style.display = 'none';

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

                    if(data.status == true)
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
                    alert('An error occured. Please try again later');
                    console.log('Error: ', error);
                })
        }
    })
})