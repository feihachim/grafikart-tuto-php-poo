<?php

namespace Tutoriel\HTML;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form
{
    /**
     * @var array Données utilisées par le formulaire
     */
    private $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param string $html Code HTML à entourer
     * @return string
     */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param string $index Index de la valeur à récupérer
     * @return string
     */
    protected function getValue($index)
    {
        return  $this->data[$index] ?? null;
    }

    /**
     * @param string $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<input type="submit" value="Envoyer">');
    }

    public function date()
    {
        return new \DateTime();
    }
}
