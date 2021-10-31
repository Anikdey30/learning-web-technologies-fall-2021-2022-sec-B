<?php
	if(isset($_COOKIE['flag']))
	{
?>

<html>
<head>
	<title>Admin Home page</title>
</head>
<body>
	<table width="100%">
		<tr>
			<td height="10%" width="30%"><img src="139832300-simple-modern-agriculture-logo-design-vector.jpg" width="10%"></td>
			<td width="20%"><h1>Welcome home!</h1> </td>
			<td align="right" width="20%",><a href="alogin.html">Logout</a><br>
				<b>Don't have account?</b><a href="areg.html"><b style="color: red;">Register</b></a></td>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td width="20%" align="center"><a href="Users_list.html"><img src="Users.png"></a><br></td>
						<td width="20%" align="center"><a href="companies.html"><img src="what-is-a-company.jpg" width="20%"height="20%"></a><br></td>
						<td width="20%" align="center"><a href="ads.html"><img src="ads.jpg" width="20%"height="20%"></a><br></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
</body>
</html>


<?php
 
 }else{
 	header('location: alogin.html');
 }

?>