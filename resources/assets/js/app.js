"use strict"
import React from 'react';
import ReactDOM from 'react-dom';
import Root from './app/containers/templates/root';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(<Root />, document.getElementById('root'));
registerServiceWorker();