

var folder = "C:\xampp\htdocs\img2";

$.ajax({
  url : folder,
  success: function (data) {
      $(data).find("a").attr("href", function (i, val) {
          if( val.match(/\.(jpe?g|png|gif)$/) ) {
              $("body").append( "<img src='"+ folder + val +"'>" );
          }
      });
  }
});











<div class="container-fluid mt-3">
<script>
  var folder = "C:\xampp\htdocs\img2";

$.ajax({
    url : folder,
    success: function (data) {
        $(data).find("a").attr("href", function (i, val) {
            if( val.match(/\.(jpe?g|png|gif)$/) ) {
                $("body").append( "<img src='"+ folder + val +"'>" );
            }
        });
    }
});



var dir = "C:\xampp\htdocs\img2";
var fileextension = ".jpeg";
$.ajax({
    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
    url: dir,
    success: function (data) {
        //List all .png file names in the page
        $(data).find("a:contains(" + fileextension + ")").each(function () {
            var filename = this.href.replace(window.location.host, "").replace("http://", "");
            $("body").append("<img src='" + dir + filename + "'>");
        });
    }
});


function importAll(r) {
  let images = {};
  r.keys().map((item, index) => { images[item.replace('./', '')] = r(item); });
  return images;
}

const images = importAll(require.context('./img2', false, /\.(png|jpe?g|svg)$/));

<img src={images['doggy.png']} />
</script>
    </div>
