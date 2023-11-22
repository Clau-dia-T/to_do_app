<?php 
    $theme = getTheme();

    $list_todo = getListTodo();
    $list_active = getListActive();

    $form = isset($_POST["todo"]);
    $form02 = isset($_POST["erase"]);
    $form03 = isset($_POST["clear"]);
    $form04 = isset($_POST["complete"]);
    $form05 = isset($_POST["themetoggle"]);

    if($form){
        $content = $_POST["todo"];
        $position = count($list_todo);
        createTodo($content, $position);
        header("Location:".$url_base);
        exit();
    }

    if($form02){
        $id = $_POST["erase"];
        deleteTodo($id);
        header("Location:".$url_base);
        exit();
    }

    if($form03){
        foreach($list_todo as $l){
            if($l["estado"] == "completed"){
                deleteTodo($l["id"]);
            }
        }
        header("Location:".$url_base);
        exit();
    }

    
    if($form04){
        $id = $_POST["complete"];
        $status = getStatus($id)["estado"];
        if($status == ""){
            $status = "completed";
        }
        else{
            $status = "";
        }
        editStatus($id, $status);
        header("Location:".$url_base);
        exit();
    }
    
    if($form05){
        changeTheme();
        header("Location:".$url_base);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head id="head">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    <script src="<?= $url_public; ?>js/function.js"></script>
    <link rel="icon" type="image" href="<?= $url_public; ?>css/img/favicon-32x32.png">
    <link rel="stylesheet" href="<?= $url_public; ?>css/main.css">
    <link rel="stylesheet" href="<?= $url_public; ?>css/fontes/fontes.css">
</head>