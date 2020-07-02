import React, {Component} from "react";

export default class Video extends Component {
render() {
    return(
        <section className="video-sec">
            <div className="container-fluid">
                <div className="row">
                    <div className="col-lg-7 xs-padding-0 align-self-center">
                        <div className="video-item">
                            <img src="assets/images/video-img.jpg" alt="" />
                            <a href="https://www.youtube.com/watch?v=cWvzwxSgPGM" className="video-play-btn">
                            <i className="icon icon-play-button2"></i> </a>
                        </div>
                    </div>
                    <div className="col-lg-5 xs-padding-0">
                        <div className="call-to-action-v2">
                            <div className="call-back-content">

                                <h3><i className="icon icon-user-1"></i> Reciba <span>una llamada</span></h3>
                                <p className="call-contact-text">
                                    Porque su tiempo cuenta, nos ocupamos de la gestión comercial. <br/>
                                <span> 25% Descuento en tu primer servicio</span>
                                </p>
                                <form className="call-back-form">
                                    <div className="form-group">
                                        <input type="text" name="name" defaultValue="" placeholder="Nombre " className="call-back-inp" />
                                    </div>
                                    <div className="form-group">
                                        <input type="number" name="number" defaultValue="" placeholder="Teléfono " className="call-back-inp" />
                                    </div>
                                    <div className="form-group">
                                        <input type="email" name="email" defaultValue="" placeholder="Email " className="call-back-inp" />
                                    </div>
                                    <div className="form-group call-back-btn">
                                        <button type="submit" name="submit" className="xs-btn xs-v2-btn">Enviar</button>
                                        <label className="call-us-number">O Llamenos - <span>965 776 529</span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
}