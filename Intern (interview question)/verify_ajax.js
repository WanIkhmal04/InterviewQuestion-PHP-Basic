document.getElementById('submit').addEventListener('click', function() {
    const username = document.getElementById('username').value;
    const messageDiv = document.getElementById('message');

    // Clear previous messages
    messageDiv.innerHTML = '';

    // Check if the input is empty
    if (username.trim() === '') {
        alert('Error: Username cannot be empty');
        return;
    }

    // Create an AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'info.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Handle the response
    xhr.onload = function() {
        if (this.status === 200) {
            if (this.responseText === 'Verified') {
                messageDiv.innerHTML = '<span style="color: green;">Verified</span>';
            } else {
                messageDiv.innerHTML = '<span style="color: red;">Error: Username is wrong</span>';
            }
        } else {
            alert('Error: An error occurred during the request');
        }
    };

    // Send the request with the username
    xhr.send('username=' + encodeURIComponent(username));
});
