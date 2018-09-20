import * as Actions from './actions';
// import * as Util from '../util';

const reducer = (state, action) => {

  const { payload } = action;
  switch(action.type) {

    default:
      return state;
  }
  // switch (action.type) {
  //   default:
  //     return state;
  // }
  return Object.assign({}, state);
}

export default reducer;