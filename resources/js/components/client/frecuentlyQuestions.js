import React, {Component} from "react";

export default class FrecuentlyQuestions extends Component {
    render() {
        return(
            <section className="faq-and-client-logo-sec section-padding">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6">
                            <div className="faq-item xs-faq-item">
                                <div className="faq-content">
                                    <h3>Preguntas </h3>
                                    <h4>Frecuentes</h4>
                                </div>
                                <div id="accordion">
                                    <div className="faq-single-item">
                                        <div className="card-header" id="headingOne">
                                            <h5>
                                                <button className="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">Porqué trabajar con nostros?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" className="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div className="card-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="faq-single-item">
                                        <div className="card-header" id="headingTwo">
                                            <h5>
                                                <button className="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">Porqué trabajar con nosotros?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" className="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div className="card-body">
                                                <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="faq-single-item">
                                        <div className="card-header" id="headingThree">
                                            <h5>
                                                <button className="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Porqué trabajar con nosotros?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" className="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div className="card-body">
                                                <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="faq-single-item">
                                        <div className="card-header" id="headingFour">
                                            <h5>
                                                <button className="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        Porqué trabajar con nosotros?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" className="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordion">
                                            <div className="card-body">
                                                <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="client-logo-item faq-item">
                                <div className="faq-content">
                                    <h4>Clientes Top</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div className="row">
                                    <div className="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo1.png" alt="" />
                                    </div>
                                    <div className="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo2.png" alt="" />
                                    </div>
                                    <div className="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo3.png" alt="" />
                                    </div>
                                    <div className="col-lg-6 col-sm-6 single-client-logo">
                                        <img src="assets/images/client-logo/logo4.png" alt="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        )
    }
}