<?php
function infoLogin()
{
    $ci = get_instance();
    if (!$ci->session->userData('username')) {
        redirect('login');
    }
}
function cekLogin()
{
    $ci = get_instance();
    if (!$ci->session->userData('username')) {
        redirect('login');
    }
}

function cekUser()
{
    $ci = get_instance();
    $user = $ci->db->get_where('tb_user', ['username' => $ci->session->userData('username')])->row_array();
    if ($user['role'] == 'admin') {
        # code...
    } else {
        redirect('login/block');
    }
}
