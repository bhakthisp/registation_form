$(document).ready(function () {
    // Alert on form submit
    $("#regForm").submit(function () {
        alert("Form submitted successfully!");
        return true; // continue submission
    });

    // Optional: fade-in the container
    $(".container").hide().fadeIn(600);
});

