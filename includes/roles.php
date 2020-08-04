<?php
/**************************** */
/* Versluis 2013 Theme
/* Roles and Capabilities
/* *************************** */

// define Supporter Role for ad-free browsing
// same capabilities as Subscriber
// @since 2.3

function guru_define_supporter_role () {
    add_role (
        'supporter',
        'Supporter', [
            'read' => true,
        ]
        );
}
add_action ('init', 'guru_define_supporter_role');
