// Função para formatar o CPF
function formatarCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    return cpf;
}

// Captura o elemento input
const cpfInput = document.getElementById('cpfInput');

// Adiciona um ouvinte de evento 'input' para formatar o CPF em tempo real
cpfInput.addEventListener('input', function() {
    const valorAtual = cpfInput.value;
    const cpfFormatado = formatarCPF(valorAtual);
    cpfInput.value = cpfFormatado;
});