emailjs.init("ga-CPsZKNp61WXV9s");

const sendBtn=document.querySelector('.send-btn');
const result =document.querySelector('.result');

sendBtn.addEventListener('click', sendEmail);

function sendEmal(){
    const to=document.getElementById("to").value;
    const subject=document.getElementById("subject").value;
    const message=document.getElementById("message");

    //Send the email using EmailJS
    emailjs.send("service_fikjwvd", "template_u05649h", {
        to_email:to,
        subject: subject,
        message: message
    }).then(function (){
        result.innerHTML="Email sent successfully!";
        result.style.opacity=1;
    }, function (error){
        result.innerHTML="Emil sending failed!";
        result.style.opacity=1;
        console.log(error);
    });
}