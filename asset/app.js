let sidebar = document.querySelector('.sidebat-container'); 
let sidebarBtn = document.querySelector('.sidebar-bar'); 
let navBarBtn = document.querySelector('.fa-bar'); 
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
    newArr[0].style.backgroundColor = '#00493E';
    newArr[0].style.color = '#fff';
}

const removebg = () => {
    newArr.forEach(imgItem => {
        imgItem.style.backgroundColor = '';
        imgItem.style.color = '#000';
    });
}

const updateBgAndImage = (index) => {
    removebg();

    newArr[index].style.backgroundColor = '#00493E';
    newArr[index].style.color = '#fff';

    if (index === 0) {
        setNewImg.src = 'https://careem-public-web-media.imgix.net/02_Confirm_your_payment_2x_f25ec2ab76.png';
    } else if (index === 1) {
        setNewImg.src = 'https://careem-public-web-media.imgix.net/01_Tap_on_careem_plus_2x_8d099410a7.png';
    } else if (index === 2) {
        setNewImg.src = 'https://careem-public-web-media.imgix.net/03_You_re_are_now_subscribed_2x_0878968a44.png';
    } else {
        setNewImg.src = 'https://careem-public-web-media.imgix.net/default_image.png'; // Default image
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