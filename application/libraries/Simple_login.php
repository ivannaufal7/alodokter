 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Simple_login {
 
     var $CI = NULL;
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('tb_pengguna',array('username'=>$username,'password' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             // $row  = $this->CI->db->query('SELECT id_pengguna,id_pasien, status FROM tb_pengguna join tb_pasien on tb_pengguna.id_pengguna = tb_pasien.id_pengguna where username = "'.$username.'"');
             $this->CI->db->select('tb_pengguna.id_pengguna, id_pasien, status');
             $this->CI->db->from('tb_pengguna');
             $this->CI->db->join('tb_pasien', 'tb_pengguna.id_pengguna = tb_pasien.id_pengguna');
             $this->CI->db->where('tb_pengguna.username',$username);
             $row = $this->CI->db->get();
             $admin     = $row->row();
             $id   = $admin->id_pengguna;
             $id_pasien   = $admin->id_pasien;
             $status = $admin->status;
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
             $this->CI->session->set_userdata('id_pasien', $id_pasien);
             $this->CI->session->set_userdata('status',$status);
 
             //redirect ke halaman dashboard
             redirect('Home_controller');
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
 
             //redirect ke halaman login
             redirect('Login_controller');
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
 
             //alihkan ke halaman login
             // redirect('login_controller');
         }else{
             return true;
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id_pasien');
         $this->CI->session->unset_userdata('status');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect('login_controller');
     }
 }