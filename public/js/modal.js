

// var $ = document; 
// var $form = $.querySelector('form');

// $.addEventListener('DOMContentLoaded', function() {
   
//     $.querySelector('input[type="file"]').addEventListener('change', function(e) {
//         var file = e.target.files[0],
//                reader = new FileReader(),
//                $preview =  $.querySelector(".preview"),
//                t = this;

        
//         if(file.type.indexOf("image") < 0){
//           return false;
//         }

//         reader.onload = (function(file) {
//           return function(e) {
             
//              while ($preview.firstChild) $preview.removeChild($preview.firstChild);

      
//             var img = document.createElement( 'img' );
//             img.setAttribute('src',  e.target.result);
//             img.setAttribute('width', '250px');
//             img.setAttribute('height', '230px');
//             img.setAttribute('title',  file.name);
          
//             $preview.appendChild(img);
//           }; 
//         })(file);

//         reader.readAsDataURL(file);
//     }); 
// });

function imgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("preview");
  var previewImage = document.getElementById("previewImage");
   
  if(previewImage != null) {
    preview.removeChild(previewImage);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("width", "200px");
    img.setAttribute("height", "200px");

    img.setAttribute("id", "previewImage");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}