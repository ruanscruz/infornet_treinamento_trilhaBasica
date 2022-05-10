// Inputs
const inputsAnswers = document.querySelectorAll('.questions-container')
const inputsEmail = document.querySelectorAll('.input-email')
const emailButtons = document.querySelectorAll('.email-button')
// Manipulação dos inputs question
inputsAnswers.forEach(input => {
    input.addEventListener('click', event => {
        event.preventDefault();
        const answer =  input.children[1]
        const icon = input.children[0]
        answer.classList.toggle('closed')
        icon.children[1].classList.toggle('icon-rotated')
    })
})

//  Validaçã dos campos email

emailButtons.forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();
        validate(button)
    })
})




// Funções auxiliares
const validate = (button) => {
    const inputValidity = button.previousElementSibling
    const inputError = button.nextElementSibling

    inputValidity.value === ''
        ? inputValidity.setCustomValidity('Email obrigatório')
        : inputValidity.setCustomValidity('')

    !inputValidity.validity.valid
        ? inputError.classList.remove('error-hidden')
        : inputError.classList.add('error-hidden')
}