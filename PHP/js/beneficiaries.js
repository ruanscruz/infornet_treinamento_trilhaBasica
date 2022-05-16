import Validations from "./Validations.js"

const validations = new Validations()
const inputsForm = document.querySelectorAll("[data-type]")

inputsForm.forEach(inputForm => {
    inputForm.addEventListener('blur', event => {
        event.preventDefault()
        validations.validity(inputForm)
    })
})
