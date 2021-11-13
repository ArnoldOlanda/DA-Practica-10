<?php
//model.php
function open_database_connection()
{
    $link = mysqli_connect("localhost", "root", "admin", "todos");
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}
function close_database_connection($link)
{
    mysqli_close($link);
}
function get_all_todos()
{
    $link = open_database_connection();
    $consulta = "SELECT id, title, description from todo";
    $result = mysqli_query($link, $consulta);
    $todos = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $todos[] = $row;
    }
    close_database_connection($link);
    return $todos;
}
