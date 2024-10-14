

function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.menu-icon').src = "assets/images/menu_white_36dp.svg";
    }
    else{
        menuMobile.classList.add('open');
        document.querySelector('.menu-icon').src = "assets/images/close_white_36dp.svg";
    }
}


//Função para criar N° de reps, N° de séries e nome do exercício dinamicamente
function adicionarExercicio() {
    var container = document.getElementById("dinamicContainer"); //os elementos serão colocados na div de id = dinamicContainer

    var div = document.createElement("div");
    div.className = "form-inputs"; //cria id auxiliar com o mesmo nome de form-inputs para usar o mesmo estilo

    var label1 = document.createElement("label"); //cria label
    label1.textContent = "Nº séries " //nomeia label
    var input1 = document.createElement("input"); //cria input
    input1.type = "number"; //define tipo do input
    input1.min = "1"; //define mínimo aceito pelo input
    label1.style.marginRight = "1rem"; //margem direita do label
    input1.style.marginRight = "1rem"; //margin direita do input
    div.appendChild(label1); //coloca label na div auxiliar
    div.appendChild(input1); //coloca input na div auxiliar

    var label2 = document.createElement("label");
    label2.textContent = "Nº rep "
    var input2 = document.createElement("input");
    input2.type = "number";
    input2.min  = "1";
    label2.style.marginRight = "1rem";
    input2.style.marginRight = "1rem";
    div.appendChild(label2);
    div.appendChild(input2);

    var label3 = document.createElement("label");
    label3.textContent = "Exercício";
    var input3 = document.createElement("input");
    input3.type = "text";
    label3.style.marginRight = "1rem";
    input3.style.marginRight = "1rem";
    div.appendChild(label3);
    div.appendChild(input3);

    container.appendChild(div); //coloca div auxiliar na div dinamicContainer


}
