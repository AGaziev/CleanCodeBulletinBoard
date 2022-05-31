<?php

namespace Render;

use Controller\RequestController;
use Controller\BoardController;
use Object\Bulletin;
use Config\Config;

class Render
{
    private array $categories = [
        'Sport',
        'IT',
        'Auto',
        'Science'
    ];

    public function table(string $category)
    {
        $ads = BoardController::getAdsFromCategory($category);
        if (!empty($ads)) {
            echo <<<HEREDOC
                    <table border='01' width='60 % '>
                        <tbody>
                        $this->getAdsInfoForTable($ads)
                        </tbody>
                    </table>
                    HEREDOC;
        } else
            echo "NO ADS YET";
    }

    private function getAdsInfoForTable(array $ads)
    {
        $lines = '';
        foreach ($ads as $ad) {
            $bulletin = new Bulletin($ad);
            $lines .= $bulletin->getRowForTable();
        }
        return $lines;
    }

    public function selector()
    {
        $selector = '';
        foreach ($this->categories as $option)
            $selector .= "<option>{$option}</option>";
        return $selector;
    }

    public function handler()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $_SESSION['categoryToShow'] = $_GET['categorySelect'];
                $this->table($_SESSION['categoryToShow']);
                break;
            case 'POST':
                RequestController::addNewAd();
                break;
            default:
                http_response_code(405);
                echo 'Method Not Allowed';
        }
    }
}