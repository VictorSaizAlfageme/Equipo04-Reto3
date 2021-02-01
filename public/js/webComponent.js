
class FooterFijado extends HTMLElement{
    constructor(){
        super();
        const template = document.createElement('template');
        template.innerHTML =
            '<style> footer{\n' +
            '    position: fixed;\n' +
            '    bottom: 0;\n' +
            '    width: 80%;}</style>'+
            '          <footer>'+
            '            <div class="footer-class copyright text-center my-auto">\n' +
            '                <img class="footer-img vitoria1" src="img/footer01.jpg">\n' +
            '                <span>Copyright &copy; NUVE 2020</span>\n' +
            '                <img class="footer-img vitoria2" src="img/footer02.png">\n' +
            '            </div>\n'+ '</footer>';
        const shadowRoot = this.attachShadow({mode:'open'});
        shadowRoot.appendChild(template.content);
    }
}

window.customElements.define('footer-fijado', FooterFijado);