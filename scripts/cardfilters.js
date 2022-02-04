//adding eventlisteners
document.querySelector("#marketing").addEventListener("change", marketingFilter);
document.querySelector("#programming").addEventListener("change", programmingFilter);
document.querySelector("#design").addEventListener("change", designFilter);

// creating functions 
function marketingFilter() {
    
    hideAllCards();

    document.querySelector("#programming").checked = false;
    document.querySelector("#design").checked = false;

        if (document.querySelector("#marketing").checked) {

            document.querySelector("#marketingF").classList.add('active');
            document.querySelector("#programmingF").classList.remove('active');
            document.querySelector("#designF").classList.remove('active');
          
          var cardmarket = document.querySelectorAll(".marketing");

          var i = 0;
          while (i < cardmarket.length) {
            cardmarket[i].style.display = "inline-block";
            i++;
          }
        } else {
            document.querySelector("#marketingF").classList.remove('active');
          showAllCards();
        }
}

function programmingFilter() {
          
    hideAllCards();

    document.querySelector("#marketing").checked = false;
    document.querySelector("#design").checked = false;
        if (document.querySelector("#programming").checked) {
            document.querySelector("#programmingF").classList.add('active');
            document.querySelector("#marketingF").classList.remove('active');
            document.querySelector("#designF").classList.remove('active');
          
          var cardprog = document.querySelectorAll(".programming");
          var i = 0;
          while (i < cardprog.length) {
            cardprog[i].style.display = "inline-block";
            i++;
          }
        } else {
          document.querySelector("#programmingF").classList.remove('active');
          showAllCards();
        }

}

function designFilter() {
    
    hideAllCards();

    document.querySelector("#programming").checked = false;
    document.querySelector("#marketing").checked = false;
        if (document.querySelector("#design").checked) {
            document.querySelector("#designF").classList.add('active');
            document.querySelector("#marketingF").classList.remove('active');
            document.querySelector("#programmingF").classList.remove('active');
          
          var cardDesign = document.querySelectorAll(".design");
          var i = 0;
          while (i < cardDesign.length) {
            cardDesign[i].style.display = "inline-block";
            i++;
          }
        } else {
          document.querySelector("#designF").classList.remove('active');
          showAllCards();
        }

}
// 
//show/hide
function hideAllCards() {
    var allCards = document.querySelectorAll(".marketing, .programming, .design");

    var i=0;
    while (i<allCards.length){
        allCards[i].style.display="none";
        i++;
    }
}

function showAllCards() {
    var allCards = document.querySelectorAll(".marketing, .programming, .design");  

    var i=0;
    while (i<allCards.length){
        allCards[i].style.display="inline-block";
        i++;
    }
}