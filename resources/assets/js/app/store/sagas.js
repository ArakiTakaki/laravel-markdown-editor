// import { call, put, select, takeEvery, fork } from "redux-saga/effects";
// import * as Actions from "./actions";
// import * as Util from '../util'

// function* saveCookie(action) {
//   const { payload } = action;
//   Util.Cookies.setCookie('todos',payload);
// }

// // ログイン
// function* loadCookie(action) {
//   console.log('saga-test');
// }

export default function* rootSaga() {
  // 特定のアクションがdispatchされたことを監視する
  // yield fork(Actions.SAVE_TODO_COOKIE, saveCookie);
  // yield takeEvery(Actions.LOAD_TODO_COOKIE, loadCookie);
}