const animalSignUpModal = document.getElementById('animalSignUpModal')
const clientSignUpModal = document.getElementById('clientSignUpModal')

document.onkeyup = function(event){
    if(event.key === 'Escape'){
        if(clientSignUpModal === null){
            animalSignUpModal.classList.remove('displayFlex')
        }else{
            clientSignUpModal.classList.remove('displayFlex')
        }
        redirecioneSemHistorico()
      }
}

function redirecioneSemHistorico() {
    // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
    window.location.replace("../index.php");
}

let dialog = document.getElementsByTagName('dialog')[0];
  dialog.addEventListener('click', function (event) {
      let rect = dialog.getBoundingClientRect();
      let isInDialog=(rect.top <= event.clientY && event.clientY <= rect.top + rect.height
        && rect.left <= event.clientX && event.clientX <= rect.left + rect.width);
      if (!isInDialog) {
          redirecioneSemHistorico()

      }
});

let dialog1 = document.getElementsByTagName('dialog')[1];
dialog1.addEventListener('click', function (event) {
    let rect1 = dialog1.getBoundingClientRect();
    let isInDialog1=(rect1.top <= event.clientY && event.clientY <= rect1.top + rect1.height
      && rect1.left <= event.clientX && event.clientX <= rect1.left + rect1.width);
    if (!isInDialog1) {
        redirecioneSemHistorico()

    }
});
