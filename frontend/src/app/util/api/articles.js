

export const getArticle = (props) => {
  const article= "http://localhost/api/articles"
  return fetch(article)
          .then((res)=>{return res.json()})
}