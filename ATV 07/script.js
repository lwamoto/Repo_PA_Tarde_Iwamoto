//X 1 - Crie um botão que, ao ser clicado, muda o texto de um <p> para "Olá, Mundo!".
function meuBotao(){
    const paragrafo = document.getElementById('meuParagrafo');
    paragrafo.textContent = ("HELLO WORLD!!!");
}

//X 2 - Faça um botão que, quando clicado, muda a cor de fundo da página para azul.
function trocarAzul(){
    document.body.style.backgroundColor='blue';
} 
function trocarBranco(){
    document.body.style.backgroundColor='white';
}

//X 3 - Crie dois botões, + e -, que aumentam e diminuem o valor de um contador exibido em um <span>.
let valorAtual = 10;
function Aumentar(){
    let spanValor = document.getElementById('meuSpan');
    valorAtual++;
    spanValor.textContent = valorAtual;
}
function Diminuir(){
    let spanValor = document.getElementById('meuSpan');
    valorAtual--;
    spanValor.textContent = valorAtual;
}

// 4 - Crie um <input> e um botão "Adicionar".Quando clicar, adicione o texto digitado como um item de lista (<li>).
function adicionar(){
    let texto = document.getElementById("novoItem").value;

    if (texto.trim() !== "") {
      let li = document.createElement("li");
      li.textContent = texto;
      document.getElementById("minhaLista").appendChild(li);
      document.getElementById("novoItem").value = "";
    }
}

// 5 - Crie um botão que alterna entre mostrar e esconder uma imagem.
function mostrarImg(){
    let img = document.getElementById("minhaImagem");
    
    if (img.style.display === "none") {
      img.style.display = "block"; // mostra
    } else {
      img.style.display = "none"; // esconde
    }
}

// 6 - Crie um botão que, ao ser clicado, troca a imagem exibida (src) para outra.
function buttonImagem(){
    const IMAGEM1 = document.getElementById("IMAGEM1");
    if (IMAGEM1.style.display === "none") {
      IMAGEM1.style.display = "block"; // mostra
    } else {
      IMAGEM1.style.display = "none"; // esconde
    }
}


// 7 - Crie uma lista de tarefas (to-do list) onde cada tarefa pode ser removida com um botão "Remover".