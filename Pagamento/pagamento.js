const paymentButtons = document.querySelectorAll('.payment-btn');
const dynamicFields = document.getElementById('dynamic-fields');
const form = document.getElementById('payment-form');

paymentButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove a classe 'selected' de todos os botões
        paymentButtons.forEach(btn => btn.classList.remove('selected'));
        // Adiciona a classe 'selected' ao botão clicado
        button.classList.add('selected');

        // Mostra os campos dinâmicos com base na seleção
        const method = button.getAttribute('data-method');
        updateDynamicFields(method);
    });
});

form.addEventListener('submit', function (event) {
    event.preventDefault();
    const selectedPayment = document.querySelector('.payment-btn.selected');
    if (!selectedPayment) {
        alert('Por favor, selecione uma forma de pagamento.');
    } else {
        alert('Pagamento confirmado! Forma escolhida: ' + selectedPayment.textContent.trim());
        window.location.href = 'index.html';
    }
});

function updateDynamicFields(method) {
    // Limpa os campos dinâmicos
    dynamicFields.innerHTML = '';

    if (method === 'credit-card') {
        dynamicFields.innerHTML = `
            <h3>Dados do Cartão</h3>
            <label for="card-number">Número do Cartão *</label>
            <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>

            <label for="card-name">Nome no Cartão *</label>
            <input type="text" id="card-name" name="card-name" placeholder="Nome Impresso no Cartão" required>

            <label for="card-expiry">Validade *</label>
            <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/AA" required>

            <label for="card-cvv">CVV *</label>
            <input type="text" id="card-cvv" name="card-cvv" placeholder="123" required>
        `;
    } else if (method === 'pix') {
        dynamicFields.innerHTML = `
            <h3>Pagamento via Pix</h3>
            <p>Use a chave pix abaixo para concluir o pagamento:</p>
            <p>74-981462022<p>
        `;
       
    }
}
