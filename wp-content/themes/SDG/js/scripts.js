$(document).ready(function(){

  //  alert('test');

})

const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal1)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal1.active')
  modals.forEach(modal1 => {
    closeModal(modal1)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal1 = button.closest('.modal1')
    closeModal(modal1)
  })
})

function openModal(modal) {
  if (modal1 == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal1 == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}