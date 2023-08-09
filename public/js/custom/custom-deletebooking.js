let csrfToken;

document.addEventListener('DOMContentLoaded', function () {
    csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    window.openDeleteModal = function (bookingId) {
        document.getElementById('bookingId').innerText = bookingId;
        $('#deleteModal').modal('show');
    };

    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        const bookingId = document.getElementById('bookingId').innerText;

        fetch(`booking/${bookingId}`, {
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