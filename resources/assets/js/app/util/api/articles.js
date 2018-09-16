import Axios from 'axios'
"use strict"

export default class Articles{
  constructor(){}

  static async get(url){
    // TODO {key: value, key2: value} -> key=value&key2=value
    try{
      const res = await axios.get("http://localhost/api/articles", {})
      console.log(res);
      return await res.data;
    }catch(error){
      console.log(error);
      return error;
    }
  }

  static _getAxios(method, headers = undefined){
    const token = document.getElementsByTagName('meta').namedItem('csrf-token').content;
    return {
      method:method,
      baseUrl:'http://localhost',
      headers:{
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': token,
      },
      responseType:"json"
    }
  }

}
