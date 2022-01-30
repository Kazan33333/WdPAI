<?php
if (strcmp($_COOKIE['role'], "ADMIN") == 0) {
    echo '
      <li> <a class="button">Admin stuff</a> </li>  
    ';
};