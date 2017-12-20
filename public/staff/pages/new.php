<?php
require_once('../../../private/initialize.php');
    $page_set = find_all_pages();
    $page_count = mysqli_num_rows($page_set) + 1;
    $page["position"] = $page_count;


$test = $_GET['test'] ? $_GET['test'] : '';
if ($test == '404') {
    error_404();
} elseif ($test =='500') {
    error_500();
} elseif ($test =='redirect') {
    redirect_to(url_for('staff/pages/index.php'));
}
?>
<?php $page_title = 'Create Page';
include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('staff/pages/index.php'); ?>">&laquo; Back to list</a>
    <div class="page new">
        <h1>Create Page</h1>

        <form action="<?php echo url_for('/staff/pages/create.php'); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>"></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php 
                            for ($i=1; $i <= $page_count ; $i++) { 
                                echo "<option value=" . $i;
                                if ($page["position"] == $i) {
                                    echo " selected";
                                }
                                echo ">" . $i;
                                echo "</option>";
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
                <input type="submit" value="Create Page"/>
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>