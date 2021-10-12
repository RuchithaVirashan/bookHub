<?php


function component($productname, $productprice, $secondprice, $productimg, $productid)
{
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form  action=\"home.php\" method=\"post\">
        <div class=\"owl-carousel owl-theme\">
        <div id=\"item-grid\"class=\"card shadow\">
            <div id=\"img\">
            <a href=\"itemDescription.php?name=$productname\" onclick=\"post\">
                <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid\">
                </a>
            </div>
            <div class=\"card-body\">
                <h6 class=\"card-title\">$productname</h6>
                <h7>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h7>
                <h6>
                    <small><s class=\"text-secondary\">$$secondprice</s></small>
                    <span class=\"price\">$$productprice</span>
                </h6>

                <button type=\"submit\" class=\"btn btn-outline-dark my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>    
        </div>
         </div>
    </form>
        
    </div>
    ";
    echo $element;
}

//cart item
function cartElement($productname, $productprice, $productimg, $productid,$product_author){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border-top\" >
                        <div class=\"row bg-white\">
                            <div id=\"cart-gitem\" class=\"col-sm-2 \">
                                <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-sm-6 py-4\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <h6>by $product_author</h6>
                                <h6 class=\"pt-2\">$$productprice</h6>
                                <button type=\"submit\" class=\"btn btn-outline-dark\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-outline-dark\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-sm-3 py-5 font-size-8px\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light btn-sm border rounded-circle \"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"input-sm form-control w-25 d-inline \">
                                    <button type=\"button\" class=\"btn bg-light btn-sm border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

