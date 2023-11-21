<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('login');
    } else {
        $role_id = $ci->session->userdata('role_id');

        $userAccess = $ci->db->get_where('user', [
            'role_id' => $role_id,
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('login/blok');
        }
    }
}