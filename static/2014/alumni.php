<?php
include 'db_connect.php';
$user_id = 1;

$query = "SELECT * FROM alumni";
$array = array();
$c=0;
if ($result = $mysqli->query($query)) {
    /* Récupère un tableau associatif */
    while ($row = $result->fetch_assoc()) {
		$array[] = $row;   
		$c++;
    }
    /* Libération des résultats */
    $result->free();
}
/* Fermeture de la connexion */
$mysqli->close();

//for($i=0;$i<$c;$i++)
//{
	//echo "ukui ".$array[$i]['Nama'];
//}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>HIMATIKA | Kontak</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'> 
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<link rel="icon" href="images/iconhima.ico" type="image/x-icon">
<link rel="stylesheet" href="boots/css/bootstrap.min.css">
<!--light-box-->
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
	<script type="text/javascript">
		$(function() {
			$('.gallery a').lightBox();
		});
   </script>    
</head>
<body>
<div class="header">                                                                                  
	<div class="wrap">                                                                                
	   <div class="header-top">	                                                                      
	        <div class="logo">                                                                        
				<a href="index.html"><img src="images/DDD.png" alt=""/></a>                                             
			</div>                                                                                    
			<div class="sekre">                                                                       
				<span class="order">Sekretariat HIMATIKA</span><br>                                          
				<h5 class="lokasi">Universitas Airlangga<br>Kampus C<br>Fakultas Sains & Teknologi</h5>		                                          
			</div>                                                                                    
			<div class="clear"></div>                                                                 
	    </div>                                                                                        
	</div>                                                                                            
	<div class="header-bottom">                                                                       
	  <div class="wrap">	                                                                          
		<div id="cssmenu">                                                                            
			 <ul>                                                                                     
			   <li class=""><a href="index.html"><span>Beranda</span></a></li>
			   <li><a href="Tentang.html"><span>Tentang</span></a></li>
			   <li class="has-sub"><a href="#"><span>Pengurus</span></a>
			      <ul>
			         <li class="has-sub"><a href="BPH.html"><span>BPH</span></a></li>
                     <li class="has-sub"><a href="PSDM.html"><span>Bidang PSDM</span></a></li>
			         <li class="has-sub"><a href="Keilmuan.html"><span>Bidang Keilmuan</span></a></li>
                     <li class="has-sub"><a href="Infokom.html"><span>Bidang Infokom</span></a></li>
                     <li class="has-sub"><a href="Kerohanian.html"><span>Bidang Kerohanian</span></a></li>
                     <li class="has-sub"><a href="Pengmas.html"><span>Bidang Pengmas</span></a></li>
                     <li class="has-sub"><a href="Sera.html"><span>Bidang SERA</span></a></li>
                     <li class="has-sub"><a href="Biro.html"><span>Bidang BIRO</span></a></li>
                     
			      </ul>
			   </li>
               <li class="last"><a href="gallery.html"><span>Galeri</span></a></li>
               <li class="active"><a href="alumni.php"><span>Data Alumni</span></a></li>
			   <li class=""><a href="CP.html"><span>Kontak</span></a></li>                 
			</ul>                                                                                     
		</div>                                                                                        
		<div class="clear"></div>                                                                     
	  </div>                                                                                          
   </div>                                                                                             
</div>                                                                                                
 <div class="main">
 	<div class="top-box">
    	<div class="container" style="padding-top:30px;">
			<table class="table table-striped">
            	<tbody>
                <tr>
                	
                    <td><strong>No.</strong></td>
                    <td><strong>Nama</strong></td>
                    <td><strong>Prodi</strong></td>
                    <td><strong>Angkatan</strong></td>
                    <td><strong>Alamat</strong></td>
                    <td><strong>E-Mail</strong></td>
                    <td><strong>No.HP</strong></td>
                    <td><strong>Pekerjaan</strong></td>
                    
                </tr>
                
                <?php for($i=0; $i<$c; $i++) { ?>
                	<tr class="info">
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $array[$i]['Nama']; ?></td>
                        <td><?php echo $array[$i]['Program Studi']; ?></td>
                    	<td><?php echo $array[$i]['Angkatan']; ?></td>	
                    	<td><?php echo $array[$i]['Alamat']; ?></td>
                    	<td><?php echo $array[$i]['E-mail']; ?></td>
                    	<td><?php echo $array[$i]['No. HP']; ?></td>
                    	<td><?php echo $array[$i]['Pekerjaan']; ?></td>
                	</tr>
                <?php } ?>
                </tbody>
			</table>
		</div>
        <div class="container text-center" style="padding-top:5px;">
        	<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style="color:#FFF">Nama Alumni</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10" style="padding-top: 0px;">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <!--<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>!-->
</form>
        </div>
		
        <div class="container text-center" style="padding-top:10px;">
        	<button type="button" class="btn btn-danger">Tambahkan</button>
        </div>
        
        
                           
		<script>
			$("#slideshow > div:gt(0)").hide();
			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(00)
			    .next()
			    .fadeIn(500)
			    .end()
			    .appendTo('#slideshow');
			},  2000);
		</script>
		</div>
	</div>
  <div class="footer">
	<div class="wrap">
		 <div class="copy">
			<p>HIIMATIKA UNIVERSITAS AIRLANGGA</p>
		</div>
		<ul class="follow_icon">
		   <li><a href="https://www.facebook.com/groups/301874043312368/" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
		   <li><a href="https://twitter.com/HIMATIKA_UA" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
		   <li><a href="#" style="opacity: 1;"><img src="images/tlf.png" alt=""></a></li>
		   <li><a href="mailto:uahimatika@gmail.com" id="email" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
		</ul>
		<div class="clear"></div> 
    </div>
	<div class="footer-bot">
 		<a href="#toTop" class="toTop"></a>
			<script type="text/javascript">
				$('.toTop ').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 600);
					return false;
				});
				$('.toBottom').click(function(){
					$('html,body').animate({scrollTop: $(document).height()}, 600);
					return false;
				});
			</script>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>

    	
    	
            