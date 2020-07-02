import React from "react";

export default class Banner extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return(
            <div className="banner-slider-item banner-item1" style={{ backgroundImage: 'url(assets/images/banner-slider/banner_slider_3.jpg)' }}>
                <div className="slider-table">
                    <div className="slider-table-cell">
                        <div className="container">
                            <div className="col-lg-10 offset-lg-1">
                                <div className="banner-content text-center">
                                    <h2>{this.props.title}</h2>
                                    <p>{this.props.subtitle}</p>
                                    { this.props.buttons &&
                                        <div className="xs-btn-wraper">
                                        <a href="#" className="xs-btn">
                                            Productos
                                        </a>
                                        <a href="#" className="xs-btn fill">
                                            Cotizar
                                        </a>
                                    </div>
                                    }
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}