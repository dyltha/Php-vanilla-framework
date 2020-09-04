<?php


/**
 *  @title : PopUp.php
 * 
 *  @brief : Modals PopUps
 */

class PopUp {

    protected $category;
    protected $message;


    /**
     *  @name : __construct
     *  
     *  @param : $category : string : error or success
     *  @param : $message
     * 
     *  @return : void
     * 
     *  @brief : modal popup constructor
     */
    function __construct($category, $message) {

        $this->category = $category;
        $this->message = $message;


    } // function __construct($categoryC, $messageC)



    /**
     * 
     *  @name : display
     *  
     *  @param : void
     *  @return string : html popup
     * 
     *  @brief : return the HTML display of a modal.
     */
    public function display() {    
        if ($this->category == 'error') {
            return '<div class="popup error">
                        <div class="iconContainer">
                            <i class="fas fa-exclamation"></i>
                        </div>
                        <div class="message">
                            <p>
                                '.$this->message.'
                            </p>
                        </div>
                    </div>';

        } else if($this->category == 'success') {
            return '<div class="popup success">
                        <div class="iconContainer">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="message">
                            <p>
                                '.$this->message.'
                            </p>
                        </div>
                    </div>';
                               

        } 

    }//     public function displayPopup() 

}
