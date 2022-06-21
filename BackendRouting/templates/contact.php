<?php
/* @var string $firstname First Name */
/* @var string $secondname Second Name */
?>


<h2>Contact Form - <?= $firstname . ' ' . $secondname; ?> </h2>
<form action="/BackendRouting/contact" method="post">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your first name..">

    <label for="secondname">Second Name</label>
    <input type="text" id="secondname" name="secondname" placeholder="Your second name..">

    <button type="submit">Submit</button>
</form>