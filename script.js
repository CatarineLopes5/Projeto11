const form = document.getElementById('form-transacao');
const tabelaCorpo = document.getElementById('tabela-corpo');
const totalEntradasEl = document.getElementById('total-entradas');
const totalsaidasEl = document.getElementById('total-saidas');
const saldoTotalEl = document.getElementById('saldo-total');

let transacoes =[];

function atualizarResumo() {
    let entradas = 0;
    let saidas = 0;

    transacoes.forEach(transacao=> {
        if (transacao.tipo === 'entrada'){
            entradas += transacao.valor;
        }else {
            saidas += transacao.valor;
        }
    });

    const saldoTotal = entradas - saidas;

    totalEntradasEl.textContent = entradas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    totalsaidasEl.textContent = saidas.toLocaleString('pt-BR', { style: 'BRL'});
    saldoTotalEl.textcontent = saldoTotal.toLocaleString('pt-BR', {style: 'currency',currency: 'BRL'});
}
function renderizarTabela() {
    tabelaCorpo.innerHTML = '';

    transacoes.forEach(transacao => {
        const linha = document.createElement('tr');
        const classeTipo = transacao.tipo ==='entrada' ? 'text-entrada' : 'text-saidas';
        const tipoFormatado = transacao.tipo ==='entrada'? 'Entrada':'saida';

        linha.innerHTML = `
        <td>${transacao.descricao}</td>
        <td>${transacao.valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL'})}</td>
        <td class="${classeTipo}">${tipoFormatado}</td>
        `;

        tabelaCorpo.appendChild(linha);
    

    })
}

form.addEventListener('submit', function(event){
    event.preventDefault();

    const descricaoInput = document.getElementById('descricao').value;
    const valorInput = parseFloat(document.getElementById('valor').value);
    const tipoInput = documentgetElementById('tipo').value;

    const novatransacao ={
        descricao: descricaoInput,
        valor: valorInput,
        tipo: tipoInput

    };

    transacoes.push(novatransacao);
    renderizarTabela();
    atualizarResumo();
    form.reset();
});

