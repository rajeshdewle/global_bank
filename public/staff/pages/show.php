<?php
    require_once('../../../private/initialize.php'); 

    $id = isset($_GET['id']) ? $_GET['id']: '1' ;
       // $id = $_GET['id'] ?? '1'; // php 7.0
    $page_title = "Show Page";
    include(SHARED_PATH . '/staff_header.php');

    $page = find_page_by_id($id)
?>

 <div id="content"> 
        <a class="back-link" href="<?php echo url_for('/staff/pages');?>">&laquo; Back to List</a>
        <div class="page show">
            <h1>Page: <?php echo $page['menu_name']; ?></h1>
            <div class="attributes">
                <dl>
                    <dt>Page Name:</dt>
                    <dd><?php echo $page['menu_name']; ?></dd>
                </dl>
                <dl>
                    <dt>Subect ID:</dt>
                    <dd><?php echo $page['subject_id']; ?></dd>
                </dl>
                <dl>
                    <dt>Position:</dt>
                    <dd><?php echo $page['position']; ?></dd>
                </dl>
                <dl>
                    <dt>Visible:</dt>
                    <dd><?php echo $page['visible']; ?></dd>
                </dl>
            </div>
        </div>
 </div>
