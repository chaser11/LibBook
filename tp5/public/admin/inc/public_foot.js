function removevalues()
 {
  sessionStorage.removeItem("password"); 

}
var usercount = sessionStorage.getItem('usercount');
$("#usersnumber").text(usercount);
var seatcount = sessionStorage.getItem('seatcount');
$("#seatsnumber").text(seatcount);
