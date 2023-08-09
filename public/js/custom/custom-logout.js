// welcome message

document.addEventListener('DOMContentLoaded', function () {
    const username = localStorage.getItem('username');

    const welcomeMsgElement = document.getElementById('welcomemsg');

    if(username)
    {
        welcomeMsgElement.textContent = `Welcome ${username}`;
    }
    console.log(welcomeMsgElement)
})


// admin logout

document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault();
    fetch(event.target.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': event.target.querySelector('input[name="_token"]').value,
        }
    })
    .then((response) => response.json())
    .then((data) => 
    {
        if (data.status) 
        {
            localStorage.removeItem('username');
            window.location.href = 'admin';
        } 
        else 
        {
            alert(data.message);
        }
    })
    .catch((error) => 
    {
        alert("An error occurred. Please try again later.");
        console.log("Error: ", error)
    });
})

