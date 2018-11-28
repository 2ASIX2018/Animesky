<?php

class Serie{
    
    public function afigSerie($Idserie, $Nom, $Idioma, $Genere_genereid,$Valoracio,$FechaIni,$FechaFin){
        
        try{
            require_once "connexio.php";
            
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            
            $consulta = $dbCon->prepare('INSERT INTO `Capituls`
            (`IdCapituls`,
            `NumTempo`,
            `Numcap`,
            `Titol`,
            `Sinopsis`,
            `Duracio`,
            `Valoracio`,
            `serie_Idserie`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?);');

            
            echo("<br/>IdCapituls:".$IdCapituls);
            echo("<br/>NumTempo:".$NumTempo);
            echo("<br/>Numcap".$Numcap);
            echo("<br/>Titol".$Titol);
            echo("<br/>Sinopsis".$Sinopsis);
            echo("<br/>Duracio".$Duracio);
            echo("<br/>Valoracio".$Valoracio);
            echo("<br/>serie_Idserie".$serie_Idserie);
            
            $consulta->execute(array($IdCapituls, $NumTempo, $Numcap, $Titol, $Sinopsis, $Duracio, $Valoracio, $serie_Idserie ));

            print_r($dbCon->errorInfo());

            echo("Files afectades: ".$consulta->rowCount());
                        

            $dbCon=null;
            

        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }



    }


    public function NumSerie(){

    try{
        // Retorna el número de notícies en total

        // Fem la connexió
        require_once "connexio.php";

        $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
        $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
        $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
        // Preparem la consulta
        $consulta = $dbCon->prepare('SELECT count(*) FROM serie');
        
        // Executem la consulta
        $consulta->execute();

        $noticies=array();
        // Agafem el resultat
        $fila=$consulta->fetch();

        // Tanquem la connexió
        $dbCon=null;

        // tornem el resultat
        return $fila[0];

    } catch (PDOException $e){
        echo("Error:".$e->getMessage());
        $dbCon=null;
    }



        
    }

    public function llistaSeries(){
        try{
            require_once "connexion.php";
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT Idserie, Nom, Idioma, Genere_idGenere, Valoracio, FechaIni, FechaFin FROM serie ORDER BY FechaIni DESC');
            
            // Executem la consulta
            $consulta->execute();

            $series=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $serie["Idserie"]=$fila[0];
                $serie["Nom"]=$fila[1];
                $serie["Idioma"]=$fila[2];
                $serie["Genere_idGenere"]=$fila[3];
                $serie["Valoracio"]=$fila[4];
                $serie["FechaIni"]=$fila[5];
                $serie["FechaFin"]=$fila[6];
                array_push($series, $serie);
            }

            
            // Tanquem la connexió
            $dbCon=null;

            // tornem els resultats
            return $series;
            

        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }


    }

    public function lligCapituls(){
    try{
        require_once "connexion.php";
        
        // Fem la connexió
        $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
        $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
        $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
        
        // Preparem la consulta
        $consulta = $dbCon->prepare('SELECT C.idCapituls, C.NumTempo, C.Numcap, C.Titol, C.Sinopsis, C.Duracio, C.Valoracio, C.serie_Idserie 
        FROM serie S, Capituls C WHERE S.Idserie=1 AND C.idCapituls=S.Idserie');
        
        // Executem la consulta
        $consulta->execute();
        $capituls=array();
        // Agafem els resultats amb un bucle
        while($fila=$consulta->fetch()){
                $capitul["idCapituls"]=$fila[0];
                $capitul["NumTempo"]=$fila[1];
                $capitul["Numcap"]=$fila[2];
                $capitul["Titol"]=$fila[3];
                $capitul["Sinpsis"]=$fila[4];
                $capitul["Duracio"]=$fila[5];
                $capitul["Valoracio"]=$fila[6];
                $capitul["serie_Idserie"]=$fila[7];

                array_push($capituls, $capitul);
       }

        
        // Tanquem la connexió
        $dbCon=null;

        // tornem els resultats
        return $capituls;
        

    } catch (PDOException $e){
        echo("Error:".$e->getMessage());
        $dbCon=null;
    }


}
            
        
}


    ?>