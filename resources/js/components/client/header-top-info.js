import React from "react";

class HeaderTopInfo extends React.Component {
    render() {
        return(
            <section className="xs-header-top header-top-box">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6 col-md-8">
                            <div className="header-top-info">
                                <ul>
                                    <li><a href="contacto.html">Contactenos</a></li>
                                    <li><a href="#">Consigue una Cotización</a></li>
                                </ul>
                            </div>
                        </div>

                        <div className="col-lg-6 align-self-center col-md-4">
                            <div className="header-top-search">
                                <ul>
                                    <li className="search-item">
                                        <a href="#" className="search-icon"><i className="icon icon-search"></i></a>
                                        <form>
                                            <input type="search" name="s" className="header-search-field" defaultValue="" placeholder="Buscar Aquí..."/>
                                        </form>
                                    </li>
                                    <li className="lang-item">
                                        <select>
                                            <option value="">Esp</option>
                                            <option value="">Eng</option>
                                            <option value="">Kor</option>
                                        </select>
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

export default HeaderTopInfo;