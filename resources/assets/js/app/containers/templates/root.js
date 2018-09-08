import React from 'react';
import Articles from '../../util/api/articles'



class Root extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      article: {}
    };
  }
  componentDidMount(){
    let data = Articles.get('/api/articles');
    this.setState({article:data});
  }
  render(){
    console.log(this.state.article);
    return(
      <div>
        <h1>テストテキスト</h1>
        <p>テスト</p>
      </div>
    );
  }
}

export default Root;