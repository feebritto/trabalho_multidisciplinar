<?php
$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=ifsp', 'postgres', 'ascfnj12');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);