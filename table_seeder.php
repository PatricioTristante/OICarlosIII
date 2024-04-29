<?php
require_once('wp-load.php');
if(current_user_can('administrator')){
    require_once('./tablas/CentrosTableSeeder.php');
    require_once('./tablas/GradosTableSeeder.php');
//    require_once('./tablas/CategoriasTableSeeder.php');
    require_once('./tablas/CiclosTableSeeder.php');
    require_once('./tablas/Edicion2024TableSeeder.php');
//    require_once('./tablas/UsersTableSeeder.php');
//    require_once('./tablas/EdicionesTableSeeder.php');
//    require_once('./tablas/GruposTableSeeder.php');
//    require_once('./tablas/ParticipantesTableSeeder.php');
//    require_once('./tablas/Categorias_EdicionesTableSeeder.php');
//    require_once('./tablas/PatrocinadoresTableSeeder.php');
//    require_once('./tablas/PruebasTableSeeder.php');
//    require_once('./tablas/Resultados_PruebasTableSeeder.php');


    $centros = new CentrosTableSeeder();
    $centros->run();
    $grados = new GradosTableSeeder();
    $grados->run();
//    $categorias = new CategoriasTableSeeder();
//    $categorias->run();
    $ciclos = new CiclosTableSeeder();
    $ciclos->run();
    $edicion24 = new Edicion2024TableSeeder();
    $edicion24->run();
    //    $users = new UsersTableSeeder();
    // $users->run();
    // $ediciones = new EdicionesTableSeeder();
    // $ediciones->run();
    // $grupos = new GruposTableSeeder();
    // $grupos->run();
    // $participantes = new ParticipantesTableSeeder();
    // $participantes->run();
    // $categorias_ediciones = new Categorias_EdicionesTableSeeder();
    // $categorias_ediciones->run();
    // $patrocinadores = new PatrocinadoresTableSeeder();
    // $patrocinadores->run();
    // $pruebas = new PruebasTableSeeder();
    // $pruebas->run();
    // $resultados_pruebas = new Resultados_PruebasTableSeeder();
    // $resultados_pruebas->run();
    echo "<br>";
    echo "Pulse aqui para volver a la pagina de bases de datos";
    echo "<br>";
    echo "<a href='/base-datos'>Bases de datos</a>";
    echo "<br>";
    echo "Pulse aqui para volver a la pagina de inicio";
    echo "<br>";
    echo "<a href='/'>Inicio</a>";
    echo "<br>";
    echo "pulsa aqui para volver a wp-admin";
    echo "<br>";
    echo "<a href='/wp-admin'>wp-admin</a>";
}
else{
    echo "No tienes permisos para ejecutar este script";
    echo "<br>";
    echo "Pulse aqui para volver a la pagina de inicio";
    echo "<br>";
    echo "<a href='/'>Inicio</a>";
}

?>