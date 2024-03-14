<?php
include('../admin/conn.php');
session_start();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v17.0/112184178631414?fields=posts%7Bfull_picture%2Cmessage%2Ccreated_time%7D%2Cname%2Cpicture&access_token=EAALKArcOFlgBOxEJ8BWsdc7f7ZAcfkkHYc78vqBL0DZAmB98McWqyuZBoMMgQA1tJbbvu5gSWj62O35Lq179kAUFUiAwZA4r90iikdwYNDSEMuPtr7ZC8KarVekZBqbOv0MNa0c4bEkFo4quB0wLspF4REiXzLHQsZBe0IQ3KhQul4wajrMvMrOTg5NJhHUScK9P3kUQgFTDxlMhCIZD');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$response = curl_exec($ch);

curl_close($ch);
$response=json_decode($response);
mysqli_query($con,"delete from facebook_page_post");
foreach ($response->posts->data as $list){
    $message='';
    $full_picture='';

    if(isset($list->message)){
        $message=$list->message;
    }

    if(isset($list->full_picture)){
        $full_picture=$list->full_picture;
    }
    $created_time=$list->created_time;
    $page_name=$response->name;
    $page_picture=$response->picture->data->url;

    mysqli_query($con, "insert into facebook_page_post(message, full_picture, created_time, page_name, page_picture) 
                        values('$message','$full_picture','$created_time','$page_name','$page_picture')");

}
?>