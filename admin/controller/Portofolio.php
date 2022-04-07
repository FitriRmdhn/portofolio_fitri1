<?php

class Portofolio extends Controller
{
    public function index()
    {
        $data['profile'] = $this->model('PortofolioModel')->getProfile();
        $data['about'] = $this->model('PortofolioModel')->getAbout();
        $data['myactivity'] = $this->model('PortofolioModel')->getMyActivity();
        $this->view('portofolio/index',$data);
        //menargetkan ke indek.php yang ada di folder views/portofolio
    }
    public function pesan()
    {
        if ( $this->model('PortofolioModel')->tampungPesan($_POST) > 0) 
        {
             echo "
            <script>
            alert('Data berhasil dikirim')
            window.location.href= 'http://localhost/portofolio_fitri/public/'
            </script>      
             ";
            
        }
        else{
             echo "gagal terkirim
             window.location.href= 'http://localhost/portofolio_fitri/public/'
             ";
        }   

    }
}
?>
