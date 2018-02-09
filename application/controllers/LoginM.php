<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Controller {

    public function logmovil() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        echo json_encode("hola");
    }

    public function validar() {
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');


        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $data['idusuario'] = $user;

        if (!isset($user) || !isset($pass) || $user == "" || $pass == "") {
            $data['mensaje'] = "Debe ingresar un usuario y clave";
            $data['col'] = 0;
            $mensaje = "Debe ingresar un usuario y clave";
        } else {
            $cantusr = $this->usuario_model->get_cant_usuario_by_login($user);
            if ($cantusr == 1) {
                $row = $this->usuario_model->get_usuario_by_login($user);
                if ($row->usr_clave != md5($pass)) {
                    $data['mensaje'] = "La clave ingresada es incorrecta";
                    $mensaje = "La clave ingresada es incorrecta";
                    $data['col'] = 0;
                } else {

                    $sesionusuario = array('usrlogin' => $row->usr_login, 'usrnombre' => $row->usr_nombre, 'usrapellido' => $row->usr_apellido, 'usrperfil' => $row->perfil_id, 'usrid' => $row->usuario_id, 'usrcomuna' => $row->comuna_id);

                    if ($this->session->userdata('usrsesion') != NULL) {
                        $this->session->unset_userdata('usrsesion');
                    }
                    
                    if($row->perfil_id == 1 || $row->perfil_id == 2) {
                        $data['mensaje'] = "No tiene acceso al sistema";
                        $data['col'] = 0;
                    } else {
                        $this->session->set_userdata('usrsesion', $sesionusuario);
                        
                        $data['mensaje'] = "Bienvenido ".$row->usr_nombre;
                        //$data['mensaje'] = $row->usr_nombre . ", peerfil: " . $row->perfil_id;
                        $mensaje = $row->usr_nombre . ", perfil: " . $row->perfil_id;
                        $data['col'] = 1;
                        $data['userperfil'] = $row->perfil_id;
                    }


                    /*
                      if (element('usrperfil', $sesionusuario) == 1) {
                      redirect('/administrador/index', 'refresh');
                      } else if (element('usrperfil', $sesionusuario) == 2) {
                      redirect('/analista/index', 'refresh');
                      } else {
                      redirect('/recopilador/index', 'refresh');
                      }
                     * 
                     */
                }
            } else if ($cantusr == 0) {
                $data['mensaje'] = "Usuario no encontrado";
                $data['col'] = 0;
                $mensaje = "Usuario no existe";
            } else {
                $data['mensaje'] = "Ocurrió un error al validar los datos; contacte al administrador";
                $data['col'] = 0;
                $mensaje = "Ocurrió un error al validar los datos; contacte al administrador";
            }
        }

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        $data['divmensaje'] = "alert-danger display";
        echo json_encode($data);
    }

}
