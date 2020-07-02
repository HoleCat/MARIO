import React from "react";

class HeaderTopV2 extends React.Component {
    render(){
        return(
            <section className="xs-header-middle header-v2-top">
                <div className="container">
                    <div className="row">
                        <div className="col-md-3 align-self-center">
                            <div className="logo">
                                <a href="./index.html">
                                    <img src="assets/images/fullbanner-bg-150x86.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <div className="align-self-center col-md-9">
                            <div className="header-middle-info float-right">
                                <ul>
                                    <li>
                                        <i className="icon icon-map-marker2"></i>
                                        <label>Visitanos</label>
                                        <p>Av Perú nro 450, Int 35</p>
                                    </li>
                                    <li>
                                        <i className="icon icon-envelope4"></i>
                                        <label>Email</label>
                                        <p>example@gmail.com</p>
                                    </li>
                                    <li className="header-social">
                                        <label>Siguenos</label>
                                        <div className="header-v2-social">
                                            <a href="#"><span className="fa fa-facebook-f"></span></a>
                                            <a href="#"><span className="fa fa-twitter"></span></a>
                                            <a href="#"><span className="fa fa-google-plus"></span></a>
                                            <a href="#"><span className="fa fa-instagram"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        )
    }
}

export default HeaderTopV2;