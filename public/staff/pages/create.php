<?php
    require_once('../../../private/initialize.php');
    if (is_post_request()) {
        //Handel value to sent by new.php
        $page = [];
        $page['menu_name'] = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
        $page['position'] = isset($_POST['position']) ? $_POST['position'] : '';
        $page['visible'] = isset($_POST['visible']) ? $_POST['visible'] : '';



      //  $result = insert_page($subject);
        

        $sql = "INSERT INTO pages ";
        $sql .= "(subject_id, menu_name, position, visible, content) "
        $sql .= "VALUES (";
        $sql .= "'" . $page['subject_id'] . "', ";
        $sql .= "'" . $page['menu_name'] . "', ";
        $sql .= "'" . $page['position'] . "', ";
        $sql .= "'" . $page['visible'] . "', ";
        $sql .= "'" . $page['content'] . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);

        $new_id = mysqli_insert_id($db);

        redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));
    } else {
        redirect_to(url_for('/staff/pages/new.php'));
    }
 ?>