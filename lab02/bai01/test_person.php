<?php
require 'Person.php';

$p = new Person('Nguyễn Văn A', 20, 'Hà Nội');
echo $p->getInfo();            // Name: Nguyễn Văn A, Age: 20, Address: Hà Nội
echo $p->canVote() ? ' Eligible' : 'Not eligible';  // Eligible