function soma(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let soma = valor_1 + valor_2

    document.getElementById('resultado').innerText = soma;
}

function sub(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let sub = valor_1 - valor_2

    document.getElementById('resultado').innerText = sub;
}

function mult(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let mult = valor_1 * valor_2
    
    document.getElementById('resultado').innerText = mult;
}

function div(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)

    if (valor_1 == 0 || valor_2 == 0){
        document.getElementById('resultado').innerText = "Não é possivel dividir por 0"
         
    }else{
        let div = valor_1 / valor_2
        document.getElementById('resultado').innerText = div;
    } 
}

 