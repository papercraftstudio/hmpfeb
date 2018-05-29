<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_page');
        $this->load->model('m_event');

        $this->load->model('m_kajian');
        $this->load->model('m_perkuliahan');

        $this->load->helper('form');
    }

    public function index() {
        $vars['total_admin'] = $this->user->countAdmin();
        $vars['total_user'] = $this->user->countUser();
        $this->load->view('dasbor', $vars);
    }

    public function admin() {
        $vars['admin'] = $this->user->selectAll(['role' => 'admin']);
        $this->load->view('admin-dasbor', $vars);
    }

    public function pengguna() {
        $vars['user'] = $this->user->selectAll(['role' => 'user']);
        $this->load->view('pengguna-dasbor', $vars);
    }

    public function page() {
        $data['admin'] = $this->m_page->get_all_pages();
        
        $this->load->view('admin-list-page',$data);
    }

    public function edit_page() {
        $id = $this->input->get('id');
        $this->data['admin'] = $this->m_page->get_page($id);
        $this->load->view('admin-edit-page',$this->data);
    }

    public function edit_event() {
        $id = $this->input->get('id');
        $this->data['admin'] = $this->m_event->get_event($id);
        $this->load->view('admin-edit-event',$this->data);
    }

    public function add_event() {
        $this->data['admin'] = "";
        $this->load->view('admin-add-event',$this->data);
    }

    public function delete_event() {
        $id = $this->input->get('id');

        //delete data in db
        $this->m_event->delete($id);

        //load view
        redirect('dasbor/events');
    }

    public function add_kajian() {
        $this->data['admin'] = "";
        $this->load->view('admin-add-kajian',$this->data);
    }

    public function delete_kajian() {
        $id = $this->input->get('id');

        //delete data in db
        $this->m_kajian->delete($id);

        //load view
        redirect('dasbor/kajian');
    }

    public function added_event() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          'url' => $this->input->post('url'),
          'date' => date("Y-m-d H:i:s")

      );
        //update to db
        $this->m_event->insert($data);

        //load view
        redirect('dasbor/events');        
    }


    public function editted_page() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content')

      );

        $id = $this->input->post('id');

        //update to db
        $this->m_page->update($data,$id);

        //load view
        redirect('dasbor/page');
    }


    public function editted_event() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          'url' => $this->input->post('url')

      );

        $id = $this->input->post('id');

        //update to db
        $this->m_event->update($data,$id);

        //load view
        redirect('dasbor/events');
    }    

    public function events() {
       $data['admin'] = $this->m_event->get_all_events();

       $this->load->view('admin-list-event',$data);
   }

   public function make_admin() {
    $email=$this->input->post('email');
    $this->user->make_admin($email);
    redirect('dasbor/pengguna');
}

public function make_user() {
    $email=$this->input->post('email');
    $this->user->make_user($email);
    redirect('dasbor/admin');

}


public function kajian() {
    $data['admin'] = $this->m_kajian->get_all_kajian();
    $this->load->view('admin-list-kajian',$data);
}

public function edit_kajian() {
    $id = $this->input->get('id');
    $this->data['admin'] = $this->m_kajian->get_kajian($id);
    $this->load->view('admin-edit-kajian',$this->data);
}    

public function added_kajian() {
    $data = array(

      'title' => $this->input->post('title'),
      'content' => $this->input->post('content'),

  );
        //update to db
    $this->m_kajian->insert($data);

        //load view
    redirect('dasbor/kajian');        
}

public function editted_kajian() {
    $data = array(

      'title' => $this->input->post('title'),
      'content' => $this->input->post('content'),


  );

    $id = $this->input->post('id');

        //update to db
    $this->m_kajian->update($data,$id);

        //load view
    redirect('dasbor/kajian');
}  

    //galir
public function galir() {
    $data['admin'] = $this->m_perkuliahan->list_galir();
    $this->load->view('admin-list-galir',$data);
}

public function list_edit_galir() {
    $id=$this->input->post('id');
    $data['admin'] = $this->m_perkuliahan->select_edit_galir($id);
    $this->load->view('admin-edit-galir',$data);
}

public function edit_galir() {
    $data['kode_matkul'] = $this->input->post('kode_matkul');
    $data['nama_matkul'] = $this->input->post('nama_matkul');
    $data['semester'] = $this->input->post('semester');
    $data['sks'] = $this->input->post('sks');
    $data['kosyarat'] = $this->input->post('kosyarat');
    $id = $this->input->post('id');

    $this->m_perkuliahan->update_galir($data,$id);

    redirect('dasbor/galir');
}

public function delete_galir() {
    $id= $this->input->post('id');
    $this->m_perkuliahan->delete_galir($id);

    redirect('dasbor/galir');
}


public function list_add_galir() {
    $this->data['admin'] = "";
    $this->load->view("admin-add-galir",$this->data);
}

public function add_galir() {
    $data['kode_matkul'] = $this->input->post('kode_matkul');
    $data['nama_matkul'] = $this->input->post('nama_matkul');
    $data['semester'] = $this->input->post('semester');
    $data['sks'] = $this->input->post('sks');
    $data['kosyarat'] = $this->input->post('kosyarat');

    $this->m_perkuliahan->add_galir($data);

    redirect('dasbor/galir');
}

    //dosen
public function dosen() {
    $data['admin'] = $this->m_perkuliahan->list_dosen();
    $this->load->view('admin-list-dosen',$data);
}

public function list_edit_dosen() {
    $id=$this->input->post('id');
    $data['admin'] = $this->m_perkuliahan->select_edit_dosen($id);
    $this->load->view('admin-edit-dosen',$data);
}

public function edit_dosen() {
    $data['nama'] = $this->input->post('nama');
    $data['alamat'] = $this->input->post('alamat');
    $data['matakuliah'] = $this->input->post('matakuliah');
    $data['gender'] = $this->input->post('gender');
    $data['dob'] = date("Y-m-d", strtotime($this->input->post('dob')));
    $id = $this->input->post('id');

    $this->m_perkuliahan->update_dosen($data,$id);

    redirect('dasbor/dosen');
}

public function delete_dosen() {
    $id= $this->input->post('id');
    $this->m_perkuliahan->delete_dosen($id);

    redirect('dasbor/dosen');
}

public function list_add_dosen() {
    $this->data['admin'] = "";
    $this->load->view("admin-add-dosen",$this->data);
}

public function add_dosen() {
    $data['nama'] = $this->input->post('nama');
    $data['alamat'] = $this->input->post('alamat');
    $data['matakuliah'] = $this->input->post('matakuliah');
    $data['gender'] = $this->input->post('gender');
    $data['dob'] = date("Y-m-d", strtotime($this->input->post('dob')));

    $this->m_perkuliahan->add_dosen($data);

    redirect('dasbor/dosen');
}

public function galery() {
        //$data['admin'] = $this->m_galery->get_all_galery();
    $data['admin'] = '';
    $this->load->view('admin-list-galery',$data);
}

public function add_galery() {
    $this->data['admin'] = "";
    $this->load->view('admin-add-galery',$this->data);
}

public function added_galery() {

    $this->load->model('M_Galery');

    //upload
    $config = array(
        'upload_path' => "./uploads/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
    $this->load->library('upload', $config);
    if($this->upload->do_upload())
    {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('upload_success',$data);
    }
    else
    {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('custom_view', $error);
    }     

    //get upload data
    $upload_data = $this->upload->data();
    $slide = $this->input->post('slideshow'); 
    echo("<pre>");
    //var_dump($slide);
    echo("</pre>");

    //check slideshow checkbox
    $s = (isset($slide)) ? 1 : 0;

    //save to db
    $row = array(

      'event' => $this->input->post('event'),
      'file_name' => $upload_data['file_name'],
      'content' => $this->input->post('content'),
      'url' => $this->input->post('url'),
      'slideshow' =>$s

  );

    $this->M_Galery->insert($row);


}

public function album() {

    $this->load->model('M_Album');
    $this->load->model('M_Photo');
    //get current album
    $album = $this->uri->segment(3);
    if(isset($album)) { //if album set
        $data['admin'] = $this->M_Photo->get_photo_by_album($album);
        $data['admin']['album'] = $album;
        $this->load->view('admin-list-single-album',$data);
    } else {
        $data['admin'] = $this->M_Album->get_all_album();
        $this->load->view('admin-list-album',$data);
    }

    
}

public function add_album() {
    $this->data['admin'] = "";
    $this->load->view('admin-add-album',$this->data);

}

public function added_album() {
    $this->load->model('M_Album');
    $data = array(

      'title' => $this->input->post('title'),
      'content' => $this->input->post('content'),


  );
    //update to db
    $this->M_Album->insert($data);

        //load view
    redirect('dasbor/album'); 

}

public function delete_album() {
    $id = $this->uri->segment('3');
    $this->load->model('M_Album');
    $this->M_Album->delete($id);
    redirect('dasbor/album');
}

public function add_photo() {
    $this->data['admin'] = $this->uri->segment(3);
    
    $this->load->view('admin-add-photo',$this->data);
}

public function added_photo() {
    $this->load->model('M_Photo');

    //upload
    $config = array(
        'upload_path' => "./uploads/",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1500",
            'max_width' => "1500"
        );
    $this->load->library('upload', $config);
    if($this->upload->do_upload())
    {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('upload_success',$data);
    }
    else
    {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('custom_view', $error);
    }     

    //get upload data
    $upload_data = $this->upload->data();
    $url = $this->input->post('url'); 
    //echo("<pre>");
    //var_dump($slide);
    //echo("</pre>");

    //check slideshow checkbox
    if(!isset($url)) {
        $url = NULL;
    }
    //var_dump($this->uri->segment(3));

    //save to db
    $album = $this->uri->segment(3);
    $row = array(

      'file_name' => $upload_data['file_name'],
      'album' => $album,
      'content' => $this->input->post('content'),
      'url' => $this->input->post('url'),
      

  );

    $this->M_Photo->insert($row);
    redirect("dasbor/album/$album");

}

function delete_photo() {
    $this->load->helper('file');
    $this->load->model('M_Photo');

    $id = $this->uri->segment(4);
    $album = $this->uri->segment(3);

    //hapus foto
    $file_name = $this->M_Photo->get_file_name($id);
    
    //hapus foto di disk
    unlink("./uploads/$file_name");
    //hapus foto di db
    $this->M_Photo->delete($id);


    //redirect
    redirect("dasbor/album/$album");

}

function set_slideshow() {
    $data['admin']['id'] = $this->uri->segment(4);
    $data['admin']['album'] = $this->uri->segment(3);
    $this->load->view("admin-set-photo-url",$data);

}

function setted_slideshow() {
    $id = $this->uri->segment(4);
    $album = $this->uri->segment(3);
    $this->load->model('M_Photo');
    var_dump($this->input->post('url'));
    $data = array(
        'url' => $this->input->post('url')
    );
    $this->M_Photo->update($data,$id);
    redirect("dasbor/album/$album");
}

function disable_slideshow() {
    $this->load->model('M_Photo');
    $data['admin']['id'] = $this->uri->segment(4);
    $data['admin']['album'] = $this->uri->segment(3);
    $album = $data['admin']['album'];
    $id = $data['admin']['id'];

    $data = array(
        'url' => ''
    );
    $this->M_Photo->update($data, $id);
    redirect("dasbor/album/$album");
    
}
}