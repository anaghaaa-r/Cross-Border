let csrfToken;

document.addEventListener('DOMContentLoaded', function () {
    csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    window.openDeleteModal = function (internationalId, internationalPlace) {
        document.getElementById('internationalId').innerText = internationalId;
        document.getElementById('internationalPlace').innerText = internationalPlace
        $('#deleteModal').modal('show');
    };

    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        const internationalId = document.getElementById('internationalId').innerText;

        fetch(`international/${internationalId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })

        .then((response) => response.json())
        .then((data) => {
            if(data.status)
            {
                alert(data.message);
                location.reload();
            }
            else
            {
                alert(data.message);
            }
        })
        .catch(error => {
            alert('An error occured. Please try again later');
            console.log("Error: ", error);
        })
    })
})