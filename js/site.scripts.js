function redirect(href) {
	window.location.href = href;
}

function applyColorblindFilter() {
    const select = document.getElementById('colorblind-select');
    const body = document.body;

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