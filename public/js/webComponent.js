
class FooterFijado extends HTMLElement{
    constructor(){
        super();

    }
    connectedCallback(){
        this.innerHTML = '<img class="footer-img vitoria1" src="img/footer01.jpg">  ' +
            '<span>Copyright &copy; NUVE 2020</span> ' +
            '\n' +
            ' <img class="footer-img vitoria2" src="img/footer02.png">'
    }
}

window.customElements.define('footer-fijado', FooterFijado);
