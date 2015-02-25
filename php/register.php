<?php
session_start();
require_once('../assets/php/config.php');
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
    require_once('../assets/php/medoo.min.php');
    require_once('../assets/php/uploadClass.php');
    require_once('../assets/php/SimpleImage.php');
    $database = new medoo();

    //Insert into members
    $new_member = $database->insert('members', [
        'email' => $_POST['email'],
        'city' => $_POST['city'],
        'birthday' => $_POST['birthday'],
        'date' => time()
    ]);

    $new_user = $database->insert('user', [
        'username' => $_POST['username'],
        'password' => md5($_POST['password1']),
        'member' => $new_member
    ]);

    $update_member = $database->update('members', [
        'user' => $new_user,
        'picture' => 'images/profile/profile_'.$new_user.'.png'
    ], [
        'id' => $new_member
    ]);

    $new_activity = $database->insert('activities', [
        'user' => $new_user,
        'art' => 1,
        'date' => time()
    ]);

    if (!empty($_FILES['profilepicture'])) {

        $upload = Upload::factory('../images/profile');
        $upload->file($_FILES['profilepicture']);

        //set max. file size (in mb)
        $upload->set_max_file_size(2);

        //set allowed mime types
        $upload->set_allowed_mime_types(array(
            'image/gif',
            'image/jpeg',
            'image/png'
        ));

        $results = $upload->upload();
        $imgSizes = getimagesize($results['full_path']);

        if($imgSizes[0] < $imgSizes[1]) {

            $x1 = 0;
            $x2 = $imgSizes[0];
            $y1 = ($imgSizes[1]-$imgSizes[0])/2;
            $y2 = $imgSizes[1]-$y1;

        } elseif ($imgSizes[1] < $imgSizes[0]) {

            $x1 = ($imgSizes[0]-$imgSizes[1])/2;
            $x2 = $imgSizes[0]-$x1;
            $y1 = 0;
            $y2 = $imgSizes[1];
        }

        try {
            $img = new \abeautifulsite\SimpleImage($results['full_path']);
            if(isset($x1)) {
                $img->crop($x1, $y1, $x2, $y2)->fit_to_width(200)->save('../images/profile/profile_'.$new_user.'.png');
            } else {
                $img->fit_to_width(200)->save('../images/profile/profile_'.$new_user.'.png');
            }

        } catch(Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
        unlink($results['full_path']);
    }

    //TODO: E-Mail versenden

    $_SESSION["user"] = $new_user;
    $_SESSION["start"] = time();

    header('Location: '.$home_directory.'profil.php');
}
?>
<?php
    //Setup page
    $page_title = 'Base Template'; //TITLE
    $page_meta_desc = 'This ist the description'; //META > Description
    $custom_css = array();
    $show_audio = false;

    require_once('../tpl_header.php');
    require_once('../tpl_menu.php');
    ?>
    <div class="container text-center" style="margin-top: 5em;">
        <i class="fa fa-refresh fa-spin fa-5x"></i>
        <h3 class="text-1er">Dein Profil wird erstellt...</h3>
    </div>

<?php
require_once('../tpl_footer.php');
//Setup the JavaScripts you need
//IMPORTANT: if a file is self hosted, put the $home_directory var before the path
$javascripts = array();

require_once('../tpl_javascript.php');
?>
    <!-- Put the Custom JavaScripts here -->
    <!-- START JavaScripts -->

    <!-- END JavaScript -->
<?php
require_once('../tpl_end.php');
?>