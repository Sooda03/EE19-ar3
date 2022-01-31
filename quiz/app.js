
let form = document.querySelector("form");
let resultBox = document.querySelector(".result-box");
let resultHeading = document.querySelector(".result-box h2");
let resultP = document.querySelector(".result-box p");
let tryAgain = document.querySelector(".result-box button")
let buttonLog = document.querySelector(".button");

form.addEventListener("submit", handleForm);
tryAgain.addEventListener("click", resetForm);
buttonLog.addEventListener("click", displayMessage);

function handleForm(event) {
    let totalPoints = 0;
    event.preventDefault();
    let answers = document.querySelectorAll("input");
    answers.forEach((answer) => {
        if (answer.checked) {
            totalPoints += Number.parseInt(answer.getAttribute("data-points"));
        }
    });


    resultBox.classList.toggle("hidden");
    form.classList.toggle("hidden");

    if (totalPoints === 3) {
        resultHeading.innerHTML = "🎉Perfect score!🎉"
    } else if (totalPoints === 2) {
        resultHeading.innerHTML = "Close, but no cigar 🚬"
    } else if (totalPoints === 1) {
        resultHeading.innerHTML = "Sorry!"
    } else {
        resultHeading.innerHTML = "😭😭😭"
    }

    resultP.innerHTML = `You got ${totalPoints}/3 points correct!`;
}

function resetForm() {
    resultBox.classList.toggle("hidden");
    form.classList.toggle("hidden");
    form.reset();
}

function displayMessage() {
    console.log(totalPoints);
}