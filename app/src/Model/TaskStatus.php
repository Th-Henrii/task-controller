<?php
    class TaskStatus {

        private $taskStatusId;
        private $descTaskStatus;

        public function TaskStatus($taskStatusId = null, $descTaskStatus = null){
            $this->taskStatusId = $taskStatusId;
            $this->descTaskStatus = $descTaskStatus;
        }

        public function getTaskStatusId(){
            return $this->taskStatusId;
        }
        public function setTasksStatusId($taskStatusId):void{
            $this->taskStatusId = $taskStatusId;
        }
        public function getDescTaskStatus(){
            return $this->descTaskStatus;
        }
        public function setDescTasksStatus($descTaskStatus):void{
            $this->descTaskStatus = $descTaskStatus;
        }
    }
?>