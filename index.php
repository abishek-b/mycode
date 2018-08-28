<html>
    <head>
        <title>
            my page
        </title>
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />  
    </head>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '260710238099533',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.1'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
  function logout(){
    FB.logout(function(res){console.log(res)});
  }
  //testing
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me',{ locale: 'en_US', fields: 'name, email, picture' },function(response) {
            console.log(response.picture.data.url);
            console.log(response)
         });
  }
  function fb_login(){
    FB.login( statusChangeCallback, { scope: 'email,public_profile' } )
  }
 

</script>
    <body>
        <h1>
            Page working!!!!!!!!!!!!!!!!!
        </h1>
        <button class="button" onclick="fb_login()">fb login</button>
        <form method="POST" action="/services/getData.php">
            <input type="text" name="test">
            <input type="submit">
        </form>

        <div id='map' style='width: 400px; height: 300px;'></div>
        <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJpc2hlazMwIiwiYSI6ImNqanh2MTcxaDFlamMzcHAwYnl3eW5hNTcifQ.GMhGzoUqJ0ddjL26N1Diqg';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/abishek30/cjjxv4tg84qt72rqyiotoyqp1'
        });
        </script>
        <button>
    </body>
</html>