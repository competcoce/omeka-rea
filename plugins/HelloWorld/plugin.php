<?php
 
// add plugin hooks
add_plugin_hook('public_append_to_items_show', 'hello_world_print_message');
add_plugin_hook('config', 'hello_world_config');
add_plugin_hook('config_form', 'hello_world_config_form');
 
// save plugin configuration page
function hello_world_config()
{
    // save the message as a plugin option
    set_option('hello_world_message', trim($_POST['hello_world_message']));
}
 
// show plugin configuration page
function hello_world_config_form()
{
    // create a form inputs to collect the user's message
    echo '<div id="hello_world_config_form">';
    echo '<label for="hello_world_message">Your Message:</label>';             
    echo text(array('name'=>'hello_world_message'), get_option('hello_world_message'), null);
}
 
function hello_world_print_message()
{
   // print a paragraph with the user's message
   echo '<p>Hello World, ' . get_option('hello_world_message') . '</p>';
}
 
?>