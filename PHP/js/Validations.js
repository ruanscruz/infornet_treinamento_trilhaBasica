class Validations {

    validity(inputForm) {
        const inputType = inputForm.dataset.type
        const spanError = document.querySelector(`[data-error=${inputType}]`)

        //if(this._validators[inputType]) this._validators[inputType](inputForm)
        if(!inputForm.validity.valid){
            inputForm.classList.add('error-input')
            spanError.classList.remove('display-none')
            spanError.previousElementSibling.classList.remove('display-none')
            spanError.innerText = this._showErrorMessage(inputForm, inputType)
        } else {
                inputForm.classList.remove('error-input')
                spanError.classList.add('display-none')
                spanError.previousElementSibling.classList.add('display-none')
                spanError.innerText = ''
        }
    }

    _validators = inputForm => {
        return {
            //cep: inputForm => cepNotFound(inputForm)
        }
    }

    _showErrorMessage = (inputForm, inputType) => {
        let message = ''
        this._typeErros().forEach(error => {
            if(inputForm.validity[error]) {
                message = this._errosMessages()[inputType][error]
            }
        })
        return message
    }

    _typeErros = () => {
        return ['valueMissing', 'patternMismatch', 'customError']
    }

    _errosMessages = () => {
        return {
            name: {
                valueMissing: 'Infome seu nome completo!'
            },
            cpf: {
                valueMissing: 'Informe seu CPF!',
                patternMismatch: 'CPF inválido!'
            },
            cep: {
                valueMissing: 'Informe seu CEP!',
                patternMismatch: 'CEP inválido!',
                customError: 'CEP não encontrado1'
            },
            number: {
                valueMissing: 'Insiro o número de endereço!'
            },
            street: {
                valueMissing: 'Insiro o nome da rua!'
            },
            district: {
                valueMissing: 'Insiro o nome do bairro!'
            },
            city: {
                valueMissing: 'Insiro o nome da cidade!'
            },
            state: {
                valueMissing: 'Insiro a sigla do Estado!'
            },
            automaker: {
                valueMissing: 'Informe a montadora do veículo!'
            },
            model: {
                valueMissing: 'Informe o modelo do veículo!'
            },
            year_manufacturing: {
                valueMissing: 'Informe o ano de fabricação do veículo!'
            },
            year_model: {
                valueMissing: 'Informe o ano do modelo do veículo!'
            },
            plate: {
                valueMissing: 'Informe a placa do veículo!',
            },
            chassi: {
                valueMissing: 'Informe o número do chassi do veículo!'
            }
        }
    }
}

export default Validations