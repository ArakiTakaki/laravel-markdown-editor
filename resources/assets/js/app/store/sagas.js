import { call, put, select, takeEvery, fork } from "redux-saga/effects";
import * as Actions from "./actions";

import Articles from '../util/api/articles'

function* addArticle() {
  try{
    const response = yield  call(Articles.get('/api/articles'));
    yield put(Actions.addArticleSuccess(response));
  }catch(e){
    console.log(e);
  }
}

export default function* rootSaga() {
  yield takeEvery(Actions.ADD_ARTICLE_REQUEST, addArticle)
}