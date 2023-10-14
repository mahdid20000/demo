document.getElementById('signin').addEventListener('click',function(e)
{

    e.preventDefault();
    var form=document.getElementById('signinform');
    var formdata=new FormData(form);
    var xhr =new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
      if(this.readyState==4 && this.status==200)
      {
      	var response = this.responseText.trim();
        var split = response.split(' ');
        if (split[0].trim() == 'welcome') {
          var username = split.slice(1).join(' ');
          window.location.href = '../view/dashbord.user.php?username=' + username;
          
        } else {
         document.getElementById('massesge').innerHTML=(response);
        }
      }
    };
    xhr.open('POST','../controller/signin.php');
    xhr.send(formdata);



});