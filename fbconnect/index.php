<html>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>

var bio;
var user_UID="";
var name;
var sex;
var age;
var city;
var email;
var year;
var educationName= "";
var educationYear= "";
var educationConcentration= "" ;
var educationType ="";
var likes;


function fbstuff()
{
	//alert();
	
FB.init({
	appId  : '107020902726039',
	
	status : true, // check login status
	cookie : true, // enable cookies to allow the server to access the session
	xfbml  : true,  // parse XFBML
	oauth  : true 

});


FB.getLoginStatus(function(response) {
 
 
  if (response.authResponse) {
   
    
	FB.api('/me',onUserCheck);
	
	FB.api('/me', function(data) {

    	
    /* alert('Good to see you, ' + data.id+"  "+data.name+"  "+data.gender+" "+data.education +" "+" "+data.birthday+" "+data.email+" intersted in "+data.interested_in+" location "+data.location.name)*/
	  	  
     } , {scope: 'user_likes,user_religion_politics,offline_access,user_birthday,user_about_me,user_education_history,user_relationship_details,email,user_location,user_photos'} );
		
	 } 
});


}


 function submitFB(){
	
	 
	 alert();
	window.location = "./facebookSave.php?Name="+name+"&year="+year+"&Gender="+sex+"&AboutMe="+bio+"&User_id="+user_UID+"&Email="+email+"&educationType="+educationType+"&educationYear="+educationYear+"&educationConcentration="+educationConcentration+"&educationName="+educationName ;

	
}


function onUserCheck(response){
	
year=response.birthday.substring(0);
bio=response.bio;
name=response.name;
sex=response.gender;
city=response.location.name;
email=response.email;
user_UID=response.id;
for(var i =0 ; i<response.education.length ; i++){
educationName = educationName + response.education[i].school.name + ";"  ;
var temp = response.education[i].year ;
var temp2 = response.education[i].classes ;
if(temp)
educationYear = educationYear + response.education[i].year.name + ";";
else if(temp2)
educationYear = educationYear + response.education[i].classes[0].name + ";";
else
educationYear = educationYear + " ;" ;
temp = response.education[i].concentration ;
if(temp)
educationConcentration =educationConcentration +response.education[i].concentration[0].name+";" ;
else
educationConcentration = educationConcentration + " ;" ;

educationType = educationType + response.education[i].type +";" ;

}

alert("birthday" + year ); 
alert( "edutype " +educationType);
alert( "educon " +educationConcentration);
alert( "eduyear " +educationYear);
alert( "eduname " +educationName);


submitFB();


}




</script>
<body onLoad="fbstuff()" ><div id="fb-root">

<fb:login-button id="fb_but" autologoutlink="True" length="long" background="white" size="large" scope="user_likes,user_education_history,user_religion_politics,user_birthday,user_about_me,user_relationship_details,email,user_location,user_photos" onlogin="OnLogIn()"></fb:login-button>
</div>
</body>
</html>