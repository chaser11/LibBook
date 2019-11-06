<script >
 function getvalues()
 {
 var user=document.getElementById("user");
  user = user.value;
 var password=document.getElementById("password");
  password = password.value;
  sessionStorage.setItem('user', user);
  sessionStorage.setItem('password', password);

 }
</script>
