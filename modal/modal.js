// Element vi behöver
const eModal = document.querySelector("#exampleModal");
const eForm = document.querySelector("#exampleModal form");
const eLogin = document.querySelector("#login");
const eStatus = document.querySelector("#status");

var loginModal = new bootstrap.Modal(
    "#exampleModal",
    {
        // options here
        backdrop: "static",
        keyboard: false
    }
);

eForm.addEventListener("submit", function(e){
    e.preventDefault();

    const postData= new FormData(eForm);

    //console.log(postData);

    fetch("./login.php", {
        method: "POST",
        body: postData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);

        switch (data) {
            case "1":
                eStatus.innerHTML = "<p class=\"alert alert-warning\">Någonting är fel med SQL satsen</p>";
                break;
            case "2":
                eStatus.innerHTML = "<p class=\"alert alert-success\">Du är inloggad</p>";
                break;
            case "3":
                eStatus.innerHTML = "<p class=\"alert alert-warning\">Epost eller lösenordet stämmer inte</p>";

            default:
                eStatus.innerHTML = "<p class=\"alert alert-danger\">Något gick väldigt fel kontakta supporten</p>";
                break;
        }

        loginModal.hide();
        eForm.reset();
    })
})