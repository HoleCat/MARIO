import React from 'react';
import ReactDOM from 'react-dom';
import HeaderTopInfo from "./header-top-info";
import HeaderTopV2 from "./header-top-v2";
import Nav from "./nav";
import Banner from "./banner"
import Lineamiento from "./lineamiento";
import Video from "./video";
import Experience from "./experience";
import FrecuentlyQuestions from "./FrecuentlyQuestions";
import CustomerSay from "./CustomerSay";

class App extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            texto : ''
        }
        this.variable = "{{ trans('titles.titulo_1') }}";
        this.handlerClick = this.handlerClick.bind(this);
        this.Lineamientos = [
            {
                title: "Misión" ,
                subtitle: "Estamos especializados en producir y procesar Cafés de especialidad proveniente de pequeños productores para darte la experiencia de un producto fresco y natural.",
                img: "assets/images/services/mision.jpg",
                icon: "icon-Our_service_1"
            },
            {
                title: "Visión" ,
                subtitle: "Zucaffe es una compañía que compra, tuesta y mercadea cafés especiales de pequeños productores del Perú, teniendo como base de su desarrollo empresarial la responsabilidad social y medio ambiental.",
                img: "assets/images/services/mision.jpg",
                icon: "icon-Our_service_2"
    
            },
            {
                title: "Principios" ,
                subtitle: "Zucaffe es una compañía que compra, tuesta y mercadea cafés especiales de pequeños productores del Perú, teniendo como base de su desarrollo empresarial la responsabilidad social y medio ambiental.",
                img: "assets/images/services/mision.jpg",
                icon: "icon-Our_service_3"
            },
            {
                title: "Valores" ,
                subtitle: "Zucaffe es una compañía que compra, tuesta y mercadea cafés especiales de pequeños productores del Perú, teniendo como base de su desarrollo empresarial la responsabilidad social y medio ambiental.",
                img: "assets/images/services/mision.jpg",
                icon: "icon-Our_service_4"
            }
        ]
    }

  

    handlerClick(e) {
        e.preventDefault();
        fetch('/api/change')
        .then(response => {
            return response.text();
        })
        .then(text => {
            //this.setState({ texto: JSON.parse(text).title_1 })
            return console.log(text);
        })
        .catch(error => console.error(error));
    }

    render() {
    

        return (
            <React.Fragment>
                <div id="preloader">
                    <div className="preloader-wrapper">
                        <div className="la-ball-clip-rotate-pulse la-2x">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <a href="" className="cancel-preloader">Cancelar Carga</a>
                </div>
                <HeaderTopInfo />
                <HeaderTopV2 />
                <Nav />
                <section className="xs-banner-sec xs-banner-v2-sec owl-carousel banner-slider">
                    <Banner
                        title="Calidad y Garantia directo a su hogar" 
                        subtitle="Estamos especializados en producir y procesar Cafés de especialidad proveniente de pequeños 
                                productores para darte la experiencia de un producto fresco y natural."
                        buttons = {false}
                    />
                </section>
                {/** Lineamientos */}
                <section className="service-sec section-padding">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-12">
                                <div className="section-title-item">
                                    <h2 className="section-title">
                                        <span className="xs-title">Estrategias del Negocio</span>
                                         {this.variable}
                                    </h2>
                                </div>
                            </div>
                        </div>
                
                        <div className="row">
                        {
                            this.Lineamientos.map((lin, idx) => 
                                <Lineamiento
                                    key= {idx}
                                    title={lin.title}
                                    subtitle={lin.subtitle}
                                    icon={lin.icon}
                                    img={lin.img}
                                    handlerClick={this.handlerClick}
                                />
                            )
                        }
                            
                        </div>
                    </div>
                </section>
                {/** Video */}
                <Video />
                <Experience />
                <FrecuentlyQuestions />
                <section className="testimonial-v4-sec v3 section-bg section-padding">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="section-title-item section-title-v2-item">
                            
                                
                                <h2 className="section-title">
                                    <span className="xs-title">Comentarios del cliente </span>
                                    <em>Nuestros</em> clientes dicen
                                </h2>
                                <h3 className="hidden-title">Clientes</h3>
                            </div>
                        </div>
                    </div>
                    <div className="owl-carousel" id="testmonial-slider-v4">
                        <div className="single-testmonial">
                            <div className="testmonial-author">
                                <img src="assets/images/author1.jpg" alt="" />
                                <h4 className="xs-author-title">José Rojas</h4>
                                <i className="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div className="single-testmonial">
                            <div className="testmonial-author">
                                <img src="assets/images/author1.jpg" alt="" />
                                <h4 className="xs-author-title">José Rojas</h4>
                                <i className="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div className="single-testmonial">
                            <div className="testmonial-author">
                                <img src="assets/images/author1.jpg" alt="" />
                                <h4 className="xs-author-title">José Rojas</h4>
                                <i className="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div className="single-testmonial">
                            <div className="testmonial-author">
                                <img src="assets/images/author1.jpg" alt="" />
                                <h4 className="xs-author-title">José Rojas</h4>
                                <i className="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
                
            </React.Fragment>
        );
    }
}

export default App;

if (document.getElementById('content')) {
    ReactDOM.render(<App />, document.getElementById('content'));
}
