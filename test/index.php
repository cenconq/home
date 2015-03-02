<?php
$key = "";
set_time_limit(900);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Google Maps extractor</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tableExport.js"></script>
<script type="text/javascript" src="js/jquery.base64.js"></script>
</head>
<body>
<div class="container">
<h1>Google Maps extractor</h1><br><br>
<form name="form" method="post" action="" enctype="multipart/form-data">
	
	<!--<label>Token (if script block, limit the number of page and insert token here)</label>
	<input name="token" type="text" value="<?php if(isset($_POST['query'])){print $_POST['token'];}?>" placeholder="Insert token" class="form-control"><br><br><br>-->
	
	<label>Search query</label>
	<input name="query" type="text" value="<?php if(isset($_POST['query'])){print $_POST['query'];}?>" placeholder="Insert query" class="form-control"><br>	
	<!--<label>Email prefix (for example info, create automatic email from website)</label>
	<input name="email" type="text" value="<?php if(isset($_POST['email'])){print $_POST['email'];}else{print "info";}?>" placeholder="info" class="form-control"><br>-->	
    <label>How many pages to crawl?</label>
    <input name="number" type="number" class="form-control" value="<?php if(isset($_POST['number'])){print $_POST['number'];}else{print "1";}?>" size="1" min="1" max="3"><br>
	<input type="submit" class="btn btn-success" value="Check"><br>	<br>	
</form>

<?php
if(isset($_POST['query'])){
	$query = str_replace(" ","+",$_POST['query']);
	print '<div class="table-responsive">';
	print '<table id="data" class="table table-bordered table-hover table-striped">';
	print '<thead>
				<tr>
				  <th>Name</th>
				  <th>Address</th>
				  <th>Latitude</th>
				  <th>Longitude</th>
				  <!--<th>Website</th>
				  <th>Email</th>
				  <th>Url</th>
				  <th>Rating</th>
				  <th>Total user rating</th>
				  <th>International phone number</th>-->
				</tr>
			  </thead>
			  <tbody>';
	
	for($i = 0; $i < $_POST['number']; $i++){
	
		if(@$_POST['token']!=""){
			$url = $_POST['token'];
		}else{
			if(isset($nextpage)){
				$url = "https://maps.googleapis.com/maps/api/place/textsearch/json?pagetoken=".$nextpage."&key=".$key;
			}else{
				$url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=".$query."&key=".$key;
			}
		}
		$result = file_get_contents($url);
		$json = json_decode($result, true);

		$nextpage = @$json['next_page_token'];
		
		if($nextpage!=""){
			// print '<tr><td>Token</td><td colspan="9">'.$nextpage.'</td></tr>';
		}else{
			print '<tr><td colspan="10">Error, data usage limit, try tomorrow</td></tr>';
		}
		$z = 0;
		foreach($json['results'] as $item) {
			//if($z<8){//limit to 8 result, 7 for detail 1 for call
				$z++;
				print '<tr>';
				print '<td>'.$item['name'].'</td>';
				print '<td>'.@$item['formatted_address'].'</td>';
				print '<td>'.@$item['geometry']['location']['lat'].'</td>';
				print '<td>'.@$item['geometry']['location']['lng'].'</td>';
				
				//sleep(2);
				/*$urlitem = "https://maps.googleapis.com/maps/api/place/details/json?placeid=".$item['place_id']."&key=".$key;
				$resultitem = file_get_contents($urlitem);
				$jsonitem = json_decode($resultitem, true);
				
				print '<td>'. @$jsonitem['result']['website'].'</td>';
				if(isset($jsonitem['result']['website'])){
					$urlemail = $jsonitem['result']['website'];
					$urlemail = str_replace("http://www.",$_POST['email']."@",$urlemail);
					$urlemail = str_replace("http://",$_POST['email']."@",$urlemail);
					$urlemail = str_replace("/","",$urlemail);
					print '<td><a href="mailto:'. $urlemail.'">'.$urlemail.'</a></td>';
				}else{
					print '<td></td>';
				}	
				print '<td><a target="_blank" href="'. @$jsonitem['result']['url'].'">Link</a></td>';
				print '<td>'. @$jsonitem['result']['rating'].'</td>';
				print '<td>'. @$jsonitem['result']['user_ratings_total'].'</td>';
				print '<td>'. @$jsonitem['result']['international_phone_number'].'</td>';
				
				print '</tr>';*/
			//}
		}	
	}
	print "</tbody></table>";
	print "</div>";
	print '<br><br><div class="btn btn-info" onClick="$(\'#data\').tableExport({type:\'csv\',escape:\'false\'});">Download CSV</div><br><br>';
}
?>


</div>
</body>
</html>