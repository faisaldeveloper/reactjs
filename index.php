<!DOCTYPE html>
<html>
  <head>
  <title>React Js</title>
    <script src="bower_components/react/react.js"></script>
    <script src="bower_components/react/react-dom.js"></script>
    <!-- <script src="bower_components/react/JSXTransformer.js"></script> -->
    <!-- <script src="https://npmcdn.com/babel-core@5.8.38/browser.min.js"></script> -->
    <script src="bower_components/react/react-dom-server.js"></script>
  </head>
  <body>
    <div id="example"></div>
   
  </body>
</html>
<script type="text/javascript">
//var myDivElement = <div className="foo">;
//ReactDOM.render('<p>hjgjhgjg</p>', document.getElementById('example'));

//ReactDOM.render('<p sdfsdfsdfsdf />', document.getElementById('mount-point'));
      var myComponent = React.createClass({
        render: function() {
          var elapsed = Math.round(this.props.elapsed  / 100);
          var seconds = elapsed / 10 + (elapsed % 10 ? '' : '.0' );
          var message =
            'React has been successfully running for ' + seconds + ' seconds.';

          return React.DOM.p(null, message);
        }
      });

      // Call React.createFactory instead of directly call ExampleApplication({...}) in React.render
      var ExampleApplicationFactory = React.createFactory(myComponent);

      var start = new Date().getTime();
      setInterval(function() {
        ReactDOM.render(
          ExampleApplicationFactory({elapsed: new Date().getTime() - start}),
          document.getElementById('example')
        );
      }, 50);
    </script>

