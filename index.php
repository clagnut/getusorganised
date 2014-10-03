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

<form action="save.php" method="post">

<label for="title">What are you trying to organise?
<input type="text" id="title" /> <small>eg. James's Stag Do</small></label>


<fieldset>
<legend><strong>What</strong> might you do?</legend>
<label>Option 1
<input type="text" id="what[1]" /> <small>leave empty if you don't need to agree this</small></label>
<label>Option 2
<input type="text" id="what[2]" /></label>
<label>Option 3
<input type="text" id="what[3]" /></label>
</fieldset>

<fieldset>
<legend><strong>Where</strong> might you go?</legend>
<label>Option 1
<input type="text" id="where[1]" /> <small>leave empty if you don't need to agree this</small></label>
<label>Option 2
<input type="text" id="where[2]" /></label>
<label>Option 3
<input type="text" id="where[3]" /></label>

</fieldset>

<fieldset>
<legend><strong>When</strong> might it happen?</legend>
<label>Option 1
<input type="date" id="date[1]" placeholder="dd/mm/yyyy" /> <input type="time" id="time[1]" placeholder="hh:mm" /> <small>leave either empty if you don't need to agree this</small></label>
<label>Option 2
<input type="date" id="date[2]" placeholder="dd/mm/yyyy" /> <input type="time" id="time[2]" placeholder="hh:mm" /></label>
<label>Option 3
<input type="date" id="date[3]" placeholder="dd/mm/yyyy" /> <input type="time" id="time[3]" placeholder="hh:mm" /></label>

</fieldset>

<input type="submit" value="Save" />

</form>

</main>

<?php
include($dr . "footer.php");
?>


</body>

</html>
