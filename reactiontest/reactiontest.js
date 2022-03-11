let currentTime = 30000;

let timerText = document.querySelector(".timerText");

let clickTimer;

let clickCount = 0;

const button = document.querySelector(".btn");
const startTimerButton = document.querySelector(".btn-timer");

button.addEventListener("click", handleClick);

startTimerButton.addEventListener("click", startTimer);


function startTimer() {
    currentTime = 30000;
    clickTimer = setInterval(updateTimer, 1000);
    startTimerButton.disabled = true;
}

function updateTimer() {
    if (currentTime > 0) {
        currentTime -= 1000;
        timerText.innerHTML = currentTime / 1000;
    } else {
        timeUp();
        clearInterval(clickTimer);
    }
}

function timeUp() {
    alert("Your time is up! You clicked " + clickCount + " times in 30 seconds");
    startTimerButton.disabled = false;
}

function handleClick() {
    let newLeft = Math.round(Math.random() * 90);
    let newTop = Math.round(Math.random() * 90);

    button.style.top = newLeft + "%";
    button.style.left = newTop + "%";

    clickCount += 1;
}