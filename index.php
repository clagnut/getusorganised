<?php
$dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
include($dr . "head.php");
?>

<body>

<?php
include($dr . "header.php");
?>

<main>

<h1>Get Us Organised</h1>

<p>You’re here because you need to get a bunch of people to agree on an activity, a place and/or a time.</p>

<form action="save.php">

<label for="title">What are you trying to organise?
<input type="text" id="title" /> <small>eg. James's Stag Do</small></label>


<fieldset>
<legend><strong>What</strong> are you doing?</legend>
<label for="what1">Option 1
<input type="text" id="what1" /> <small>leave empty if you don't need to agree this</small></label>
<label for="what2">Option 2
<input type="text" id="what2" /></label>
<label for="what3">Option 3
<input type="text" id="what3" /></label>
</fieldset>

<fieldset>
<legend><strong>Where</strong> are you going?</legend>
<label for="where1">Option 1
<input type="text" id="where1" /> <small>leave empty if you don't need to agree this</small></label>
<label for="where2">Option 2
<input type="text" id="where2" /></label>
<label for="where3">Option 3
<input type="text" id="where3" /></label>

</fieldset>

<fieldset>
<legend><strong>When</strong> is it happening?</legend>
<label for="date1">Option 1
<input type="date" id="date1" placeholder="dd/mm/yyyy" /> <input type="time" id="time1" placeholder="hh:mm" /> <small>leave either empty if you don't need to agree this</small></label>
<label for="date2">Option 2
<input type="date" id="date2" placeholder="dd/mm/yyyy" /> <input type="time" id="time1" placeholder="hh:mm" /></label>
<label for="date3">Option 3
<input type="date" id="date3" placeholder="dd/mm/yyyy" /> <input type="time" id="time1" placeholder="hh:mm" /></label>

</fieldset>

<input type="submit" value="Save" />

</form>

</main>

<?php
include($dr . "footer.php");
?>


</body>

</html>
