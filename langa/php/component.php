<?php

function component(){
    
    $element="
    
       <div class=\"col-md-3 col-sm-6 my-3 my-md-O\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"upload/9.jpg\" alt=\"image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">product 1</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">Winter clotehs</p>
                            <small><s>R800</s></small>
                            <h5><span class=\"price\">R500</span></h5>
                            <button class=\"btn btn-warning my-3\" type=\"submit\" name=\"add\">Add to cart <i class=\"fas fa-shopping-cart\"></i></button>
                        </div>
                    </div>
                </form>
            </div>
    
    ";
    echo $element;
}