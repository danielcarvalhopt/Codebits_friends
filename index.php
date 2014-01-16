<!DOCTYPE html>

<html>
<head>
  <title>My Codebits Friends</title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <link href="http://codebits.blogs.sapo.pt/data/rss" rel="alternate" title="RSS Feed" type="application/rss+xml">
  <!-- <link href="/css/reset-fonts-grids.css" rel="stylesheet" type="text/css" />
  <link href="/css/base-min.css" rel="stylesheet" type="text/css" />
  <link href="/css/screen.css?v50" rel="stylesheet" type="text/css" />
  <link href="/css/mobile.css?v1" rel="stylesheet" type="text/css" /> -->
  <meta content="Codebits 2014">
  <meta content="website">
  <meta content="https://codebits.eu/">
  <meta content="https://codebits.euhttps://codebits.eu/imgs/bot-og.png">
  <meta content="Codebits">
  <meta content="São três dias sem parar. Tecnologia, palestras, workshops, competição, e prémios. Tudo gratuito em Lisboa.">
  <link href="style.css" rel="stylesheet"><!--[if lt IE 9]>
  <link rel="stylesheet" href="/css/ink-ie7-min.css">
  <![endif]-->

  <script src="https://codebits.eu/js/codebits.min.js" type="text/javascript"></script>
  <script src="https://codebits.eu/js/AvatarMaker.js" type="text/javascript"></script>
  <style type="text/css">
.swfupload { position:absolute; left:0; top: 0; }
  </style>
  <script src="https://js.sapo.pt/SAPO/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/Validator/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/Variable/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/Dumper/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/String/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/Url/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Utility/Dimensions/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Dom/Event/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Component/Dialog/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Communication/Ajax/2.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Dom/Css/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Dom/Element/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Component/Tabs/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Effects/Core/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPO/Effects/Fade/0.1/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/SAPOWebAnalytics/" type="text/javascript"></script>
  <script src="https://js.sapo.pt/Bundles/Video.js" type="text/javascript"></script>
  <script src="https://codebits.eu/js/swfobject.js" type="text/javascript"></script>
  <script src="https://codebits.eu/js/js.js?v79" type="text/javascript"></script><!--  -->
</head>

<body class="pt" id="top">
  <div class="topbar cb-nav" id="main-nav">
    <div class="ink-grid">
      <nav class="ink-navigation spy-nav">
        <ul class="menu horizontal hide-large hide-medium push-left" id="main-nav-site">
          <li><button id="main-drawer"></button></li>
        </ul>

        <p class="mini-title hide-large hide-medium">CODEBITS</p>

        <ul class="menu horizontal hide-large hide-medium push-right" id="main-nav-user">
          <li><button id="user-drawer"></button></li>
        </ul>

        <ul class="menu horizontal hide-small push-left" id="site-nav">
          <li class="home"><a href="https://codebits.eu/">Ir para Codebits.eu</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="snap-content" id="content" tabindex="-1">
    <div class="ink-grid" id="intro">
      <section class="top-padding vertical-padding">
        <div class="column-group horizontal-gutters">
          <div class="large-10 medium-15 small-20"><img alt="watch a movie" src="https://codebits.eu/imgs/bot.png"></div>

          <div class="large-65 medium-85 small-80"><img alt="watch a movie" class="small-top-space" src=
          "https://codebits.eu/imgs/codebits.png"></div>

          <div class="large-25 medium-100 small-100 small-top-space small-align-center">
            <div class="large-100 medium-50 small-80 push-center">
              <p class="align-center">E OS MEUS AMIGOS</p>

              <p class="align-center"><span class="cb-status animated fadeInUp huge review">Já foram aceites?</span></p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="ink-grid">
      <div class="column-group horizontal-gutters vertical-padding">
        <div class="large-100 medium-100 small-100">
          <section id="user-profile">
            <form class="ink-form highlight top-space" id="profileform" method="post" name="profileform">
              <div class="control-group">
                <label for="email">Email</label>

                <div class="control">
                  <input id="email" name="u" type="text">
                </div>
              </div>

              <div class="control-group">
                <label for="p">Password</label>

                <div class="control">
                  <input id="p" name="p" type="password">
                </div>
              </div><button class="cb-button green push-right huge" id="submit_form" type="submit">Siga!</button>
            </form>

            <div class="separator below">
              <div class="column-group top-space vertical-gutters">
                <div class="large-100">
                  <h4>Amigos</h4><br>
                  <br>
                  <br>

                  <div class="column-group">
                    <?php
                      if (isset($_REQUEST['u'])){

                      $u=$_REQUEST['u'];
                      $p=$_REQUEST['p'];

                      $tokenrequest = file_get_contents('https://services.sapo.pt/Codebits/gettoken?user='.$u.'&password='.$p);
                      $tokenjson = json_decode($tokenrequest);
                      $token = $tokenjson->{'token'};

                      $response = file_get_contents('https://services.sapo.pt/Codebits/foaf/2613?format=xml&token='.$token);

                      $xml = new SimpleXMLElement($response);

                      $friends = $xml->children();
                      $friends_id;
                      $i = 0;

                      foreach ($friends as $f) {
                        $friends_id[$i] = (int)$f->id;
                        $i++;
                      }

                      foreach ($friends_id as $id) {
                        $finfo = file_get_contents('https://services.sapo.pt/Codebits/user/'.$id.'?token='.$token);
                        $data = json_decode($finfo);
                        if ((string)$data->{'status'}=="accepted"){
                          $color = "#3b9c2e";
                        }
                        elseif($data->{'status'}=="review"){
                          $color = "#e37536";
                        }
                        else{
                          $color = "#555";
                        }
                        if (strlen($data->{'name'}) > 30){
                         $name = substr($data->{'name'}, 0, 27);
                         $name.="...";
                        } else { $name = $data->{'name'};}
                        echo '<div class="large-25 medium-25 small-25" style="text-align:center"><span class="vcard">
                                <a class="url" href="https://codebits.eu/'.$data->{'nick'}.'"><img style="border-radius: 10%;border: 7px solid '.$color.'" class="photo" src="'.$data->{'avatar'}.'" style="width:100%;" title="'.$data->{'name'}.'"></a>
                                 <h6>'.$name.'<h6></span>

                              </div>';
                        }
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
