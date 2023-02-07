<?php 
use common\components\Helper;
Helper::setConfigData();
$data = Helper::getConfigData();
// echo '<pre>';
$main_menu = [];
if(isset($data[1]) && !empty($data[1])){
  $json_menu_data = json_decode($data[1]['value'],true);
  // print_r($json_menu_data); 
}
// echo '</pre>';
// $menu_data = $data[1]
?>
<?php /*?>

<!-- container -->
<nav class="mash-menu" data-color="">
    <section class="mash-menu-inner-container">

        <!-- brand -->
        <ul class="mash-brand">
            <li>
                <a href="#"> <i class="fa fa-pagelines"></i> <img src="images/logo.png"> <span>Brand</span> </a>
                <!-- mobile button -->
                <button class="mash-mobile-button"><span></span></button>
            </li>
        </ul>

        <!-- list items -->
        <ul class="mash-list-items">
            <!-- active -->
            <li class="active"><a href="#"> <i class="fa fa-anchor"></i> Active</a></li>
            <li><a href="#">Vertical Tabs<i class="fa fa-caret-down fa-indicator"></i> </a>

                <!-- full size drop down -->
                <div class="drop-down-large">
                    <!-- vertical tabs container -->
                    <div class="vertical-tabs-container">
                        <!-- bootstrap start -->
                        <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                                <!-- bootstrap columns -->
                            <div class="col-sm-3 col-md-2 clearfix space-0">
                                <!-- vertical tab -->
                                <div class="vertical-tabs">
                                    <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                    <a class="active" href="#content-1">All Social Media <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-2">Typography <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-3">Image Card <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-4">Collapsible <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-5">List Items <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-6">Videos <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-7">Tables <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-8">Tabs <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                    <a href="#content-9">Extra <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                </div>
                            </div>

                            <div class="col-sm-9 col-md-10 space-0">
                                <!-- vertical tabs content container -->
                                <div class="vertical-tabs-content-container">
                                    <!-- this is vertical tabs content 1 -->
                                    <div id="content-1" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 1 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p> Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus velit
                                                            non facilisis. Mauhghris congue metus sebnvjd predltium lacbjfioinia. </p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 2 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p>
                                                            Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus
                                                            velit non facilisis. Mauhghris congue metus sebnvjd predltium
                                                            lacbjfioinia.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 3 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p>
                                                            Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus
                                                            velit non facilisis. Mauhghris congue metus sebnvjd predltium
                                                            lacbjfioinia.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 4 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p>
                                                            Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus
                                                            velit non facilisis. Mauhghris congue metus sebnvjd predltium
                                                            lacbjfioinia.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 5 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p>
                                                            Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus
                                                            velit non facilisis. Mauhghris congue metus sebnvjd predltium
                                                            lacbjfioinia.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4 col-md-2">
                                                    <!-- image 6 -->
                                                    <a href="#">
                                                        <img src="images/img.jpg" alt="img" class="thumbnail">

                                                        <p>
                                                            Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus
                                                            velit non facilisis. Mauhghris congue metus sebnvjd predltium
                                                            lacbjfioinia.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 2 -->
                                    <div id="content-2" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <h1>Heading 1</h1>

                                                    <h2>Heading 2</h2>

                                                    <h3>Heading 3</h3>
                                                    <h4>Heading 4</h4>
                                                    <h5>Heading 5</h5>
                                                    <h6>Heading 6</h6>

                                                    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <h2>Example body text</h2>

                                                    <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis
                                                       natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam
                                                       id dolor id nibh ultricies vehicula.</p>

                                                    <p>
                                                        <small>This line of text is meant to be treated as fine print.</small>
                                                    </p>

                                                    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>

                                                    <p>The following snippet of text is <em>rendered as italicized text</em>. </p>

                                                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                                                </div>

                                                <div class="clearfix hidden-md hidden-lg"></div>

                                                <div class="col-sm-6 col-md-4">
                                                    <h2>Emphasis classes</h2>

                                                    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortormauris nibh.</p>

                                                    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut idelit.</p>

                                                    <p class="text-warning">Etiam porta sem malesuada magna molliseuismod.</p>

                                                    <p class="text-danger">Donec ullamcorper nulla non metus auctorfringilla.</p>

                                                    <p class="text-success">Duis mollis, est non commodo luctus, nisi eratporttitor ligula.</p>

                                                    <p class="text-info">Maecenas sed diam eget risus varius blandit sitamet non magna.</p>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <h4>Blockquotes</h4>
                                                    <blockquote>
                                                        <small>This is an example quotation that uses the blockquote tag.
                                                        </small>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 3 -->
                                    <div id="content-3" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- heading -->
                                                    <h2>Card Reveal</h2>
                                                    <!-- image card Reveal -->
                                                    <div class="card reveal">
                                                        <!-- image -->
                                                        <div class="card-image">
                                                            <img src="images/img.jpg">
                                                        </div>
                                                        <!-- content -->
                                                        <div class="card-content">
                                                            <!-- title -->
                                                            <span class="card-title">Card Title</span>
                                                            <!-- link -->
                                                            <p><a href="#">This is a link</a></p>
                                                        </div>
                                                        <!-- hover content show -->
                                                        <div class="card-reveal">
                                                            <p>Here is some more information about this product that is only
                                                               revealed once clicked on.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- heading -->
                                                    <h2>Card Reveal</h2>
                                                    <!-- image card Reveal -->
                                                    <div class="card reveal">
                                                        <!-- image -->
                                                        <div class="card-image">
                                                            <img src="images/img.jpg">
                                                        </div>
                                                        <!-- content -->
                                                        <div class="card-content">
                                                            <!-- title -->
                                                            <span class="card-title">Card Title</span>
                                                            <!-- link -->
                                                            <p><a href="#">This is a link</a></p>
                                                        </div>
                                                        <!-- hover content show -->
                                                        <div class="card-reveal">
                                                            <p>Here is some more information about this product that is only
                                                               revealed once clicked on.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- image card -->
                                                    <div class="card">
                                                        <!-- image -->
                                                        <div class="card-image">
                                                            <img src="images/img.jpg">
                                                            <!-- title -->
                                                            <span class="card-title">Card Title</span>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="card-content">
                                                            <p>I am a very simple card. I am good at containing small bits
                                                               of information.</p>
                                                        </div>
                                                        <!-- link -->
                                                        <div class="card-action">
                                                            <a href="#">This is a link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- image card -->
                                                    <div class="card">
                                                        <!-- image -->
                                                        <div class="card-image">
                                                            <img src="images/img.jpg">
                                                            <!-- title -->
                                                            <span class="card-title">Card Title</span>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="card-content">
                                                            <p>I am a very simple card. I am good at containing small bits
                                                               of information.</p>
                                                        </div>
                                                        <!-- link -->
                                                        <div class="card-action">
                                                            <a href="#">This is a link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 4 -->
                                    <div id="content-4" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- heading -->
                                                    <h3>Introduction</h3>
                                                    <!-- paragraph -->
                                                    <p>Collapsibles are accordion elements that expand when clicked on. They allow you
                                                       to hide content that is not immediately relevant to the user. </p>
                                                    <!-- divider -->
                                                    <div class="divider"></div>
                                                    <!-- paragraph -->
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                       eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                       ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                       aliquip ex ea commodo consequat.</p>
                                                    <!-- href tag -->
                                                    <a class="btn btn-custom small space-0" href="#">Read more..</a>

                                                </div>

                                                <div class="col-md-4">
                                                    <!-- heading -->
                                                    <h3>Collapsible Accordion</h3>
                                                    <!-- collapsible accordion -->
                                                    <ul class="collapsible collapsible-accordion">
                                                        <!-- active class + first list item -->
                                                        <li class="active">
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-cloud"></i>First</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body">
                                                                <p>Lorem ipsum dolor sit amet,
                                                                   consectetur adipiscing elit, sed do eiusmod tempor
                                                                   incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                   minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                                   ut aliquip ex ea commodo consequat.</p>
                                                            </div>
                                                        </li>
                                                        <!-- second list item -->
                                                        <li>
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-map-marker"></i>Second</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet,
                                                                                             consectetur adipiscing elit, sed do eiusmod tempor
                                                                                             incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                                             minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                                                             ut aliquip ex ea commodo consequat.</p>
                                                            </div>
                                                        </li>
                                                        <!-- third list item -->
                                                        <li>
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-fire"></i>Third</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet,
                                                                                             consectetur adipiscing elit, sed do eiusmod tempor
                                                                                             incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                                             minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                                                             ut aliquip ex ea commodo consequat.</p>
                                                            </div>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="col-md-4">
                                                    <!-- heading -->
                                                    <h3>Expandable</h3>
                                                    <!-- collapsible expand -->
                                                    <ul class="collapsible collapsible-expandable">
                                                        <!-- first list item -->
                                                        <li>
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-cloud"></i>First</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body">
                                                                <a href="#">
                                                                    <img src="images/img.jpg" alt="img" class="thumbnail">

                                                                    <p> Lorem ipsum dolor sit amet, adipiscing elit. Praesent dapibus velit
                                                                        non facilisis. Mauhghris congue metus sebnvjd predltium lacbjfioinia. </p>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <!-- active class + second list item -->
                                                        <li class="active">
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-map-marker"></i>Second</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet,
                                                                                             consectetur adipiscing elit, sed do eiusmod tempor
                                                                                             incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                                             minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                                                             ut aliquip ex ea commodo consequat.</p></div>
                                                        </li>
                                                        <!-- third list item -->
                                                        <li>
                                                            <!-- heading -->
                                                            <div class="collapsible-header"><i class="fa fa-fire"></i>Third</div>
                                                            <!-- content -->
                                                            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet,
                                                                                             consectetur adipiscing elit, sed do eiusmod tempor
                                                                                             incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                                             minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                                                             ut aliquip ex ea commodo consequat.</p></div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 5 -->
                                    <div id="content-5" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <!-- list-items -->
                                                    <ul class="list-items">
                                                        <h4>List Items</h4>
                                                        <li><a href="#">Web Design <i class="fa fa-laptop fa-indicator"></i></a></li>
                                                        <li><a href="#">Web Development <i class="fa fa-gear fa-indicator"></i> </a></li>
                                                        <li><a href="#">Graphic Design <i class="fa fa-leaf fa-indicator"></i> </a></li>
                                                        <li><a href="#">Logo Design <i class="fa fa-pencil fa-indicator"></i> </a></li>
                                                        <li><a href="#">Mockup Design <i class="fa fa-magic fa-indicator"></i> </a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- list items -->
                                                    <ul class="list-items">
                                                        <h4>List Items</h4>
                                                        <li><a href="#"> <i class="fa fa-dot-circle-o"></i> HTML5 CSS3</a></li>
                                                        <li><a href="#"> <i class="fa fa-dot-circle-o"></i> Responsive Layout</a></li>
                                                        <li><a href="#"> <i class="fa fa-dot-circle-o"></i> Gradient Colors</a></li>
                                                        <li><a href="#"> <i class="fa fa-dot-circle-o"></i> Detailed Documentation</a></li>
                                                        <li><a href="#"> <i class="fa fa-dot-circle-o"></i> User Friendly</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <!-- list items -->
                                                    <ol class="order-items">
                                                        <h4>Order Items</h4>
                                                        <li><a href="#">HTML5 CSS3</a></li>
                                                        <li><a href="#">Responsive Layout</a></li>
                                                        <li><a href="#">Gradient Colors</a></li>
                                                        <li><a href="#">Detailed Documentation</a></li>
                                                        <li><a href="#">User Friendly</a></li>
                                                    </ol>
                                                </div>

                                                <div class="col-sm-6 col-md-3">
                                                    <h4>List Group</h4>
                                                    <!-- list groups -->
                                                    <div class="list-items-group"> <!--image-->
                                                        <div class="list-group-image">
                                                            <img src="images/img-2.png" alt="img">
                                                        </div>
                                                                                   <!-- title -->
                                                        <h4 class="list-group-heading">Tile with avatar</h4>
                                                                                   <!-- text -->
                                                        <p class="list-group-text">Donec id elit non mi porta gravida at eget metus.</p>
                                                                                   <!-- divider -->
                                                        <div class="divider"></div>
                                                    </div>

                                                    <!-- list groups -->
                                                    <div class="list-items-group">
                                                        <!--image-->
                                                        <div class="list-group-image">
                                                            <img src="images/img-2.png" alt="img">
                                                        </div>
                                                        <!-- title -->
                                                        <h4 class="list-group-heading">Tile with avatar</h4>
                                                        <!-- text -->
                                                        <p class="list-group-text">Donec id elit non mi porta gravida at eget metus.</p>
                                                        <!-- divider -->
                                                        <div class="divider"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 6 -->
                                    <div id="content-6" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h3>Responsive Video</h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- youtube videos -->
                                                    <!-- 4:3 aspect ratio -->
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tFhEh41aX2k"></iframe>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- youtube videos -->
                                                    <!-- 4:3 aspect ratio -->
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AASd5ewKNSw"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 7 -->
                                    <div id="content-7" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- heading -->
                                                    <h4>Tables Headline</h4>
                                                </div>
                                                <div class="col-md-6">

                                                    <!-- responsive table -->
                                                    <table class="mash-table">
                                                        <!-- table head -->
                                                        <thead>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table headings -->
                                                            <th class="mash-table-heading">Table</th>
                                                            <th class="mash-table-heading">Title</th>
                                                            <th class="mash-table-heading">Description</th>
                                                        </tr>
                                                        </thead>
                                                        <!-- table body -->
                                                        <tbody>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="col-md-6">

                                                    <!-- responsive table -->
                                                    <table class="mash-table">
                                                        <!-- table head -->
                                                        <thead>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table headings -->
                                                            <th class="mash-table-heading">Table</th>
                                                            <th class="mash-table-heading">Title</th>
                                                            <th class="mash-table-heading">Description</th>
                                                        </tr>
                                                        </thead>
                                                        <!-- table body -->
                                                        <tbody>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        <!-- table row -->
                                                        <tr>
                                                            <!-- table data -->
                                                            <td>Quisque</td>
                                                            <td>Maecenas a lorem aug</td>
                                                            <td>Maecenas a lorem aug</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 8 -->
                                    <div id="content-8" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- heading -->
                                                    <h4>Responsive Tabs</h4>

                                                    <!-- TAB NAVIGATION -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Tab Title</a></li>
                                                        <li><a href="#tab2" role="tab" data-toggle="tab">Tab Title</a></li>
                                                        <li><a href="#tab3" role="tab" data-toggle="tab">Tab Title</a></li>
                                                        <li><a href="#tab4" role="tab" data-toggle="tab">Tab Title</a></li>
                                                    </ul>
                                                    <!-- TAB CONTENT -->
                                                    <div class="tab-content">
                                                        <div class="active tab-pane fade in" id="tab1">
                                                            <!-- content start -->
                                                            <div class="row">
                                                                <div class="col-md-6 col-xs-12">
                                                                    <p>
                                                                        Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis
                                                                        mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque
                                                                        rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum,
                                                                        libero lectus mattis orci, ut commodo. Vivamus eget ante bibendum ar
                                                                        dui tempor.Ut eleifend libero sed neque rhoncus consequat.
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <a href="#">
                                                                        <img src="images/img.jpg" alt="img" class="thumbnail">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- content end -->
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2">
                                                            <!-- content start -->
                                                            <p>
                                                                Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nul
                                                                la, placerat vitae at, vehicula ut nunc. Quisque id tellus quis risu
                                                                s vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehi
                                                                cula ut nunc. Quisque id tellus quis risus vehicula vehicula ut turp
                                                                is. In eros nulla, placerat vitae at, vehicula ut nunc.
                                                            </p>
                                                            <!-- content end -->
                                                        </div>
                                                        <div class="tab-pane fade" id="tab3">
                                                            <!-- content start -->
                                                            <p>
                                                                Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, aug
                                                                ue et rutrum condimentum, libero lectus mattis orci, ut commodo.
                                                            </p>
                                                            <!-- content end -->
                                                        </div>
                                                        <div class="tab-pane fade" id="tab4">
                                                            <!-- content start -->
                                                            <p>
                                                                Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at el
                                                                it quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum
                                                                blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique
                                                                senectus et netus et malesuada fames ac turpis egestas.
                                                            </p>
                                                            <!-- content end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- heading -->
                                                    <h4>Panels</h4>
                                                    <!-- panel default -->
                                                    <div class="panel panel-default">
                                                        <!-- heading -->
                                                        <div class="panel-heading">Panel heading</div>
                                                        <!-- content -->
                                                        <div class="panel-body">
                                                            Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nul la, placerat
                                                            vitae at, vehicula ut nunc. Quisque id tellus quis risu s vehicula vehicula ut tur
                                                            pis. In eros nulla, placerat vitae at, vehi cula ut nunc. Quisque id tellus quis r
                                                            isus vehicula vehicula ut turp is. In eros nulla, placerat vitae at, vehicula ut n
                                                            unc.
                                                            <a href="#">Read more...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- heading -->
                                                    <h4>List Group and Badge</h4>
                                                    <!-- list group with badge -->
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <span class="badge">5</span>
                                                            Item 1
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge">1</span>
                                                            Item 2
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge">25</span>
                                                            Item 3
                                                        </li>
                                                    </ul>
                                                    <!-- end -->

                                                    <!-- clearfix -->
                                                    <div class="clearfix"></div>

                                                    <!-- list group with links -->
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item active">Item 1</a>
                                                        <a href="#" class="list-group-item">Item 2</a>
                                                        <a href="#" class="list-group-item">Item 3</a>
                                                    </div>
                                                    <!-- end -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- bootstrap end -->
                                    </div>
                                    <!-- this is vertical tabs content 9 -->
                                    <div id="content-9" class="vertical-tabs-content">
                                        <!-- bootstrap start -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- heading -->
                                                    <h4>List Group</h4>
                                                    <!-- list group -->
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item active">
                                                            <h5 class="list-group-item-heading">Item heading</h5>
                                                            <p class="list-group-item-text">Content goes here</p>
                                                        </a>
                                                        <a href="#" class="list-group-item">
                                                            <h5 class="list-group-item-heading">Item heading</h5>
                                                            <p class="list-group-item-text">Content goes here</p>
                                                        </a>
                                                        <a href="#" class="list-group-item">
                                                            <h5 class="list-group-item-heading">Item heading</h5>
                                                            <p class="list-group-item-text">Content goes here</p>
                                                        </a>
                                                        <a href="#" class="list-group-item">
                                                            <h5 class="list-group-item-heading">Item heading</h5>
                                                            <p class="list-group-item-text">Content goes here</p>
                                                        </a>
                                                    </div>
                                                    <!-- end -->
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- heading -->
                                                    <h4>Text Box</h4>
                                                    <!-- list group -->
                                                    <div class="well well-sm">
                                                        Vivamus eget ante bibendum arcu vehicula ultricies. Integer
                                                        venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend
                                                        libero sed neque rhoncus consequat. Maecenas tincidunt, augue
                                                        et rutrum condimentum, libero lectus mattis orci, ut commodo.
                                                        Vivamus eget ante bibendum ar dui tempor.Ut eleifend libero
                                                        sed neque rhoncus consequat.
                                                    </div>
                                                    <!-- end -->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- heading -->
                                                    <h4>Media</h4>
                                                    <!-- media -->
                                                    <div class="media">
                                                        <a class="media-left" href="#">
                                                            <img src="images/img.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Heading</h4>
                                                            Cras sit amet nibh libero, in gravida nulla.
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="media-left" href="#">
                                                            <img src="images/img.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Heading</h4>
                                                            Cras sit amet nibh libero, in gravida nulla.
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="media-left" href="#">
                                                            <img src="images/img.jpg">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Heading</h4>
                                                            Cras sit amet nibh libero, in gravida nulla.
                                                        </div>
                                                    </div>

                                                    <!-- end -->
                                                </div>
                                                <div class="col-sm-3">
                                                    <!-- heading -->
                                                    <h4>Slider</h4>
                                                    <!-- slider -->
                                                    <div class="carousel-row">
                                                        <div class="slide-row">
                                                            <div class="carousel slide slide-carousel" id="carousel-1" data-ride="carousel">
                                                                <!-- Indicators -->
                                                                <ol class="carousel-indicators">
                                                                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                                                </ol>

                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner">
                                                                    <div class="item active">
                                                                        <img src="images/img.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="images/img.jpg" alt="Image">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="images/img.jpg" alt="Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slide-content">
                                                                <h4>Example product</h4>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- bootstrap end -->
                    </div>
                </div>

            </li>
            <li><a href="#">Drop Down <i class="fa fa-caret-down fa-indicator"></i> </a>

                <!-- drop down -->
                <ul class="drop-down">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Hosting</a></li>
                    <li><a href="#">Design <i class="fa fa-caret-right fa-indicator hidden-xs"></i> <i class="fa fa-caret-down fa-indicator hidden-lg hidden-sm hidden-md"></i> </a>

                        <!-- drop down -->
                        <ul class="drop-down">
                            <li><a href="#"> <i class="fa fa-buysellads"></i> Level 2</a></li>
                            <li><a href="#"> <i class="fa fa-dashcube"></i> Level 2</a></li>
                            <li><a href="#"> <i class="fa fa-heartbeat"></i> Level 2</a></li>
                            <li><a href="#"> <i class="fa fa-medium"></i> Level 2 <i class="fa fa-caret-right fa-indicator hidden-xs"></i> <i class="fa fa-caret-down fa-indicator hidden-lg hidden-sm hidden-md"></i> </a>

                                <!-- drop down third level -->
                                <ul class="drop-down">
                                    <li><a href="#"> Level 3 </a></li>
                                    <li><a href="#"> Level 3 </a></li>
                                    <li><a href="#"> Level 3 </a></li>
                                    <li><a href="#"> Level 3 </a></li>
                                    <li><a href="#"> Level 3 </a></li>
                                    <div class="divider"></div>
                                    <li><a href="#"> Separated Link </a></li>
                                </ul>

                            </li>
                            <li><a href="#"> <i class="fa fa-leanpub"></i> Level 2</a></li>
                            <li><a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a></li>
                        </ul>

                    </li>
                    <li><a href="#">Vectors</a></li>
                    <li><a href="#">Web development <i class="fa fa-caret-left fa-indicator hidden-xs"></i> <i class="fa fa-caret-down fa-indicator hidden-md hidden-sm hidden-lg"></i> </a>

                        <!-- drop down align left side -->
                        <ul class="drop-down left">
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                            <li><a href="#">Level 2</a></li>
                        </ul>

                    </li>
                    <li><a href="#">Something else here</a></li>
                </ul>

            </li>
            <li><a href="#"> Tutorials <i class="fa fa-caret-down fa-indicator"></i> </a>
                <!-- medium size drop down -->
                <div class="drop-down-medium">
                    <!-- bootstrap start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-items space-0">
                                    <h4>Web Design</h4>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Web Development</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Wordpress Development</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Joomla Tutorial</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Theme Development</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-items space-0">
                                    <h4>Video Editing</h4>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Image Crop</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Noise Add</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> After Effect</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Focus Designing</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-items space-0">
                                    <h4>Programming</h4>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Java Tutorials</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> Wordpress Basic</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> PHP Development</a></li>
                                    <li><a href="#"> <i class="fa fa-circle-o"></i> SCSS Basic</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <!-- heading -->
                                <h3>Info</h3>
                                <!-- divider -->
                                <div class="divider"></div>
                                <!-- text -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at el
                                   it quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum
                                   blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique
                                   senectus et netus et malesuada fames ac turpis egestas.
                                   <!-- read more -->
                                    <a href="#">Read more...</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="#">Elements <i class="fa fa-caret-down fa-indicator"></i> </a>

                <!-- full width drop down -->
                <div class="drop-down-large">
                    <!-- bootstrap start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- heading -->
                                <h3>Buttons</h3>
                                <!-- buttons -->
                                <a href="#" class="btn btn-custom">Custom</a>
                                <a href="#" class="btn btn-primary">Primary</a>
                                <a href="#" class="btn btn-success">Success</a>
                                <a href="#" class="btn btn-info">Info</a>
                                <a href="#" class="btn btn-warning">Warning</a>
                                <a href="#" class="btn btn-danger">Danger</a>
                            </div>

                            <div class="col-sm-12">
                                <h3>Boxes</h3>
                            </div>

                            <div class="col-sm-3">
                                <!-- box orange -->
                                <div class="box-orange">
                                    Best check yo self, you're not looking too good. Nulla vitae elit libero,
                                    a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <!-- box red -->
                                <div class="box-red">
                                    Best check yo self, you're not looking too good. Nulla vitae elit libero,
                                    a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <!-- box green -->
                                <div class="box-green">
                                    Best check yo self, you're not looking too good. Nulla vitae elit libero,
                                    a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <!-- box blue -->
                                <div class="box-blue">
                                    Best check yo self, you're not looking too good. Nulla vitae elit libero,
                                    a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et.
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <!-- heading -->
                                <h3>Panels</h3>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel default -->
                                <div class="panel panel-default">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel heading</div>
                                    <!-- content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel primary -->
                                <div class="panel panel-primary">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel Primary</div>
                                    <!-- content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel success -->
                                <div class="panel panel-success">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel Success</div>
                                    <!--  content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel info -->
                                <div class="panel panel-info">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel Info</div>
                                    <!-- content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel warning -->
                                <div class="panel panel-warning">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel Warning</div>
                                    <!-- content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <!-- panel danger -->
                                <div class="panel panel-danger">
                                    <!-- heading -->
                                    <div class="panel-heading">Panel Danger</div>
                                    <!-- content -->
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- bootstrap end -->
                </div>

            </li>
            <li><a href="#">Text <i class="fa fa-caret-down fa-indicator"></i> </a>

                <!-- drop down full width -->
                <div class="drop-down-large">
                    <!-- bootstrap start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                   c turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis n
                                   eque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                   turpis egestas. </p>
                            </div>
                            <div class="col-md-6">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                   c turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis n
                                   eque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                   turpis egestas. </p>
                            </div>
                            <div class="col-md-6">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                   c turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis n
                                   eque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                   turpis egestas. </p>
                            </div>
                            <div class="col-md-4">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant et netus et malesuada fames a
                                   turpis egestas. </p>
                            </div>
                            <div class="col-md-4">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant et netus et malesuada fames a
                                   turpis egestas. </p>
                            </div>
                            <div class="col-md-4">
                                <!-- heading -->
                                <h4>Headline</h4>
                                <!-- paragraph -->
                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                                   adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                                   neque. Pellentesque habitant et netus et malesuada fames a
                                   turpis egestas. </p>
                            </div>
                        </div>
                    </div>
                    <!-- bootstrap end -->
                </div>

            </li>
            <li><a href="#">Contact <i class="fa fa-caret-down fa-indicator"></i> </a>

                <!-- drop down full width -->
                <div class="drop-down-large">
                    <!-- bootstrap start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <!-- contact form -->
                                <form class="form-horizontal" method="post" action="mail/nav-form.php">
                                    <!-- heading -->
                                    <h3>Contact Us</h3>
                                    <!-- text -->
                                    <p>Please fill in the following form to contact us <br> <br></p>
                                    <!-- name field -->
                                    <div class="col-md-3">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label>
                                            <input id="name" type="text" name="nav_form_subject" required="required" placeholder="Name">
                                        </label>
                                    </div>
                                    <!-- email field -->
                                    <div class="col-md-3">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label>
                                            <input id="email" type="email" name="nav_form_mail" required="required" placeholder="E-mail Address">
                                        </label>
                                    </div>
                                    <!-- message -->
                                    <div class="col-md-3">
                                        <label for="message">Message</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label>
                                            <textarea id="message" name="nav_form_message" required="required" placeholder="Message"></textarea>
                                        </label>
                                    </div>
                                    <!-- submit -->
                                    <div class="col-sm-2">
                                        <br>
                                        <button class="btn btn-custom space-0" type="submit">
                                            Submit Me !
                                            <i class="fa fa-circle-o-notch fa-spin"></i>
                                        </button>
                                    </div>
                                    <!-- clearfix -->
                                    <div class="clearfix"></div>
                                    <!-- form success or error message show -->
                                    <div class="form-notifier"></div>
                                </form>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <!-- register form -->
                                <form class="form-horizontal" method="post" action="#">
                                    <!-- heading -->
                                    <h3>Register Now</h3>
                                    <!-- name -->
                                    <div class="col-md-12">
                                        <br>
                                        <label>
                                            <input type="text" name="register_name" placeholder="Your name" required>
                                        </label>
                                    </div>
                                    <!-- email -->
                                    <div class="col-md-12">
                                        <label>
                                            <input type="email" name="register_email" placeholder="Email address" required>
                                        </label>
                                    </div>
                                    <!-- phone -->
                                    <div class="col-md-12">
                                        <label>
                                            <input type="text" name="register_phone" placeholder="Phone" required>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <!-- check box -->
                                        <input class="menu-checkbox" id="register-checkbox" type="checkbox">
                                        <label class="menu-checkbox" for="register-checkbox">Accept all conditions</label>
                                    </div>
                                    <!-- register button -->
                                    <div class="col-md-12">
                                        <br>
                                        <button class="btn btn-custom space-0" type="submit">Register me !</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <!-- heading -->
                                <h3>Forms Elements</h3>
                                <br>
                                <!-- check box -->
                                <input class="menu-checkbox" id="menu-checkbox" type="checkbox">
                                <label class="menu-checkbox" for="menu-checkbox">Checkbox</label>
                                <br>
                                <br>
                                <br>
                                <!-- toggle button -->
                                <input class="menu-toggle" id="menu-toggle" type="checkbox">
                                <label class="menu-toggle" for="menu-toggle">Toggle Button</label>
                                <br>
                                <br>
                                <br>
                                <!-- radio button -->
                                <input id="menu-radio-1" type="radio" name="mRadio" class="menu-radio" checked>
                                <label class="menu-radio" for="menu-radio-1">Option one is this</label>
                                <br>
                                <input id="menu-radio-2" type="radio" name="mRadio" class="menu-radio">
                                <label class="menu-radio" for="menu-radio-2">Option two can be something else</label>
                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- select -->
                                        <label class="menu-select-dropdown">
                                            <select class="menu-select">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bootstrap end -->
                </div>

            </li>
        </ul>


    </section>
</nav>
<?php */?>
<div class="main-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav>
              <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
              <div class="main-menu">
                  <div id="header_menu">
                      <img src="images/logo.png" width="160" height="70" alt="Mountain Sherpa" title="Mountain Sherpa" data-retina="true">
                  </div>
                  <a href="#" class="open_close" id="close_in"><i class="fa fa-times" aria-hidden="true"></i></a>
                  <ul>
                      <li class="active">
                          <a href="<?=Yii::$app->homeUrl;?>">Home <i class="icon-down-open-mini"></i></a>
                      </li>
                      <?php if(!empty($json_menu_data)){?>
                            <?php foreach($json_menu_data as $key=>$val){?>
                            <!-- Megha menu -->
                                <?php 
                                  $turl =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($val['name']))));
                                ?>
                              <?php if($val['menu_type']=='megha'){?>
                                <li class="megamenu submenu">
                                  <a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl]);?>" class="show-submenu-mega"><?=$val['name'];?> <span class="down-arrow-nav"><i class="fas fa-angle-down"></i></span></a>
                                  <div class="menu-wrapper">
                                    <div class="row">
                                    <?php if(is_array($val['sub_menu']) && !empty($val['sub_menu'])){?>
                                          <?php foreach($val['sub_menu'] as $key=>$sub1Val){?>
                                            <?php 
                                              $t1url =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($sub1Val['name']))));
                                            ?>
                                            <div class="col-md-6">
                                              <h3><a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl,'slug2'=>$t1url]);?>"><?=$sub1Val['name'];?></a></h3>
                                              <div class="row">
                                              <?php if(is_array($sub1Val['sub_menu']) && !empty($sub1Val['sub_menu'])){?>
                                                  <?php foreach($sub1Val['sub_menu'] as $key => $sub2Val){?>
                                                    <?php 
                                              $t2url =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($sub2Val['name']))));
                                            ?>
                                                    <div class="col-md-6">
                                                    <ul>
                                                        <li class="dropdown-header"><a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl,'slug2'=>$t1url,'slug3'=>$t2url]);?>"><?=$sub2Val['name'];?></a></li>
                                                        <?php if(is_array($sub2Val['sub_menu']) && !empty($sub2Val['sub_menu'])){?>
                                                          <?php foreach($sub2Val['sub_menu'] as $key => $sub3Val){?>
                                                              <li><a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$sub3Val['package_slug']]);?>"><?=$sub3Val['name'];?></a></li>
                                                          <?php }?>

                                                        <?php }?>
                                                    </ul>
                                                  </div>
                                                  <?php }?>
                                                <?php }?>
                                                
                                             
                                              </div>
                                            </div>
                                          <?php }?>
                                    
                                    <?php }?>
                                      </div><!-- End row -->
                                  </div><!-- End menu-wrapper -->
                              </li>
                              <?php }?>
                               <!-- Simple dropdown menu                              -->
                              <?php if($val['menu_type']=='simple-dropdown2'){?>
                                <li class="submenu">
                                    <a href="<?=Yii::$app->urlManager->createUrl(['find-your-trip','slug' => $turl]);?>" class="show-submenu"><?=$val['name'];?> <span class="down-arrow-nav"><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="non-mega">
                                    <?php if(is_array($val['sub_menu']) && !empty($val['sub_menu'])){?>
                                          <?php foreach($val['sub_menu'] as $key=>$sub1Val){?>
                                              <li><a href="<?=Yii::$app->urlManager->createUrl(['package/slug','slug'=>$sub1Val['package_slug']]);?>"><?=$sub1Val['name'];?></a></li>
                                          <?php }?>
                                      <?php }?>
                                    </ul>
                                </li>
                              <?php }?>
                              <!-- Link Menu               -->
                              <?php if($val['menu_type']=='simple'){?>
                                      <li><a href="<?=$val['url'];?>"><?=$val['name'];?></a></li>
                              <?php }?>
                           
                            <?php }?>
                      <?php }?>
                  </ul>
              </div><!-- End main-menu -->
          </nav>
        </div><!-- End of col-md-12 -->
      </div><!-- End of row -->
    </div><!-- End of container -->
  </div><!-- End of main-nav -->
