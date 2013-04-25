<?php

namespace RtExtends\Entity;

use RtExtends\Entity\FlashMessageSub;

class FlashMessage{
    
    /**
     * Title of the flash message
     * @var string 
     */
    protected $title;
    
    /**
     * List of messages
     * @var array|string
     */
    protected $messages;
    
    /**
     *
     * @param string $title
     * @return \RtExtends\Entity\FlashMessage 
     */
    public function setTitle($title){
        $this->title = $title;
        return $this;
    }
    
    /**
     * Get title
     * @return string 
     */
    public function getTitle(){
        return $this->title;
    }
    
    /**
     * Set messages
     * @param array|string $messages
     * @return \RtExtends\Entity\FlashMessage 
     */
    public function setMessages($messages){
        
        if($messages instanceof FlashMessageSub){
            $messages = array($messages);
        }
        
        $this->messages = $messages;
        return $this;
    }
    
    /**
     * Get messages
     * @return array|string 
     */
    public function getMessages(){
        return $this->messages;
    }
}
?>
