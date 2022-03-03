<?php
require_once 'business.php';
function gallery(&$model)
{
    $db=get_db();
    $zdjecia=array();
    $pagesize=5;
    $page  = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $opts=[
        'skip' => ($page-1)*$pagesize,
        'limit' => $pagesize
    ];
    if (isset($_SESSION['iflogged']) && $_SESSION['iflogged']==true)
    {
    $usr=$_SESSION['username'];
        $zdjecia=loggedopts($opts,$usr);
        $jj=loggedview($usr);
        $jjj=count($jj);
        $jjjj=$jjj/$pagesize;
          
    }
    else
    {
        $zdjecia=unloggedopts($opts);
        $jj=unloggedview();
        $jjj=count($jj);
        $jjjj=$jjj/$pagesize;
    }
    $model['page']=$page;
    $model['zdjecia']=$zdjecia;
    $model['pages']=$jjjj;
    $model['page']=$page;
    return 'gallery';
}
function register(&$model)
{
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
        $login=$_POST['login'];
        $email=$_POST['email'];
        $pass=$_POST['pwd'];
        $rpass=$_POST['rpt_pwd'];
        if (empty($login)===true || empty($email)===true || empty($pass)===true || empty($rpass)===true)
        {
            $model['status']=4;
            return 'register_view';
        }
        $ifexist=finduser($login);
        if ($ifexist!==null)
        {
            $model['status']=1;
            return 'register_view';
        }
        if ($pass===$rpass)
        {
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $ifok=adduser($login,$email,$hash);
            if($ifok==true)
            {
                return 'redirect:registerok';
            }
            else
            {
                $model['status']=2;
                return 'register_view';
            }
        }
        else
        {
            $model['status']=3;
            return 'register_view';
        }
    }
}
function login(&$model)
{
    $pass=$_POST['pwd'];
    $login=$_POST['login'];
    $user=finduser($login);
    if($user===null)
    {
        $model['status']=1;
        return 'login_view';
    }
    else
    {
        if (password_verify($pass, $user['password']))
        {
            session_regenerate_id();
            $_SESSION['user_id']=$user['_id'];
            $_SESSION['iflogged']=true;
            $_SESSION['username']=$login;
            return 'redirect:loginok';
        }
        else
        {
            $model['status']=2;
            return 'login_view';
        }
    }

}
function logout(&$model)
{
    session_destroy();
    return 'logout_view';
}
function quizz(&$model)
{
    return 'quizz';
}
function loginform(&$model)
{
    return 'loginform';
}
function loginok(&$model)
{
    return 'loginok';
}
function registerok(&$model)
{
    return 'registerok';
}
function registerform(&$model)
{
    return 'registerform';
}
function imgform(&$model)
{
    return 'imgform';
}
function index(&$model)
{
    return 'index';
}
function slonce(&$model)
{
    return 'slonce';
}
function wewuklad(&$model)
{
    return 'wewuklad';
}
function zewuklad(&$model)
{
    return 'zewuklad';
}
function inne(&$model)
{
    return 'inne';
}
function quiz(&$model)
{
    return'quiz';
}
function sendimg(&$model)
{
    if($_SERVER['REQUEST_METHOD']==='POST')
{
$zdjecie=$_FILES['zdjecie'];
$zdjeciezeznakiem=$zdjecie;
$fileok=true;
$private="false";
$sentby=null;
$id=0;
$er1=0;
$er2=0;
if (empty($zdjecie)==1)
{
    $id=4;
    $fileok=false;
}
$aq_sign=$_POST['aq_sign'];
if(empty($aq_sign)==1)
{
    $id=5;
    $fileok=false;
}
if($_FILES['zdjecie']['size']>1048576)
{
    $er1=1;
    $fileok=false;
}
$finfo=finfo_open(FILEINFO_MIME_TYPE);
$file_name=$_FILES['zdjecie']['tmp_name'];
$mime_type=finfo_file($finfo,$file_name);
if (($mime_type==='image/jpeg')||($mime_type==='image/png'))
{
    if($mime_type==='image/jpeg')
    {
        $type=0;
    }
    else
    {
        $type=1;
    }
}
else
{
    $er2=1;
    $fileok=false;
}
if($fileok===true)
{
    $upload_dir ='/var/www/prod/src/web/static/images/';
    $file=$_FILES['zdjecie'];
    $file_name=basename($file['name']);
    $date=date("YmdHis");
    $file_name=$date.$file_name;
    $target=$upload_dir . $file_name;
    $tmp_path=$file['tmp_name'];
    if (move_uploaded_file($tmp_path,$target))
    {
        $id=0;
    }
    if($type==0)
    {
        $zdjeciezeznakiem=imagecreatefromjpeg($target);
    }
    else
    {
        $zdjeciezeznakiem=imagecreatefrompng($target);
    }
    imagestring($zdjeciezeznakiem,5,0,0,$aq_sign,imagecolorallocate($zdjeciezeznakiem,255,255,255));
    $file1_name="w_".$file_name;
    $target1=$upload_dir . $file1_name;
    imagejpeg($zdjeciezeznakiem,"$target1");
    $width=200;
    $height=125;
    $miniatura=imagecreatetruecolor($width,$height);
    imagecopyresampled($miniatura,$zdjeciezeznakiem,0,0,0,0,$width,$height,imagesx($zdjeciezeznakiem),imagesy($zdjeciezeznakiem));
    $file2_name="m_".$file_name;
    $target2=$upload_dir . $file2_name;
    imagejpeg($miniatura,"$target2");
    $title=$_POST['title'];
    $autor=$_POST['autor'];
    if (isset($_SESSION['iflogged']) && $_SESSION['iflogged']==true)
    {
        $private=$_POST['private'];
        $sentby=$_SESSION['username'];
    }
    $raw=[
        "tytul"=>"$title",
        "autor"=>"$autor",
        "org"=>"$file_name",
        "wtm"=>"$file1_name",
        "min"=>"$file2_name",
        "private"=>"$private",
        "sentby"=>"$sentby" 
        
    ];
    $res=addimage($raw);
    if($res==false)
    {
        $id=7;
    }
}
else
{
    if($id<4)
    {
    if($er1==1 && $er2==1)
    {
        $id=3;
    }
    else
    {
        if($er1==1)
        {
            $id=1;
        }
        else
        {
            $id=2;
        }
    }
}
    
}
}
else
{
    $id=6;
}
$model['sendstatus']=$id;
if($id==0)
{
return 'redirect:gallery';
}
else
{
    return 'sendimg_view';
}
}