"use strict"
import React from 'react';
import ReactDOM from 'react-dom';
import Root from './app/containers/templates/root';
import registerServiceWorker from './registerServiceWorker';

import {Provider} from 'react-redux'
import store from './app/store/configre-store'

ReactDOM.render(

<Provider store={store}>
  <Root />
</Provider>
  , document.getElementById('root'));
registerServiceWorker();