<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Prueba Chat</title>
                
                <script type="text/javascript">
   (function(d, m){var s, h;       
   s = document.createElement("script");
   s.type = "text/javascript";
   s.async=true;
   s.src="https://apps.applozic.com/sidebox.app";
   h=document.getElementsByTagName('head')[0];
   h.appendChild(s);
   window.applozic=m;
   m.init=function(t){m._globals=t;}})(document, window.applozic || {});
</script>

<script type="text/javascript">
  window.applozic.init({
    appId: '2d59698bc56ad3c4e80bdc430fde35de',      //Get your application key from https://www.applozic.com
    userId: userId,                     //Logged in user's id, a unique identifier for user
    userName: username,                 //User's display name
    imageLink : '',                     //User's profile picture url
    email : '',                         //optional
    contactNumber: '',                  //optional, pass with internationl code eg: +16508352160
    desktopNotification: true,
    source: '1',                          // optional, WEB(1),DESKTOP_BROWSER(5), MOBILE_BROWSER(6)
    notificationIconLink: 'https://www.applozic.com/favicon.ico',    //Icon to show in desktop notification, replace with your icon
    authenticationTypeId: '1',          //1 for password verification from Applozic server and 0 for access Token verification from your server
    accessToken: '',                    //optional, leave it blank for testing purpose, read this if you want to add additional security by verifying password from your server https://www.applozic.com/docs/configuration.html#access-token-url
    locShare: true,
    googleApiKey: "AIzaSyDKfWHzu9X7Z2hByeW4RRFJrD9SizOzZt4",   // your project google api key 
    googleMapScriptLoaded : false,   // true if your app already loaded google maps script
    autoTypeSearchEnabled : true,    // set to false if you don't want to allow sending message to user who is not in the contact list
    onInit : function(response) {
       if (response === "success") {
          // login successful, perform your actions if any, for example: load contacts, getting unread message count, etc
       } else {
          // error in user login/register (you can hide chat button or refresh page)
       }
   },
   contactDisplayName: function(otherUserId) {
         //return the display name of the user from your application code based on userId.
         return "";
   },
   contactDisplayImage: function(otherUserId) {
         //return the display image url of the user from your application code based on userId.
         return "";
   },
   onTabClicked: function(response) {
         // write your logic to execute task on tab load
         // object response =  {
         //    tabId : userId or groupId,
         //    isGroup : 'tab is group or not'
         //  }
   }
  });
</script>



	</head>

	<body>
            
            


   
            
	</body>
</html>