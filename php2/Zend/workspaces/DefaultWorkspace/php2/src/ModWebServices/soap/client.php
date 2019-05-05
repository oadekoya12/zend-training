<?php
/**
 * client.php
 * Developer: daryl@datashuttle.net
 * Date: 2/22/18
 */

// model
class Book
{
    public $name;
    public $year;
}

// create instance and set a book name
$book      =new Book();
$book->name='test 2';

// initialize SOAP client and call web service function
$client=new SoapClient('http://a.uz/soap/server.php?wsdl',['trace'=>1,'cache_wsdl'=>WSDL_CACHE_NONE]);
$resp  =$client->bookYear($book);

// dump response
var_dump($resp);