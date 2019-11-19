<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$i=0;
	while($i<count($_FILES['upfile']['name']))
	{
		move_uploaded_file($_FILES['upfile']['tmp_name'][$i],$_FILES['upfile']['name'][$i]);
		$i++;
	}
}
?>
<h1>Php file upload</h1>

<form method="POST"
enctype="multipart/form-data">
<input type="file" name="upfile[]"
multiple>
<input type="submit" name="upload">  



</form>
<a href="https://ibb.co/2ZZZQqs"><img src="https://i.ibb.co/2ZZZQqs/DSC-0307.jpg" alt="DSC-0307" border="0"></a> <a href="https://ibb.co/JvR2Qdp"><img src="https://i.ibb.co/JvR2Qdp/DSC-0327.jpg" alt="DSC-0327" border="0"></a> <a href="https://ibb.co/BzGT2N3"><img src="https://i.ibb.co/BzGT2N3/DSC-0333.jpg" alt="DSC-0333" border="0"></a> <a href="https://ibb.co/X3sxdks"><img src="https://i.ibb.co/X3sxdks/IO8A1516.jpg" alt="IO8A1516" border="0"></a> <a href="https://ibb.co/Rv9Vv1Z"><img src="https://i.ibb.co/Rv9Vv1Z/IO8A1520.jpg" alt="IO8A1520" border="0"></a> <a href="https://ibb.co/mcYGVPK"><img src="https://i.ibb.co/mcYGVPK/IO8A1524.jpg" alt="IO8A1524" border="0"></a> <a href="https://ibb.co/5rh5nJK"><img src="https://i.ibb.co/5rh5nJK/IO8A1547.jpg" alt="IO8A1547" border="0"></a> <a href="https://ibb.co/c65kvtV"><img src="https://i.ibb.co/c65kvtV/IO8A1551.jpg" alt="IO8A1551" border="0"></a> <a href="https://ibb.co/jVPBsHW"><img src="https://i.ibb.co/jVPBsHW/IO8A1595.jpg" alt="IO8A1595" border="0"></a> <a href="https://ibb.co/k0hsVx1"><img src="https://i.ibb.co/k0hsVx1/IO8A1563.jpg" alt="IO8A1563" border="0"></a> <a href="https://ibb.co/BZf14GV"><img src="https://i.ibb.co/BZf14GV/IO8A1600.jpg" alt="IO8A1600" border="0"></a> <a href="https://ibb.co/CQ3qDLH"><img src="https://i.ibb.co/CQ3qDLH/IO8A1619.jpg" alt="IO8A1619" border="0"></a> <a href="https://ibb.co/gRKg4Mf"><img src="https://i.ibb.co/gRKg4Mf/IO8A1689.jpg" alt="IO8A1689" border="0"></a> <a href="https://ibb.co/x1bHsjP"><img src="https://i.ibb.co/x1bHsjP/IO8A1692.jpg" alt="IO8A1692" border="0"></a> <a href="https://ibb.co/8dHTr8B"><img src="https://i.ibb.co/8dHTr8B/IO8A1696.jpg" alt="IO8A1696" border="0"></a> <a href="https://ibb.co/WtQXf6N"><img src="https://i.ibb.co/WtQXf6N/IO8A1748.jpg" alt="IO8A1748" border="0"></a> <a href="https://ibb.co/crNmPPz"><img src="https://i.ibb.co/crNmPPz/IO8A1750.jpg" alt="IO8A1750" border="0"></a> <a href="https://ibb.co/0h8Wp6Z"><img src="https://i.ibb.co/0h8Wp6Z/IO8A1754.jpg" alt="IO8A1754" border="0"></a> <a href="https://ibb.co/RyZ4PnN"><img src="https://i.ibb.co/RyZ4PnN/IO8A1782.jpg" alt="IO8A1782" border="0"></a> <a href="https://ibb.co/SccQGsP"><img src="https://i.ibb.co/SccQGsP/IO8A1783.jpg" alt="IO8A1783" border="0"></a>