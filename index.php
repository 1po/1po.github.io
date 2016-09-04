<!doctype html>
<html  style="background-image:url(img/bg.jpg)">
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="shortcut icon" href="favicon.gif">

     <script src="http://www.wbftw.org/jquery-2.1.4.js"></script>

<style>
@font-face {
    font-family: 'UrbanJungle';
    src: url('UrbanJungle.otf'); format('otf');
	font-weight:normal;
	font-style:normal;  
}
h1 {
text-align:center;
font-family:'UrbanJungle';
font-weight: normal;
font-style: normal;
font-size: 100px;}
</style>
</head>
<header>

</header>
<body>
<h1 style="color:green;">Home</h1>

    <div class="container" id="div1" style="opacity:0;">
      <div class="row" id="about">
    	   <div class="col-xs-12">
        	  <div class="jumbotron navbar navbar-inverse">
                <center><img src="img/nsalogo.png" alt="logo" class="img-rounded"></center>
                <div style="text-align:center;margin:auto"><h1 style="color:#0088A8"></h1></div>
                  <p id="show" style="color:#00DD00;height:200px;"></p>
            </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      var c=0;
      $(document).ready
      (
        function()
        {
          $("#div1").fadeTo(1000,0.9);
          var t="";
          var iii = setInterval(type, 50);
          var laor="";
          function type()
          {
            var words="Test I am face.I love programming. I hate basic electircity. This is my life.".split("");
            if(c>=3*words.length)
            {
              if(c%3==0)
              {
                $('#show').text(laor+"   |");
              }
              else if (c%3==1)
              {
                $('#show').text(laor+"");
              }
              else
              {
                $('#show').text(laor+"");
              }
              c++;
            }
            else
            {
              if(c%3==0)
              {
                $('#show').text(laor+words[c/3]);
              }
              else
              {
                if(t=="")
                {
                  laor=$('#show').text();
                  $('#show').text(laor+t);
                  t="   |";
                }
                else
                {
                  laor=$('#show').text();
                  $('#show').text(laor+t);
                  t="";
                }
              }
              c++;
            }
          }
        }
      );
    </script>

<script>
addEventListener("keydown",function(e){
var charCode = e.charCode || e.keyCode || e.which;
 if (charCode == 27){
        alert("Escape is not allowed!");
        return false;
    }
});
/*addEventListener()方法能將指定的事件監聽器註冊到 EventTarget 實作物件上。EventTarget 可能是 Document 中的 Element 物件、Document 物件本身、Window物件，或是其它支援事件的物件（如：XMLHttpRequest）。*/
addEventListener("click", function() { //單擊後，進入全屏。
    var bg = document.documentElement /*document.docuementElement 是一个只读属性，返回文档对象（document）的根元素（例如，HTML文档的 <html> 元素）。*/, rfs = bg.requestFullScreen /* <-- mozilla 草案*/ || bg.webkitRequestFullScreen /*Webkit (works in Safari and Chrome)*/|| bg.mozRequestFullScreen /* Firefox (works in nightly) */;
    rfs.call(bg);
}); 
</script>
</body>
</html>
