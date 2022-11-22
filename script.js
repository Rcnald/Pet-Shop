const openClientSignUp = document.getElementById('clientSignUpButton')
const clientSignUpModal = document.getElementById('clientSignUpModal')

const openAnimalSignUp = document.getElementById('animalSignUpButton')
const animalSignUpModal = document.getElementById('animalSignUpModal')

const scrollBar = document.querySelector('body')

const openData = document.getElementById('showDataButton')
const showData = document.getElementById('sign-up-data')

const viewPassword = document.getElementById('togglePassword')
const isTypePassword = document.getElementById("clientPassword")

const callClient = document.getElementById("callClient")
const callAnimal = document.getElementById("callAnimal")

openClientSignUp.addEventListener('click', openModalClient)
openAnimalSignUp.addEventListener('click', openModalAnimal)

const signUpDataClient = document.querySelector('#sign-up-data-client')
const signUpDataAnimal = document.querySelector('#sign-up-data-animal')

openData.addEventListener('click', openDataSignUp)

function openDataSignUp(){
    showData.classList.toggle('displayFlex')
    showData.classList.toggle('displayNone')

    const addNameColumnClient = document.querySelector('#sign-up-data-client article:nth-child(1) article')
    const addEmailColumn = document.querySelector('#sign-up-data-client article:nth-child(1) article:nth-child(3)')
    const addPasswordColumn = document.querySelector('#sign-up-data-client article:nth-child(1) article:nth-child(5)')

    const addNameColumnAnimal = document.querySelector('#sign-up-data-animal article:nth-child(1) article')
    const addRacaColumn = document.querySelector('#sign-up-data-animal article:nth-child(1) article:nth-child(3)')
    const addAgeColumn = document.querySelector('#sign-up-data-animal article:nth-child(1) article:nth-child(5)')
    const addPorteColumn = document.querySelector('#sign-up-data-animal article:nth-child(1) article:nth-child(7)')

    const h6NameClient = document.createElement('h6')
    const h6Email = document.createElement('h6')
    const h6Password = document.createElement('h6')

    const h6NameAnimal = document.createElement('h6')
    const h6Raca = document.createElement('h6')
    const h6Age = document.createElement('h6')
    const h6Porte = document.createElement('h6')


    h6NameClient.innerText = "Nome"
    h6Email.innerText = "Email"
    h6Password.innerText = "Senha"

    h6NameAnimal.innerText = "Nome"
    h6Raca.innerText = "Raça"
    h6Age.innerText = "Idade"
    h6Porte.innerText = "Porte"

    if(addNameColumnClient.querySelector('h6') === null){
        addNameColumnClient.prepend(h6NameClient)
        addEmailColumn.prepend(h6Email)
        addPasswordColumn.prepend(h6Password)
    }

    if(addNameColumnAnimal.querySelector('h6') === null){
        addNameColumnAnimal.prepend(h6NameAnimal)
        addRacaColumn.prepend(h6Raca)
        addAgeColumn.prepend(h6Age)
        addPorteColumn.prepend(h6Porte)

    }
    
}



callClient.addEventListener('click',calClient)
callAnimal.addEventListener('click',calAnimal)

function calClient(){
    callClient.classList.add('switch-op')
    callAnimal.classList.remove('switch-op')
    callClient.classList.add('switch')
    callAnimal.classList.remove('switch')
    signUpDataClient.classList.add('displayFlex')
    signUpDataClient.classList.remove('displayNone')
    signUpDataAnimal.classList.add('displayNone')
    signUpDataAnimal.classList.remove('displayFlex')
}


function calAnimal(){
    callAnimal.classList.add('switch-op')
    callClient.classList.remove('switch-op')
    callAnimal.classList.add('switch')
    callClient.classList.remove('switch')
    signUpDataAnimal.classList.add('displayFlex')
    signUpDataAnimal.classList.remove('displayNone')
    signUpDataClient.classList.add('displayNone')
    signUpDataClient.classList.remove('displayFlex')
}
document.onkeydown = function(event){
    if(event.key === 'Escape'){
        clientSignUpModal.classList.remove('displayFlex')
        animalSignUpModal.classList.remove('displayFlex')
        scrollBar.classList.remove('overflowHidden')
    }
}

function animation(){
    openAnimalSignUp.style.scale = "1.1"
    openAnimalSignUp.style.filter = "brightness(0.98)"
    setTimeout(removeAnimation, 600)

    openClientSignUp.style.scale = "1.1"
    openClientSignUp.style.filter = "brightness(0.98)"
    setTimeout(removeAnimation, 600)
}

function removeAnimation(){
    openAnimalSignUp.style.scale = ""
    openClientSignUp.style.scale = ""
    openAnimalSignUp.style.filter = ""
    openClientSignUp.style.filter = ""
}

function openModalClient(){
    openModal(clientSignUpModal)
}

function openModalAnimal(){
    openModal(animalSignUpModal)
}

function closeModalClient(){
    closeModal(clientSignUpModal)
}

function openModal(whichModal){
    whichModal.showModal()
    whichModal.classList.add('displayFlex')
    scrollBar.classList.add('overflowHidden')
}

function closeModal(whichModal){
    whichModal.close()
    whichModal.classList.remove('displayFlex')
    scrollBar.classList.remove('overflowHidden')
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

const Input = document.querySelector('footer .newsletter .box .send-email input')

function resetInput(){
    Input.value = ""
}