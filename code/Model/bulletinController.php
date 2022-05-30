<?php
include_once 'Bulletin.php';
include 'DBController.php';

$categories = ['Sport', 'Animal', 'IT', 'Auto', 'Science'];

function categoryToShowSet()
{
    $_SESSION['categoryToShow'] = $_POST['categorySelect'];
}

function getCategoriesSelector()
{
    global $categories;
    $selector = '';
    foreach ($categories as $option)
        $selector .= "<option>{$option}</option>";
    return $selector;

}

function postNewBulletin()
{

    addNewBulletinToDB(new BulletinInfo(
        array('email'=>$_SESSION['email'],
            'category'=>$_POST['categoryNew'],
            'heading'=>$_POST['headingNew'],
            'text'=>$_POST['textNew']
        )
    ));
}

function showBoard()
{
    echo getLinesForTable();
}

function getLinesForTable(): string
{
    $ads = getAdsFromDB($_SESSION['categoryToShow'])->fetch_all(MYSQLI_ASSOC);
    $lines = '';
    foreach ($ads as $ad) {
        $bulletin = new BulletinInfo($ad);
        $lines .= $bulletin->getRowForTable();
    }
    return $lines;
}
