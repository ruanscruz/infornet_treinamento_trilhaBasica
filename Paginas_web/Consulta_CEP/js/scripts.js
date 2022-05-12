const button = document.querySelector('button')
const addressInput = document.querySelector('.address-container')

button.addEventListener('click', async event => {
    event.preventDefault();
    const cepInfo = document.querySelector('#cep-info').value
    await zipCode(cepInfo)
})

const zipCode = async cepInfo => {
    try {
        const uri = `https://viacep.com.br/ws/${cepInfo}/json/`
        const response = await fetch(uri)
        const data = await response.json()
        template(data, addressInput)
    } catch (error) {
        templateErro(addressInput)
    }
}

const templateErro = addressInput => {
    const template = `<span>! Não foi possível encontrar o Cep solicitado</span>`
    addressInput.innerHTML = template
}

const template = (address, addressInput) => {
    if(!address) {
        console.log('erro')
    }

    const {cep, logradouro, bairro, localidade, uf} = address
    const template = `<div class="address-input-container">
                    <h3 class="address-label">CEP:</h3>
                    <p class="address-info" id="cep">${cep}</p>
                </div>
                <div class="address-input-container">
                    <h3 class="address-label">Rua:</h3>
                    <p class="address-info" id="street">${logradouro}</p>
                </div>
                <div class="address-input-container">
                    <h3 class="address-label">Bairro:</h3>
                    <p class="address-info" id="district">${bairro}</p>
                </div>
                <div class="address-input-container">
                    <h3 class="address-label">Cidade:</h3>
                    <p class="address-info" id="city">${localidade}</p>
                </div>
                <div class="address-input-container">
                    <h3 class="address-label">Estado:</h3>
                    <p class="address-info" id="state">${uf}</p>
                </div>`

    addressInput.innerHTML = template

}