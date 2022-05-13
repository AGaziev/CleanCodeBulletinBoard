<?php

class BulletinInfo
{
    private string $email = 'NONE', $heading = 'NONE', $text = 'NONE', $category = 'NONE', $date = 'NONE';

    public function __construct($bulletinInfo)
    {
        $this->email = $bulletinInfo['email'];
        $this->heading = $bulletinInfo['heading'];
        $this->text = $bulletinInfo['text'];
        $this->category = $bulletinInfo['category'];
        if (isset($bulletinInfo['created']))
            $this->date = $bulletinInfo['created'];
    }

    public function getRowForTable(): string
    {
        return <<<HEREDOC
                    <tr>
                        <td rowspan="3">{$this->date}</td>
                        <th bgcolor="#deb887">Автор: {$this->email}</th>
                    </tr>
                    <tr>
                        <th>{$this->heading}</th>
                    </tr>
                    <tr>
                        <td>{$this->text}</td>
                    </tr>
                    HEREDOC;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getHeading()
    {
        return $this->email;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDate()
    {
        return $this->date;
    }
}