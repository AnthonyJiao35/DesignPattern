<?php

class TextMemento
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}
class TextDocument
{
    private $text;
    private $undos = [];
    private $redos = [];

    public function setText($text)
    {
        echo "Setting text to: $text\n";
        $this->undos[] = new TextMemento($this->text);
        $this->text = $text;
    }

    public function undo()
    {
        if (!empty($this->undos)) {
            $memento = array_pop($this->undos);
            $this->redos[] = new TextMemento($this->text);
            $this->text = $memento->getText();
            echo "Undoing, text is now: $this->text\n";
        } else {
            echo "Nothing to undo.\n";
        }
    }

    public function redo()
    {
        if (!empty($this->redos)) {
            $memento = array_pop($this->redos);
            $this->undos[] = new TextMemento($this->text);
            $this->text = $memento->getText();
            echo "Redoing, text is now: $this->text\n";
        } else {
            echo "Nothing to redo.\n";
        }
    }
}
