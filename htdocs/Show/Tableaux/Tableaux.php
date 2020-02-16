<?php $title = 'Tableau'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

    <?php
      /* Tableau imposé */
      $a = [
        "19001" => ["Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Validation", "Validation"],
        "19002" => ["Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""],
        "19003" => ["", "", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Centre", "Centre", "Centre", "Centre", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "", "", "Validation"]
          ];
      ?>
<!------------------------------------------------------------------------------->


    <h3>EXERCICE 0</h3>     
    <h5>Tester le var_dump() sur le tableau donné</h5>
    
    <h6>  
    <?php
    
       var_dump($a);
       
    ?>
    </h6>

    <!--1ere case-->
    
    <h6>
    <?php
    
       var_dump($a[19001]);
       
    ?>
    </h6>
    
    <pre>
        var_dump($a);

        <hr>

        var_dump($a[19001]);
    </pre>

    
 <!------------------------------------------------------------------------------>

 
    <h3>EXERCICE 1</h3>
    <h5>Semaine de validation Groupe 19002</h5>
    
    <h6>
    <?php
    
       $i = -1;
       while ($a[19002][++$i] != "Validation"); // Pas besoin d'instruction
       $i++; // Le tab commence a 0 les semaines a 1
       echo "Groupe 19002 : <br>Validation la semaine $i.";
       
    ?>
    </h6>
    
    <pre>
       $i = -1;
       while ($a[19002][++$i] != "Validation"); 
       $i++; // Le tab commence a 0 les semaines a 1
       echo "Groupe 19002 : <br> Validation la semaine $i.";
    </pre>
    
    
<!------------------------------------------------------------------------------->
    

    <h3>EXERCICE 2</h3>
    <h5>Dernière semaine de stage Groupe 19001</h5>
    
    <h6>
    <?php
    
       $i = -1;
       while ($a[19001][++$i] != "Stage");
       while ($a[19001][$i++] == "Stage"); // Incremente en sortie de boucle 1 donc i--;
       $i --;
       echo "Groupe 19001 :<br>Stage fini la semaine $i";
       
    ?>
    </h6>
    
    <pre>
       $i = -1;
       while ($a[19001][++$i] != "Stage");
       while ($a[19001][$i++] == "Stage"); 
       $i --;
       echo "Groupe 19001 :<br>Stage fini la semaine $i"; 
    </pre>
    
    
 <!------------------------------------------------------------------------------> 
 
 
    
    <h3>EXERCICE 3</h3>";
    <h5>Tableau des codes des groupes</h5>
    
    <h6>
    <?php
    
        $i = -1;
        $grp = [];
        $grp1 = [];
        while (++$i != count($a))
        {
          $grp[$i] = key($a);
          next($a);
        }
        var_dump($grp);
        
    ?>
    </h6>

    <!--Version foreach-->
    <h6>
    <?php
    
        $i = 0;
        foreach ($a as $key => $value) {
            $grp1[$i] = $key;
            $i++;
        }
        var_dump($grp1);
        
    ?>
    </h6>
    
    
    <pre>
        $i = -1;
        $grp = [];
        $grp1 = [];
        while (++$i != count($a))
        {
          $grp[$i] = key($a);
          next($a);
        }
        var_dump($grp);

        <hr>

        $i = 0;
        foreach ($a as $key => $value) {
            $grp1[$i] = $key;
            $i++;
        }
        var_dump($grp1);
    </pre>
<!------------------------------------------------------------------------------->
    
    <h3>EXERCICE 4</h3>
    <h5>Durée du stage du Groupe 19003</h5>
    
    <h6>
    <?php
    
        $i = -1;
        while ($a[19003][++$i] != "Stage");
        $j = $i; // Sauvegarde de la valeur du début du stage
        while ($a[19003][++$i] == "Stage");
        $i = $i - $j; // Retire le debut de stage a la fin de stage 
        echo "Durée du stage du Groupe 19003 :<br>$i semaines.";
    ?>
    </h6>
    
    <pre>
        $i = -1;
        while ($a[19003][++$i] != "Stage");
        $j = $i; // Sauvegarde de la valeur du début du stage
        while ($a[19003][++$i] == "Stage");
        $i = $i - $j; // Retire le debut de stage a la fin de stage 
        echo "Durée du stage du Groupe 19003 :<br>$i semaines."; 
    </pre>

<?php Close(); ?>

    