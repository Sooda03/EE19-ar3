const output = document.querySelector(".output");
const input = document.querySelector(".input");
const changeText = document.getElementById(".btn");
const elem = document.getElementById("countDown");
const startingMinutes = 1;
let time = startingMinutes * 60;
let ord = 0;

// Ska skrivas ut
var mening2 = "What the fuck did you just fucking say about me, you little bitch? I'll have you know I graduated top of my class in the Navy Seals, and I've been involved in numerous secret raids on Al-Quaeda, and I have over 300 confirmed kills. I am trained in gorilla warfare and I'm the top sniper in the entire US armed forces. You are nothing to me but just another target. I will wipe you the fuck out with precision the likes of which has never been seen before on this Earth, mark my fucking words. You think you can get away with saying that shit to me over the Internet? Think again, fucker. As we speak I am contacting my secret network of spies across the USA and your IP is being traced right now so you better prepare for the storm, maggot. The storm that wipes out the pathetic little thing you call your life. You're fucking dead, kid. I can be anywhere, anytime, and I can kill you in over seven hundred ways, and that's just with my bare hands. Not only am I extensively trained in unarmed combat, but I have access to the entire arsenal of the United States Marine Corps and I will use it to its full extent to wipe your miserable ass off the face of the continent, you little shit. If only you could have known what unholy retribution your little clever comment was about to bring down upon you, maybe you would have held your fucking tongue. But you couldn't, you didn't, and now you're paying the price, you goddamn idiot. I will shit fury all over you and you will drown in it. You're fucking dead, kiddo.";

var mening1 = "My Grandfather smoked his whole life. I was about 10 years old when my mother said to him, 'If you ever want to see your grandchildren graduate, you have to stop immediately.'. Tears welled up in his eyes when he realized what exactly was at stake. He gave it up immediately. Three years later he died of lung cancer. It was really sad and destroyed me. My mother said to me- 'Don't ever smoke. Please don't put your family through what your Grandfather put us through.' I agreed. At 28, I have never touched a cigarette. I must say, I feel a very slight sense of regret for never having done it, because your post gave me cancer anyway.";

//var mening3 = "!!!HOLY FUCKING SHIT!!!! IS THAT A MOTHERFUCKING JOJO REFERENCE??????!!!!!!!!!!11!1!1!1!1!1!1! JOJO IS THE BEST FUCKING ANIME JOSUKE IS SO BADASSSSS Yo Angelo! Yo Angelo Yo Angelo Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo!Yo Angelo! Yo Angelo! Yo Angelo!Yo Angelo! Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo! Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo Yo Angelo! Yo Angelo! Yo Angelo! Yo Angelo Yo Angelo Yo Angelo! Yo Angelo! Yo Angelo! Yo Angelo! Yo Angelo! Yo Angelo! Oh you're approaching meBut it was me, Dio‼‼‼‼‼‼‼‼‼ YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE YARE NIGERUNDAYOOOO NIGERUNDAYOOOO NIGERUNDAYOOOO NIGERUNDAYOOOO NIGERUNDAYOOOO NIGERUNDAYOOOO NIGERUNDAYOOOO";
// Skriver ut meningen
output.textContent = mening1;

// Plocka ut alla ord
var ordArray = output.textContent.split(" ");

console.log(ordArray);
let position = 0;


let timerRunning = false;
let timeLeft = 20;


function countDown() {
    timeLeft--;
    document.querySelector("#countDown").innerHTML = timeLeft;

    if (timeLeft === 0) {
        
        body.style.color = "red";
    }
}

// Vad som händer när man skriver
input.addEventListener("input", function (e) {
   // var elem = document.getElementById('some_div');
   if (!timerRunning) {
    setInterval(countDown, 1000);
    timerRunning = true;
}

    // Ordet som skrivs
    let ordet = input.value.replace(/\s/g, "");
    // Sista bokstaven som skrivs
    let bokstav = e.key;

    // Om sista bokstaven är ett mellanslag 
    if (bokstav == " ") {
        console.log("_" + ordet + "_", bokstav, ordArray[0]);

        if (ordArray[0] == ordet) {
            console.log("match");
            output.textContent = "";
            ordArray.shift();
            output.textContent = ordArray.join(" ");
            input.value = "";
            input.style.color = "";
            
        } else {
            console.log("miss");
            input.style.color = "red";
        }
    }
})


//gör så man kan byta mellan texterna
btn.addEventListener("click", ()=>{
    if (output.textContent === mening1) {
        output.textContent = mening2;
        ordArray = output.textContent.split(" ");
    }
     else {
        output.textContent = mening2;
        ordArray = output.textContent.split(" ");
    }
})

