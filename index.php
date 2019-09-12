<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CratosStudio | Donate</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-docs.css" rel="stylesheet"type="text/css" />
    <link href="css/docs.css" rel="stylesheet" type="text/css" />
    <link href="css/flat-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/prettify.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="#">
	<?require_once('lib/all_function.php');?>
</head>
<body id="body">
<section class="head">
	<div class="container">
		<div class="row">
			<h2>CratosStudio</h2>
			<h4>IP: 51.254.57.78:25989</h4>
			<br>
						<center>
				<div  class="well" style="width:180px; height: 180px">
					<div class="stats">
						<h6>Online</h6>
						<b><?=$online?></b>
					</div>
				</div>
				<div class="well" style="width:180px; height: 180px">
					<div class="stats">
						<h6>Слотов</h6>
						<b>100</b>
					</div>
				</div>
				<div class="well" style="width:180px; height: 180px">
					<div class="stats">
						<h6>Рекорд</h6>
						<b><?=$record['record']?></b>
					</div>
				</div>
				<br>
				<ul class="social-icons" style="display: inline-block; margin-right: 40px; margin-top: 40px;">
                                    <li><a target="_blank" href="https://vk.com/feed"><i class="fa">VK</i></a></li>
                                </ul>                  
                               <ul class="social-icons" style="display: inline-block;  margin-left: 30px; font-size: 30px;">
                                    <li><a target="_blank" href="discord.com"><i class="fa">Discord</i></a></li>
                                </ul>
			</center>
		</div>
	</div>
</section>
<section class="privileges" name="buy">
	<div class="container">
		<div class="row">
			<h3 style="font-weight: 300">Покупка привелегии</h3>
                        <h6 style="color:#E74C3C">Привелегия после покупки выдаётся навсегда!<b style="color: #E67E22"><br> У нас действуют скидки 97%</b></h6>
			<br>
			<center>						
					<form name="donat" action="" method="post">
					<div class="alert alert-error" id="error"></div>
						<input name="username" class="form-control" style="width: 450px;" required="" placeholder="Ник на сервере" type="text"><br>
						<select name="group" style="width: 450px; border-radius: 5px; padding: 7px; margin-bottom: 5px">
							<optgroup label="На месяц">
								<option value="1">VIP|50руб</option>
								<option value="2">КРЕАТИВ|200 руб</option>
								<option value="3">S-VIP|150 руб</option>
								<option value="4">МОДЕР|300 руб</option>
								<option value="5">АДМИН|400 руб</option>
								<option value="6">Консоль 1000 руб</option>								
							</optgroup>
							<optgroup label="Навсегда">
								<option value="7">VIP|150 руб</option>
								<option value="8">Креатив|350 руб</option>
								<option value="9">S-VIP|300 руб</option>
								<option value="10">МОДЕР|570 руб</option>
								<option value="11">АДМИН|700 руб</option>
								<option value="12">Консоль 2000 руб</option>
							</optgroup>
						</select>
				     <br><br>
							<input type="submit" name="buy" class="btn btn-lg btn-danger" style="border-radius: 2px;" value="Купить"/>
				</form>
			</center>
		</div>
	</div>
</section>
<section class="news">
<center>
<h3 style="font-weight: 300">Новости</h3>
<br><br>
<!-- VK Widget -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?112"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 2, width: "600", height: "600"}, 20003922);
</script>
</center>
</section>

<section class="news" id="contacts">
		<div class="container">
                  <center>
                      <div class="col-md-3"></div>
		      <a class="col-md-3" style="color:#555555" href="http://vk.com/feed" target="_blank">Разработчик</a>
		      <a class="col-md-3" style="color:#555555" href="anus.net" target="_blank">Администратор</a>
		      <div class="col-md-3"></div>
		      <div class="col-md-12">© <a style="color:#555555" href="http://vk.com/feed">Minecraft - Все права защищены.</a></div>
                 </center>
		</div>
</section>

<script type="text/javascript" src="js/jquery-2.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-switch.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/flatui-checkbox.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
</body></html>
