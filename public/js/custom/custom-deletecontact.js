let csrfToken;

document.addEventListener('DOMContentLoaded', function () {
    csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    window.openDeleteModal = function (contactId) {
        document.getElementById('contactId').innerText = contactId;
        $('#deleteModal').modal('show');
    };

    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        const contactId = document.getElementById('contactId').innerText;

        fetch(`contact/${contactId}`, {
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