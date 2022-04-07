<?php
if($_GET['menu'] == NULL || $_GET['menu'] == '' || $_GET['menu']=="user"){
    include("views/admin/user/user.php");
}
    else if($_GET['menu'] == "about"){
    include("views/admin/about/about.php");
}
    else if($_GET['menu'] == "myactivity"){
    include("views/admin/myactivity/myactivity.php");
}
    else if($_GET['menu'] == "contact"){
    include("views/admin/contact/contact.php");
}
    else if ($_GET['menu'] == 'logout') {
    session_destroy();
    echo "
            <script>
            alert('See You :)')
            window.location.href= 'http://localhost/portofolio_fitri/'
            </script>      
        ";
}

  
?>
      
