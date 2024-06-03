var zoomEnabled = false;

function redirect(href) {
	window.location.href = href;
}

function applyColorblindFilter(path, module) {
    const select = document.getElementById('colorblind-select');
    const body = document.getElementsByClassName('principal')[0];

    body.classList.remove('protanopia', 'deuteranopia', 'tritanopia');

    switch (select.value) {
        case 'protanopia':
            body.classList.add('protanopia');
            break;
        case 'deuteranopia':
            body.classList.add('deuteranopia');
            break;
        case 'tritanopia':
            body.classList.add('tritanopia');
            break;
        default:
            break;
    }

    $.ajax({
        url: path + module + '/toggleColorBlind',
        method: 'POST',
        data: { color: select.value },
        dataType: 'json'
    })
}

document.addEventListener('DOMContentLoaded', () => {
    applyColorblindFilter();
});

function speak(text) {
    var msg = new SpeechSynthesisUtterance();
    msg.text = `${text}`;
    msg.lang = 'pt-BR';
    window.speechSynthesis.speak(msg);
}

function stopSpeak() {
    window.speechSynthesis.cancel();
}

function buscar(event = null, button = null) {
    if (event) {
        var key = event.wich || event.keyCode;
    
        if (key == 13) {
            $('#buscarForm').submit();
        }
    } else if (button) {
        $('#buscarForm').submit();
    }
}

function toggleZoom() {
    zoomEnabled = !zoomEnabled; // Inverte o estado do zoom
    if (zoomEnabled) {
        document.body.addEventListener('mousemove', zoomPage);
    } else {
        document.body.removeEventListener('mousemove', zoomPage);
        document.body.style.transform = 'scale(1)';
    }
}

function zoomPage(event) {
    var mouseX = event.clientX;
    var mouseY = event.clientY;

    var zoom = $('#zoom-select').val();
    
    document.body.style.transformOrigin = mouseX + 'px ' + mouseY + 'px';
    document.body.style.transform = `scale(${zoom})`;
}

document.getElementById('toggleButton').addEventListener('click', function() {
    toggleZoom();
    if (zoomEnabled) {
        this.textContent = "Desativar Zoom";
    } else {
        this.textContent = "Ativar Zoom";
    }
});