/**
 *  @title : popup.js
 *  
 *  @brief : modals popup js 
 * 
 * 
 */



let Popups = document.querySelectorAll('.popup');

for (var i = 0; i < Popups.length; ++i) {
    setTimeout(deletePopUp, 10000, Popups[i]);
}



/**
 * @name : deletePopUp
 * 
 * @param {Dom OBJECT} popup
 * 
 * @return void
 * 
 * @brief : remove the Popup from the DOM 
 */
function deletePopUp(popup) {
    popup.remove();
} // function deletePopUp(popup) 
