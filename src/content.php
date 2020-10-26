<body>
    
<?php

    $json_data = file_get_contents("data.json");
    $json = json_decode($json_data,true);

    $titlePage = $json['pageTitle'];
    $subtitlePage = $json['pageSubtitle'];
    $sections = $json['sections'];
    // echo $sections[0]['name'];

    // for($i=0;$i<count($sections);$i++){
    //     echo $sections[$i]['name'];
    // }

    function getCategories(){
        echo "KATEGORIE";
    }

   

?>

<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="row">
                <h2><?php echo $titlePage ?></h2>
            </div>
        </div>
        <div class="col-lg-7">&nbsp;</div>
    </div>

    <?php
        for($i=0;$i<count($sections);$i++){
            $name=$sections[$i]['name'];
            echo "
            <div class='row dashboard__section'>
                <div class='col-lg-12'>
                    <div class='row'>
                        <h3>".$name."</h3>
                    </div> 
                    <div class='row'>
                        
                    </div>
                </div>
            </div>
            ";
        }
            ?>

</div>