//X 1 - Crie um botão que, ao ser clicado, muda o texto de um <p> para "Olá, Mundo!".
//X 2 - Faça um botão que, quando clicado, muda a cor de fundo da página para azul.
// 3 - Crie dois botões, + e -, que aumentam e diminuem o valor de um contador exibido em um <span>.
// 4 - Crie um <input> e um botão "Adicionar". Quando clicar, adicione o texto digitado como um item de lista (<li>).
// 5 - Crie um botão que alterna entre mostrar e esconder uma imagem.
// 6 - Crie um botão que, ao ser clicado, troca a imagem exibida (src) para outra.
// 7 - Crie uma lista de tarefas (to-do list) onde cada tarefa pode ser removida com um botão "Remover".

function meuBotao(){
    const paragrafo = document.getElementById('meuParagrafo');
    paragrafo.textContent = ("HELLO WORLD!!!");
}


function trocarAzul(){
    document.body.style.backgroundColor='blue';
} 
function trocarBranco(){
    document.body.style.backgroundColor='white';
}


