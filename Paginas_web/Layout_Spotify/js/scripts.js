import validity from "./validations.js";

const inputsForm = document.querySelectorAll('[data-input]')
const buttonSubmit = document.querySelector('#btn-register')

inputsForm.forEach(input => {
    input.addEventListener('blur', event => {
        event.preventDefault();
        validity(input)

    })
})

buttonSubmit.addEventListener('click', event => {
    event.preventDefault();
    inputsForm.forEach(input => {
        validity(input)
    })
})