
///Get the date time and display proper message based on time
const date = new Date();
var introMessage = document.getElementById("introMessage");

if(date.getHours() == "0" || date.getHours() < "12"){
    introMessage.innerHTML = "Good Morning";
}
else if(date.getHours() == "12" || date.getHours() < "17"){
    introMessage.innerHTML = "Good Afternoon";
}
else{
    introMessage.innerHTML = "Good Evening";
}



//Updating profile pic 

/*
$(document).ready(function()
{
    $("#image").click(function(e){
        e.preventDefault();

        $.get($(this).attr("href"),function(data){
            $("#image").html(data);
        });
    });
});



var myInput = document.getElementById("image");

const sendPic = () => {
    const file = myInput.files[0];

    var formData = new FormData();
    formData.append(file.name, file);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "/get_info.php", true);
    xhr.send(formData);
};

myInput.addEventListener("change", sendPic, false);

*/




///Random quote generator
const quotes = new Map();

quotes.set("\"All our dreams can come true, if we have the courage to pursue them.\"", "--Walt Disney");
quotes.set("\"The secret of getting ahead is getting started.\"", "--Mark Twain");
quotes.set("\"The best time to plant a tree was 20 years ago. The second best time is now.\"", "--Chinese Proverb");
quotes.set("\"It’s hard to beat a person who never gives up.\"", "--Babe Ruth");
quotes.set("\"Whatever you are, be a good one.\"", "--Abraham Lincoln");
quotes.set("\"If we have the attitude that it’s going to be a great day it usually is.\"", "--Catherine Pulsifier");
quotes.set("\"Magic is believing in yourself. If you can make that happen, you can make anything happen.\"", "--Johann Wolfgang Von Goethe");
quotes.set("\"Everything comes to him who hustles while he waits.\"", "--Thomas Edison");
quotes.set("\"The hard days are what make you stronger.\"", "--Abraham Lincoln");
quotes.set("\"You’ve got to get up every morning with determination if you’re going to go to bed with satisfaction.\"", "--George Lorimer");
quotes.set("\"If opportunity doesn’t knock, build a door.\"", "--Kurt Cobain");


let randomQuote = Math.floor(Math.random() * quotes.size);

//var key = document.getElementById("quote").innerHTML = Array.from(quotes.keys())[randomQuote];
//let val = document.getElementById("quote").innerHTML += "<br>" + quotes.get(key);

//let quoteText = document.getElementById("quote").innerHTML;
var key = Array.from(quotes.keys())[randomQuote];
var quoteText = key + quotes.get(key);
let quote = document.getElementById("quote");
let typingSpeed = 45;

typeWriter(quoteText, typingSpeed);

///Typewriter effect on the quote

function typeWriter(quoteText, typingSpeed){
    if(quote != null){//Make sure this only happens on home page
        let i = 0;
        let interval = setInterval(function(){
            if(i < quoteText.length){
                if(quoteText.charAt(i - 1) == '\"' && i != 1)
                    quote.innerHTML += "<br>";
                quote.innerHTML += quoteText.charAt(i);
                i++;
            }
            else{
                clearInterval(interval);
            }
        }, typingSpeed);
    }
    
}
