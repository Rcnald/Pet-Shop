const openClientSignUp = document.getElementById('clientSignUpButton')
const clientSignUpModal = document.getElementById('clientSignUpModal')
const scrollBar = document.querySelector('body')

const viewPassword = document.getElementById('togglePassword')
const isTypePassword = document.getElementById("clientPassword");

openClientSignUp.addEventListener('click', openModal)

function openModal(){
    clientSignUpModal.showModal()
    clientSignUpModal.classList.add('displayFlex')
    scrollBar.classList.add('overflowHidden')
}

document.onkeydown = function(event){
    if(event.key === 'Escape'){
        clientSignUpModal.classList.remove('displayFlex')
        scrollBar.classList.remove('overflowHidden')
    }
}


function showPassword() {
    if (isTypePassword.type === "password") {
        isTypePassword.type = "text";
    } else {
        isTypePassword.type = "password";
    }

    viewPassword.classList.toggle("bi-eye")
  }