const animalSignUpModal = document.getElementById('animalSignUpModal')

animalSignUpModal.showModal()

const clientSignUpModal = document.getElementById('clientSignUpModal')

clientSignUpModal.showModal()

document.onkeydown = function(event){
    if(event.key === 'Escape'){
        clientSignUpModal.classList.remove('displayFlex')
        animalSignUpModal.classList.remove('displayFlex')
        window.location.href = "./index.php";
    }
}

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
          window.location.href = "./index.php";

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
        animalEditModal.classList.remove('displayFlex')

    }
});