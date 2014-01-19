
function isSpclChar(){
var x=document.getElementById("pass").value;
var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
for (var i = 0; i < x.length; i++) {
    if (iChars.indexOf(x.charAt(i)) != -1) {
    alert ("The box has special characters. \nThese are not allowed.\n");
    return false;
        } 
		
    }
	location.href = "process.php?shva1="+x;
	
}  
