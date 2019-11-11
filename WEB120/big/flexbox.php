<?php 
include "includes/config.php";
include "includes/header.php" ?>
        


<p>Page layout options have come a long way from the early days of the internet, and css elements have continually evolved to provide increasingly detailed  options for how to display content.  With the exception of Grid layouts, one of the most common in use today is Flexbox.</p>

<p>Flexbox was designed to break out of the 2-column magazine type layout and to avoid having to use floats for positioning elements.  It’s essentially a series of containers with items in them, and allows us to a flexible and responsive layout while positioning things together.  Flexbox can be used within other page styling aspects, too; it doesn’t have to apply to the entire page.</p> 

<p>Enacting flexbox is easy. Define a container as <code>display: flex;</code> and any items within this container become flex items.  Positioning of items within the container can be controlled in rows and columns, and the individual items can be aligned and put in whatever order you wish.  This allows for much more responsive flexibility than floats and block or inline would normally, as well as a wide variety in how elements can be displayed on a page.  These days, Flexbox is <a href="https://caniuse.com/#feat=flexbox" target="_blank" title="Can I Use dot com">fully usable in nearly every browser</a>, save for IE 11, which still only has partial support due to some display bugs.</p>

<p>There are a number of resources that provide excellent walkthroughs of getting started with Flexbox.  One I found especially helpful was freecodecamp.org’s “<a href="https://www.freecodecamp.org/news/flexbox-the-ultimate-css-flex-cheatsheet/" target="_blank" title="Ultimate CSS Checksheet">the Ultimate CSS Flex Checksheet</a>”. This provided a very digestible walkthrough and had some excellent animated examples of different css flexbox features and how they work, such as the one below:</p>

<figure>
<img src="images/flex-positioning.gif" alt="flex positioning gif">
    <figcaption>Source: freecodecamp.org, Scott Domes</figcaption>
</figure>



<p>They also included a link to a great tower-defense style game called <a href="http://flexdefense.com" target="_blank" title="Flex Defense Game">Flex Defense</a> (I played all 12 levels of, as research) where you position your towers using css flexbox. Here is a sample from the first level:</p>

<figure>
<img src="images/flexDefense.JPG" alt="flex defense game screenshot">
    <figcaption>Source: Flexdefense.com, Channing Allen</figcaption>
</figure>



<p>There are many other useful and informative guides and walkthroughs on how to use Flexbox, a few of which are listed below:</p>

<ul>
    <li>Developer.mozilla.org’s “Basic Concepts of Flexbox”</li>
    <li>W3 SChool’s “css3 flexbox”</li>
    <li>CSS Tricks’ “A Complete Guide to Flexbox”</li>
</ul>
    
 
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 
<h3>Citations</h3>
    <ol>
    <li class="h3">
                Carnes, Beau. <a href="https://www.freecodecamp.org/news/flexbox-the-ultimate-css-flex-cheatsheet/" target="_blank" title="CSS Flexbox cheatsheet"><cite>Flexbox - The Ultimate CSS Flex Cheatsheet (with Animated Diagrams!).</cite></a> <em>FreeCodeCamp.org</em>, FreeCodeCamp.org, 14 Oct. 2019.
    </li>         
    <li class="h3">
                “Basic Concepts of Flexbox.” <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank" title="Basic Concepts of Flexbox"><cite>Basic Concepts of Flexbox.</cite></a> <em>MDN Web Docs</em>, 11 Oct. 2019
    </li>
    <li class="h3">
                “CSS Flexbox.” <a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank" title="CSS Flexbox"><cite>CSS Flexbox.</cite></a> <em>W3schools - CSS Flexbox (Flexible Box)</em>.
    </li> 
    <li class="h3">
                “A Complete Guide to Flexbox: CSS-Tricks.”<a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank" title="A Complete Guide to Flexbox: CSS-Tricks"><cite>A Complete Guide to Flexbox: CSS-Tricks.</cite></a> <em>CSS</em>, 27 Oct. 2019.
    </li>
    </ol>
    
    
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include "includes/footer.php" ?>