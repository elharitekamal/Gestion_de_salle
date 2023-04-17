
const content = document.querySelectorAll('.content');
const opt = document.querySelectorAll('.opt');






for(let i = 0; i < opt.length; i++) {
    opt[i].addEventListener("click", function(e) {
        for(let j = 0; j < opt.length; j++) {
        content[j].classList.add("d-none")
        
        }
        content[i].classList.remove("d-none")
      
    })
}