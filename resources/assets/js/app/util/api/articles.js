"use strict"

export default class Fetch{
  constructor(){}

  static async get(url){
    // TODO {key: value, key2: value} -> key=value&key2=value
    try{
      const work = await fetch(url);
      const json = await work.json();
      console.log(json);
      return json;
    }catch(error){
      console.log(error);
    }
  }

  static _getAxios(method, headers = undefined){
    const token = document.getElementsByTagName('meta').namedItem('csrf-token').content;
    return {
      method:method,
      headers:{
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': token,
      },
      responseType:"json"
    }
  }

}
