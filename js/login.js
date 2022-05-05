// let loginbutton = document.querySelector('.sign_btn');
// loginbutton.addEventListener('click',()=>{
//    document.querySelector('.myfooter .footer').style.display = "block";
// });

let signupbutton = document.getElementById('sendbtn');
console.log(signupbutton);
signupbutton.addEventListener('click',function(){
   alert("i am working")
})
// const signupform = document.querySelector('.main_form'),
//       errorTxt = document.querySelector('.errortxt');

// signupform.onsubmit = (e) =>{
//    e.preventDefault();
// }



// signupbutton.onclick = () =>{
//    let xls = new XMLHttpRequest();
//    xls.open("POST","signup.php", true);
//    xls.onload = () =>{
//       if(xls.readyState === XMLHttpRequest.DONE){
//          if(xls.status === 200){
//             let data = xls.response;
//             if(data === "success"){
//               // location.href = "index.html";
//               console.log(data);
//             } else {
//                errorTxt.textContent = data;
//                errorTxt.style.display = "block";
//             }
//          }
//       }
//    }

//    let formData = new FormData(signupform);
//    xls.send(formData);
// }