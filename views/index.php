<?php include "../header.php"; ?>

<table id="latest" class="display" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Genre</th>
            </tr>
        </thead>
        
        <tfoot>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Album</th>
                <th>Artist</th>
                <th>Genre</th>
                </tr>
        </tfoot>
        <tbody>
<?php
	// header('Content-Disposition: attachment');
	
	$server = "localhost";
	$user = "root";
	$pass = "4DaL0v3AM0n3y";
	$db = "music";
	
	
	mysql_connect($server, $user, $pass) or die(mysql_error());
	mysql_select_db($db) or die(mysql_error());

	$result = mysql_query("SELECT * FROM id3 ORDER BY timestamp DESC") or die(mysql_error()); 
	$count = 1;

	while ($row = mysql_fetch_array($result)) {
		echo "<tr><td>".$count++."</td>";
		echo "<td><a href='".URL."music/".$row['owner']."/".$row['id'].".mp3' download='".$row['title'].".mp3'>".$row['title']."</a></td>";
		echo "<td><a href='#profile' id='".$row['owner']."'>".$row['artist']."</a></td>";
		echo "<td>".$row['album']."</td>";
        echo "<td>".$row['genre']."</td></tr>";
	}

mysql_close();
?>
</tbody>
</table>

<script>
$(document).ready(function() {
    $('#latest').dataTable( {
        "paging":   false,
        "info":     false
    } );
} );
</script>