<?php
function includeControllerExists(string $controllerName){
    $controllerPath = DOCROOT."controllers/".$controllerName.".php";
    if(file_exists($controllerPath)){
        include $controllerPath;
//        echo $controllerPath."<br />";
        return true;
    }else{
        return false;
    }
}
function callActionIfExist(string $action){
    $action = "action_".$action;
    if(function_exists($action)){
        $action();
        //Где Название ФУНКЦИИ????
        return true;
    }else{
        return false;
    }
}

function navigate($controller,$action){
    if(!includeControllerExists($controller)){
        echo "Controllers NOT FOUND!!";
        //TODO: 404
    }else if(!callActionIfExist($action)){
        echo "FUNCTION NOT FOUND!!";
        //TODO: 404
    }
}

function renderView(string $view, array $data = []){
    $viewFile = DOCROOT."views/".$view.".php";
    extract($data);
    include DOCROOT."template.php";
}