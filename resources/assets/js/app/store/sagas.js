import { call, put, select, takeEvery, fork } from "redux-saga/effects";
import * as Actions from "./actions";
// import * as Util from '../util'

import * as Articles from '../util/api/articles'

// function* saveCookie(action) {
//   const { payload } = action;
//   Util.Cookies.setCookie('todos',payload);
// }

function* addArticle() {
  try{
    const response = yield  call(Articles.get('/api/articles'));
    yield put(Actions.addArticleSuccess(response));
  }catch(e){
    console.log(e);
    //TODO Error処理考えとく。
  }
}
// // ログイン
// function* loadCookie(action) {
//   console.log('saga-test');
// }

export default function* rootSaga() {
  yield takeEvery(Actions.ADD_ARTICLE_REQUEST, addArticle)
  // 特定のアクションがdispatchされたことを監視する
  // yield fork(Actions.SAVE_TODO_COOKIE, saveCookie);
  // yield takeEvery(Actions.LOAD_TODO_COOKIE, loadCookie);
}