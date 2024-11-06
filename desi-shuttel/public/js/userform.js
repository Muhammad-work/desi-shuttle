
document.getElementById('contact-form').addEventListener('submit', function(event) {
    let isValid = true;

    // Clear previous error messages
    document.getElementById('fullname-error').textContent = '';
    document.getElementById('email-error').textContent = '';
    document.getElementById('number-error').textContent = '';
    document.getElementById('pickup-error').textContent = '';
    document.getElementById('drop-error').textContent = '';

    // Validate Full Name
    const fullName = document.getElementById('fullname').value.trim();
    if (!fullName) {
        document.getElementById('fullname-error').textContent = 'Full Name is required.';
        isValid = false;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    if (!email) {
        document.getElementById('email-error').textContent = 'Email is required.';
        isValid = false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        document.getElementById('email-error').textContent = 'Email is invalid.';
        isValid = false;
    }

    // Validate Phone Number
    const number = document.getElementById('number').value.trim();
    if (!number) {
        document.getElementById('number-error').textContent = 'Phone Number is required.';
        isValid = false;
    } else if (!/^\d{10}$/.test(number)) { // Check if number is exactly 10 digits
        document.getElementById('number-error').textContent = 'Phone Number must be exactly 10 digits.';
        isValid = false;
    }

    // Validate Pickup Location
    const pickupLocation = document.getElementById('pickup-input').value.trim();
    if (!pickupLocation) {
        document.getElementById('pickup-error').textContent = 'Pickup Location is required.';
        isValid = false;
    }

    // Validate Drop Location
    const dropLocation = document.getElementById('drop').value.trim();
    if (!dropLocation) {
        document.getElementById('drop-error').textContent = 'Drop Location is required.';
        isValid = false;
    }

    // Prevent form submission if invalid
    if (!isValid) {
        event.preventDefault(); // Stop form submission
    }
});




const selectbox = document.getElementById('selectbox');
    const pickupInput = document.getElementById('pickup-input');

    // Add an event listener for when the user selects an option
    selectbox.addEventListener('change', () => {
        // Get the selected option's value
        const selectedValue = selectbox.value;

        // Set the input field's value to the selected option's value
        pickupInput.value = selectedValue;
    });