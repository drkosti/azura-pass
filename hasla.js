    var password=document.getElementById("password");
    function genPassword() {
        var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var passwordLength = 8;
        var password = "";
        for (var i = 0; i <= passwordLength; i++) {
            var randomNumber = Math.floor(Math.random() * chars.length);
            password += chars.substring(randomNumber, randomNumber +1);
        }
        document.getElementById("password").value = password;
        

    }

    
    function kopiujInfo1() {
  var copyText = document.getElementById("info1");
  copyText.select();
  copyText.setSelectionRange(0, 999);
  document.execCommand("copy");
  
}
    function kopiujInfo2() {
  var copyText = document.getElementById("info2");
  copyText.select();
  copyText.setSelectionRange(0, 999);
  document.execCommand("copy");
  
}
    function kopiujHaslo() {
  var copyText = document.getElementById("samohaslo");
  copyText.select();
  copyText.setSelectionRange(0, 999);
  document.execCommand("copy");
  
}