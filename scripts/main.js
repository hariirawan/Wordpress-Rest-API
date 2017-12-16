var $ = jQuery;

class Posts extends React.Component{
    constructor(){
        super();
        this.state = {
            posts : []
        } 
    }
    componentWillMount(){
        $.ajax(React_Theme_Resource.url+"/wp-json/wp/v2/posts")
            .done( (data) => {
                this.setState({
                    posts: data
                })
            }).fail( (err) => {
                console.log("Fail");
            })
    }
    render() {
        return (
            <div>
            {
                this.state.posts.map( (data,key) => {
                    return <h1>{data.slug}</h1> 
                } )
            }
            </div>
        )
    }
}


ReactDOM.render(<Posts />, document.getElementById("content"));