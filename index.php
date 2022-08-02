<?php
include("conexao.php");
include("C:\wamp64\www\Encurtador\app\index.php");



if(strlen($_POST['links']) == 0){
    echo "Insira o link que pretende encurtar";
}else{

    
    $maiusculas = implode('', range('A', 'Z')); // ABCDEFGHIJKLMNOPQRSTUVWXYZ
    $minusculas = implode('', range('a', 'z')); // abcdefghijklmnopqrstuvwxyzy
    $numeros = implode('', range(0, 9)); // 0123456789

    $alphaNumeric = $maiusculas.$minusculas.$numeros; // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
    $string = '';
    $tamanho = 5; // numero de chars
    for($i = 0; $i < $tamanho; $i++) {
        $string .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
    }
    $link_curto = "http:localhost:8081/".$string;
    $links = filter_input(INPUT_POST, 'links', FILTER_SANITIZE_STRING);
    $result_links = "INSERT INTO  links_encurtados (link_actual, link_curto, data_actual, data_expira) VALUES ('$links', '$link_curto', NOW(), NOW())";
    $resultados_link = mysqli_query($mysqli, $result_links);

    //echo "http:localhost:8081/".$string; // ex: q02TAq3
}
   
    $consultas = "SELECT * FROM `links_encurtados` LIMIT 5";
    $con = $mysqli->query($consultas) or die($mysqli->error);

 

?>
<!DOCTYPE html>

<html lang="pt">
    <head> 
        <meta charset="utf-8">
        <title>Encurtador de LINKs</title>
</head>
<body>
    
    <form method="post" action="."  id="url_curto">
        <label> <h1>Insira o link:</h1></label>
        <input type="text" name="links"><br><br>
                <button type="submit" id="b_submit" onClick="refreshPage()">Encurtar</button>
    </form>

    <table border = 1>
        <tr>
            <td>Link Inserido</Link></td>
            <td>Link Encurtado</td>
            <td>Data do Encurtamento</td>
            <td>Data que expira o link</td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?>
        <tr>
             <td><?php echo $dado ["link_actual"];?></td>
             <td><a href='<?php echo $dado ["link_actual"];?>'><?php echo $dado ["link_curto"];?></a></td>
             <td><?php echo $dado ["data_actual"];?></td>
             <td><?php echo $dado ["data_expira"];?></td>
         </tr>


         <

        <?php } ?>
    </table><br><br>


    
       




</body>
</html>