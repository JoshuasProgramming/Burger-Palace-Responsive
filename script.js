/**
 * Deleting a user's account
 */

//Grabbing the delete button from the index.php page => at the button of the form
const delete_btn = document.getElementById('delete_btn').addEventListener("click", (e)=>{
    //create a variable which is assigned a values from a prompt user input.
    let options = prompt("Are You Sure (Yes/No)?");

    //If user entered "Yes"...
    if(options == "Yes"){
        window.location.href = "delete.php";
        alert("Account Deleted");
        return;
    }
    //If user entered "No"...
    if(options == "No"){
        return;
    }

    //If user entered something other than "Yes" or "NO"...
    else{
        alert("Didn't work, Try Again");
        return;
    }
});


//Hamburger Menu

//Grabbing the hamburger image
const hamburger_image = document.getElementById('hamburger_image');


//Grabbing the popup section 
const popup = document.getElementById('popup');

//Grabbing the unordered list within the popup menu
const ham_ul = document.getElementById('ham_ul');

const close_popup = document.getElementById('close_popup');

//Function that'll enable the popup menu
function enableMenu(){
    popup.classList = [];
    popup.classList.add("popup");
    ham_ul.style.transform = "translate(0px,0px)";
    ham_ul.style.left = "0";
}

function disablemenu(){
    popup.classList = [];
    popup.classList.add("disabled");
    
}

//When the user presses the hamburger menu
hamburger_image.addEventListener("click",(e)=>{

    let x = popup.classList[0];
 
    if(x === "disabled"){
        enableMenu();
    }
})

close_popup.addEventListener("click", (e)=>{
    disablemenu();
});


const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const message = document.getElementById('message');

//Once the user presses a button...
const submit = document.getElementById('submit').addEventListener("click", (e)=>{
    //checks if all the fields are filled..
    if((firstname.value !== "") && (lastname.value !== "") && (email.value.value !== "") && (message.value !== "")){
        //.. If so send them to thank You page
        window.location.href = "thanksYouMessage.html";
    }

    //If all fields aren't filled...
    if(firstname.value == ""){
        firstname.placeholder = "ENTER FIRSTNAME";
        firstname.style.border = "5px solid red";
    } else {
        firstname.style.border = "3px solid black";
    }

    if(lastname.value == ""){
        lastname.placeholder = "ENTER LASTNAME";
        lastname.style.border = "5px solid red";
    } else {
        lastname.style.border = "3px solid black";
    }

    if(email.value == ""){
        email.placeholder = "ENTER EMAIL";
        email.style.border = "5px solid red";
    } else {
        email.style.border = "3px solid black";
    }

    if(message.value == ""){
        message.placeholder = "ENTER MESSAGE";
        message.style.border = "5px solid red";
    } else {
        message.style.border = "3px solid black";
    }
});

/**
 * Function to create the Google Map
 */

 function myMap(){
    //Map options
    let options = {
        zoom:15,
        center:new google.maps.LatLng(51.500250,-0.157400)
    }
        
    //New map
    let map = new google.maps.Map(document.getElementById('map'), options);
        
    //Add marker
    let marker = new google.maps.Marker({
    position:{lat:51.500250, lng:-0.157400},
    map:map
    });
}
