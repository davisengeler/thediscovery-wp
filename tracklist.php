<?php include("thediscovery-config.php"); ?>

<script>
    function love($song) {
        $(event.target).toggleClass("special");
        $.ajax({
            data: 'songID=' + $song,
            url: '<?php bloginfo('template_directory');?>/givelove.php',
            method: 'POST',
            success: function(msg) {
              
            }
        });
    }
</script>

<script type="text/javascript">
$(document).ready(function(){
	var lastPreview = nav_audio;
    $(".song").click(
    	function(){
	    	var audio = "#" + $(this).attr("id") + "_preview";
	    	var preview = $(audio)[0];
	    	if (preview == lastPreview) 
	    		preview.paused ? preview.play() : preview.pause();
	    	else {
	    		lastPreview.pause();
	    		preview.play();
	    	}
	    	lastPreview = preview;
        });
});
</script>

<audio id="nav_audio">
    <source src="<?php bloginfo('template_directory');?>/test audio.mp3" type="audio/mpeg"></source>
    <source src="<?php bloginfo('template_directory');?>/test audio.ogg" type="audio/ogg"></source>
</audio>

<style>
    a.icon {
        border-bottom: none;
    }
</style>

<h3 class="major">Tracklist</h3>

<div class="table-wrapper">
	<table>
		<thead>
			<tr>
				<th><i class="fa fa-list-ul" aria-hidden="true"></i></th>
				<th>Song Title</th>
				<th>Artist</th>
				<th>Listen</th>
				<th>Love It?</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Get list of songs and their info for this episode
                $result = mysqli_query($con, "SELECT * FROM songs WHERE episode=" . $attrs['episode'] . " ORDER BY trackOrder;");
                $initialLoves = unserialize($_COOKIE["loves"]);
                while ($song = mysqli_fetch_array($result)) {
                    $special = false;
                    if (array_key_exists($song['songID'], $initialLoves)) {
                        $special = ($initialLoves[$song['songID']] > 0);
                    }
                    $spotify = isset($song['spotify']) ? $song['spotify'] : false;
                    $appleMusic = isset($song['appleMusic']) ? $song['appleMusic'] : false;
                    $youtube = isset($song['youtube']) ? $song['youtube'] : false;
                    $download = isset($song['download']) ? $song['download'] : false;
                    $fullName = $song['artist'] . " - " .$song['name'];
                    $fileLocation = get_template_directory_uri() . "/" . $fullName;
                    echo '
                        <tr id="' . $song['songID'] . '" class="song">
                        	<audio loop id="' . $song['songID'] . '_preview">
							    <source src="' . $fileLocation . '.mp3" type="audio/mpeg"></source>
							    <source src="' . $fileLocation . '.ogg" type="audio/ogg"></source>
							</audio>
							<td><i class="fa fa-music" aria-hidden="true"></i></td>
							<td><b>' . $song['name'] . '</b></td>
							<td><a target="blank" href="' . $song['artistLink'] . '">' . $song['artist'] . '</a></td>
							<td>';
							    if ($spotify) 
							        echo '<a class="icon" target="blank" href="' . $spotify . '"><i class="fa fa-spotify" aria-hidden="true"></i></a> &nbsp';
							        else echo '<i class="fa fa-spotify" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                if ($appleMusic) 
							        echo '<a class="icon" target="blank" href="' . $appleMusic . '"><i class="fa fa-apple" aria-hidden="true"></i></a> &nbsp';
							        else echo '<i class="fa fa-apple" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                if ($youtube) 
							        echo '<a class="icon" target="blank" href="' . $youtube . '"><i class="fa fa-youtube" aria-hidden="true"></i></a> &nbsp';
							        else echo '<i class="fa fa-youtube" aria-hidden="true" style="color:grey;"></i> &nbsp';
                                if ($download) 
							        echo '<a class="icon" target="blank" href="' . $download . '"><i class="fa fa-download" aria-hidden="true"></i></a> &nbsp';
							        else echo '<i class="fa fa-download" aria-hidden="true" style="color:grey;"></i> &nbsp';
							  
                        
                    echo '  <td>
								<a href="javascript:void(0);" onclick="love(' . $song['songID'] . ');" class="button small love ' . ($special ? "special" : "testing") . ' "><i class="fa fa-heart" aria-hidden="true"></i> LOVE</a>
							</td>
						</tr>';
                }
            ?>

		</tbody>
		<!-- <tfoot>
			<tr>
				<td colspan="4"></td>
				<td>Spotify</td>
			</tr>
		</tfoot> -->
	</table>
</div>