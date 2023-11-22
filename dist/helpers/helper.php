<?php
    function getListTodo(){
        $resultado = selectSQL("SELECT * FROM todo ORDER BY position ASC");
        return $resultado;
    }

    function editPosition($id, $position){
        iduSQL("UPDATE todo SET position = '$position' WHERE id='$id'");
    }

    function getListActive(){
        $resultado = selectSQL("SELECT * FROM todo WHERE estado =''");
        return $resultado;
    }
    
    function getStatus($id){
        $resultado = selectSQLUnico("SELECT estado FROM todo WHERE id='$id'");
        return $resultado;
    }

    function deleteTodo($id){
        iduSQL("DELETE FROM todo WHERE id='$id'");
    }

    function createTodo($content, $position){
        iduSQL("INSERT INTO todo (content, position) VALUES ('$content', '$position')");
    }

    function editStatus($id, $status){
        iduSQL("UPDATE todo SET estado = '$status' WHERE id='$id'");
    }

    function getTheme(){
        $resultado = selectSQLUnico("SELECT color FROM tema");
        return $resultado['color'];
    }

    function changeTheme(){
        if(getTheme() == "light"){
            iduSQL("UPDATE tema SET color = 'dark'");
        }
        else{
            iduSQL("UPDATE tema SET color = 'light'");
        }
    }
?>