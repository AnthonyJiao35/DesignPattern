<?php
class Drawing
{
    private $commands = [];
    private $currentIndex = -1;

    public function executeCommand(Command $command)
    {
        $command->execute();
        $this->commands[] = $command;
        $this->currentIndex++;
    }

    public function undo()
    {
        if ($this->currentIndex >= 0) {
            $command = $this->commands[$this->currentIndex];
            $command->undo();
            $this->currentIndex--;
        }
    }

    public function redo()
    {
        if ($this->currentIndex < count($this->commands) - 1) {
            $command = $this->commands[$this->currentIndex + 1];
            $command->execute();
            $this->currentIndex++;
        }
    }
}