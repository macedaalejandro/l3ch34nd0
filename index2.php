<?php
$some_name = session_name("lecheando");
session_set_cookie_params(0, '/', '.lecheando.com');
session_start(); 

//ini_set('session.cookie_domain', '.lecheando.com' ); 

//$some_name = session_name("some_name");
//session_set_cookie_params(0, '/', '.some_domain.com');

 
if(!empty($_SESSION) && $_SESSION['logged'] == true) { 
	$logged = true;
}else{
	$logged = false;
	//header('Location:index.php');
} 
$counter_name = "counter.txt";
// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$_SESSION['counterVal'] = fread($f, filesize($counter_name));

fclose($f);
// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $_SESSION['counterVal']++;
  $f = fopen($counter_name, "w");
  fwrite($f, $_SESSION['counterVal']);
  fclose($f); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">

<head>
	<title>Lecheando</title>
	<?php include "include/headers.php"; ?>  

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">    
    <meta name="xhamster-site-verification" content="364921178:30298"/> 
<meta name="xhamster-site-verification" content="364921178:30298"/> 
<meta name="ero_verify" content="271799fda4f5f7ea0e730a6cc9aea34c" />
<meta name="hubtraffic-domain-validation"  content="f32dffbd380ea5da" />
<meta name="juicyads-site-verification" content="d72ea928e1ca1954155f39e6a145db0f">
<!-- Begin JuicyAds PopUnder Code -->
<script type="text/javascript">juicy_code='94c4w203q256r2s2v2c4x274';</script>
<script type="text/javascript" src="http://js.juicyads.com/jac.js" charset="utf-8"></script>
<!-- End JuicyAds PopUnder Code -->

    <style>
	body {
    background-color: #e57373;
}
  
        .fixed-title {
              min-height: 60px;
              max-height: 70px;
              height: 50px;    
        }
        
       
 
	</style>	
	

	 
</head>
<body>
 <div class="row">
            <?php include "include/navbar.php"; ?>
        </div>
<br>
<br>
<br>


<!--main-->
<div class="container" id="main">
<div class="col-md-12 col-sm-12">
	<!--JuicyAds v2.0-->
<iframe border=0 frameborder=0 marginheight=0 marginwidth=0 width=100% height=196 scrolling=no allowtransparency=true src=http://adserver.juicyads.com/adshow.php?adzone=432845></iframe>
<!--JuicyAds END-->
	
	
           <h3><span class="glyphicon glyphicon-play"></span> Videos recientes &nbsp; &nbsp; &nbsp;
                      <i class="fa fa-eye">:</i>

<a href='http://lecheando.com/index.php?content=hetero'><i class="fa fa-venus-mars"></i></a>
<a href='http://lecheando.com/index.php?content=gay'><i class="fa fa-mars-double"></i></a>
<a href='http://lecheando.com/index.php?content=lesbiana'><i class="fa fa-venus-double"></i></a>
<a href='http://lecheando.com/index.php?content=trans'><i class="fa fa-transgender"></i></a>

           </h3>
           </div>
		<!--
        </div>  
        -->
        
        
        
       <?php
       						include('include/connectDB.php');

$qry = "SELECT * FROM free_videos";
if ($result = $db->query($qry))
				        {
				        	if ($result->num_rows != 0)
				        	{
				        		$total = $result->num_rows;
				        	}
				        }		

//$sql = mysql_query("select * from table name"); 
//$total = mysql_num_rows($sql);

$adjacents = 3;
$targetpage = "index2.php"; //your file name
$limit = 12; //how many items to show per page
$page = $_GET['page'];

if($page){ 
$start = ($page - 1) * $limit; //first item to display on this page
}else{
$start = 0;
}

/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is current page - 1
$next = $page + 1; //next page is current page + 1
$lastpage = ceil($total/$limit); //lastpage.
$lpm1 = $lastpage - 1; //last page minus 1

$qry2 = "select * from free_videos where 1=1";
$qry2 .= " order by id desc limit $start ,$limit ";
if ($result2 = $db->query($qry2))
				        {
				        	if ($result2->num_rows != 0)
				        	{
				        		$curnm = $result2->num_rows;
				        	}
				        }	
//$sql_query = mysql_query($sql2); 
//$curnm = mysql_num_rows($sql_query);

/* CREATE THE PAGINATION */

$pagination = "";
if($lastpage > 1)
{ 
$pagination .= "<div class='container' id='main'>  <ul class='pagination'>
";
if ($page > $counter+1) {
$pagination.= "<li><a href=\"$targetpage?page=$prev\">prev</a></li>"; 
}

if ($lastpage < 7 + ($adjacents * 2)) 
{ 
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<li class='active'><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{
//close to beginning; only hide later pages
if($page < 1 + ($adjacents * 2)) 
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
$pagination.= "<li class='active'><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
//$pagination.= "<li>...</li>";
$pagination.=  "<li class='disabled'><a href='#'>...</a></li>";

$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//in middle; hide some front and some back
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.=  "<li class='disabled'><a href='#'>...</a></li>";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
$pagination.= "<li class='active'><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
$pagination.=  "<li class='disabled'><a href='#'>...</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//close to end; only hide early pages
else
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.=  "<li class='disabled'><a href='#'>...</a></li>";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; 
$counter++)
{
if ($counter == $page)
$pagination.= "<li class='active'><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
}

//next button
if ($page < $counter - 1) 
$pagination.= "<li><a href=\"$targetpage?page=$next\">next</a></li>";
else
$pagination.= "";
$pagination.= "</ul></div>\n"; 
}













//$db->close();

?>
<?php
echo $pagination; 
?>        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<?php
                        // connect to the database
                        
                        // number of results to show per page
				        $per_page = 12;
				        
				        
				               $qry = "";
				               $bytag = false;
				        
				        if (isset ($_GET['tag'])) {
							
							$tag_id = $_GET['tag'];
							
							$qry = "SELECT * FROM videos_tags WHERE tag_id=$tag_id";
							$bytag = true;
							
							}
							else {
								
								$qry = "SELECT * FROM free_videos ORDER BY id DESC";
								}
				        
				        
				        // figure out the total pages in the database
				        if ($result = $db->query($qry))
				        {
				        	if ($result->num_rows != 0)
				        	{
				        		$total_results = $result->num_rows;
				        		// ceil() returns the next highest integer value by rounding up value if necessary
					        	$total_pages = ceil($total_results / $per_page);
					        	
		        				// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
						        if (isset($_GET['page']) && is_numeric($_GET['page']))
						        {
						                $show_page = $_GET['page'];
						                
						                // make sure the $show_page value is valid
						                if ($show_page > 0 && $show_page <= $total_pages)
						                {
						                        $start = ($show_page -1) * $per_page;
						                        $end = $start + $per_page; 
						                }
						                else
						                {
						                        // error - show first set of results
						                        $start = 0;
						                        $end = $per_page; 
						                }               
						        }
						        else
						        {
						                // if page isn't set, show first set of results
						                $start = 0;
						                $end = $per_page; 
						        }
						        
						        // display pagination
						       // echo "<p>  <b>Ver paginas:</b> ";
						        for ($i = 1; $i <= $total_pages; $i++)
						        {
						        	if (isset($_GET['page']) && $_GET['page'] == $i)
						        	{
						        //		echo $i . " ";
						        	}
						        	else
						        	{
										if ($bytag == true) {

						        	//	echo "<a href='index.php?tag=$tag_id&page=$i'>$i</a> ";
									}
									else {
										//echo "<a href='index.php?page=$i'>$i</a> ";

										}
						        	}
						        }
						       // echo "</p> </div>";
						        
									echo "<br> <div class='container' id='main'>";
									
						        // display data in table
						     //   echo "<table border='1' cellpadding='10'>";
						       // echo "<tr> <th>ID</th> <th>Nombre</th> <th>Email</th> <th></th> <th></th></tr>";
						
						        // loop through results of database query, displaying them in the table 
						        for ($i = $start; $i < $end; $i++)
						        {
						        	// make sure that PHP doesn't try to show results that don't exist
					                if ($i == $total_results) { break; }
					                
						        	// find specific row
						        	$result->data_seek($i);
   	 								$row = $result->fetch_row();
   	 								
   	 							
									
									if ($bytag == true) {
										
									$qry1 = "SELECT * FROM free_videos WHERE id='$row[0]'";
									$result1 = $db->query($qry1);
									
				   
									// find specific row
						        	$result1->data_seek(0);
   	 								$row1 = $result1->fetch_row();
   	 								//$tag_id = $_GET['tag'];

   	 								
   	 							//	$vname = $row1[1];
   	 								
									echo "
   		   <div class='col-sm-4 col-md-3 col-xs-6' ><div class='panel panel-danger'>
          <div class='panel-heading fixed-title'>
                       <h5 class='panel-title' >

          <a href='#' data-toggle='modal' data-id='$row1[0]' data-target='#myModal'  class='pull-right'>$row1[10]<br><span class='glyphicon glyphicon-tags'></span></a> $row1[1]
          </h5>
        </div>
              <center>
                    <a href='http://lecheando.com/video_free.php?id=$row1[0]'> <img src='$row1[4]' width='100%' height='200'></img> </a>
			</center>
   		</div>
   		</div>
   		";
										}
									else {	
   	 	
   		echo "
   		   <div class='col-sm-4 col-md-3 col-xs-6' ><div class='panel panel-danger'>
          <div class='panel-heading fixed-title'>
                       <h5 class='panel-title' >

          <a href='#' data-toggle='modal' data-id='$row[0]' data-target='#myModal'  class='pull-right'>$row[10]<br><span class='glyphicon glyphicon-tags'></span></a> $row[1]
          </h5>
        </div>
              <center>
                    <a href='http://lecheando.com/video_free.php?id=$row[0]'> <img src='$row[4]' width='100%' height='200'></img> </a>
			</center>
   		</div>
   		</div>
   		";
	}
   		
						        }
						        echo "</div";

						        // close table>
						       // echo "</table>";
				        	}
				        	else
				        	{
				        		echo "No results to display!";
				        	} 
				        }
				        // error with the query
				        else
				        {
				        	echo "Error: " . $db->error;
				        }
                                                
                        // close database connection
                        $db->close();
                
                ?>

   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Catergorias del video </h4>
        </div>
        <div class="modal-body edit-content">
			
			

			
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
    
  
  </div>
                                
  <footer class="container-fluid bg-6 text-center">
  <p><?php $visitor = $_SESSION['counterVal']; echo "Eres el visitante numero: $visitor en LECHEANDO desde 9/11/2015"; ?></a></p> 
</footer>
    
      <script>
        $('#myModal').on('show.bs.modal', function(e) {
            
            var $modal = $(this);
           //     esseyId = e.relatedTarget.data-id;
          //  var id = $(this).data('id');
           var id = $(e.relatedTarget).data('id');
         //var id = "hola";
          //  $(e.currentTarget).find('input[name="bookId"]').val(id);


         //  $(".modal-body #bookId").val(Id);

	$.ajax({
                    url: './function/request_video_tags.php',
                    type: 'POST',
                    data: {"id": id},
                    success: function(data) {

//            $.ajax({
//                cache: false,
//                type: 'POST',
//                url: 'backend.php',
//                data: 'EID='+essay_id,
//                success: function(data) 
//                {
                    $modal.find('.edit-content').html(data);
                }
           });

            
        })
    </script>


</body>
</html>
