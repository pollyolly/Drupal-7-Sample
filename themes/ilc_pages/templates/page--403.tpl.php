<style>
h1{
     font-size: 30pt;
     color: #636c72 !important;
}
h2{
     color: #636c72 !important;
}
a {
color: #2089de;
}
.access-message {
     margin: 15% auto;
     line-height: 40px;
     width: 300px;
    padding: 10px;
}
</style>
<?php print $messages; ?>
<div class="access-message">
	<h1>Access Denied. <br></h1><h2>You will be automatically redirect to home page.</h2>
</div>
<script>
window.location.href= "/home";
</script>
