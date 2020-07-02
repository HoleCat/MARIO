import React from "react";

class Nav extends React.Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
        fetch("")
        .then((result) => console.log(result))
    }
    
    render() {
        return(
            <header className="xs-header-nav xs-heder-nav-v2">
                <div className="container">
                    <div className="row  menu-item">
                        <div className="col-lg-12">
                            <nav id="navigation1" className="navigation header-nav clearfix">

                                <div className="nav-header">
                                    <a className="nav-brand" href="#"></a>
                                    <a href="./index.html" className="mobile-logo">
                                        <img src="assets/images/mobile_logo.png" alt="" />
                                    </a>
                                    <div className="nav-toggle"></div>
                                </div>

                                <div className="nav-menus-wrapper clearfix">
                                    <ul className="nav-menu">
                                        <li className="active"><a href="index.html">Inicio</a></li>
                                        <li><a href="nosotros.html">Quienes somos</a></li>
                                        <li><a href="servicios.html">Servicios</a></li>
                                        <li><a href="productos.html">Productos</a></li>
                                        <li><a href="proyectos.html">Proyectos</a></li>
                                        <li><a href="clientes.html">Clientes</a></li>
                                    </ul>
                                    <div className="header-nav-right-info align-to-right">
                                        <label><i className="icon icon-phone3"></i> 000 2672 561</label>
                                    </div>
                                    
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        )
    }
}
export default Nav;