<?php

if(!function_exists('sidemenu'))
{
  function sidemenu($active=""){
      $CI =& get_instance();
      $CI->load->library('session');
      $CI->load->library('auth');
      $CI->load->model('M_menu', 'menu', true);
      $CI->load->model('M_menu_admin', 'menu_admin', true);

      $is_logged_admin = $CI->session->userdata('is_logged_admin');
      $level_id = $is_logged_admin['level_id'];


      if($CI->menu_admin->count_all(array('status'=>'A', 'level_id'=>$level_id)) > 0)
      {
          foreach ($CI->menu_admin->grid_all('b.id AS id, b.url AS url, b.nama AS nama, b.icon AS icon', 'b.urutan', 'ASC', '', '', array('b.status'=>'A', 'level_id'=>$level_id)) as $row) {
            $url = ($row->url=="#")?"javascript:;":site_url($row->url);

            echo "<li>";
              echo "<a class='waves-effect' href='".$url."'>";
              echo "<i class='material-icons'>".$row->icon."</i>".$row->nama;
              echo "</a>";
            echo "</li>";
          }
      }
  }
}
 ?>
