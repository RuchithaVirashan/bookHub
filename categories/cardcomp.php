
<?php


function card($categoryName, $image)
{
  $card = "

        <div class=\"col-xs-6 col-sm-4 col-md-3  text-center\" id=\"crd\" >
        <div class=\"card h-100\" id=\"image-card\">
        <a href=\"cat-items.php?name=$categoryName\" onclick=\"post\">
        <img class=\"image-fluid\" id=\"imgCrd\" src=\"$image\" alt=\"Avatar\">
        </a>
        <div class=\"container\" id=\"cat-name\">
        <a href=\"cat-items.php?name=$categoryName\" onclick=\"post\">
          <h4><b id=\"crd-name\">$categoryName</b></h4> 
          </a>
        </div>
      </div>
      </div>
      
    
        ";
  echo ($card);
}
