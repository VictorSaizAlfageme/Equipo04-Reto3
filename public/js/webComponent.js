
class FooterFijado extends HTMLElement{
    constructor(){
        super();
        const template = document.createElement('template');
        template.innerHTML =
            '<style> footer{\n' +
            '    position: inherit;\n' +
            '    bottom: 0;\n' +
            '    text-align: center;\n' +
            '    background-color: white;' +
            '    padding-top: 25px;' +
            '    padding-bottom: 25px;   }</style>';
        const shadowRoot = this.attachShadow({mode:'open'});
        shadowRoot.appendChild(template.content);
    }
}

window.customElements.define('footer-fijado', FooterFijado);
