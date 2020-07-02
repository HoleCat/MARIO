import React from "react";

export default class Lineamiento extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                <div className="single-service">
                    <button onClick={this.props.handlerClick}>valor</button>
                    <div className="service-img">
                        <img src={this.props.img} alt="" />
                        <i className={this.props.icon}></i>
                    </div>
                    <h3 className="xs-service-title"><a href="#">{this.props.title}</a> </h3>
                    <p>
                        {this.props.subtitle}
                    </p>
                    
                </div>
            </div>
        )
    }
}