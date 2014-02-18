<html>
<head>
    <title> Widget</title>
</head>
<style type="text/css">
.linkedin-custom-widget {
    width: 400px;
    text-align: justify;
    border: 1px solid #eee;
    padding: 10px;
    float: left;
    -webkit-box-shadow: 0px 0px 3px 1px #ddd;
    box-shadow: 0px 0px 3px 1px #ddd; 
    font-family: "Arial, helvertica";
}
.company-detial-heading {
    width: 100px;
    float: left;
    text-transform: capitalize;
}
.company-detial {
    width: 300px;
    float: left;
}
.company-share-button {
    float: left;
    height:30px;
    width: 100%;
}
</style>
<body>
    
    <?php
        session_start();
     
        $config['baseUrl']             =   'http://mysite/testing/linkedin/auth.php';
        $config['callbackUrl']         =   'http://mysite/testing/linkedin/demo.php';
        $config['appKey']      =   'jfy3dq7qgpx4';
        $config['appSecret']      =   'hbTyl5C2H1vbDwhs';
       // $config['token'] = 'af1f2ddc-b2f5-4491-ab00-0f259ae783cd';
        include_once "linkedin.php";
     
        // First step is to initialize with your consumer key and secret. We will use an out-of-band oauth_callback
        $linkedin = new LinkedIn($config);
        //$linkedin->debug = true;
     
        // Now we retrieve a request token. It will be set as $linkedin->request_token
            $id = '3081860';
            $content = '3081860:(name,ticker,website-url,logo-url,specialties,description)';
            
            $getData = $linkedin->company($content) ;
        $xml = simplexml_load_string($getData['linkedin']);
        ?>
        <div class="linkedin-custom-widget">
        
            <div class="company-share-button">
                <div style="float:left;" >
                    <?php $arrayXml = (array) $xml; ?>
                    <a style="display:block;" target="_blank" href="https://<?php echo $arrayXml['website-url'] ?>" >
                        <img src="<?php echo $arrayXml['logo-url'] ?>" alt="<?php echo $arrayXml['name'] ?>" title="<?php echo $arrayXml['name'] ?>" />
                    </a>
                </div>
                <div style="float:right;" >
                    <script src="//platform.linkedin.com/in.js" type="text/javascript">
                     lang: en_US
                    </script>
                    <script type="IN/FollowCompany" data-id="3081860" data-counter="right"></script>
                </div>
            </div>
        <?php

        //echo $xml->getName() . "<br>";

        foreach($xml->children() as $child)
          {
            if( $child->getName() != 'logo-url' ) {
                /* start name */
                echo "<div class='company-detial-heading' >";
                echo str_replace("-", " ",$child->getName() );
                echo "</div>";
                /* end namae*/
                /* start name detail */
                echo "<div class='company-detial' >";
                echo $child[0];
                echo "</div>";
                /* end namae detail*/
            }
          }
    ?> 
    </div>
</body>
</html>
