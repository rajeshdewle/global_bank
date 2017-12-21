<?php
    require_once('../../../private/initialize.php');

    if (!isset($_GET['id'])) {
        redirect_to(url_for('staff/pages/index.php'));
    }

    $id = $_GET['id'];
     if (is_post_request()) {
        //Handel value to sent by new.php
        $page_name = isset($_POST['page_name']) ? $_POST['page_name'] : '';
        $position = isset($_POST['position']) ? $_POST['position'] : '';
        $visible = isset($_POST['visible']) ? $_POST['visible'] : '';
        echo "From Parameters <br/>";
        echo "Menu Name: " . $page_name . "<br/>";
        echo "Position : " . $position . "<br/>";
        echo "Visible: " . $visible . "<br/>";
    }
    else {
        $subject = find_subject_by_id($id);
    }

    $page_title = 'Edit Page';
    include(SHARED_PATH . '/staff_header.php');
?>
<div id="content">
    <a class="back-link" href="<?php echo url_for('staff/subjects/index.php'); ?>">&laquo; Back to list</a>
    <div class="subject edit">
        <h1>Edit Subject</h1>

        <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h($id)); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>"></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php 
                            for ($i=1; $i <= $subject_count; $i++) { 
                                echo "<option value=\"{$i}\"";
                                if($subject["position"]==$i) {
                                    echo "selected";
                                }
                                echo ">{$i}</option>";
                            }
                         ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0"/>
                    <input type="checkbox" name="visible" value="1"/>                    
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Edit Page"/>
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>