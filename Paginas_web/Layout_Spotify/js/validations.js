// main
const validity = (inputForm) => {
    const inputType = inputForm.dataset.input
    const spanError = document.querySelector(`[data-error=${inputType}]`)

    if(validators[inputType]) validators[inputType](inputForm)
    if(!inputForm.validity.valid){
        if (inputType === 'name') {
            spanError.classList.remove('msg_name_profile')
        }
        spanError.classList.remove('errors-hidden')
        spanError.previousElementSibling.classList.remove('errors-hidden')
        spanError.innerText = showErrorMessage(inputForm, inputType)
    } else {
        let msg = ''
        if (inputType === 'name') {
            msg = 'Isso será exibido no seu perfil.'
            spanError.classList.add('msg_name_profile')
            spanError.previousElementSibling.classList.add('errors-hidden')
            spanError.innerText = msg
        } else {
            spanError.classList.add('errors-hidden')
            spanError.previousElementSibling.classList.add('errors-hidden')
            spanError.innerText = msg
        }
    }
}

// validators

const validators = {
    confirm_email: input => confirmEmailValidity(input),
    day: input => dayValidity(input),
    year: input => yearValidity(input)
}

const confirmEmailValidity = input => {
    const email = document.querySelector("[data-input='email']").value
    const confirmEmail = input.value
    confirmEmail === email ? input.setCustomValidity('') : input.setCustomValidity('Error')
}

const dayValidity = input => {
    const day = input.value
    day <= 0 || day > 31 ? input.setCustomValidity('Error') : input.setCustomValidity('')
}

const yearValidity = input => {
    const year = input.value
    year.length < 4 ? input.setCustomValidity('Error') : input.setCustomValidity('')
}


// auxiliary

const showErrorMessage = (input, inputType) => {
    let message = ''
    errosType.forEach(error => {
        if(input.validity[error]) {
            message = errosMessages[inputType][error]
        }
    })
    return message
}


const errosType = ['valueMissing', 'typeMismatch', 'customError', 'tooShort']
const errosMessages = {
    email: {
        valueMissing: 'Você deve inserir seu email.',
        typeMismatch: 'Esse e-mail é inválido. O formato correto é assim: exemplo@email.com'
    },
    confirm_email: {
        valueMissing: 'Você deve confirmar seu e-mail',
        customError: 'Os endereços de e-mail não correspondem.'
    },
    password: {
        valueMissing: 'Você deve inserir uma senha.',
        tooShort: 'Sua senha é muito curta.'
    },
    name: {
        valueMissing: 'Insira um nome para seu perfil.',
    },
    day: {
        valueMissing: 'Insira um dia válido para o mês.',
        customError: 'Insira um dia válido para o mês.'
    },
    month: {
        valueMissing: 'Selecione o mês de nascimento.'
    },
    year: {
        valueMissing: 'Insira um ano válido.',
        customError: 'Insira um ano válido.'
    },
    gender: {
        valueMissing: 'Selecione seu gênero'
    },
    terms: {
        valueMissing: 'Aceite os termos e condições para continuar.'
    },
    captcha: {
        valueMissing: 'Confirme que você não é um robô.'
    }
}


export default validity