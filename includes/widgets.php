<?php 

function he_widgets() {
    register_sidebar(array(
        'name'          =>  __('Helping Eagles Sidebar', 'helpingeaglescustom'),
        'id'            =>  'he_sidebar',
        'description'   =>  'A simple widget for the custom theme'
    ));
};