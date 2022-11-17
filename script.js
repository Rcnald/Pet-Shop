const openClientSignUp = document.getElementById('clientSignUpButton')
const clientSignUpModal = document.getElementById('clientSignUpModal')

const openAnimalSignUp = document.getElementById('animalSignUpButton')
const animalSignUpModal = document.getElementById('animalSignUpModal')

const scrollBar = document.querySelector('body')

const viewPassword = document.getElementById('togglePassword')
const isTypePassword = document.getElementById("clientPassword");

openClientSignUp.addEventListener('click', openModalClient)
openAnimalSignUp.addEventListener('click', openModalAnimal)

document.onkeydown = function(event){
    if(event.key === 'Escape'){
        clientSignUpModal.classList.remove('displayFlex')
        animalSignUpModal.classList.remove('displayFlex')
        scrollBar.classList.remove('overflowHidden')
    }
}

function animation(){
    openAnimalSignUp.style.scale = "1.1"
    setTimeout(removeAnimation, 600)

    openClientSignUp.style.scale = "1.1"
    setTimeout(removeAnimation, 600)
}

function removeAnimation(){
    openAnimalSignUp.style.scale = ""
    openClientSignUp.style.scale = ""
}

function openModalClient(){
    openModal(clientSignUpModal)
}

function openModalAnimal(){
    openModal(animalSignUpModal)
}

function openModal(whichModal){
    whichModal.showModal()
    whichModal.classList.add('displayFlex')
    scrollBar.classList.add('overflowHidden')
}

function showPassword() {
    if (isTypePassword.type === "password") {
        isTypePassword.type = "text";
    } else {
        isTypePassword.type = "password";
    }

    viewPassword.classList.toggle("bi-eye")
}

// Não sei como funciona mas funciona  
let dialog = document.getElementsByTagName('dialog')[0];
  dialog.addEventListener('click', function (event) {
      let rect = dialog.getBoundingClientRect();
      let isInDialog=(rect.top <= event.clientY && event.clientY <= rect.top + rect.height
        && rect.left <= event.clientX && event.clientX <= rect.left + rect.width);
      if (!isInDialog) {
          dialog.close();
          clientSignUpModal.classList.remove('displayFlex')
          animalSignUpModal.classList.remove('displayFlex')
          scrollBar.classList.remove('overflowHidden')
      }
});

let dialog1 = document.getElementsByTagName('dialog')[1];
dialog1.addEventListener('click', function (event) {
    let rect1 = dialog1.getBoundingClientRect();
    let isInDialog1=(rect1.top <= event.clientY && event.clientY <= rect1.top + rect1.height
      && rect1.left <= event.clientX && event.clientX <= rect1.left + rect1.width);
    if (!isInDialog1) {
        dialog1.close();
        clientSignUpModal.classList.remove('displayFlex')
        animalSignUpModal.classList.remove('displayFlex')
        scrollBar.classList.remove('overflowHidden')
    }
});