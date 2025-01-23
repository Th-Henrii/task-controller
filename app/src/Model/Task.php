<?php

    class Task{
        private $id;
        private $descTask;
        
        public function Task($id = null, $descTask = null){
            $this->id = $id;
            $this->descTask = $descTask;
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id):void{
            $this->id = $id;
        }
        public function getDescTaks(){
            return $this->descTask;
        }
        public function setDescTaks($descTask){
            $this->id = $descTask;
        }
    }

?>