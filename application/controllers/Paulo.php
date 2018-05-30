<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mateus extends CI_Controller {
  public function sobre()
  {
    //para cada controlador coloca 'image' com o caminho do arquivo da foto
    //de cada membro
    $data['image'] = base_url("images/paulo.jpeg");
    $data['description'] = " oi sou o Paulo Victor, graduando em engenharia da
     computação pela UFC campus Sobral, programador junior me especializando em desenvolvimento web, mobile, bem como na criação e gerenciamentos de moodles para instituições de ensino. ";
    $this->load->view('header');
    $this->load->view('body',$data);

  }
}
