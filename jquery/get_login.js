function login() {
    // Get the values of username and password from the input fields
    const username = $('#username').val();
    const password = $('#password').val();
    
    // Log the username and password to the console
    console.log(username, password);
    
    // Show the login button and the spinner
    $('#btn-login').hide();
    $('#spinner').show();

    // Send an AJAX request to the login.php file
    $.ajax({
        url: '../functions/login.php',
        method: 'POST',
        data: {
            username: username,
            password: password
        },
        success: function(response) {
            // Handle the response from the server
            console.log(response);
            if (response === 'success') {
                // Redirect the user to the dashboard or any other page
                window.location.href = '../admin_order_ease/landing.php';
            } else {
                // Show an error message to the user
                $('#error-message').text('Invalid username or password');
            }
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.log(xhr.responseText);
        },
        complete: function() {
            // Hide the spinner and show the login button
            $('#spinner').hide();
            $('#btn-login').show();
        }
    });
}
