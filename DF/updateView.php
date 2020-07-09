<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$qid = $_GET['qid'];
$question = $_GET['question'];
include 'conn.php';
$con->query("update questions set view=view+1  where id=$qid;");

header('Location: insertAnswer.php?qid='.$qid.'&question='.$question);