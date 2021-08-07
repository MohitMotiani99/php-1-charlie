<?php 

function isbitten(){
	$bite = rand(0,1);
	if($bite<=0.5)
		return true;
	else
		return false;
}

echo "Charlie has appeared   ";
$ans=isbitten();
if($ans==true){
	echo "Charlie has bitten";
}
else
	echo "Charlie has not bitten";
