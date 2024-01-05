// function Namevalidate(){
//     var fname = document.getElementById("fname").value;
//     if(fname.length >= 3 && fname.length <= 20){
//         // Add code to execute when the length of fname is between 3 and 20
//     } else {
//         document.getElementById("errorfname").innerHTML = "Invalid length";
//     }
//     // Add any additional conditions or functionality you need here
// }



// function Namevalidate() {
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }



//  document.getElementById('professionalForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Validate form fields here
    var firstName = document.getElementById('firstName').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (firstName.split(' ').length < 3) {
      alert('First name must have at least 3 words.');
      return;
    }

    if (email.indexOf('@') === -1) {
      alert('Email is not valid.');
      return;
    }

    document.getElementById('confirmPassword').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = this.value;
       
        if (password !== confirmPassword) {
           document.getElementById('passwordMatch').innerHTML = 'Passwords do not match';
        } else {
           document.getElementById('passwordMatch').innerHTML = '';
        }
    //    });validation passes, submit the form
    this.submit();
});


// function dispalyfirstname(){
//     var fname=document.getElementById("firstname").value;
//     var sname=document.getElementById("secondname").value;
//     document.getElementById("error_fname").innerHTML=fname;
//     document.getElementById("error_sname").innerHTML=sname;
//     document.getElementById("fullname").innerHTML=fname + " "+sname;

// }
// function Sum(){
//     var fname=parseInt(document.getElementById("firstname").value);
//     var sname=parseInt(document.getElementById("secondname").value);
//     var result=fname+sname;
//     document.getElementById("add").innerHTML=result;
    
// }
// function Sub(){
//     var fname=parseInt(document.getElementById("firstname").value);
//     var sname=parseInt(document.getElementById("secondname").value);
//     var result=fname-sname;
//     document.getElementById("sub").innerHTML=result;
    
// }
// function Div(){
//     var fname=parseInt(document.getElementById("firstname").value);
//     var sname=parseInt(document.getElementById("secondname").value);
//     var result=fname/sname;
//     document.getElementById("div").innerHTML=result;
    
// }
// function Mul(){
//     var fname=parseInt(document.getElementById("firstname").value);
//     var sname=parseInt(document.getElementById("secondname").value);
//     var result=fname*sname;
//     document.getElementById("mul").innerHTML=result;
    
// }
// function Checknumber(){
//     var num1=document.getElementById("num11").value;
//     var legaldigit= /^[0-9]+$/;
// if(!(legaldigit.test(num1))){
//     document.getElementById("error_num").innerHTML="invalid";

// }
// }