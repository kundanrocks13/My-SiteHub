var modal = document.getElementById('myModal');
var spanclose = document.getElementsByClassName("close")[0];


//categories
var cat = document.getElementById('categories');
var div = document.getElementById('category-div');



feedback
var feedback = document.getElementById('feedback-div');
var feed = document.getElementById('feedback-button');

//About
var about = document.getElementById('about-div');
var about_btn = document.getElementById('about-button');



feed.onclick = function()
{
    div.style.display = "none";
    about.style.display = "none";
    feedback.style.display = "block";
    feed.style.borderBottom = "2px solid cornflowerblue";
    about_btn.style.borderBottom ="";
    cat.style.borderBottom = "";
}

about_btn.onclick = function()
{
    div.style.display = "none";
    feedback.style.display = "none";
    about.style.display = "block";
    about_btn.style.borderBottom = "2px solid cornflowerblue";
    cat.style.borderBottom="";
    feed.style.borderBottom ="";
}


cat.onclick = function(){
    feedback.style.display = "none";
    about.style.display = "none";
    div.style.display = "block";
    cat.style.borderBottom = "2px solid cornflowerblue";
    about_btn.style.borderBottom ="";
    feed.style.borderBottom = "";
}


function display()
{
    modal.style.display = "block";
}
spanclose.onclick = function(){
//    document.getElementById('first_name').style.border = "1px solid lightgray";
//    document.getElementById('first').style.color = "white";
//    document.getElementById('last_name').style.border = "1px solid lightgray";
//    document.getElementById('last').style.color = "white";
//    document.getElementById('emails').style.border = "1px solid lightgray";
//    document.getElementById('email').style.color = "white";
//    document.getElementById('passwords').style.border = "1px solid lightgray";
//    document.getElementById('password').style.color = "white";
      
    modal.style.display = "";
}
var date = new Date();
var n = date.toDateString();
document.getElementById('date').innerHTML = n;

//signup form validation 
function validate()
{   

    if( (document.forms["myForm"]["first"].value).length < 3) {
        document.getElementById('first').innerHTML = " First name Must be atleast 3 character";
        document.getElementById('first').style.color = "red";
        document.getElementById('first_name').style.border = "1px solid red";           
    }
    else {
        document.getElementById('first').style.color = "white";
        document.getElementById('first_name').style.border = "1px solid lightgray";
    }
    if( (document.forms["myForm"]["last"].value).length < 3){
        document.getElementById('last').innerHTML = " Last name Must be atleast 3 character";
        document.getElementById('last').style.color = "red";
        document.getElementById('last_name').style.border = "1px solid red";
                    
    }
    else{
        document.getElementById('last').style.color = "white";
        document.getElementById('last_name').style.border = "1px solid lightgray";
    }
    
    if( (document.forms["myForm"]["pwd"].value).length < 6){
        document.getElementById('password').innerHTML = " password name Must be atleast 6 character";
        document.getElementById('password').style.color = "red";
        document.getElementById('passwords').style.border = "1px solid red";
                    
    }
    else{
        document.getElementById('password').style.color = "white";
        document.getElementById('passwords').style.border = "1px solid lightgray";
    }
   
}

//signup validation end 
