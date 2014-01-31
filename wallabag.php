<!doctype html>
<!--vim:set sw=4 ts=4 ft=html expandtab:-->
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Framabag — Features</title>

        <link rel="shortcut icon" href="./favicon.png">
        <link media="screen" rel="stylesheet" href="nav/lib/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/framabag.css">
        <link rel="stylesheet" href="css/framabag-responsive.css">
        <script src="nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="nav/nav.js" id="nav_js" type="text/javascript"></script>
    </head>
    <body id="body-faq-wallabag">
        <div id="content">
            <!-- - - - - - - - - - - - - - - - - - Framanews-nav - - - - - - - - - - - - - -->
            <div class="affix col-md-2 visible-lg visible-md" id="faq-wallabag-nav">
                <ul class="nav nav-list">
                    <li><a href="index.php">Homepage</a></li>
                    <!-- <li><a href="install.php">How install wallabag</a></li> -->
                </ul>
            </div>
            <!-- - - - - - - - - - - - - - - - - - /Framanews-nav - - - - - - - - - - - - - -->
            <div class="row" id="faq-wallabag">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1>
                        <span class="medium-title">wallabag FAQ</span>
                    </h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Save articles
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body lead">
                                    <p><small>You can save save an article in several ways.</small></p>
                                    <ul>
                                        <li class="lead"><small>with <strong><a href="https://addons.mozilla.org/firefox/addon/poche/">Firefox addon</a></strong></small></li>
                                        <li class="lead"><small>with <strong><a href="http://doc.wallabag.org/doku.php?id=users:chrome_extension">Chrome extension</a></strong></small></li>
                                        <li class="lead"><small>with <strong><a href="https://play.google.com/store/apps/details?id=fr.gaulupeau.apps.InThePoche">In the poche</a></strong> (Android — Google Play)</small></li>
                                        <li class="lead"><small>with <strong><a href="https://f-droid.org/repository/browse/?fdid=fr.gaulupeau.apps.Poche">poche</a></strong> (Android — F-Droid)</small></li>
                                        <li class="lead"><small>with <strong><a href="http://www.windowsphone.com/en-us/store/app/poche/334de2f0-51b5-4826-8549-a3d805a37e83">Poche</a></strong> (Windows Phone)</small></li>
                                        <li class="lead"><small>there's an empty field in the config page of your wallabag.</small></li>
                                        <li class="lead"><small>you can find a bookmarklet in the config page of your wallabag. Drag&drop it on your browser toolbar.</small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Mark articles as favorite
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body lead">
                                    <p><small>If you want to mark articles as favorite, you can click on the star in the toolbar. You can find the starred articles on the «&nbsp;favorites&nbsp;» page.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Tag articles
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body lead">
                                    <p><small>When you read an article, you can see a little pencil. Click on it, you can add tags to this article.</small></p>
                                    <p><small>You can retrieve all your tags on the «&nbsp;tags&nbsp;» page.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    Share articles by email or twitter
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body lead">
                                    <p><small>When you're reading an article, there is a toolbar: you can find an envelope icon and a twitter icon.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                    Read the saved links into a e-reader
                                </a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body lead">
                                    <p><small>First, you must install <a href="http://calibre-ebook.com/"><strong>Calibre</strong></a>, which is an e-book library management application, compatible with many e-book reader devices. Then, you must generate a token to enable RSS feeds. This can be done on your wallabag config page.</small></p>
                                    <p><small>You now need to open Calibre, click on the menu besides « Fetch News », then on « Add custom news source », copy the adress of your feed (unread, favorites or archive, as you wish) and paste it to the feed URL field. Enter a name and save with the « Add/Update Recipe » button, then close.</small></p>
                                    <p><small>Finally, back to the previous menu, click on Schedule news download. You can schedule it if you want, but all you need right now is to click the «&nbsp;Download now&nbsp;» button. The download might take some time and get stuck to 1% for a while, but it should finally work. When that's done, you can refer to <a href="http://calibre-ebook.com/help"><strong>Calibre's documentation</strong></a> to know how to send the generated ebook to your devices.</small></p>
                                </div>
                            </div>
                        </div>

                        <!--<div class="panel panel-default">-->
                            <!--<div class="panel-heading">-->
                                <!--<a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--<div id="collapseThirteen" class="panel-collapse collapse">-->
                                <!--<div class="panel-body lead">-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="col-md-2 visible-xs visible-sm" id="faq-wallabag-nav">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="index.php">Homepage</a></li>
                    <!-- <li><a href="install.php">How install wallabag</a></li> -->
                </ul>
            </div>
        </div> <!-- #content -->
    </body>
</html>
