<?php if ( function_exists('register_sidebar') ) {
    register_sidebar(); }

function widget_water_search() { ?>
<li id="search" class="widget widget_search">
<h2 class="widgettitle">Search</h2>
<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div>
<input type="text" name="s" id="s" size="15" />
</div>
</form>
</li>
<?php }

if ( function_exists('register_sidebar_widget') ) {
register_sidebar_widget(__('Search'), 'widget_water_search'); }

$themename = "Water";
$shortname = "water";
$options = array (
    
    array(    "name" => "Background color",
            "id" => $shortname."_body_bgcolor",
            "std" => "#FFF",
            "type" => "text"),

    array(    "name" => "Header image (full URL with http:// or filename if in theme folder)",
            "id" => $shortname."_header_image",
            "std" => "header.jpg",
            "type" => "text"),
    
    array(    "name" => "Font",
            "id" => $shortname."_font_family",
            "type" => "select",
            "std" => '"Trebuchet MS", sans-serif',
            "options" => array('"Trebuchet MS", sans-serif', 'Verdana, sans-serif', 'Arial, sans-serif', 'Georgia, serif')),
    
    array(    "name" => "Text color",
            "id" => $shortname."_body_color",
            "std" => "#333",
            "type" => "text"),

    array(    "name" => "Main color one",
            "id" => $shortname."_maincolor_1",
            "std" => "#73A533",
            "type" => "text"),

    
    array(    "name" => "Body font color",
            "id" => $shortname."_maincolor_2",
            "std" => "#0092C8",
            "type" => "text"),

    array(    "name" => "Gray shade one",
            "id" => $shortname."_gray_1",
            "std" => "#CCC",
            "type" => "text"),

    array(    "name" => "Gray shade two",
            "id" => $shortname."_gray_2",
            "std" => "#AAA",
            "type" => "text"),

    
    array(    "name" => "Gray shade three",
            "id" => $shortname."_gray_3",
            "std" => "#F3F3F3",
            "type" => "text")       
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "Current Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">

<table class="optiontable">

<?php foreach ($options as $value) { 
    
if ($value['type'] == "text") { ?>
        
<tr valign="top"> 
    <th scope="row"><?php echo $value['name']; ?>:</th>
    <td>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
    </td>
</tr>

<?php } elseif ($value['type'] == "select") { ?>

    <tr valign="top"> 
        <th scope="row"><?php echo $value['name']; ?>:</th>
        <td>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $option) { ?>
                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>

<?php 
} 
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}

function mytheme_wp_head() { ?>
<link href="<?php bloginfo('template_directory'); ?>/style.php" rel="stylesheet" type="text/css" />
<?php }

add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin'); ?>