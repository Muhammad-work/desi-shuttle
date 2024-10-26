let sidebar = document.querySelector('.sidebat-container');
let sidebatBtn = document.querySelector('.sidebar-bar');
let navBarBtn = document.querySelector('.fa-bar');

let setNewImg = document.querySelector('#setNewImg');


    
navBarBtn.addEventListener('click',()=>{
   sidebar.style.transform = 'translateX(0px)' ; 
});

sidebatBtn.addEventListener('click',()=>{
   sidebar.style.transform = 'translateX(-100%)' ; 
});


let imgCountElements = document.querySelectorAll('#img-count');

let newArr = Array.from(imgCountElements);

if (newArr.length > 0) {
    newArr[0].style.backgroundColor = '#00493E';
    newArr[0].style.color = '#fff';
}

const removebg = () => {
    newArr.forEach(imgItem => {
        imgItem.style.backgroundColor = ''; 
        imgItem.style.color = '#fff'; 
        imgItem.style.color = 'balck'; 
    });
}

const changeBgColor = () => {
    let currentIndex = 0; 
    setInterval(() => {
        
       removebg();
       
       if (newArr.length > 0) {
          newArr[currentIndex].style.backgroundColor = '#00493E'; 
          newArr[currentIndex].style.color = '#fff'; 
          
         //  newArr[currentIndex].src = 'https://careem-public-web-media.imgix.net/02_Confirm_your_payment_2x_f25ec2ab76.png'; 
          currentIndex = (currentIndex + 1) % newArr.length; 

          if (newArr.length  > 0 || newArr.length <= 1) {
            console.log('jo');
            
          }
         }
      }, 2000); 
}

changeBgColor();

// const stopBgColor = () =>{
//    newArr.forEach((imgItem)=>{
//       imgItem.addEventListener('mouseover',(e)=>{
//        let targer = e.target;
//         targer.style.backgroundColor='red';
//       })
     
//    })
  
// }
// stopBgColor();

const addBgColor = () =>{
    newArr.forEach((imgItem)=>{
       imgItem.addEventListener('click',(e)=>{
        let targetBtn = e.target;
        targetBtn[0] = setNewImg;
        targetBtn[1] = setNewImg.src='https://careem-public-web-media.imgix.net/02_Confirm_your_payment_2x_f25ec2ab76.png';
        targetBtn[2] = setNewImg.src='https://careem-public-web-media.imgix.net/03_You_re_are_now_subscribed_2x_0878968a44.png';
        
       })
      
    })
   
}
addBgColor();