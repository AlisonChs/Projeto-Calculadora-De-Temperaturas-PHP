function validar() {

    if (document.getElementById('number').value == "") {

        closeAlert('sucessAlert');
        closeAlert('formulaAlert');
        document.getElementById('numberAlert').style.display = 'block';
        document.getElementById('number').focus();
        document.getElementById('numberAlert').style.animationName = 'transitionGoLeft';
        document.getElementById('numberAlert').style.animationDuration = '1s';
        document.getElementById('number').style.animationName = 'error';
        document.getElementById('number').style.animationDelay = '0';
        document.getElementById('number').style.animationDuration = '0.1s';
        document.getElementById('number').style.animationIterationCount = '25';
        document.getElementById('number').style.animationDirection = 'alternate';

    }

    else {
        document.getElementById('myForm').submit();
    }
}

function reset() {
    showAlert('sucessAlert');
    document.getElementById('logSucess').innerHTML = "Formulário limpo com sucesso.";
    closeAlert('tutorialAlert');
    closeAlert('formulaAlert');

    document.getElementById('number').value = "";
    document.getElementById('result').value = "";
}

function checkHasResult () {
    if (document.getElementById('result').value.length >= 1) {

        closeAlert('tutorialAlert');
        document.getElementById('sucessAlert').style.display = 'block';
        document.getElementById('sucessAlert').style.animationName = 'transitionGoLeft';
        document.getElementById('sucessAlert').style.animationDuration = '1s';

        document.getElementById('formulaAlert').style.display = 'block';        
        document.getElementById('formulaAlert').style.animationName = 'transitionGoRight';
        document.getElementById('formulaAlert').style.animationDuration = '1s';

        document.getElementById('result').focus();
        
    }
}

function closeAlert(alert) {
    document.getElementById(alert).style.animationName = 'transitionBack';
    document.getElementById(alert).style.animationDuration = '0.4s';
    document.getElementById(alert).style.display = 'none';   
}

function showAlert(alert) {
    document.getElementById(alert).style.animationName = 'transitionGoRight';
    document.getElementById(alert).style.animationDuration = '0.4s';
    document.getElementById(alert).style.display = 'block';   
}

function credits () {
    if(document.getElementById('modals').style.display == 'flex') {
        document.getElementById('modals').style.display = 'none';
        document.getElementById('modals').style.animation = 'fadeout 1s';
        document.getElementById('credits').style.display = 'none';
    }
    else {
        document.getElementById('modals').style.display = 'flex';
        document.getElementById('credits').style.display = 'block';
        document.getElementById('modals').style.animation = 'fadein 0.5s';
    }
}

function languages () {
    if(document.getElementById('modals').style.display == 'flex') {
        document.getElementById('modals').style.display = 'none';
        document.getElementById('modals').style.animation = 'fadeout 1s';
        document.getElementById('languages').style.display = 'none';
    }
    else {
        document.getElementById('languages').style.display = 'block';
        document.getElementById('modals').style.display = 'flex';
        document.getElementById('modals').style.animation = 'fadein 0.5s';
    }
}
