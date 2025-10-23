const x = 10

console.log("O valor de x:")
console.log(x)

console.log("--- --- --- ---")

const alunos = ["japa", "japones", "japanes"]

console.log("Hello, world")

console.log("   ")

console.log("LISTA/ARRAY: ")
console.log(alunos)
console.log("POSIÇÃO 0")
console.log(alunos[0])

console.log("--- --- --- ---")

function somar(n1, n2){
    return n1 + n2
}

console.log("10 + 5")
console.log(somar(10, 5))

console.log("20 + 10")
console.log(somar(20, 10))

function Saudacao(nome){
    return "function " + nome
}

console.log(Saudacao("Saudacao"))

console.log("--- --- --- ---")

console.log("SEM .innerHTML")
let titulo1 = document.getElementById("texto1")
console.log(titulo1)

console.log(" ")

console.log("COM .innerHTML")
let titulo2 = document.getElementById("texto2").innerHTML
console.log(titulo2)

console.log(" ")

console.log("COM titulo.innerHTML")
let titulo3 = document.getElementById("texto3")
titulo3.innerHTML = "Altera o texto pelo JS"
console.log(titulo3.innerHTML)

console.log("--- --- --- ---")

function sendText(){
   let mensagem= document.getElementById("mensagem").value
   console.log(mensagem)// ou alert(mensagem)
}

console.log("--- --- --- ---")
function soma(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 + n2)
}

function sub(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 - n2)
}

function mult(){
    let n1 = (document.getElementById("n1").value)
    let n2 = (document.getElementById("n2").value)
    alert(n1 * n2)
}

function div(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 / n2)
}