    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php
include 'includes/Fheader.php'; 
?>

<h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>

<!-- Search bar elements -->
<form id="searchbox" action="https://ixquick.com/do/search" method="post">
<input type="text" id="quicksearch" placeholder=" Search" /><button type="submit"><i class="fas fa-search"></i></button>
</form>
<script>
    document.getElementById('searchbox').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:https://gilson-coding.com/WEB120/fp/fp/catalog.php ' + document.getElementById('quicksearch').value;
        return false;
    }
</script>

<!-- Search/Quickfilter section -->
<div id="filters" class="button-group">
  <button class="button is-checked" onclick="filterSelection('all')">Show All</button>
  <button class="button" onclick="filterSelection('3Dprint')">3D Print</button>
  <button class="button" onclick="filterSelection('lasercut')">Lasercut</button>
  <button class="button" onclick="filterSelection('vinyl')">Vinyl</button>
  <button class="button" onclick="filterSelection('boardgames')">Board Games</button>
  <button class="button" onclick="filterSelection('household')">Household</button>
  <button class="button" onclick="filterSelection('toys')">Toys</button>
  <button class="button" onclick="filterSelection('accessories')">Accessories</button>
</div>

<!-- Gallery/Gridder: thumbnails -->
        <div class="container">

            <ul class="gridder">
            
                <li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-1"  data-category="3Dprint">
                    <img src="images/products/Tile_Storage_pic.jpg?text=1" alt="Tile Storage" class="img-fluid">
                     <p>"Terraforming Mars" Tile Storage<br>
                    <strong>$12.00</strong></p>
                       
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-2">
                    <img src="images/products/DnDHorse.jpg?text=2" alt="D&D Horse for minis" class="img-fluid">
                     <p>Horse Mount for D&D<br>
                    <strong>$2.00</strong></p>
            
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-3">
                    <img src="images/products/TM_Specialty_Tiles.jpg?text=3" alt="TM Specialty Tiles" class="img-fluid">
                    <p>"Terraforming Mars" Specialty Terrain and Tray<br>
                    <strong>$20.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-4">
                    <img src="images/products/d20_closed.jpg?text=4" alt="D20 dice holder" class="img-fluid">
                     <p>D20 Dice Holder<br>
                    <strong>$15.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-5">
                    <img src="images/products/GloomhavenStandees.jpg?text=5" alt="Gloomhaven Standees" class="img-fluid">
                     <p>"Gloomhaven" Standee Bases<br>
                    <strong>$50.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint toys" data-griddercontent="#gridder-content-6">
                    <img src="images/products/PenguinPuzzles.jpg?text=6" alt="3D Penguin Puzzle" class="img-fluid">
                     <p>Penguin Puzzle<br>
                    <strong>$20.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-7">
                    <img src="images/products/PlayerCubeTrays.jpg?text=7" alt="Player Cube Trays" class="img-fluid">
                     <p>"Terraforming Mars" Player Cube Storage<br>
                    <strong>$20.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint household" data-griddercontent="#gridder-content-8">
                    <img src="images/products/Shave_Soap_open.jpg?text=8" alt="Shave Soap Dish" class="img-fluid">
                     <p>Shave Soap Dish<br>
                    <strong>$10.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint boardgames" data-griddercontent="#gridder-content-9">
                    <img src="images/products/SubPic.jpg?text=9" alt="Submarine for Underwater Cities Game" class="img-fluid">
                    <p>"Underwater Cities" Submarines<br>
                <strong>$5.00</strong></p>
                </li><!--
                --><li class="gridder-list 3Dprint household" data-griddercontent="#gridder-content-10">
                    <img src="images/products/ArtDecoPlates.jpg?text=10" alt="Art Deco Lightswitch Plate" class="img-fluid">
                    <p>Art Deco Lightswitch Plate<br>
                        <strong>$5.00</strong></p>
                </li><!--
                --><li class="gridder-list vinyl lasercut accessories" data-griddercontent="#gridder-content-11" data-category="lasercut">
                    <img src="images/products/CellphoneSticker-NMS.jpg?text=11" alt="laser cut cellphone case sticker" class="img-fluid">
                    <p>Cellphone Sticker - "No Man's Sky"<br>
                        <strong>$5.00</strong></p>    
                 
            </ul>

    <!-- Gridder product detai pop-up sections -->
            <div id="gridder-content-1" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/Tile_Storage_pic.jpg?text=1" alt="Tile Storage" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>"Terraforming Mars" Tile Storage</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  5/15/18</li>
                          <li><strong>Price:</strong>  $12.00 ea</li>
                        </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Terraforming Mars Tile Storage by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-2" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/DnDHorse.jpg?text=2" alt="D&D Horse for minis" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Horse Mount for D&D</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  9/22/16</li>
                          <li><strong>Price:</strong>  $2.00 ea</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Horse for D&D figures (http://www.thingiverse.com/thing:1844378) by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-3" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/TM_Specialty_Tiles.jpg?text=3" alt="TM Specialty Tiles" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>"Terraforming Mars" Specialty Terrain and Tray</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  8/31/18</li>
                          <li><strong>Price:</strong>  $20.00 per set</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Terraforming Mars Specialty Terrain by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-4" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/d20_closed.jpg?text=4" alt="D20 dice holder" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>D20 Dice Holder (Screw-top, non-countdown)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  9/21/19</li>
                          <li><strong>Price:</strong>  $15.00 ea</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>D20 Dice Holder (Screw top, non-countdown) by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-5" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/GloomhavenStandees.jpg?text=5" alt="Gloomhaven Standees" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>"Gloomhaven" Standee Bases (14 white, 10 yellow, 2 red, 10 +HP stands)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  8/10/17</li>
                          <li><strong>Price:</strong>  $50.00 per set</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>33mm Gloomhaven Standee Bases by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-6" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/PenguinPuzzles.jpg?text=6" alt="3D Penguin Puzzle" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Penguin Puzzle</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Toys</li>
                          <li><strong>Date Added:</strong>  12/27/17</li>
                          <li><strong>Price:</strong>  $20.00 ea</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Penguin Puzzle by JimmerJammer is licensed under the Creative Commons - Attribution - Non-Commercial license.</p>
                    </div>
                </div>
            </div> 
            <div id="gridder-content-7" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/PlayerCubeTrays.jpg?text=7" alt="Player Cube Trays" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>"Terraforming Mars" Player Cube Storage (Set of 5)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  5/15/18</li>
                          <li><strong>Price:</strong>  $20.00 per set</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Terraforming Mars Player Cube Trays by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-8" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/Shave_Soap_open.jpg?text=8" alt="Shave Soap Dish" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Shave Soap Dish</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Household</li>
                          <li><strong>Date Added:</strong>  9/3/19</li>
                          <li><strong>Price:</strong>  $10.00 ea</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Shave Soap Dish (fits 95g/3.3oz Art of Shaving soap) by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-9" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/SubPic.jpg?text=9" alt="Submarine for Underwater Cities game" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>"Underwater Cities" Submarines (Set of 3)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Board Games</li>
                          <li><strong>Date Added:</strong>  5/10/19</li>
                          <li><strong>Price:</strong>  $5.00 per set</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Underwater Cities Sub - Player Actions by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-10" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products//ArtDecoPlates.jpg?text=10" alt="Art Deco Lightswitch Plate" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Art Deco Lightswitch Plate</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  3D Print</li>
                          <li><strong>Cateogory:</strong>  Household</li>
                          <li><strong>Date Added:</strong>  10/15/19</li>
                          <li><strong>Price:</strong>  $5.00 ea</li>
                          </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>Art Deco Lightswitch Plate by JimmerJammer is licensed under the Creative Commons - Attribution - Non-Commercial - No Derivatives license.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-11" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/products/CellphoneSticker-NMS.jpg?text=11" alt="laser cut cellphone case sticker" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Cell Phone Sticker - No Man's Sky</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis.</p>
                        
                        <ul>
                          <li><strong>Maker:</strong>  Jimmer</li>
                          <li><strong>Make Type:</strong>  Vinyl</li>
                          <li><strong>Cateogory:</strong>  Accessory</li>
                          <li><strong>Date Added:</strong>  10/21/19</li>
                          <li><strong>Price:</strong>  $5.00 ea</li>
                        </ul>
                        <button class="purchase">Add To Cart</button>
                        <p class="license">License Attribution:<br>No Man's Sky Vinyl Cell phone Sticker by JimmerJammer is licensed under the Creative Commons - Attribution license.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ATTRIBUTION FOR GRIDDER -->
        <!-- no changes from base code were made by me save for presentational css changes for overapp appearance, media query breakpoints, and content-accomodation changes. -->
        
        <p class="license footnote">Gridder License Attribution:<br> Gallery makes use of <strong>Gridder</strong>, by <a href="http://www.oriongunning.com" target="_blank" title="orion gunning dot com">Orion Gunning</a>, via their <a href="https://github.com/oriongunning/gridder" target="_blank" title="Gridder Github Repo">Github</a>. This work is licensed under a <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" title ="Creative Commons Attribution 3.0 Unported License">Creative Commons Attribution 3.0 Unported License</a>. </p>
        

        <!-- END GRIDDER ATTRIBUTION -->

        <!-- JS via W3SChools.org - https://www.w3schools.com/howto/howto_js_filter_elements.asp - used to bring my dummy buttons to life -->

        <!-- START W3Schools.org js code for filters, with modifications for my class and id names -->
        <script>
        filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("gridder-list");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("filters");
var btns = btnContainer.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("is-checked");
    current[0].className = current[0].className.replace(" is-checked", "");
    this.className += " is-checked";
  });
}
</script>
<!-- END W3Schools.org js code elements -->

<!-- Gridder js and jquery code elements -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../dist/js/jquery.gridder.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                // REMOVE AND ADD CLICK EVENT 
                $('.doAddItem').on('click', function () {
                    $(".gridder").data('gridderExpander').gridderAddItem('TEST');
                });

                // Call Gridder
                $(".gridder").gridderExpander({
                    scrollOffset: 60,
                    scrollTo: "panel", // "panel" or "listitem"
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    onStart: function () {
                        console.log("Gridder Inititialized");
                    },
                    onExpanded: function (object) {
                        console.log("Gridder Expanded");
                    },
                    onChanged: function (object) {
                        console.log("Gridder Changed");
                    },
                    onClosed: function () {
                        console.log("Gridder Closed");
                    }
                });
            });
        </script>

        

 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <?php include 'includes/Ffooter.php'; ?>