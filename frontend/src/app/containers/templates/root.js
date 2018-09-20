import React from 'react';
import { bindActionCreators } from 'redux';
import {connect} from 'react-redux'
import * as actions from '../../store/actions'


const mapStateToProps = state => ({ store: state });
const mapDispatchToProps = dispatch => ({ actions: bindActionCreators(actions, dispatch) });

@connect(mapStateToProps,mapDispatchToProps)
class Root extends React.Component{
  constructor(props){
    super(props);
  }
  componentDidMount(){
    this.props.actions.getArticleRequest();
  }
  render(){
    return(
      <h1>test</h1>
    );
  }
}

export default Root;