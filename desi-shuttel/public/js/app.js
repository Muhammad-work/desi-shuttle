let sidebar = document.querySelector('.sidebat-container');
let sidebarBtn = document.querySelector('.sidebar-bar');
let navBarBtn = document.querySelector('.fa-bars');
let setNewImg = document.querySelector('#setNewImg');

navBarBtn.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(0px)';
});

sidebarBtn.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(-100%)';
});

let imgCountElements = document.querySelectorAll('#img-count');
let newArr = Array.from(imgCountElements);

let currentIndex = 0;
let intervalId;

if (newArr.length > 0) {
    newArr[0].style.backgroundColor = '#296FCE';
    newArr[0].style.color = 'white';    
    newArr[1].style.backgroundColor = '#fff';
    newArr[1].style.color = '#000';    
    newArr[2].style.backgroundColor = '#fff';
    newArr[2].style.color = '#000';    
}

const removebg = () => {
    newArr.forEach(imgItem => {
        imgItem.style.backgroundColor = 'white'; 
        imgItem.style.color = '#000'; 
    });
}

const updateBgAndImage = (index) => {
    removebg();

    newArr[index].style.backgroundColor = '#296FCE'; 
    newArr[index].style.color = '#fff'; 

    if (index === 0) {
        setNewImg.src = 'img/Untitled-1.png ';
    } else if (index === 1) {
        setNewImg.src = 'img/Untitled-2.png';
    } else if (index === 2) {
        setNewImg.src = 'img/Untitled-111.png';
    } else {
        setNewImg.src = 'img/Untitled-1.png '; // Default image
    }
}

const changeBgColor = () => {
    intervalId = setInterval(() => {
        updateBgAndImage(currentIndex);
        currentIndex = (currentIndex + 1) % newArr.length;
    }, 2000);
}

const addBgColor = () => {
    newArr.forEach((imgItem, index) => {
        imgItem.addEventListener('click', () => {
            clearInterval(intervalId);
            currentIndex = index;
            updateBgAndImage(index);

            setTimeout(changeBgColor, 3000);
        });
    });
}

changeBgColor();
addBgColor();



let topQuestions = document.querySelectorAll('.top-question');
let dropDownBtns = document.querySelectorAll('.dropDownBtn');
let dropDownBtnArr = Array.from(dropDownBtns);
let topQuestionArr = Array.from(topQuestions);

dropDownBtnArr.forEach((dropDownBtn, index) => {
    dropDownBtn.addEventListener('click', (e) => {
        let question = topQuestionArr[index];
        
        if (question.style.display === 'block') {
            question.style.display = 'none';
            dropDownBtn.innerHTML = '<i class="fa-solid fa-plus"></i>'; 
        } else {
            question.style.display = 'block';
            dropDownBtn.innerHTML = '<i class="fa-solid fa-minus"></i>'; 
        }
    });
});





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