
export const GET_ARTICLE_REQUEST = 'GET_ARTICLE_REQUEST';
export const getArticleRequest = () => ({ type: GET_ARTICLE_REQUEST });

export const GET_ARTICLE_SUCCESS = 'GET_ARTICLE_SUCCESS';
export const getArticleSuccess = item => ({ type: GET_ARTICLE_SUCCESS, payload: item });

// export const GET_ARTICLE_ERROR
// export const GET_ARTICLE_ERROR