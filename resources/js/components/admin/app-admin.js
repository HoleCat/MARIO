import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    return (
        <div>
            <p>hola mundo</p>
            <p>mundo</p>
        </div>
    );
}

export default App;

if (document.getElementById('content-admin')) {
    ReactDOM.render(<App />, document.getElementById('content-admin'));
}
