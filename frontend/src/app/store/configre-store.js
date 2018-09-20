import { createStore, applyMiddleware } from 'redux'
import createSagaMiddleware from 'redux-saga';
import rootReducer from './reducers';
import rootSaga from './sagas';
import initialState from './state';

const sagaMiddleware = createSagaMiddleware()
const store = createStore(rootReducer,initialState, applyMiddleware(sagaMiddleware))
sagaMiddleware.run(rootSaga)

export default store;