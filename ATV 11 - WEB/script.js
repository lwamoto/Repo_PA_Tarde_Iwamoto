function cadastrar(){
    const usuario = document.getElementById('usuario').value
    const senha = document.getElementById('senha').value
    const confirmarSenha = document.getElementById('confirmarSenha').value

    if (usuario && senha === confirmarSenha){
        localStorage.setItem(usuario, senha)
        return alert(`Usuário ${usuario} cadastrado com sucesso`)
    }
    else{
        return alert("Usuário e/ou senha incorretos")
    }
}

function entrar(){
    const entrar = document.getElementById('entrar')
    window.location.href = "./login.html"
}

function cadastro(){
    const entrar = document.getElementById('entrar')
    window.location.href = "./cadastrar.html"
}


function login(){
    const usuario = document.getElementById('usuario').value
    const senha = document.getElementById('senha').value

    let usuarioSenha = localStorage.getItem(usuario)

    if(!usuarioSenha){
        return alert("Usuário não encontrado!")
    }

    if (usuario && senha === usuarioSenha){
        localStorage.setItem(usuario, senha)
        alert(`Usuário ${usuario} cadastrado com sucesso`)
        window.location.href = "./home.html"
    }
    else{
        return alert("Usuário e/ou senha incorretos")
    }
}
