import React, {Component} from "react";

export default class CustomerSay extends Component {
    render() {
        return(
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
        )
    }
}