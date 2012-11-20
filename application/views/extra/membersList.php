<?php
$GLOBALS['normalizeChars']= array(
    'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 
    'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 
    'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Ř' => 'R', 
    'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 
    'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 
    'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 
    'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
);

$alphabet = "0";
function convertCharacters($toClean) {
	
	
   	return strtr($toClean,$GLOBALS['normalizeChars']);
}

?>
<style type="text/css">
	.membersList {
		font-size:12px;
		line-height:14px;
	}
	.membersList li {
		margin-bottom:0px;
	}
</style>
<div class="membersList">
<ul >
<?php foreach($members as $row):?>
	
<?php 
$value = convertCharacters($row->company_name);

if($value[0] != $alphabet){
	$alphabet =$value[0];
	
		?>
	</ul>
	<ul class="regionList"  id ="letter<?=$value[0]?>">
	<li class="regions regionHeading" ><h4 ><?=$value[0]?></h4></li>
	<?php } else {
		
	}?>
<?php
		$countryNoSpace = str_replace(" ", "", $row -> country);
		?>
<li class="regions region_<?=$row->region?>_target country_<?=$countryNoSpace?>_target"><span ><a href="<?=base_url()?>laworldmembers/view_company/<?=$row->idcompany?>"><?=$row->company_name?></a> </span></li> 


<?php endforeach;?>
</ul>
</div>