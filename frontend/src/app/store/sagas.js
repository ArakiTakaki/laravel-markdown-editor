import { call, put, select, takeEvery, fork } from "redux-saga/effects";

import * as Actions from "./actions";
import * as API from '../util/api/articles'

function* getArticle() {
  try{
    const response = yield API.getArticle('/api/articles');
    console.log(response);
    yield put(Actions.getArticleSuccess(response));
  }catch(e){
    console.log(e);
  }
}

export default function* rootSaga() {
  yield takeEvery(Actions.GET_ARTICLE_REQUEST, getArticle)
}