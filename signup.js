document.getElementById('signup').addEventListener('click',function(e)
{
  e.preventDefault();
  var form =document.getElementById('signupform');
  var formdata=new FormData(form);
  var xhr=new XMLHttpRequest();
  xhr.onreadystatechange=function()
  {

    if(this.readyState==4 && this.status==200)
    {
      var response = this.responseText;
        document.getElementById('massesge').innerHTML=response;
      
    }

  };
  xhr.open('POST','../controller/signup.php');
  xhr.send(formdata);




});
 