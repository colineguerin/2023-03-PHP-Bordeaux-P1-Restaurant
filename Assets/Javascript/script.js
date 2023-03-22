/*
Transition function to trigger animations on carousel, menu, form and contact sections
 */

function transition() {
    let reveals = document.querySelectorAll(".transitioned");
    for (let i = 0; i < reveals.length; i++)
    {
        let windowHeight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;
        let elementVisible = 150;

        if (elementTop < windowHeight - elementVisible){
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll", transition);


/*
Function to trigger errors in form
 */
/*
const form = document.querySelector('form');
const email = document.querySelector('.ms-mail');

email.addEventListener("input",  (event) => {
    if (email.validity.valid) {
        emailError.textContent = "";
        emailError.className = "error";
    } else {
        showError();
    }
});
*/
//TODO : add toasts if email is not valid on form submission
/*
email.addEventListener( "invalid",
    function( event ) {
        event.preventDefault();
    }, true);

form.addEventListener("submit", function (event) {
    if (!email.validity.valid) {
        showError();
        event.preventDefault();
    }
});

function showError() {
    if (email.validity.valueMissing) {
        emailError.textContent = "Veuillez entrer une adresse email.";
    } else if (email.validity.typeMismatch){
        Toastify({
        text: "This is a toast",
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "left", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        }
    }).showToast();
    }
    //emailError.className = "error active";
}
*/