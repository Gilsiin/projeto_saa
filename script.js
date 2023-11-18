function validarFormulario() {
    var nomeMatricula = document.getElementById("nomeMatricula").value;
    var email = document.getElementById("email").value;
    var problema = document.getElementById("problema").value;
    var localizacao = document.getElementById("localizacao").value;
    var imagem = document.getElementById("imagem").value;

    //Caracteres permitidos no 1º input
    var nomeMatriculaRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ ]+[0-9]+$/;

    // Validar email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!nomeMatriculaRegex.test(nomeMatricula)) {
        alert("Nome e Matrícula devem conter apenas letras e números.");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Digite um endereço de e-mail válido.");
        return false;
    }

    if (problema.trim() === "") {
        alert("Descreva o problema.");
        return false;
    }

    if (localizacao.trim() === "") {
        alert("Digite a localização com precisão.");
        return false;
    }

    if (imagem.trim() === "") {
        alert("Selecione uma imagem.");
        return false;
    }

    window.location.href = "pag02.html";

    return true;
}