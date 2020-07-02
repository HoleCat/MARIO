import React, {Component} from "react";

export default class Experience extends Component {
    render() {
        return(
            <section className="funfact-sec funfact-v2-sec" style={{ background: 'url(./assets/images/funfact-bg-v2.jpg)' }}>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-4 align-self-center">
                            <div className="funfact-content">
                                <h2 className="column-title2 column-title">
                                <span className="xs-title-2">Qué </span>
                                    nos hace increible
                                </h2>
                            </div>
                        </div>
                        <div className="col-lg-8">
                            <div className="row">
                                <div className="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                                    <div className="single-funfact">
                                        <i className="icon-fun_fact_1"></i>
                                        <h3 className="funfact-title" data-counter="25">25 <strong>+</strong></h3>
                                        <p>años de experiencia</p>
                                    </div>
                                </div>
                                <div className="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                                    <div className="single-funfact">
                                        <i className="icon-fun-fact-02"></i>
                                        <h3 className="funfact-title" data-counter="502">502 <strong>+</strong></h3>
                                        <p>expertos</p>
                                    </div>
                                </div>
                                <div className="col-sm-4 col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                                    <div className="single-funfact">
                                        <i className="icon-fun_fact_4"></i>
                                        <h3 className="funfact-title" data-counter="2535">2535 <strong>+</strong></h3>
                                        <p>clientes satisfechos</p>
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