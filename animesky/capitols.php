<html>
<body background="ultra.png">

<div class="row" >
       <?php

       require_once("models/serie.php");
       $gestorcapitols=new Serie();
       $capitols=$gestorcapitols->lligCapituls();

      for($i=0; $i<count($capitols); $i++)
      {
        if ($capitols[$i]["idCapituls"]==1)
      {
      
     ?>
      
      <div class="card-body">
              <h4 class="card-title"> <?php echo( $capitols[$i]["NumTempo"]); ?></h4>
              <p class="card-text"><?php echo ($capitols[$i]["Numcap"]); ?></p>
              <h4 class="card-title"> <?php echo( $capitols[$i]["Valoracio"]);?></h4>
    </div>
    </div>
    <a href="index.php">Torna</a>
    </div>
    <?php 
          } 
        }
         
        ?>
</div>
</html>

    

    
    

     