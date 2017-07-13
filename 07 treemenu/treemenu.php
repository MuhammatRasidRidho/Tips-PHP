<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="simpletreemenu.js"></script>
<link rel="stylesheet" type="text/css" href="simpletree.css"></head>

<body>
<h4> Simple Menu Tree </h4>

<ul id="treemenu1" class="treeview">
<li> Home </li>
<li> Profil </li>

<li> Kategori
	<ul>
	<li> Framework </li>
	<li> PHP </li>
	<li> CSS </li>
	<li> SMS Gateway </li>
	</ul>
</li>
<li> Kontak </li>

<li> ASFA GROUP
	<ul>
	<li> Agus Saputra (Asfa Tutorials) </li>
	<li> Asfa Solutions </li>
	<li> Asfa Media </li>
	</ul>
</li>

<li> Download </li>
</ul>


<script type="text/javascript">

ddtreemenu.createTree("treemenu1", true)
ddtreemenu.createTree("treemenu2", false)

</script>

</body>
</html>