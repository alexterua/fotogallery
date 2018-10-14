<?php

class Uploader
{
    private $nameInputFile;

    public function __construct($nameInputFile)
    {
        $this->nameInputFile = $nameInputFile;
    }

    public function isUploaded()
    {
        if (isset($this->nameInputFile)) {
            return true;
        }

        return false;
    }

    public function upload($path)
    {
        if ($this->isUploaded()) {
            if ($this->nameInputFile['error'] == 0) {
                if ($this->nameInputFile['type'] === 'image/jpeg' ||
                    $this->nameInputFile['type'] === 'image/jpg' ||
                    $this->nameInputFile['type'] === 'image/png') {
                    move_uploaded_file($this->nameInputFile['tmp_name'],
                        $path . $this->nameInputFile['name']);
                }
            }
        }
    }
}