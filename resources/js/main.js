// Get the form element by its ID
const form = document.getElementById("myForm");

// Add event listener to form submission
form.addEventListener("submit", function (event) {
    event.preventDefault();

    // Perform any necessary client-side validation or processing
    // ...

    // Submit the form using AJAX
    const formData = new FormData(form);
    fetch(form.action, {
        method: form.method,
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            // Handle the response from the server if needed
            console.log(data);
        })
        .catch((error) => {
            // Handle any errors that occur during the submission
            console.error(error);
        });
});
