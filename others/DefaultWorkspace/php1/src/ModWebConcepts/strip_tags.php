<?php
$firstname = "<script>alert('document.cookie')</script>";
echo strip_tags($firstname);