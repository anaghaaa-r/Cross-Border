let csrfToken;

document.addEventListener('DOMContentLoaded', function () {
    csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    window.openDeleteModal = function (dealId, dealPlace) {
        document.getElementById('dealId').innerText = dealId;
        document.getElementById('dealPlace').innerText = dealPlace
        $('#deleteModal').modal('show');
    };

    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        const dealId = document.getElementById('dealId').innerText;

        fetch(`deal/${dealId}`, {
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